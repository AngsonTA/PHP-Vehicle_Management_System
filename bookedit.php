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
              <h5 class="card-title"></h5>
              
              <?php             
     $status="";
     $flag="0";



     if(isset($_POST["submit"]))
{   
       
        $status =($_POST["txt_stat"]);



        if($status == "")
        {
            $flag = "1";
        }

        if($flag=="0")
        {
            $id=$_GET["id"];
            $sql = "update booked set car_price = ,status='$status' where ID ='$id'";
        
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
    $sql="select * from booked where ID='$id'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) 
    {
        $row = $result->fetch_assoc();
       
        $status =$row["status"];
     
}
}
?>
<form method="post">
    <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Status</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control"  name="price" value="<?php echo $status;?>">
                    
                  </div>
                </div>      

                
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-3">
                    <button type="submit" name="submit" class="btn btn-primary">Confirm</button>
                  </div>
             
           </div>

           </form>

<?php include("foot.php");?>
