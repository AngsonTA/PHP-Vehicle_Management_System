<?php include("../connection.php");?>
<?php 
$title="Dashbaod";

include("head.php"); ?>
<?php include("menu.php"); ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Feedback</h1>
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
    <th>Name</th>    
    <th>Email</th>
    <th>Subject</th>
    <th>Questions</th>

    <th>Delete</th>
    </tr>  

<?php
$sql = "select * from  contact";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        ?>
        <tr>
       
        <td><?php echo $row["name"];?></td>
        <td><?php echo $row["email"];?></td>
        <td><?php echo $row["subject"];?></td>

        <td><?php echo $row["feedback"];?></td>

       
        <td><a class="btn btn-danger" href='<?php echo "contactdel.php?id=",$row["id"] ?>'>delete</a></td>
        </tr>
        <?php
    }
}
?>
</table>
</div>

              


</main><!-- End #main -->
              <?php include("foot.php"); ?>