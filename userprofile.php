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

<div class="breadcrumb-option set-bg" data-setbg="img/breadcrumb-bg.jpg" style="background-image: url(&quot;img/breadcrumb-bg.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>MyBookings</h2>
                        <div class="breadcrumb__links">
                           
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
<div style="color:black;"><h3>Booked Details</h3></div><br>

                        </div>

                        <div class="row mb-5">
<table class="table table-hover" style="margin-top:-39px;   margin-right:40px; border:1px solid lightgrey;">
<tr>
    <th class="col-lg-3">Order Confirmation</th>     
    <th class="col-lg-3">Car Booked</th>  
    <th class="col-lg-4">Car Image</th>  
    <th class="col-lg-3">Cancel</th> 
</tr>  
<?php
//$sql = "select * from  booked ";
if(isset($_SESSION['userid']))
{
$id= $_SESSION['userid'];
$sql = "SELECT * FROM car_details INNER JOIN booked ON car_details.product_id=booked.car_id where user_id='$id'";

$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        ?>
       <tr>
       <td><button style="color:#0f0;  border:none; border-radius:3px;"><?php echo $row["status"];?></button></td>
        <td><?php echo $row["product_name"];?></td>
        <td><img class="car-big-img"  src= '<?php echo str_replace("../","",$row["product_img1"]); ?>' alt=""></td>
        <td><a class="btn btn-danger" href='<?php echo "bookdel.php?id=",$row["ID"] ?>'>Cancel</a></td>

    </tr>
    
        
        <?php
    }
}
else
{
    ?>
    <tr>
    <td >None</td>
    <td>Not Booked</td>
    <td >None</td>
    <td >None</td>
</tr>

<br>
<?php
}
}

?>  

</table>
<br>
<br>
<br>
<br>




<table class="table table-hover" style="margin-top:-39px;   margin-right:40px; border:1px solid lightgrey;">
<div style="color:black;"><h3>Test Drived booked Details</h3></div>
<tr>
    <th class="col-lg-3">Order Confirmation</th>     
    <th class="col-lg-3">Test Drived Booked</th>
    <th class="col-lg-6">Car</th>
    <th class="col-lg-3">Date</th>     
    <th class="col-lg-3">Time</th>  
    <th class="col-lg-3">Cancel</th> 

</tr>  
<?php
//$sql = "select * from  booked ";
if(isset($_SESSION['userid']))
{
$id= $_SESSION['userid'];
$sql = "SELECT * FROM car_details INNER JOIN testdrive ON car_details.product_id=testdrive.car_id where user_id='$id'";

$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        ?>
       <tr>
        <td><button style="color:#0f0;  border:none; border-radius:3px;"><?php echo $row["status"];?></button></td>
        <td><?php echo $row["product_name"];?></td>
        <td><img class="car-big-img"  src= '<?php echo str_replace("../","",$row["product_img1"]); ?>' alt=""></td>
        <td><?php echo $row["booking_date"];?></td>
        <td><?php echo $row["booking_time"];?></td>
        <td><a class="btn btn-danger" href='<?php echo "testdel.php?id=",$row["test_id"] ?>'>Cancel</a></td>
    </tr>
    
        
        <?php
    }
}
else
{
    ?>
    <tr>
    <td>None</td>
    <td>Not Booked</td>
    <td>None</td>
    <td>None</td>
    <td>None</td>
    <td>None</td>
</tr>
<br>
<?php
}
}

?> 
<br><br> <br><br>
</table>




</div>                         

                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="contact__form">
                        <form method="post" id="myForm">
                            <div class="row">

                                  <div><h3>User Details</h3></div><br><br><br>
                                    <input  placeholder="Name" readonly value="<?php
                                if(isset($_SESSION['username'])){
                                    echo $_SESSION['username'];
                                }
                               ?> ">
                               
                                    <input type="text" placeholder="Email" readonly   value="<?php
                                if(isset($_SESSION['usermail'])){
                                    echo $_SESSION['usermail'];
                                }
                               ?>">
                                
                         
                                

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
                                        
                            </div>
                           

                            </form> 

                           

                           

                       
                 
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
    

         <?php include("footer.php");?>           