<?php include("connection.php");?>
<?php
if(isset($_GET["id"]))      
{

    $id=$_GET["id"];
    $sql =  " delete from  booked where ID ='$id'"; 
    

if($conn->query($sql)=== true)
{
    echo "new record created successfully";
    header("Location: userprofile.php");
}
else
{
    echo "error: ".$sql."<br>".$conn->error;
}            
}

?>