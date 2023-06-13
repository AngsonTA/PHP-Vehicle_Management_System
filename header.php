<?php
ob_start();
  ob_end_flush();
  session_start();
?>
<?php include("connection.php");?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VMS | Coopers HUB</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/tyle.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
   

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__widget">
            <!--<a href="#"><i class="fa fa-cart-plus"></i></a>-->
            <?php
                          
                          if(!isset($_SESSION["userid"]))
                          {

                         ?>
            <a href="register.php" class="primary-btn">Register</a><br><br>
            <?php
                          }
            ?>
            <?php
                          
                          if(!isset($_SESSION["userid"]))
                          {

                         ?>

            <a href="login.php" class="primary-btn">Login</a>
                          <?php
                          }?>
        </div>
        <div class="offcanvas__logo">
            <a href="./index.php"><img src="" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <ul class="offcanvas__widget__add">
            <li><i class="fa fa-clock-o"></i> Week day: 08:00 am to 18:00 pm</li>
            <li><i class="fa fa-envelope-o"><a href="mailto:atlasvarghese805@gmail.com"></i>cooperstore@gmail.com</a></li>
        </ul>
        <div class="offcanvas__phone__num">
            <i class="fa fa-phone"></i>
            <span>(+91) 9188847083</span>
        </div>
        <div class="offcanvas__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
   
            
           
        </div><br><br>
        <div class="dropdown">
  <button class="dropbtn"><span style="margin-left:30px;"  style="font-family:arial; color:white;">&nbsp;&nbsp;</span>
  <?php
                                if(isset($_SESSION['username'])){
                                    echo $_SESSION['username'];
                                }
                               ?> 
</button>
  <div class="dropdown-content">
  <a href="userprofile.php"><i class="fa fa-user" aria-hidden="true"></i>
&nbsp;&nbsp; My Bookings</a>










  <a href="update.php"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;&nbsp;Update Profile</a>














  <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
Sign out</a>
  </div>
</div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul class="header__top__widget">
                            <li><i class="fa fa-clock-o"></i> Week day: 08:00 am to 18:00 pm</li>
                            <li><i class="fa fa-envelope-o"></i> <a href="mailto:atlasvarghese805@gmail.com"></i>cooperstore@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="header__top__right">
                            <div class="header__top__phone">
                                <i class="fa fa-phone"></i>
                                <span>(+91) 9188847083</span>
                            </div>
                          
                               
                            
                             <div class="dropdown">
  <button class="dropbtn"><span style="margin-left:30px;" style="font-family:arial;">&nbsp;&nbsp;</span>
  <?php
                                if(isset($_SESSION['username'])){
                                    echo $_SESSION['username'];
                                }
                               ?> 
</button>
  <div class="dropdown-content">
  <a href="userprofile.php"><i class="fa fa-user" aria-hidden="true"></i>
&nbsp;&nbsp; My Bookings</a>








  <a href="update.php"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;&nbsp;Update Profile</a>














  <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
Sign out</a>
  </div>
</div>


<style>
    
.dropbtn {
  background-color: #323232;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: 1px;
  
}

.dropdown {
  position: relative;
  display: inline-block;
  
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  text-align:center;
  
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #323232;
}
</style>
                            <div class="header__top__social1">
                                
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.php"><img src="" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="./index.php">Home</a></li>
                                <li><a href="./car.php">Cars</a></li>
                                                                <li><a href="./about.php">About</a></li>
                                <li><a href="./contact.php">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header__nav__widget">
                           <!-- <div class="header__nav__widget__btn">
                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                               
                            </div>-->
                           
                         
                            <a href="register.php" class="primary-btn">Register</a>
                            
                            
                            <?php
                          
                            if(!isset($_SESSION["userid"]))
                            {

                           ?>


                                  <a href="login.php" class="primary-btn" style="margin-left:15px;">Login</a>
                                  <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    <!-- Header Section End -->


            