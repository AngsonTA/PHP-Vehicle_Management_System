<?php
ob_start();
?>
<?php include("../connection.php");?>
<?php 
$title="Dashbaod";
include("head.php"); ?>
<?php include("menu.php"); ?>
<main id="main" class="main">
<div class="pagetitle">
  <h1>Specification</h1>
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

          //   $carname="";
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
       // $carname=($_POST["carname"]);
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



        //if($carname == "")
        //{
//$flag = "1";
       // }

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
            $id=$_GET["id"];
            $sql="update car_about set info ='$info',info1 ='$info1',info2 ='$info2',info3 ='$info3',info4 ='$info4',info5 ='$info5',info6 ='$info6',info7 ='$info7',info8 ='$info8',info9 ='$info9',info10 ='$info10',info11 ='$info11',info12 ='$info12',info13 ='$info13',info14 ='$info14',info15 ='$info15',info16 ='$info16' where info_id='$id'";
            if($conn->query($sql)=== true)
            {
              $cmessage= "new record created successfully";
            header("Location: carabout.php");
            ob_end_flush();
            }
            else
            {
              $cmessage= "error: ".$sql."<br>".$conn->error;
            }            
            }
          }   
          ?>
          <?php
if(isset($_GET["id"])&& $flag=="0")
{
    $id=$_GET["id"];
    $sql="select * from car_about where info_id='$id'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) 
    {
        $row = $result->fetch_assoc();
        $info =$row["car_name"];
        $info =$row["info"];
        $info =$row["info1"];
        $info =$row["info2"];
        $info =$row["info3"];
        $info =$row["info4"];
        $info =$row["info5"];
        $info =$row["info6"];
        $info =$row["info7"];
        $info =$row["info8"];
        $info =$row["info9"];
        $info =$row["info10"];
        $info =$row["info11"];
        $info =$row["info12"];
        $info =$row["info13"];
        $info =$row["info14"];
        $info =$row["info15"];
        $info =$row["info16"];

        
}
}
?>

<form method="post">


<div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Car Description</label>
                  <div class="col-sm-5">
                  <textarea type="text" class="form-control"  name="txt_info" value="<?php echo $info;?>"></textarea>
 
                  </div>
                </div>
                 <div class="row mb-3">

                  <label for="inputText" class="col-sm-2 col-form-label">Info 1</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control"  name="txt_1" value="<?php echo $info1;?>">
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Info 2</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_2" value="<?php echo $info2;?>">
 
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Info 3</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_3" value="<?php echo $info3;?>">
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Info 4</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_4" value="<?php echo $info4;?>">
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Info 5</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_5" value="<?php echo $info5;?>">
                    
                  </div>
                </div>



                <div class="row mb-3">

                  <label for="inputText" class="col-sm-2 col-form-label">Info 6</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control"  name="txt_6" value="<?php echo $info6;?>">
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Info 7</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_7" value="<?php echo $info7;?>">
 
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Info 8</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_8" value="<?php echo $info8;?>">
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Info 9</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_9" value="<?php echo $info9;?>">
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Info 10</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_10" value="<?php echo $info10;?>">
                    
                  </div>
                </div>

                <div class="row mb-3">

                  <label for="inputText" class="col-sm-2 col-form-label">Info 11</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control"  name="txt_11" value="<?php echo $info11;?>">
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Info 12</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_12" value="<?php echo $info12;?>">
 
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Info 13</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_13" value="<?php echo $info13;?>">
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Info 14</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_14" value="<?php echo $info14;?>">
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Info 15</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_15" value="<?php echo $info15;?>">
                    
                  </div>
                </div>



                <div class="row mb-3">

                  <label for="inputText" class="col-sm-2 col-form-label">Info 16</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control"  name="txt_16" value="<?php echo $info16;?>">
                    
                  </div>
                </div>


                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-3">
                    <button type="submit" name="submit" class="btn btn-primary"style="margin-bottom:20px;">upload</button>
                  </div>
             
           </div>
    </form>