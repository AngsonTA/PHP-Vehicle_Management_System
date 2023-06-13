<?php
ob_start();
?>

<?php include("connection.php");?>
<?php

$username = ""; 
$email    = "";    
$password = ""; 
$conpassword="";
$address  = ""; 
$phoneNo  = ""; 
$flag = "0";

$errorname="";
$errormail="";   
$errorpassword="";
$errorconpassword="";
$erroraddress="";
$errorphoneNo="";

if(isset($_POST["submit"]))
{
    $username = ($_POST["txt_username"]);
    $email    = ($_POST["txt_email"]);
    $password = ($_POST["txt_password"]);
    //$hash = password_hash($password, PASSWORD_DEFAULT);
    $conpassword = ($_POST["txt_conpassword"]);
    $address  = ($_POST["txt_address"]);
    $phoneNo  = ($_POST["txt_phoneNo"]);


if($username=="")
{
    
    $flag="1";
}

if($email=="")
{
   
    $flag="1";
}
if($password=="")
{
    $errorpassword="please enter the password";
    $flag="1";
}
if($conpassword=="")
{
    $errorconpassword="please enter confirm password";
    $flag="1";
}
if($password!=$conpassword)
{
   $errorconpassword="password mismatch";
   $flag="1";
}
if($address=="")
{
   
    $flag="1";
}
if($phoneNo=="")
{
    
    $flag="1";
}


$select = "SELECT * FROM customertbl WHERE reg_email = '$email' ";

$result = $conn->query($select);
if ($result->num_rows > 0)
{
  $cmessage= " Already existed Mail and Password !";
  echo "<script type='text/javascript'>alert('$cmessage');</script>";
}

else if($password!=$conpassword)
{
    $cmessage= "Password mismatch !";
    echo "<script type='text/javascript'>alert('$cmessage');</script>";
    //$errorconpassword="password mismatch";
    $flag="1";
}

 else if($flag=="0")
{
    $sql = "insert into customertbl(reg_name,reg_email,reg_password,reg_phone,reg_address) values ('$username','$email','$password','$phoneNo','$address')";

if($conn->query($sql)=== true)
{
   $cmessage= "Registration done !";
    echo "<script type='text/javascript'>alert('$cmessage');</script>";
    header("location:login.php");
    ob_end_flush();
     
}
}
else
{
    $cmessage= "something went wrong";
    echo"<script type='text/javascript'>alert('$cmessage');</script>";
}            
}

?>
 





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>VMS Coopers Hub</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="#assets/img/favicon.png" rel="icon">
  <link href="#assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="#index.html" class="logo d-flex align-items-center w-auto">
                  <img src="img/.jpg" alt="">
                  <span class="d-none d-lg-block">Coopers Hub</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body" >

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                  </div>

                  <form class="row g-3 needs-validation" method="POST" id="myForm" >
                    <div class="col-12">
                      <input type="text" name="txt_username" class="form-control"  required placeholder="Username" value="<?php echo $username;?>">
                      <span style="color:blue;"><?php echo $errorname;?></span>
                    </div>

                    <div class="col-12">
                     
                      <input type="text" name="txt_email" class="form-control"  required placeholder="Email" value="<?php echo $email;?>">
                      <span style="color:blue;"><?php echo $errormail;?></span>
                    </div>

                    
                    <div class="col-12">
                    
                      <input type="text" name="txt_address" class="form-control"  required placeholder="Address" value="<?php echo $address;?>">
                      <span style="color:blue;"><?php echo $erroraddress;?></span>
                    </div>    

                    <div class="col-12">
                   
                      <input type="password" name="txt_password" class="form-control"  required placeholder="Password" value="<?php echo $password;?>" id="myInput">
                      <input type="checkbox" onclick="myFunction()" ><i style="color:lightblue">Show Password</i>
                      <span style="color:blue;"><?php echo $errorpassword;?></span>
                    </div>

                       <script>
                             function myFunction() {
                              var x= document.getElementById("myInput");
                              if(x.type==="password")
                              {
                                x.type="text";
                              }
                              else{
                                x.type="password";
                              }
                             }
                      </script>

                    <div class="col-12">
                     
                      <input type="password" name="txt_conpassword" class="form-control" required placeholder="Confirm Password" value="<?php echo $conpassword;?>" id=myinput>
                      <input type="checkbox" onclick="myFunct()" ><i style="color:lightblue">Show Password</i>
                     
                      <!--<span style="color:blue;"><?php echo $errorconpassword;?></span>-->
                    </div>

                    
                    <script>
                             function myFunct() {
                              var x= document.getElementById("myinput");
                              if(x.type==="password")
                              {
                                x.type="text";
                              }
                              else{
                                x.type="password";
                              }
                             }
                      </script>

                    <div class="col-12">
                     
                      <input type="text" name="txt_phoneNo" class="form-control"  required placeholder="Phone No" value="<?php echo $phoneNo;?>">
                      <span style="color:blue;"><?php echo $errorphoneNo;?></span>
                    </div>

    
                 
                    <div class="col-12">
                      <button class="btn btn-primary w-100" name="submit" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account?   <a href="login.php">login</a>  <a href="update.php"></a></p>
                    </div>

                    <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
  
}


</script>
                  </form>


                  

                </div>
              </div>

              

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

    
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

