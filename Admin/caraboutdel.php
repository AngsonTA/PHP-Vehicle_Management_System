<?php include ("../connection.php");?>
<?php
if(isset($_GET["id"]))      
{

    $id=$_GET["id"];
    $sql =  " delete from  car_about where info_id='$id'"; 
    

if($conn->query($sql)=== true)
{
    echo "new record created successfully";
    header("Location: carabout.php");
}
else
{
    echo "error: ".$sql."<br>".$conn->error;
}            
}

?>
<?php
