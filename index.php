<?php include("connection.php");?>
<?php include("header.php");?>
<!-- Hero Section Begin -->
    <section class="hero spad set-bg" data-setbg="img/hero-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <div class="hero__text__title">
                            <span>FIND YOUR DREAM CAR</span>
                            <h2>Coopers Hub</h2>
                        </div>
                        <div class="hero__text__price">   
                </div>
                <div class="col-lg-5">
                </div>
            </div>
        </div>
    </section>
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Services</span>
                        <h2>What We Offers</h2>
                        <p>A car showroom is a business that sells new cars, provides maintains and services inside the company dealership.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-6" style="margin-left:23%;">
                    <div class="services__item">
                        <img src="img/services/services-2.png" alt="">
                        <h5>Book car</h5>
                        <p>View the available models and select the one you're interested in. You may also can view the details of the car.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="img/about/af-3.png" alt="">
                        <h5>Test Drive</h5>
                        <p>If you're considering buying a car, don't skip the test drive. It's your chance to experience the car firsthand and see if it's the right fit for you.
                            </p>
                       
                    </div>
                </div>
               
            </div>
        </div>
    </section>
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
    <section class="feature spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="feature__text">
                        <div class="section-title">
                            <span>Our Feature</span>
                            <h2>We Are a Trusted Name In Auto</h2>
                        </div>
                        <div class="feature__text__desc">
                            <p>Car dealerships are the gateway to new information for returning and potential customers in the current automotive ecosystem, which is evolving rapidly.</p>
                            <p>We essentially keep the business going while ensuring that the consumer gets the best out of your investment</p>   
                        </div>
                        <div class="feature__text__btn">
                            <a href="#" class="primary-btn">About Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-4">
                    <div class="row">
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="img/feature/feature-1.png" alt="">
                                </div>
                                <h6>Engine</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="img/feature/feature-2.png" alt="">
                                </div>
                                <h6>Turbo</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="img/feature/feature-3.png" alt="">
                                </div>
                                <h6>Colling</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="img/feature/feature-4.png" alt="">
                                </div>
                                <h6>Suspension</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="img/feature/feature-5.png" alt="">
                                </div>
                                <h6>Electrical</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="img/feature/feature-6.png" alt="">
                                </div>
                                <h6>Brakes</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include("footer.php");?>