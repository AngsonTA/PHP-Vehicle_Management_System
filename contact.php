<?php
ob_start();
?>
<?php include("connection.php");?>

<?php include("header.php");?>
    <!-- Breadcrumb End -->
    <div class="breadcrumb-option set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Contact Us</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Begin -->


    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <div class="section-title">
                            <h2>Let’s Work Together</h2>
                            <p>To make requests for further information, contact us.</p>
                        </div>
                        <ul>
                            <li><span>Weekday</span> 08:00 am to 18:00 pm</li>
                            <li><span>Saturday:</span> 10:00 am to 16:00 pm</li>
                            <li><span>Sunday:</span> Closed</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <form method = "POST">
                            <div class="row">



                            <?php
$cmessage="";
$name = ""; 
$email    = "";    
$subject="";
$feedback="";
$flag = "0";

if(isset($_POST["submit"]))
{
    $name = $_SESSION["username"];
    $email    = $_SESSION["usermail"];
    $subject = $_POST["txt_subject"];
    $feedback = $_POST["txt_feedback"];
   


if($subject=="")
{
    $flag="1";
}
if($feedback=="")
{
    $flag="1";
}


if($flag=="0")
{
    $sql = "insert into contact(name,email,subject,feedback) values ('$name','$email','$subject','$feedback')";

if($conn->query($sql)=== true)
{
   
  }
  else
  {
   
  }            
}
}
?>
                                <div class="col-lg-6">
                                <?php
   
   if(!isset($_SESSION['userid'])){?>
                                    <input type="text" placeholder="Name" required name="username" readonly value="<?php
                                if(isset($_SESSION['username'])){
                                    echo $_SESSION['username'];
                                }
                               ?>">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email" required name="usermail"  value="<?php
                                if(isset($_SESSION['usermail'])){
                                    echo $_SESSION['usermail'];
                                }
                               ?>">
                                </div>
                            </div>
                            <input type="text" placeholder="Subject" name="txt_subject"  required value="<?php echo $subject;?>">
                            <textarea placeholder="Your Question" required name="txt_feedback"  value="<?php echo $feedback;?>"></textarea>

                            
   <?php
        header("Location:login.php");
        ob_end_flush();
        exit();
    }
    
    ?>
                            <button type="submit" name ="submit"class="site-btn">Submit Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    
    
    <!-- Contact Address End -->
<?php include("footer.php");?>