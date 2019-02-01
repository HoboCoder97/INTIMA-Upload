<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
include ("./includes/index.php");

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="./images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
    <div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				

<div class="form">
    <h1>INTIMA Clubs Portal Login</h1>
        <form action="" method="post" name="login">
            <div class="p-t-31 p-b-9">
            </div>
            <div class="wrap-input100 validate-input" data-validate = "Username is required">
				<input type="text" name="username" placeholder="Username" required class="input100" />
						<span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input type="password" name="password" placeholder="Password" required class="input100"/>
            </div>
            <div class="container-login100-form-btn m-t-17">
                    <input name="submit" type="submit" value="Login" class="login100-form-btn"/>
            </div>
        </form>
<hr>
<pre>Not registered yet? <a href='registration.php'>Register Here</a></pre>
</div>

            </div>
        </div>
    </div>
</body>
</html>