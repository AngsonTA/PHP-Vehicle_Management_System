<?php
ob_start();
?>
<?php include("connection.php");?>

<?php include("header.php");?>

<?php

if(!isset($_SESSION['userid'])){
    header("Location:login.php");
    ob_end_flush();
    exit();
}
?>
 
<?php

if(isset($_GET["id"]))
{
        $id= $_GET["id"];
        $sql = "SELECT * FROM car_details where product_id = '$id'";
         
                $result = $conn->query($sql);
                if ($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {?>
 
 <div class="breadcrumb-option set-bg" data-setbg="img/breadcrumb-bg.jpg" style="background-image: url(&quot;img/breadcrumb-bg.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Mini Cooper S</h2>
                        <div class="breadcrumb__links">
                            <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                            <a href="#">Car Listing</a>
                            <span>Mini Cooper S</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
 <!-- Contact Section Begin -->
 <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <div class="section-title">
                        <img class="car-big-img" src= '<?php echo str_replace("../","",$row["product_img1"]); ?>' alt="">

                            
                        </div>
                        
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <form method="post" id="myForm">
                            <div class="row">
                         
                            
                            <?php
                    }
                }
            }
        ?>



                                <div class="col-lg-6">
                                    <input  placeholder="Name" readonly value="<?php
                                if(isset($_SESSION['username'])){
                                    echo $_SESSION['username'];
                                }
                               ?> ">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email" readonly   value="<?php
                                if(isset($_SESSION['usermail'])){
                                    echo $_SESSION['usermail'];
                                }
                               ?>">
                                </div>
                                </div>
                         
                                

                            <input type="text" placeholder="Phone No" readonly value="<?php
                                if(isset($_SESSION['userphone'])){
                                    echo $_SESSION['userphone'];
                                }
                               ?>">
                               
                            <input type="text" placeholder="Address" readonly value="<?php
                                if(isset($_SESSION['useraddress'])){
                                    echo $_SESSION['useraddress'];
                                }
                               ?>">

                                  
                            <input type="date" placeholder="Booking Date" name="date" required value="">
                            <input type="time" placeholder="Booking Time" name="time" required value="">
                                    
                            </div>

                           
                            <button type="submit" name="upload"class="site-btn">OK</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->




                           
                           
<?php

$user_id="";
$car_id="";
$book_date="";
$book_time="";
$flag="0";

// If upload button is clicked ...
if (isset($_POST["upload"]))
{
    $user_id = $_SESSION['userid'];
    $car_id = $_GET['id'];
    $user_name = $_SESSION['username'];
    $status = "Not Confirm";
    $book_date =$_POST['date']; 
    $book_time= $_POST['time']; 

  if($user_id=="")
  {
    $flag1;
  }

  if($car_id=="")
  {
    $flag1;
  }
  if($book_date=="")
  {
    $flag1;
  }
  if($book_time=="")
  {
    $flag1;
  }

    $select = "SELECT * FROM testdrive WHERE user_id = '$user_id' AND car_id = '$car_id'";
    $result = $conn->query($select);
    if ($result->num_rows > 0)
    {
      $cmessage= " Already Booked !";
      echo "<script type='text/javascript'>alert('$cmessage');</script>";
    }
   
 
  else if($flag=="0"){
        $sql = "INSERT INTO testdrive(user_id, car_id, username,booking_date,booking_time, status)
        VALUES ('$user_id', '$car_id', '$user_name', '$book_date','$book_time','$status')";
                if($conn->query($sql)=== true)
                {
                     $cmessage= "  Booked Successfully !";
                     echo "<script type='text/javascript'>alert('$cmessage');</script>";
                } }
                else 
                {
                     echo "something went wrong";
                }
 
            }       
    
?>
<?php include("footer.php");?>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}
  <script>

