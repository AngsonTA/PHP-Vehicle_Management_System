<?php
ob_start();
?>
<?php include("header.php");?>


<?php include("connection.php");?>

            

<?php

if(isset($_GET["id"]))
{
        $id= $_GET["id"];
        $sql = "SELECT * FROM car_details INNER JOIN spectbl ON car_details.product_id=spectbl.car_id where car_details.product_id = $id";
         
                $result = $conn->query($sql);
                if ($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {?>
<!-- Breadcrumb End -->
    <div class="breadcrumb-option set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2><?php echo $row["product_name"]?></h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Begin -->
 
    <!-- Car Details Section Begin -->
    <section class="car-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
            
                       <div class="car__details__pic">
                        <div class="car__details__pic__large">
                            <img class="car-big-img" src= '<?php echo str_replace("../","",$row["product_img1"]); ?>' alt="">
                        </div>
                        <div class="car-thumbs">
                            <div class="car-thumbs-track car__thumb__slider owl-carousel">
                                <div class="ct" data-imgbigurl=' <?php echo str_replace("../","",$row["product_img2"]); ?>'><img
                                        src=' <?php echo str_replace("../","",$row["product_img2"]); ?>' alt=""></div>
                                <div class="ct"  data-imgbigurl=' <?php echo str_replace("../","",$row["product_img3"]); ?>' ><img
                                        src=' <?php echo str_replace("../","",$row["product_img3"]); ?>' alt=""></div>
                                <div class="ct"  data-imgbigurl=' <?php echo str_replace("../","",$row["product_img4"]); ?>'><img
                                        src=' <?php echo str_replace("../","",$row["product_img4"]); ?>' alt=""></div>
                                <div class="ct"  data-imgbigurl=' <?php echo str_replace("../","",$row["product_img5"]); ?>'><img
                                        src=' <?php echo str_replace("../","",$row["product_img5"]); ?>' alt=""></div>
                                <div class="ct"  data-imgbigurl=' <?php echo str_replace("../","",$row["product_img6"]); ?>'><img
                                        src=' <?php echo str_replace("../","",$row["product_img6"]); ?>' alt=""></div>
                                      
                            </div>
                        </div>
                    </div>
                    <?php
                    }?>
                        <?php }
                        else {
	    $script = "<script> window.location = 'index.php';</script>";
echo $script;
}
?>
                    <div class="car__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="car__details__tab__info">
                                    <div class="row">
                                    <?php
              $sql = "SELECT * FROM car_about where car_name='$id'";
                       
                $result = $conn->query($sql);
                if ($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {?>
                                            <div class="car__details__tab__info__item">
                                                <h5>General Information</h5>
                                                <ul> <li style="text-align:justify;">
                                                <?php echo $row["info"]?>
                                               </li>  
                                                </ul>
                                            </div>
                                       
                                       
                                    </div>
                                </div>
                                <div class="car__details__tab__feature">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Interior Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i><?php echo $row["info1"]?></li>
                                                    <li><i class="fa fa-check-circle"></i><?php echo $row["info2"]?></li>
                                                    <li><i class="fa fa-check-circle"></i>   <?php echo $row["info3"]?></li>
                                                    <li><i class="fa fa-check-circle"></i>    <?php echo $row["info4"]?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Safety Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i>    <?php echo $row["info5"]?></li>
                                                    <li><i class="fa fa-check-circle"></i>   <?php echo $row["info6"]?></li>
                                                    <li><i class="fa fa-check-circle"></i>   <?php echo $row["info7"]?></li>
                                                    <li><i class="fa fa-check-circle"></i>    <?php echo $row["info8"]?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Extra Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i>   <?php echo $row["info9"]?></li>
                                                    <li><i class="fa fa-check-circle"></i>   <?php echo $row["info10"]?></li>
                                                    <li><i class="fa fa-check-circle"></i>    <?php echo $row["info11"]?></li>
                                                    <li><i class="fa fa-check-circle"></i>    <?php echo $row["info12"]?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Extra Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i><?php echo $row["info13"]?></li>
                                                    <li><i class="fa fa-check-circle"></i> <?php echo $row["info14"]?></li>
                                                    <li><i class="fa fa-check-circle"></i> <?php echo $row["info15"]?></li>
                                                    <li><i class="fa fa-check-circle"></i> <?php echo $row["info16"]?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                <?php
            }   }?>
                        <?php }
                        else {
                            ob_end_flush();
                            $script = "<script> window.location = 'index.php';</script>";
echo $script;
	//header("location: index.php")
}
?>
  </div>
                            </div>  </div>
                     
<?php
if(isset($_GET["id"]))
{
$id= $_GET["id"];
$sql = "SELECT * FROM spectbl  where car_id = $id";

$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {?>
                <div class="col-lg-4 col-md-6 col-sm-7">
                    <div class="car__details__sidebar">
                        <div class="car__details__sidebar__model">
                            <ul>
                                <li> <span></span></li>
                                <li> <span></span></li>
                            </ul>
                            <p class="primary-btn" style="color:white;">Details</p>
                            <p></p>
                        </div>
                        <div class="car__details__sidebar__payment">
                            <ul>
                            <li>Car Year<span><?php echo $row["car_year"] ?></span></li>
                                <li>Mileage<span><?php echo $row["car_mileage"] ?></span></li>
                                <li>Varient<span><?php echo $row["car_varient"] ?></span></li>
                                <li>Car Hp<span><?php echo $row["car_hp"] ?></span></li>
                                <li>Price<span><?php echo $row["car_price"] ?></span></li>
                            </ul>
                            <?php
                   
                    
                }}}
                
                ?>
            
           
               <?php

if(isset($_GET["id"]))
{
        $id= $_GET["id"];
               $sql = "SELECT * FROM car_details where product_id=$id";

                $result = $conn->query($sql);
                if ($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {?>



         <a href ='<?php echo "book?id=",$row["product_id"] ?>' class="primary-btn">Booking</a>
         <a href ='<?php echo "test?id=",$row["product_id"] ?>' class="primary-btn">Test Drive</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
               
        <?php
                   
                    
                }}}
                ?>
            
    </section>
    <!-- Car Details Section End -->
   
    <?php include("footer.php");?>