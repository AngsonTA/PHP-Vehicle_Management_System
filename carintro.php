<?php include("header.php");?>
<?php include("connection.php");?>

    <!-- Breadcrumb End -->
    <div class="breadcrumb-option set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Car Listing</h2>
                        <div class="breadcrumb__links">
                            <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                            <span>About</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Begin -->
   
    <!-- Car Section Begin -->
    <section class="car spad">
        <div class="container">
            <div class="row">
                
              
                <div class="col-lg-9">
                    
                    <div class="row">

                    <?php
               // $sql = "select * from  car_details";
               $sql = "SELECT * FROM car_details INNER JOIN spectbl ON car_details.product_id=spectbl.car_id";

                $result = $conn->query($sql);
                if ($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {?>
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel">
                            <img src=' <?php echo str_replace("../","",$row["product_img1"]); ?>' alt="">
                            <img src=' <?php echo str_replace("../","",$row["product_img2"]); ?>' alt="">
                           

                                </div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date"><?php echo $row["car_year"] ?></div>
                                        <h5><a href="#"><?php echo $row["product_name"] ?></a></h5>
                                        <ul>
                                            <li><span><?php echo $row["car_mileage"] ?></span> mi</li>
                                            <li><?php echo $row["car_varient"] ?></li>
                                            <li><span><?php echo $row["car_hp"] ?></span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                    <a href ='<?php echo "cardetails?id=",$row["product_id"] ?>' > <button type="button" class="car-option">More</button></a>

                                        <h6><?php echo $row["car_price"] ?><span></span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }}
                    ?>
                
            </div>
        </div>
    </section>
    <!-- Car Section End -->

    
    <?php include("footer.php");?>



   <!-- </div>
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Most Researched</li>
                        <li data-filter=".sale">Latest on sale</li>
                    </ul>
                </div>-->