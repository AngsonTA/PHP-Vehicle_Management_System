<?php include("../connection.php");?>
<?php
if(isset($_GET["id"]))      
{

    $id=$_GET["id"];
    $sql =  " delete from  cont_tbl where name_id='$id'"; 
    

if($conn->query($sql)=== true)
{
    echo "new record created successfully";
    header("Location: citydetails.php");
}
else
{
    echo "error: ".$sql."<br>".$conn->error;
}            
}

?>