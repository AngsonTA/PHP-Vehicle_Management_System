
<?php include("../connection.php");?>
<?php
if(isset($_GET["id"]))      
{

    $id=$_GET["id"];
    $sql =  " delete from  contact where id='$id'"; 
    

if($conn->query($sql)=== true)
{
    echo "new record created successfully";
    header("Location: contact.php");
}
else
{
    echo "error: ".$sql."<br>".$conn->error;
}            
}

?>