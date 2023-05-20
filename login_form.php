
<html>
<head>
<title> Login Page</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
	<div class="parent-container">
    <img class="login_bg" src="login_bg.jpg" alt="NO BG">
    <div class="loginholder">
      <img src="img/logo1.png" alt="no image found" width="150px" style="margin-left: 25%;">
      <h2 style="padding-top: 25px;">Login Here</h2>
					<form>
						<div class="userbox">
							<input type="text" name="" class="inputbox" id="username" required=""/>
              <p id="nameerror"></p>
							<label>Username</label>
						</div>
						<div class="userbox">
							<input type="password" name="" class="inputbox" id="password" required=""/>
              <p id="passerror"></p><div id="msg"></div>
							<label>Password</label>
						</div>
						<a class="loginbtn" id="login">LOGIN</a>
						<div class="new_text">
							<a href="forget_password.php">Forgot your Password ?</a>
							<a href="register_form.php">Register now</a>
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
  error = " <font color='red'; font size=3>Requried Name.</font> ";
  document.getElementById( "nameerror" ).innerHTML = error;
  return false;
 }
  
  if( password == "")
 {
  error = " <font color='red'; font size=3>Requried Password.</font> ";
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
                                     error = " <font color='red'; font size=3>Invalid UserId or Password.</font> ";
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