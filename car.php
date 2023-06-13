<?php include("header.php");?>
<?php include("connection.php");?>

    <!-- Breadcrumb End -->
    <div class="breadcrumb-option set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Car Listing</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Begin -->
    
   <!-- Car Section Begin -->
 <section class="car spad" id="cars">
        <div class="section-title">
            <span>Our Car</span>
            <h2>Best Vehicle Offers</h2>           
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                   
            <div class="row car-filter">
                <?php
               //$sql = "select *  from  car_details ";
               $sql = "SELECT * FROM car_details INNER JOIN spectbl ON car_details.product_id=spectbl.car_id";

                $result = $conn->query($sql);
                if ($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src=' <?php echo str_replace("../","",$row["product_img1"]); ?>' alt="">
                            <img src=' <?php echo str_replace("../","",$row["product_img2"]); ?>' alt="">
                           

                        </div>
                        <div class="car__item__text">
                            
                            <div class="car__item__price">
                          <a href ='<?php echo "cardetails?id=",$row["product_id"] ?>' > <button type="button" class="car-option">More</button></a>
                                <h6><?php echo $row["product_name"] ?><span></span></h6>
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