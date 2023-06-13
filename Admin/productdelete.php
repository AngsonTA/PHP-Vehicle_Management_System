<?php include("../connection.php");?>
<?php if(isset($_GET["id"]))      
{

    $id=$_GET["id"];
    $sql =  " delete from  car_details where product_id='$id'"; 
    

if($conn->query($sql)=== true)
{
    echo "new record created successfully";
    header("Location: product.php");
}
else
{
    echo "error: ".$sql."<br>".$conn->error;
}            
}

?>

<?php
if(isset($_GET["id"]))      
{

    $id=$_GET["id"];
    $sql =  " delete from  spectbl where car_id='$id'"; 
    

if($conn->query($sql)=== true)
{
    echo "new record created successfully";
    header("Location: product.php");
}
else
{
    echo "error: ".$sql."<br>".$conn->error;
}            
}

?>
<?php
