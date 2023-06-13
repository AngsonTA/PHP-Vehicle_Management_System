<?php
ob_start();
?>
<?php include("../connection.php");?>
<?php 
$title="Dashbaod";

include("head.php"); ?>
<?php include("menu.php"); ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Edit Image</h1>
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
              <h5 class="card-title"></h5>

              <?php include("../connection.php");?>

             
              
              <?php
              $car_name="";
              $flag ="0";

              if(isset($_POST["submit"]))
              {   
                
                
        if($car_name == "")
        {
            $flag = "1";
        }

                $id=$_GET["id"];
                $product=$_POST["txt_product"];
               
                $sql = "update car_details set  product_name='$product' where product_id='$id'";
              
              if($conn->query($sql)=== true)
              {
                $cmessage= "new record created successfully";
                header("Location: product.php");
                ob_end_flush();
              
              }
              }
              ?>

<?php
if(isset($_GET["id"])&& $flag=="0")
{
    $id=$_GET["id"];
    $sql="select * from car_details where product_id='$id'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) 
    {
        $row = $result->fetch_assoc();

       
       
        $product =$row["product_name"];
        
}
}
?>

              
<!DOCTYPE html>
<html>

<head>
	<title>Car Name</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
	<div id="content">
		<form method="POST" >
        <div class="row">
        <div class="col-md-10">

</div>

</div>
        <div class="row">

        <div class="col-md-8">
        
	
        
      <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Car Name</label>
                  <div class="col-sm-5">
				<input class="form-control" type="text" name="txt_product" value="<?php echo $product;?>" />
			</div></div>
                
			
			
<div>
             
      
				<button class="btn btn-primary" type="submit" name="submit">Upload</button>
			</div>
            
      </div>
		</form>
</div>
          </div>

        </div>

 </div>
</section >


</main><!-- End #main -->

<?php include("foot.php"); ?>