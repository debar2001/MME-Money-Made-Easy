<?php


if (isset($_GET['loginFailed1'])) {
        $message = "You are not a MME User. Please sign Up first./If already a user of MME, You entered wrong username";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

if (isset($_GET['loginFailed2'])) {
        $message = "You entered wrong login password.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" author="Ansh">
	<title>Login page</title>
	<script type="text/javascript" src="../js/check.js"></script>
	<link rel="icon" type="image/x-icon" href="../logo/Logo1.png">
	<link rel="stylesheet" type="text/css" href="../css/base.css">
	<link rel="stylesheet" type="text/css" href="../css/login_style.css">
</head>
<body>
	<canvas></canvas>
	<script src="../js/canvas.js"></script>
	<img src="../logo/Logo.png" alt="logo" usemap="#logomap" width="200" height="80">
<map name="logomap">
	<area shape="rect" coords="0,0,200,80" alt="hom" href="home_page.html">
</map>
<a href="signup_page.php">
      <button type="submit" class="signup">Sign Up</button>
    </a>
    <a href="home_page.html">
      <button type="submit" class="home">Home</button>
    </a>
	
		<h1>Welcome to Login page</h1>
		<div><br><br>
			<form action="login_action.php" method="post">
		<label for="username">Username &nbsp;:&nbsp; </label><input type="text" id="username" name="username" required size="40" placeholder="Please enter your Username" onchange="CheckUsername1(username)"><br><br>
		<label for="password">Login Password &nbsp;:&nbsp; </label>
		<input type="password" id="pw" name="pw" required size="40" placeholder="Please enter your Password" onchange="CheckPassword1(pw);">

		<br><br>
		<input type="submit" class="btn1" value="Submit" name="loginbtn"><hr>
		<font size="2">Do not have an account?<a href="signup_page.php">Create Account</a></font><br><br>	
		<font size="2">Forgot Password?<a href="forgotpasswordpage.php">Click here</a></font></form>
	</div>

</body>
</html>