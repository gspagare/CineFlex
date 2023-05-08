
<html>
<head>
<title> Login Page</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
	<div class="parent-container">
	<img class="login_bg" src="login_bg.jpg" alt="NO BG">
				<div class="loginholder">
					<h2>Login Here</h2>
					<a href="./index.html"><img src="img/logo1.png" alt="no image found" width="150px"><a>
					<form>
						<div class="userbox">
							<input type="text" name="" class="inputbox" id="username" required=""/>
							<label>Username</label>
						</div>
						<div class="userbox">
							<input type="password" name="" class="inputbox" id="password" required=""/>
							<label>Password</label>
						</div>
						<a class="loginbtn" href="./index.php"
						<span></span>
						<span></span>
						<span></span>
						<span></span>LOGIN</a>
						<div class="new_text">
							<span class="forgetpassword"><a href="forget_password.php"> Forget your Password ?</a></span>
							<a href="register_form.php">Resiter now</a>
						</div>
					</form>        
				</div>
	</div>
<script type="text/javascript">

	$(document).ready(function(){
  $("#login").click(function(){
    var username = $("#username").val().trim();
    var password = $("#password").val().trim();

   
     if( username == "" )
 {
  error = " <font color='red'>!Requrie Name.</font> ";
  document.getElementById( "nameerror" ).innerHTML = error;
  return false;
 }
  
  if( password == "")
 {
  error = " <font color='red'>!Requrie Email.</font> ";
  document.getElementById( "passerror" ).innerHTML = error;
  return false;
 }
    $.ajax({
      url:'login.php',
      type:'post',
      data:{username:username,password:password},
      success:function(response){
          if(response == 1){
                                    window.location = "index.php";
                                }else{
                                     error = " <font color='red'>!Invalid UserId.</font> ";
                                     document.getElementById( "msg" ).innerHTML = error;
                                      return false;
                                }
        $("#message").html(response);
      }
    });
  });
});
</script>
</body>
</html>