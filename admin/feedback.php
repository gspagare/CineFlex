<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Feedback Page</title>
    <link rel="stylesheet" href='css/all.css' type='text/css'>
    <link rel="stylesheet" href='css/bootstrap.min.css' type='text/css'>
    <link rel="stylesheet" href='css/dashboard.css' type='text/css'>

<?php session_start(); 
if (!isset($_SESSION['admin'])) {
  header("location:login.php");
}
?>
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>
<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>

      <div class="row">
      	<div class="col-10">
      		<h2>Feedback</h2>
      	</div>
      	<div class="col-2">
      		<a href="#" data-toggle="modal" data-target="#add_feedback_modal" class="btn btn-primary btn-sm">Add Feedback</a>
      	</div>
      </div>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Message</th>
            </tr>
          </thead>
          <tbody id="product_list">
           <?php
include_once 'Database.php';
$result = mysqli_query($conn,"SELECT * FROM feedback");

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result)) {
    $id=$row['id'];?>
    <tr>
              <td><?php echo $row['id'];?></td>
              <td><?php echo $row['name'];?></td>
              <td><?php echo $row['email'];?></td>
              <td><?php echo $row['massage'];?></td>
            </tr>

  <?php

  }
}
?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>




<!-- Add Product Modal start -->
<div class="modal fade" id="add_feedback_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Feedback</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="myform" id="insert_movie" action="insert_data.php" method="post" enctype="multipart/form-data" onsubmit="return validateform()">
          <div class="row">
            <div class="col-12">
              <div class="col-12">
              <div class="form-group">
                <label>Enter your name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Enter Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" name="massage" id="massage" placeholder="Enter Your Message"></textarea>
              </div>
            </div>
      
           <div class="col-12">
              <input type="submit" name="add_feedback" class="btn btn-primary add-product" value="Add Product">
            </div>
          </div>
          
        </form>
        <div id="preview"></div>
      </div>
    </div>
  </div>
</div>
<!-- Add movie Modal end -->



<?php include_once("./templates/footer.php"); ?>


<script>  
function validateform(){  
var name=document.myform.name.value;  
var email=document.myform.email.value;  
var massage=document.myform.massage.value;  

if (name==""){  
  alert("Require Name");  
  return false;  
}else if(email==""){  
  alert("Require email");  
  return false;  
  } 
  else if(massage==""){  
  alert("Require Message Name");  
  return false;  
  }  
}

</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.min.js"></script>
