<?php include("../connection.php");?>
<?php 
$title="Dashbaod";

include("head.php"); ?>
<?php include("menu.php"); ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Contact Details</h1>
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
              
              $cmessage="";
             
              $name1="";
              $name2="";
              $name3="";

              $phoneno1="";
              $phoneno2="";
              $phoneno3="";
              $phoneno4="";

              $email="";
              

              $flag ="0";

              if(isset($_POST["submit"]))
    {   
      
        
        $name1=($_POST["txt_name1"]);
        $name2=($_POST["txt_name2"]);
        $name3=($_POST["txt_name3"]);
        
        $phoneno1=($_POST["txt_phone1"]);
        $phoneno2=($_POST["txt_phone2"]);
        $phoneno3=($_POST["txt_phone3"]);
        $phoneno4=($_POST["txt_phone4"]);

        $email=($_POST["txt_mail"]);

        $text1=($_POST["txt_text1"]);
        $text2=($_POST["txt_text2"]);
        $text3=($_POST["txt_text3"]);

       

        if($name1 == "")
        {
            $flag = "1";
        }

        if($name2 == "")
        {
            $flag = "1";
        }

        if($name3 == "")
        {
            $flag = "1";
        }

        if($phoneno1 == "")
        {
            $flag = "1";
        }

        if($phoneno2 == "")
        {
            $flag = "1";
        }


        if($phoneno3 == "")
        {
            $flag = "1";
        }

        if($phoneno4 == "")
        {
            $flag = "1";
        }

        if($email == "")
        {
            $flag = "1";
        }
         
        if($text1 == "")
        {
            $flag = "1";
        }

        if($text2 == "")
        {
            $flag = "1";
        }

        if($text3 == "")
        {
            $flag = "1";
        }

       

        if($flag=="0")
        {
            $sql = "insert into cont_tbl(name1,name2,name3,phone1,phone2,phone3,phone4,email,text1,text2,text3) 
            values ('$name1','$name2','$name3','$phoneno1','$phoneno2','$phoneno3','$phoneno4','$email','$text1','$text2','$text3')";
        
        if($conn->query($sql)=== true)
        {
          $cmessage= "new record created successfully";
        
        }
        else
        {
          $cmessage= "error: ".$sql."<br>".$conn->error;
        }            
        }
      }
              ?>


<main>
<form method="post">


              <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Place 1</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_name1"  value="">
 
                  </div>
                </div>
               <div class="row mb-3">

                  <label for="inputText" class="col-sm-2 col-form-label">Place 2</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control"  name="txt_name2"  value="">
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Place 3</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_name3"  value="">
 
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Phone No1</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_phone1" value="" >
                    
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Phone No2</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_phone2" value="" >
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Phone No3</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_phone3" value="" >
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Phone No4</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control"  name="txt_phone4" value="" >
                    
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-5">
                  <input  type="text" class="form-control"  name="txt_mail"  value="">
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Text 1</label>
                  <div class="col-sm-5">
                  <textarea class="form-control"  name="txt_text1"  value=""></textarea>
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Text 2</label>
                  <div class="col-sm-5">
                  <textarea class="form-control"  name="txt_text2"  value=""></textarea>
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Text 3</label>
                  <div class="col-sm-5">
                  <textarea class="form-control"  name="txt_text3"  value=""></textarea>
                    
                  </div>
                </div>

              

                  <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-3">
                  <button type="submit" name="submit" class="btn btn-primary"style="margin-bottom:20px;">upload</button>
                  </div>
             
           </div>



           </form>







           <div class="row mb-8" style="font-size:10px;">
<table class="table table-hover">
    <tr>
    <th>Place 1</th>     
    <th>Place 2</th>    
    <th>Place 3</th>

    <th>Phone No1</th>
   

    <th>Email</th>

    <th>Text1</th>
    <th>Text2</th>
    <th>Text3</th>

    <th>Edit</th>
    <th>Delete</th>
    </tr>  

<?php
$sql = "select * from cont_tbl";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        ?>
        <tr>
        <td><?php echo $row["name1"];?></td>
        <td><?php echo $row["name2"];?></td>
        <td><?php echo $row["name3"];?></td>

        <td><?php echo $row["phone1"];?> <br>
        <?php echo $row["phone2"];?><br>
       <?php echo $row["phone3"];?><br>
        <?php echo $row["phone4"];?></td>

       
        <td><?php echo $row["email"];?></td>


        <td><?php echo $row["text1"];?></td>

        <td><?php echo $row["text2"];?></td>

        <td><?php echo $row["text3"];?></td>

       
       
        <td><a class="btn btn-secondary" href='<?php echo "cityedit.php?id=",$row["name_id"] ?>'>edit</a></td>
        <td><a class="btn btn-danger" href='<?php echo "citydel.php?id=",$row["name_id"] ?>'>delete</a></td>
        </tr>
        <?php
    }
}
?>



</table>
</div>
</div>
</div>
</main>

 <?php include("foot.php"); ?>