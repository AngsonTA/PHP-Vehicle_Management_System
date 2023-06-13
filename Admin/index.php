<?php 
$title="Dashbaod";?>
<?php include("head.php");?>
<?php include("menu.php"); ?>
<main id="main" class="main">
<div class="pagetitle">
  <h1>Admin Panal</h1>
  <!--<nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php"></a></li>
     <li class="breadcrumb-item"></li>
      <li class="breadcrumb-item active"></li>-->
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>
      
<div class = "flex-container">
  <div>User Registered
  <div>
<?php
$sql = "SELECT * FROM customertbl";
$result = $conn->query($sql);
if($rows = mysqli_num_rows($result)){
echo $rows;
}
else{
  echo'0';
}
?>
</div>
  </div>


  <div>Car booked
    <div>
  <?php
$sql = "SELECT * FROM booked";
$result = $conn->query($sql);
if($rows = mysqli_num_rows($result)){
echo $rows;
}
else{
  echo'0';
}
?>
</div>
  </div>
   




  <div>Test Drived
<div>
<?php
$sql = "SELECT * FROM testdrive";
$result = $conn->query($sql);
if($rows = mysqli_num_rows($result)){
echo $rows;
}
else{
  echo'0';
}
?>
</div>
</div>



  
  

<div>User Feedback
    <div>
  <?php
$sql = "SELECT * FROM contact";
$result = $conn->query($sql);
if($rows = mysqli_num_rows($result)){
echo $rows;
}
else{
  echo'0';
}
?>
  </div>
</div>
  <style>
    .flex-container {
  display: flex;
  flex-wrap: nowrap;
  
}

.flex-container > div {
  background-color: lightgrey;
  width: 300px;
  margin: 15px;
  text-align: center;
  font-size: 15px;
  font-weight:900;
  padding:50px;
  border-radius:10px;
}
</style>
  </style>
</div>

              
              </div>
          </div>

        </div>

 </div>
</section >


</main><!-- End #main -->

<?php include("foot.php"); ?>