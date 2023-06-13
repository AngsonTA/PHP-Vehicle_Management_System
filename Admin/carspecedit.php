<?php
ob_start();
?>
<?php include("../connection.php");?>
<?php 
$title="Dashbaod";
include("head.php");?>
<?php include("menu.php");?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Edit Spec</h1>
  <!--<nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="Category.php">Edit Category</a></li>
      <li class="breadcrumb-item"></li>
      <li class="breadcrumb-item active"></li>
    </ol>-->
  </nav>
</div><!-- End Page Title -->
<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5><?php             
$cmessage="";
$car_price ="";
$car_mileage="";
$car_varient ="";
$car_hp="";
$car_year="";
$flag ="0";
if(isset($_POST["submit"]))
{   
       
        $car_mileage =($_POST["txt_mileage"]);
        $car_varient =($_POST["txt_varient"]);
        $car_hp=($_POST["txt_hp"]);
        $car_year=($_POST["txt_year"]);
        $car_price=($_POST["price"]);


        if($car_price == "")
        {
            $flag = "1";
        }

        if($car_mileage == "")
        {
            $flag = "1";
        }

        if($car_varient == "")
        {
            $flag = "1";
        }

        if($car_hp == "")
        {
            $flag = "1";
        }

        if($car_year == "")
        {
            $flag = "1";
        }


        if($flag=="0")
        {
            $id=$_GET["id"];
            $sql = "update spectbl set car_price = '$car_price',car_mileage ='$car_mileage',car_varient ='$car_varient',car_hp='$car_hp',car_year='$car_year' where car_id='$id'";
        
        if($conn->query($sql)=== true)
        {
          $cmessage= "new record created successfully";
        header("Location: product.php");
        ob_end_flush();
        }
        else
        {
          $cmessage= "error: ".$sql."<br>".$conn->error;
        }            
        }
      }   
?>
<?php
if(isset($_GET["id"])&& $flag=="0")
{
    $id=$_GET["id"];
    $sql="select * from spectbl where car_id='$id'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) 
    {
        $row = $result->fetch_assoc();
       
        $car_price =$row["car_price"];
        $car_varient =$row["car_varient"];
        $car_mileage=$row["car_mileage"];
        $car_hp=$row["car_hp"];
        $car_year=$row["car_year"];
}
}
?>
<form method="post">
    <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Car Price</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control"  name="price" value="<?php echo $car_price;?>">
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Car Varient</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_varient" value="<?php echo $car_varient;?>">
 
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Car Mileage</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_mileage" value="<?php echo $car_mileage;?>">
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Car HP</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_hp"  value="<?php echo $car_hp;?>">
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Car Year</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_year" value="<?php echo $car_year;?>">
                    
                  </div>
                </div>


               

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-3">
                    <button type="submit" name="submit" class="btn btn-primary">upload</button>
                  </div>
             
           </div>

           </form>

<?php include("foot.php");?>
