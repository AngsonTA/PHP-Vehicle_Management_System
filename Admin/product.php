
<?php include("../connection.php");?>
<?php 
$title="Dashbaod";
include("head.php"); ?>
<?php include("menu.php"); ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Specification</h1>
  <!--<nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="Category.php">Category</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active">Elements</li>
    </ol>-->
  </nav>
</div><!-- End Page Title -->
<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>


<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename1 = $_FILES["uploadfile1"]["name"];
	$tempname1 = $_FILES["uploadfile1"]["tmp_name"];
	$folder1 = "../image/" . $filename1;
    if (move_uploaded_file($tempname1, $folder1)) {
			} 

    $filename2 = $_FILES["uploadfile2"]["name"];
	$tempname2 = $_FILES["uploadfile2"]["tmp_name"];
	$folder2 = "../image/" . $filename2;
    if (move_uploaded_file($tempname2, $folder2)) {
		
	} 

	$filename3 = $_FILES["uploadfile3"]["name"];
	$tempname3 = $_FILES["uploadfile3"]["tmp_name"];
	$folder3 = "../image/" . $filename3;
    if (move_uploaded_file($tempname3, $folder3)) {
		
	} 
     
	$filename4 = $_FILES["uploadfile4"]["name"];
	$tempname4 = $_FILES["uploadfile4"]["tmp_name"];
	$folder4 = "../image/" . $filename4;
    if (move_uploaded_file($tempname4, $folder4)) {
		
	} 

  $filename5 = $_FILES["uploadfile5"]["name"];
	$tempname5 = $_FILES["uploadfile5"]["tmp_name"];
	$folder5 = "../image/" . $filename5;
    if (move_uploaded_file($tempname5, $folder5)) {
		
	} 

  $filename6 = $_FILES["uploadfile6"]["name"];
	$tempname6 = $_FILES["uploadfile6"]["tmp_name"];
	$folder6 = "../image/" . $filename6;
    if (move_uploaded_file($tempname6, $folder6)) {
		
	} 

	
	$product=$_POST["txt_product"];
  $pro=$_POST["txt_pro"];

	$sql = "insert into car_details(`product_name`, `product_img1`, `product_img2`,`product_img3`,`product_img4`,`product_img5`,`product_img6`) 
    values ('$product','$folder1','$folder2','$folder3','$folder4','$folder5','$folder6')";
   


if($conn->query($sql)=== true)
{
   


  $msg= "new record created successfully"  ;


?>
  <?php
            // echo "hai" ;
              $cmessage="";
             
              $car_price ="";
              $car_mileage="";
              $car_varient ="";
              $car_hp="";
              $car_year="";
              $flag ="0";

        
        $car_mileage =($_POST["txt_mileage"]);
        $car_id = $conn->insert_id;;
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
            $sql1 = "insert into spectbl(car_price,car_id,car_mileage,car_varient,car_hp,car_year) 
            values ('$car_price','$car_id','$car_mileage','$car_varient','$car_hp','$car_year')";
           // echo $sql1;
        
        if($conn->query($sql1)=== true)
        {
          $cmessage= "new record created successfully";
        }
        else
        {
          $cmessage= "error: ".$sql."<br>".$conn->error;
        }            
        }
      }}
        ?>
<!DOCTYPE html>
<html>

<head>
	<title>Image Upload</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
	<div id="content">
		<form method="POST" action="" enctype="multipart/form-data">
        
    <div class="row">
      <div class="col-md-12">

          

            <div class="row mb-3">
                      <label for="inputText" class="col-sm-2 col-form-label"> Car Name</label>
                  <div class="col-sm-5">
				              <input class="form-control" type="text" name="txt_product" value="" />
			            </div>
            </div>
			
			      <div class="row mb-3">
                     <label for="inputText" class="col-sm-2 col-form-label">Add Image1</label>
                  <div class="col-sm-5">
				               <input class="form-control" type="file" name="uploadfile1" value="" />
			            </div>
            </div>
			
            

			      <div class="row mb-3">
                     <label for="inputText" class="col-sm-2 col-form-label">Add Image2</label>
                  <div class="col-sm-5">
				                <input class="form-control" type="file" name="uploadfile2" value="" />
			            </div>
            </div>



			      <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Add Image3</label>
                  <div class="col-sm-5">
			                  <input class="form-control" type="file" name="uploadfile3" value="" />
			            </div>
            </div>
			

			      <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Add Image4</label>
                  <div class="col-sm-5">
				                  <input class="form-control" type="file" name="uploadfile4" value="" />
                  </div>
            </div>


            <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Add Image5</label>
                  <div class="col-sm-5">
				                  <input class="form-control" type="file" name="uploadfile5" value="" />
                  </div>
            </div>


            <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Add Image6</label>
                  <div class="col-sm-5">
				                  <input class="form-control" type="file" name="uploadfile6" value="" />
                  </div>
            </div>


            
                 <div class="row mb-3">

                  <label for="inputText" class="col-sm-2 col-form-label">Car Price</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control"  name="price" value="">
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Car Varient</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_varient" value="">
 
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Car Mileage</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_mileage" value="">
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Car HP</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_hp" value="">
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Car Year</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_year" value="">
                    
                  </div>
                </div>

        
            <div class="row mb-3">
                    <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-3">
                           <button type="submit" name="upload" class="btn btn-primary"style="margin-bottom:20px;">upload</button>
                  </div>
            </div>
     </div>
  </div>
</form>	
</div>
<table class="table table-hover">
  <tr>
  <th>Car ID</th>  
  <th>Car Name</th>  
  
  <th>Image</th>
	
  <th>Edit</th>
  <th>Price</th>    
    <th>Mileage</th>
    <th>Varient</th>
    <th>HP</th>
    <th>Year</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>  
<?php
$sql = "SELECT * FROM car_details INNER JOIN spectbl ON car_details.product_id=spectbl.car_id";
              
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        ?>
        <tr>
        <td><?php echo $row["product_id"];?></td>
        <td><?php echo $row["product_name"];?></td>
        <td><?php echo $row["product_img1"];?><br>
		    <?php echo $row["product_img2"];?><br>
        <?php echo $row["product_img3"];?><br>
        <?php echo $row["product_img4"];?><br>
        <?php echo $row["product_img5"];?><br>
        <?php echo $row["product_img6"];?></td>
        <td><a class="btn btn-secondary" href='<?php echo "productedit.php?id=",$row["product_id"] ?>'>edit</a></td>

        <td><?php echo $row["car_price"];?></td>
        <td><?php echo $row["car_mileage"];?></td>
        <td><?php echo $row["car_varient"];?></td>
        <td><?php echo $row["car_hp"];?></td>
        <td><?php echo $row["car_year"];?></td>
        <td><a class="btn btn-secondary" href='<?php echo "carspecedit.php?id=",$row["car_id"] ?>'>edit</a></td>
        <td><a class="btn btn-danger" href='<?php echo "productdelete.php?id=",$row["product_id"] ?>'>delete</a></td>
        </tr>
        <?php
    }
}
?>

</table>

</main>



<?php include("foot.php"); ?>