<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Your Ticket</title>
        <style>
            body {
                background-image: linear-gradient(270deg, white, lightblue, skyblue, royalblue);
            }
            h1 {
                color: black;
            }
            h1:hover {
                color: red;
            }
            .box {
                border: 1px black solid;
                border-radius: 10px;
                margin-top: 80px;
            }
            .taketicket {
                margin-top: 40px;
            }
            .toppart {
                right: 0;
                top: 0px;
                position: absolute;
                padding: 10px
            }
            .toppart a {
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <div class="toppart">
            <a href="index.php"><font color="blue">Back To Home</font></a>
            <a href="logout.php"><font color="blue">Log Out</font></a><br>
        </div>
  <center><div class="box"><h1>Congratulations your ticket is confirmed.</h1></div>
  	<a href="ticket_show.php" target="_blank"><font color="blue"><h3 class="taketicket">Take Your Ticket</h3></center></font></a>
  </body>
  </html>