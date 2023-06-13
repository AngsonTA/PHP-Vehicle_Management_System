<?php include("connection.php");?>
<?php


if(isset($_POST["submit"]))
{

 $query="SELECT * FROM `admin` WHERE `admin_name`='$_POST[txt_name]' AND `admin_password`='$_POST[txt_password]'";
 $result = $conn->query($query);
 if ($result->num_rows == 1)
 {
  $cmessage= "login!";
    echo "<script type='text/javascript'>alert('$cmessage');</script>";
    header("location:index.php");
    ob_end_flush();  
 }
 else{
  $cmessage= "Invalid username and password!";
    echo "<script type='text/javascript'>alert('$cmessage');</script>";
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
                
                 
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body" >

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Admin Login</h5>
                  </div>

                  <form class="row g-3 needs-validation" method="POST"  name="customertbl" id="myform">
                    <div class="col-12">
                      <label  class="form-label">Username</label>
                      <input type="text" name="txt_name" class="form-control"  required value="">
                     
                    </div>

                    <div class="col-12">
                      <label  class="form-label">Password</label>
                      <input type="text" name="txt_password" class="form-control"  required value="">
                     
                    </div>


                    <div class="col-12">
                      <button class="btn btn-primary w-100" name="submit" type="submit">login</button>
                    </div>
                    <div class="col-12">
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