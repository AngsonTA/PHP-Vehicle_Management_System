<?php include("../connection.php");?>
<?php 
$title="Dashbaod";

include("head.php"); ?>
<?php include("menu.php"); ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Car Booked</h1>
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
              <div class="row mb-8">
<table class="table table-hover">
    <tr>
    <th>User ID</th>    
    <th>Car ID</th>
    <th>User Name</th>
    <th>Status</th>

    <th>Delete</th>
    </tr>  

<?php
$sql = "select * from  booked";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        ?>
        <tr>
       
        <td><?php echo $row["user_id"];?></td>
        <td><?php echo $row["car_id"];?></td>
        <td><?php echo $row["username"];?></td>
        <td><a style="text-decoration:none; color:black;" href='<?php echo "bookedit.php?id=",$row["ID"] ?>'> <?php echo $row["status"];?></a></td>
       

       
        <td><a class="btn btn-danger" href='<?php echo "bookeddel.php?id=",$row["ID"] ?>'>delete</a></td>
       
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
</main>
<?php include("foot.php"); ?>