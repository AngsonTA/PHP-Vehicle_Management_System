<?php include("../connection.php");?>
<?php 
$title="Dashbaod";
include("head.php"); ?>
<?php include("menu.php"); ?>
<main id="main" class="main">
<div class="pagetitle">
  <h1>Description</h1>
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
             
             
            $carname="";
             $info="";
             $info1="";
             $info2="";
             $info3="";
             $info4="";
             $info5="";
             $info6="";
             $info7="";
             $info8="";
             $info9="";
             $info10="";
             $info11="";
             $info12="";
             $info13="";
             $info14="";
             $info15="";
             $info16="";
             $flag="0";


              if(isset($_POST["submit"]))
    {   
        $carname=($_POST["carname"]);
        $info =($_POST["txt_info"]);
        $info1 =($_POST["txt_1"]);
        $info2 =($_POST["txt_2"]);
        $info3 =($_POST["txt_3"]);
        $info4 =($_POST["txt_4"]);
        $info5 =($_POST["txt_5"]);
        $info6 =($_POST["txt_6"]);
        $info7 =($_POST["txt_7"]);
        $info8 =($_POST["txt_8"]);
        $info9 =($_POST["txt_9"]);
        $info10 =($_POST["txt_10"]);
        $info11 =($_POST["txt_11"]);
        $info12 =($_POST["txt_12"]);
        $info13 =($_POST["txt_13"]);
        $info14 =($_POST["txt_14"]);
        $info15 =($_POST["txt_15"]);
        $info16 =($_POST["txt_16"]);



        if($carname == "")
        {
            $flag = "1";
        }

        if($info == "")
        {
            $flag = "1";
        }
         
        if($info1 == "")
        {
            $flag = "1";
        }

        if($info2 == "")
        {
            $flag = "1";
        }

        if($info3 == "")
        {
            $flag = "1";
        }

        if($info4 == "")
        {
            $flag = "1";
        }

        if($info5 == "")
        {
            $flag = "1";
        }

        if($info6 == "")
        {
            $flag = "1";
        }

        if($info7 == "")
        {
            $flag = "1";
        }

        if($info8 == "")
        {
            $flag = "1";
        }

        if($info9 == "")
        {
            $flag = "1";
        }

        if($info10 == "")
        {
            $flag = "1";
        }

        if($info11 == "")
        {
            $flag = "1";
        }

        if($info12 == "")
        {
            $flag = "1";
        }


         if($info13 == "")
        {
            $flag = "1";
        }

        if($info14 == "")
        {
            $flag = "1";
        }

         if($info15 == "")
        {
            $flag = "1";
        }
        if($info16 == "")
        {
            $flag = "1";
        }

       
        if($flag=="0")
        {
            $sql = "insert into car_about(car_name,info,info1,info2,info3,info4,info5,info6,info7,info8,info9,info10,info11,info12,info13,info14,info15,info16)
            values('$carname','$info','$info1','$info2','$info3','$info4','$info5','$info6','$info7','$info8','$info9','$info10','$info11','$info12','$info13','$info14','$info15','$info16')";

        if($conn->query($sql)=== true)
        {
          $cmessage= "new record created successfully";
        }
        else
        {
          $cmessage= "error: ".$sql."<br>".$conn->error;
        }            
    
} }?>

<form method="post">
<div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Car Name</label>
                  <div class="col-sm-5">
                  <?php
$sql = "select * from  car_details ";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
   ?>
                  <select name="carname" class="form-control">
               <?php   while($row = $result->fetch_assoc())
    {
      ?>
        <option value="<?php  echo $row["product_id"]  ?>"><?php echo $row["product_name"];?></option>

        <?php }} ?>
    </select>
                  </div>
                </div>



                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Car Description</label>
                  <div class="col-sm-5">
                  <textarea type="text" class="form-control"  name="txt_info" value=""></textarea>
 
                  </div>
                </div>
                 <div class="row mb-3">

                  <label for="inputText" class="col-sm-2 col-form-label">Info 1</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control"  name="txt_1" value="">
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Info 2</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_2" value="">
 
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Info 3</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_3" value="">
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Info 4</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_4" value="">
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Info 5</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_5" value="">
                    
                  </div>
                </div>



                <div class="row mb-3">

                  <label for="inputText" class="col-sm-2 col-form-label">Info 6</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control"  name="txt_6" value="">
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Info 7</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_7" value="">
 
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Info 8</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_8" value="">
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Info 9</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_9" value="">
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Info 10</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_10" value="">
                    
                  </div>
                </div>

                <div class="row mb-3">

                  <label for="inputText" class="col-sm-2 col-form-label">Info 11</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control"  name="txt_11" value="">
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Info 12</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_12" value="">
 
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Info 13</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_13" value="">
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Info 14</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_14" value="">
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Info 15</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_15" value="">
                    
                  </div>
                </div>



                <div class="row mb-3">

                  <label for="inputText" class="col-sm-2 col-form-label">Info 16</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control"  name="txt_16" value="">
                    
                  </div>
                </div>


                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-3">
                    <button type="submit" name="submit" class="btn btn-primary"style="margin-bottom:20px;">upload</button>
                  </div>
             
           </div>
    </form>
    <div class="row mb-8">
<table class="table table-hover">
    <tr>
    <th>ID</th>
    <th>Description</th>
    <th>Design</th>
    <th>Design</th>
    <th>Design</th>
    <th>Design</th>
    </tr>  
    <?php
$sql = "select * from  car_about";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        ?>
           <tr>
        <td><?php echo $row["car_name"];?></td>

        <td><?php echo $row["info"];?></td>


        <td><?php echo $row["info1"];?><br>
            <?php echo $row["info2"];?><br>
            <?php echo $row["info3"];?><br>
            <?php echo $row["info4"];?></td>

        <td><?php echo $row["info5"];?><br>
            <?php echo $row["info6"];?><br>
            <?php echo $row["info7"];?><br>
            <?php echo $row["info8"];?></td>

        <td><?php echo $row["info9"];?><br>
            <?php echo $row["info10"];?><br>
            <?php echo $row["info11"];?><br>
            <?php echo $row["info12"];?></td>

       <td><?php echo $row["info13"];?><br>
           <?php echo $row["info14"];?><br>
           <?php echo $row["info15"];?><br>
           <?php echo $row["info16"];?></td>   
   
   
   
           <td><a class="btn btn-secondary" href='<?php echo "caraboutedit.php?id=",$row["info_id"] ?>'>edit</a></td>
        <td><a class="btn btn-danger" href='<?php echo "caraboutdel.php?id=",$row["info_id"] ?>'>delete</a></td>
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

