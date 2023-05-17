<!DOCTYPE html>
<html>
<head>

    <title>Login Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-3.5.1.min.js"></script>
  	<script type="text/javascript" src="ajaxValidation.js"></script>
    <link rel="stylesheet" href='css/all.css' type='text/css'>
    <link rel="stylesheet" href='css/bootstrap.min.css' type='text/css'>
    <link rel="stylesheet" href='css/dashboard.css' type='text/css'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.min.js"></script>

<?php include "./templates/top.php"; ?>

<?php include "./templates/navbar.php"; ?>

  <div class="container">
    <div class="row justify-content-center"style="margin:100px 0;">
      <div class="col-md-4">
        <div class="mb-3">
          <h4>Admin Login</h4>
          <p class="message"></p>
          <form id="admin-login">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" id="userEmail" placeholder="Enter Name">
          </div>
          <div class="mb-3">
            <label class="col-form-label">Password</label>
            <input type="password" class="form-control" id="userPassword" placeholder="Enter Password">
          </div>
          <div>
            <button class="form-control btn btn-primary register-btn" id="checkValidation">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>

<?php include "./templates/footer.php"; ?>