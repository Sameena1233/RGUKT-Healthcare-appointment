<?php //include "header.php"; 
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	//header("Location: voter.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <style>
        body{
      	background-image: url("aboutpic.jpg");
      	background-position: center;
      	background-repeat: no-repeat;
      	background-size: cover;
      	background-attachment: fixed;

      }
      .head{
      	float:right;
        margin-right:150px;
        margin-top:50px;
        width:300px;
        height:350px;
        border:2px solid black;
      }
      input[type=submit]{
      	width: 100px;
      	height: 25px;
        margin-left:100px;
      }
      h3{
        font-weight:100px;
        font-size:35px;
        color:black;
        margin-left:100px;
        
      }
      form{
        margin-left:25px;
      }
    </style>
  </head>
  <body>

<div class="head">
<br>
<legend> <h3>Login</h3></legend> 
<?php global $nam; echo $nam; ?>
<?php global $error; echo $error; ?>
<form action="login_action.php" method="post" id="myform" >
Username : 
<input type="text" name="username" value="" > 
<br>
<br>
Password : 
<input type="password" name="password" value="" >
<br>
<br>
<input type="submit" name="login" value="login" >
<a href="register.php"><p>Not yet registered</p></a>
 
</form>
</div>
</body>
</html>
