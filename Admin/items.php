<?php 
$title="Dashbaod";

include("head.php"); ?>
<?php include("menu.php"); ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Add Items</h1>
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


<?php include("connection.php");?>
<?php

    $name ="";
    $qty ="";
    $code ="";
    $price ="";
   $category ="";
    $flag ="0";

  
    $errorname="";
    $errorqty ="";
    $errorcode ="";
    $errorprice ="";
    $errorcategory ="";

    if(isset($_POST["submit"]))
    {   
        $name =($_POST["txt_name"]);
        $qty =($_POST["txt_qty"]);
        $code =($_POST["txt_code"]);
        $price =($_POST["txt_price"]);
       

        if($name == "")
        {
            $errorname="please enter name";
            $flag = "1";
        }

        if($qty=="")
        {
            $errorqty="please enter quantity";
            $flag = "1";
        }

        if($code=="")
        {
            $errorcode="please enter code";
            $flag="1";
        }
        
        if($price=="")
        {
            $errorprice="please enter the price";
            $flag="1";
        }

        if($category=="")
        {
            $errorcategory="please enter category";
            $flag="1";
        }

        if($flag=="0")
{
    $sql = "insert into item_details(item_name,item_qty,item_code,item_price,item_catgry) 
    values ('$name','$qty','$code','$price','$category')";

if($conn->query($sql) === true)
{
    echo "new record created successfully";
}
else
{
    echo "error: ".$sql."<br>".$conn->error;
}            
}
}
?>
<main>
    <form method = "post">

    <form method="post">
    <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control"  name="txt_name" value="<?php echo $name;?>">
                    <span style="color:red"><?php echo $errorname;?></span>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Quantity</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control"  name="txt_qty" value="<?php echo $qty;?>">
                    <span style="color:red"><?php echo $errorqty;?></span>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Code</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control"  name="txt_code" value="<?php echo $code;?>">
                    <span style="color:red"><?php echo $errorcode;?></span>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Price</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control"  name="txt_price" value="<?php echo $price;?>">
                    <span style="color:red"><?php echo $errorprice;?></span>
                  </div>
                </div>
                





        <label for="inputText" class="col-sm-2 col-form-label">Category</label>



<select name="txt_category" id="catgry" 
     style='text-color: #cccccc'>

    <?php
        $sql = "select * from tbl_cat";
        $result = $conn->query($sql);
        if ($result->num_rows > 0)
        {
         while($row = $result->fetch_assoc())
         {  
    ?>
        <option value='<?php echo $row["cat_id"]?>'><?php echo $row["cat_name"]?></option>
       
        <?php
         }
        }
        ?>
        </select><br><br>
      

    <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-3">
                    <button type="submit" name="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>


                <div class="row mb-8">
<table class="table table-hover">
   
    <tr>
    <th>id</th>    
    <th>item name</th>
    <th>item quantity</th>
    <th>item code</th>
    <th>item price</th>
    <th>item category</th>
    <th>edit</th>
    <th>delete</th>
    </tr>  

<?php
$sql = "select * from item_details";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        ?>
        <tr>
        <td><?php echo $row["item_id"];?></td>
        <td><?php echo $row["item_name"];?></td>
        <td><?php echo $row["item_qty"];?></td>
        <td><?php echo $row["item_code"];?></td>
        <td><?php echo $row["item_price"];?></td>
        <td><?php echo $row["item_catgry"];?></td>
        <td><a href='<?php echo "edit.php?id=",$row["item_id"] ?>'>edit</a></td>
        <td><a href='<?php echo "delete.php?id=",$row["item_id"] ?>'>delete</a></td>
        </tr>
        <?php
    }
}
?>
</table>
</main>
<?php include("foot.php"); ?>