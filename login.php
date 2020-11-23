<?php
include_once 'connect.php';
session_start();
  global $name;
  global $pass;
?>
<html>
<title>Welcome to the Login page</title>
<link rel="stylesheet" type="text/css" href="loginstyle.css">
<body>
<div class="bg">
    <div class="main"> </div>
	<div class="welcome">Welcome</div>
  <form class="" action="" method="post">
    <input type="text" name="name" class="credentials" placeholder="Username">
    <input type="password" class="credentials" name="pass" id="psswrd" placeholder="Password">
    <button type="submit" class="loginbutton" name='login'>Log In</button>
  </form>
  <?php
    if(isset($_POST['login'])){
      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $pass = mysqli_real_escape_string($conn, $_POST['pass']);
      if($name=='dhruvrana0000' && $pass =='dhruvrana@123'){
        $_SESSION['name'] = $name;
        header('location: loged.php');
      }
    }

  ?>

	<div style="position:absolute; left:41.5%; top:71%;">
	    <a style="color:white; display:inline-block; display:none;">Forgot password?</a>
		<b style="color:#648ab4; display:none;">Change your password</b></br>
	</div>
	<div style="position:absolute; left:41.5%; top:74.5%;">
	    <a style="color:white; display:inline-block; display:none;">Don't have an account?</a>
		<b style="color:#648ab4; display:none;">Create an account</b>
	</div>
<!--i wrote this for tshirt-->
<!--dekho yaha glt tha maine shi kiya kyahi-->
</div>
</body>
</html>
