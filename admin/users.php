<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Manage User Page</title>
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
      		<h2>Users</h2>
</div>
      </div>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Mobile</th>
              <th>City</th>
              <th>Password</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="product_list">
           <?php
include_once 'Database.php';
$result = mysqli_query($conn,"SELECT * FROM user");

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result)) {
    $id=$row['id'];?>
    <tr>
              <td><?php echo $row['id'];?></td>
              <td><?php echo $row['username'];?></td>
              <td><?php echo $row['email'];?></td>
              <td><?php echo $row['mobile'];?></td>
              <td><?php echo $row['city'];?></td>
              <td><?php echo $row['password'];?></td>
              <td><img src="image/<?php echo $row['image']; ?>" alt="" class="resize"></td>
              <td>
                <!-- <button data-toggle="modal" type="button" data-target="#edit_users_modal<?php echo $id;?>" class="btn btn-primary btn-sm">Edit User</button> -->
              <button data-toggle="modal" type="button" data-target="#delete_users_modal<?php echo $id;?>" class="btn btn-danger btn-sm">Delete User</button>
  </td>
            </tr>

 <div class="modal fade" id="delete_users_modal<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="insert_movie" action="insert_data.php" method="post">
          <h4>The user  <?php echo $row['username'];?>  has been deleted.</h4>
          <input type="hidden" name="id" value="<?php echo $row['id'];?>">
          <input type="submit" name="deleteuser" id="deleteuser" value="OK" class="btn btn-primary">
          </form>

      </div>
    </div>
  </div>
</div> 

<div class="modal fade" id="edit_users_modal<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit users</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="insert_movie" action="insert_data.php" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label>Name</label>
                <input type="hidden" name="e_id" value="<?php echo $row['id'];?>">
                <input class="form-control" name="edit_username" id="edit_username" value="<?php echo $row['username'];?>">
                <small></small>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Email</label>
                <input class="form-control" name="edit_email" id="edit_email" value="<?php echo $row['email'];?>">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Mobile</label>
                <input type="number" class="form-control" name="edit_mobile" id ="edit_mobile" value="<?php echo $row['mobile']; ?>">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>City</label>
                <input class="form-control" name="edit_city" id ="edit_city" value="<?php echo $row['city']; ?>">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Password</label>
                <input class="form-control" name="edit_password" id ="edit_password" value="<?php echo $row['password']; ?>">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Image</label>
                <img src="image/<?php echo $row['image'];?>" width="10%">
                <input type="file" name="edit_img" id="edit_img" class="form-control">
                <input type="hidden" name="old_image" value="<?php echo $row['image'];?>" id="old_image" class="form-control">              
              </div>
            </div>
            <div class="col-12">
            
              <input type="submit" name="updateusers" id="updateusers" value="update" class="btn btn-primary">
            </div>
          </div>
          
        </form>
        <div id="preview"></div>
      </div>
    </div>
  </div>
</div> 
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






<?php include_once("./templates/footer.php"); ?>


<script>  
function validateform(){  
var User_name=document.myform.username.value;  
var Email=document.myform.email.value;  
var Mobileno=document.myform.mobile.value;  
var City=document.myform.city.value;  
var Password=document.myform.password.value;  
 




if (User_name==""){  
  alert("Require User name");  
  return false;  
}
else if(Email==""){  
  alert("Require Email");  
  return false;  
  }  
else if(Mobileno==""){  
  alert("Require Mobile no");  
  return false;  
  }  
else if(City==""){  
  alert("Require City");  
  return false;  
  }  
else if(Password==""){  
  alert("Require Password");  
  return false;  
  }  


}


</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.min.js"></script>
