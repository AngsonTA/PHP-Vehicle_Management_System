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
              <?php
              
              $cmessage="";
              $car_id ="";
              $car_price ="";
              $car_mileage="";
              $car_varient ="";
              $car_hp="";
              $car_year="";
              $flag ="0";

              if(isset($_POST["submit"]))
    {   
        
        $car_mileage =($_POST["txt_mileage"]);
        $car_id =($_POST["id"]);
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
            $sql = "insert into spectbl(car_price,car_id,car_mileage,car_varient,car_hp,car_year) 
            values ('$car_price','$car_id','$car_mileage','$car_varient','$car_hp','$car_year')";
        
        if($conn->query($sql)=== true)
        {
          $cmessage= "new record created successfully";
        }
        else
        {
          $cmessage= "error: ".$sql."<br>".$conn->error;
        }            
        }
      }
        ?><form method="post">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Car ID</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="id" value="">
 
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
                    <button type="submit" name="submit" class="btn btn-primary"style="margin-bottom:20px;">upload</button>
                  </div>
             
           </div>

           </form>
<div class="row mb-8">
<table class="table table-hover">
    <tr>
    <th>ID</th>     
    <th>Price</th>    
    <th>Varient</th>
    <th>Mileage</th>
    <th>HP</th>
    <th>Year</th>
    <th>Edit</th>
    <th>Delete</th>
    </tr>  

<?php
$sql = "select * from  spectbl";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        ?>
        <tr>
        <td><?php echo $row["car_id"];?></td>
        <td><?php echo $row["car_price"];?></td>
        <td><?php echo $row["car_mileage"];?></td>
        <td><?php echo $row["car_varient"];?></td>
        <td><?php echo $row["car_hp"];?></td>
        <td><?php echo $row["car_year"];?></td>
        <td><a class="btn btn-secondary" href='<?php echo "carspecedit.php?id=",$row["car_id"] ?>'>edit</a></td>
        <td><a class="btn btn-danger" href='<?php echo "carspecdel.php?id=",$row["car_id"] ?>'>delete</a></td>
        </tr>
        <?php
    }
}
?>
</table>
</div>
</div>
</div>
</section>
<?php include("foot.php"); ?>