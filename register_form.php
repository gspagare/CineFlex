<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form | CodingLab </title>
    <link rel="stylesheet" href="css/register.css">
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

<<<<<<< Updated upstream
  <div class="parent-container">
  <img class="login_bg" src="login_bg.jpg" alt="NO BG">
    <div class="register_holder">
    <img src="img/logo1.png" alt="no image found" width="250px" style="margin-left: 33%;">
    <h2 style="padding-top: 25px;">Register</h2>
      <form class="register_form" id="form" action="register.php" method="post" enctype="multipart/form-data" onsubmit="return validate();">
       <div class= "grid">
      <div class="userbox">
          <input type="text" id="username" class="inputbox" name="username" required=""/>
          <p id="nameerror"></p>
          <label>UserName</label>
        </div>
        <div class="userbox">
          <input type="text" id="email" class="inputbox" name="email" required=""/>
          <p id="emailerror"></p>
          <label>Email</label>
        </div>
        <div class="userbox">
          <input type="number" id="number" class="inputbox" name="number" required=""/>
          <p id="numbererror"></p>
          <label>Phone Number</label>
        </div>
        <div class="userbox">
          <input type="text" id="city" class="inputbox" name="city" required=""/>
        	<p id="cityerror"></p>
          <label>City</label>
        </div>
        <div class="userbox">
          <input type="password" id="password" class="inputbox" name="password" required=""/>
        	<p id="passworderror"></p>
          <label>Password</label>
        </div>
        <div class="userbox">
          <input type="password" id="cpassword" class="inputbox" name="cpassword" required=""/>
        	<p id="cpassworderror"></p>
          <label>Confirm Password</label>
        </div>
        <div class="userbox">
          <span>Upload Your Profile Picture (Optional)</span>
          <input type="file" accept="image/jpg, image/jpeg, image/png" class="inputbox" id="image" name="image">
=======
  <div class="container">
    <center><a href="./index.html"><img src="img/logo.png" alt="" style="margin-top: 80px; width: 50%;"></a></center>
    <div class="content">
    <div class="title">Registration</div>
      <form id="form" action="register.php" method="post" enctype="multipart/form-data" onsubmit="return validate();">
        <div class="user-details">
          <div class="input-box">
            <span class="details">UserName</span>
            <input type="text" id="username" name="username" placeholder="Enter your name">
            <p id="nameerror"></p>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" id="email" name="email" placeholder="Enter your Email">
            <p id="emailerror"></p>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" id="number" name="number" placeholder="Enter your Phone Number">
          	<p id="numbererror"></p>
          </div>
          <div class="input-box">
            <span class="details">City</span>
            <input type="text" id="city" name="city" placeholder="Enter your City">
          	<p id="cityerror"></p>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" id="password" name="password" placeholder="Enter your password">
          	<p id="passworderror"></p>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" id="cpassword" name="cpassword" placeholder="Confirm your password">
          	<p id="cpassworderror"></p>
          </div>
          <div class="input-box">
            <span class="details">Image uploaded (Option)</span>
            <input type="file" id="image" name="image">
          </div>
>>>>>>> Stashed changes
        </div>
        <p id="error_para" ></p>
        <div id="err"></div>
        </div>
        <div class="button_display">
          <button type="submit" class="login_btn" value="Register" id="submit" name="submit">Register</button>
        </div>
      </form>
    </div>
    </div>
  </div>



<script type="text/javascript">
  function validate()
{
 var error="";
 var name = document.getElementById( "username" );
 var email = document.getElementById( "email" );
 var number = document.getElementById( "number" );
 var city = document.getElementById( "city" );
 var password = document.getElementById( "password" );
 var cpassword = document.getElementById( "cpassword" );

 if( name.value == "" )
 {
  error = " <font color='red'>Requried Name.</font> ";
  document.getElementById( "nameerror" ).innerHTML = error;
  return false;
}

if(name.value.length <= 2) 
 {
  error = " <font color='red'>Not allowed! Please input 2 to 20 characters</font> ";
 
  document.getElementById( "nameerror" ).innerHTML = error;
  return false;
 }

if(!isNaN(name.value)) 
 {
  error = " <font color='red'>Only Characters Allowed</font> ";
 
  document.getElementById( "nameerror" ).innerHTML = error;
  return false; 
 }

else if( email.value == "")
 {
  error = " <font color='red'>Requried Email.</font> ";
  document.getElementById( "emailerror" ).innerHTML = error;
  return false;
 }

else if( email.value.indexOf('@') <= 0 )
 {
  error = " <font color='red'>Invalid Position of '@' Symbol</font> ";
  document.getElementById( "emailerror" ).innerHTML = error;
  return false;
 }

else if ((email.value.charAt(email.value.length-4)!='.') && (email.value.charAt(email.value.length-3)!='.'))
 {
  error = " <font color='red'>Invalid Position of '.' Symbol</font> ";
  document.getElementById( "emailerror" ).innerHTML = error;
  return false;
 }

else if( number.value == "")
 {
  error = " <font color='red'>Requried Mobile Number.</font> ";
  document.getElementById( "numbererror" ).innerHTML = error;
  return false;
}

else if( number.value.length!=10)
 {
  error = " <font color='red'>Mobile Number must contain 10 Digits</font> ";
  document.getElementById( "numbererror" ).innerHTML = error;
  return false;
 }

else if(isNaN(number.value))
 {
  error = " <font color='red'>Mobile Number must only include Numbers</font> ";
  document.getElementById( "numbererror" ).innerHTML = error;
  return false;
 }

else if( city.value == "" )
 {
  error = " <font color='red'>Requried City</font> ";
  document.getElementById( "cityerror" ).innerHTML = error;
  return false;
 }

else if( password.value == "" )
 {
  error = " <font color='red'>Requried Password</font> ";
  document.getElementById( "passworderror" ).innerHTML = error;
  return false;
 }

if(password.value.length <= 2) 
 {
  error = " <font color='red'>Password's length must be between 2 to 10 Characters.</font> ";
 
  document.getElementById( "passworderror" ).innerHTML = error;
  return false;
}

if(password.value.length >= 10) 
 {
  error = " <font color='red'>Password's length must be between 2 to 10 Characters.</font> ";
 
  document.getElementById( "passworderror" ).innerHTML = error;
  return false;
 }

 else if( cpassword.value == "" )
 {
  error = " <font color='red'>!Requried Password.</font> ";
  document.getElementById( "cpassworderror" ).innerHTML = error;
  return false;
 }

else if( cpassword.value != password.value)
 {
  error = " <font color='red'>Your Password doesn't Match.</font> ";
  document.getElementById( "cpassworderror" ).innerHTML = error;
  return false;
 }

else
 {
  return true;
 }
}
</script>
</body>
</html>
