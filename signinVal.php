<?php
$date = new DateTime();
$date->getTimestamp();
?>
<?php

session_start();
$host = "tund.cefns.nau.edu";
$lclhost = "localhost";
$username = "bjd96script";
$password = "web212";
$db_name = "bjd96";

$con=mysqli_connect($host, $username, $password, $db_name);
// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//assign what the user put in to a variable
$userid = $_POST['username'];
$pwd = $_POST['pwd'];
// $date = date();

//query to see if the user exists
$result = mysqli_query($con,"SELECT flag,username,pwd FROM usertable
	WHERE username='$userid'");

if ($result) {
	# if he exists (flag is set to 1 the username is in the database)...check to see if the password and username matches...log him in

	while ($row = mysqli_fetch_array($result)){

		if ($row['flag'] == 1 && $row['username'] == $userid && $row['pwd'] == $pwd) {
			if (!isset($_SESSION['userid'])) {
				$_SESSION['userid'] = array();
			}
			array_push($_SESSION['userid'], $userid);
			//send them back to index
			header('Location: ./index.php');
			exit();
		} elseif ($row['flag'] == 1) {
			//this is where I would put code that asked teh user to reput in their username password if both were wrong, but it didn't quite work.
		}

		else {
			//redirect to login screen if the password is wrong
			echo " 
			<!DOCTYPE html>
			<html lang='en'>
			<head>
			<meta charset='utf-8'>
			<meta http-equiv='X-UA-Compatible' content='IE=edge'>
			<meta name='viewport' content='width=device-width, initial-scale=1.0'>
			<meta name='description' content='>
			<meta name='author' content='>
			<link rel='shortcut icon' href='./ico/favicon.png'>

			<title>Signin Template for Bootstrap</title>

			<!-- Bootstrap core CSS -->
			<link href='./css/bootstrap.css' rel='stylesheet'>

			<!-- Custom styles for this template -->
			<link href='signin.css' rel='stylesheet'>

			<!-- Just for debugging purposes. Don't actually copy this line! -->
			<!--[if lt IE 9]><script src='./js/ie8-responsive-file-warning.js'></script><![endif]-->

			<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
			<script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
			<script src='https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js'></script>
			<![endif]-->
			</head>

			<body>

			<div class='container'>

			<font color='red'> Inorrect login/password, try again.</font>

			<form action='$_SERVER[PHP_SELF]' method='POST' class='form-signin'>
			<h2 class='form-signin-heading'>Please sign in</h2>
			<input type='text' name='username' class='form-control' placeholder='Email address' required autofocus>
			<input type='password' name='pwd' class='form-control' placeholder='Password' required>
			<!-- <label class='checkbox'>
			<input type='checkbox' value='remember-me'> Remember me
			</label> -->
			<button class='btn btn-lg btn-primary btn-block' type='submit'>Sign in</button>
			</form>

			</div> <!-- /container -->


			<!-- Bootstrap core JavaScript
			================================================== -->
			<!-- Placed at the end of the document so the pages load faster -->
			</body>
			</html>
			";
		}
	}
}

else {

	//if he doesn't exist then redirect him to the register screen
	echo " <!DOCTYPE html>
			<html lang='en'>
			<head>
			<meta charset='utf-8'>
			<meta http-equiv='X-UA-Compatible' content='IE=edge'>
			<meta name='viewport' content='width=device-width, initial-scale=1.0'>
			<meta name='description' content='>
			<meta name='author' content='>
			<link rel='shortcut icon' href='./ico/favicon.png'>

			<title>Signin Template for Bootstrap</title>

			<!-- Bootstrap core CSS -->
			<link href='./css/bootstrap.css' rel='stylesheet'>

			<!-- Custom styles for this template -->
			<link href='signin.css' rel='stylesheet'>

			<!-- Just for debugging purposes. Don't actually copy this line! -->
			<!--[if lt IE 9]><script src='./js/ie8-responsive-file-warning.js'></script><![endif]-->

			<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
			<script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
			<script src='https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js'></script>
			<![endif]-->
			</head>

			<body>

			<div class='container'>

			<font color='red'> Username does not exist, try making an account.</font>

			<form action='registerVal.php' method='POST' class='form-signin'>
			<h2 class='form-signin-heading'>Register</h2>
			<input type='text' name='username' class='form-control' placeholder='Email address' required autofocus>
			<input type='password' name='pwd' class='form-control' placeholder='Password' required>
			<!-- <label class='checkbox'>
			<input type='checkbox' value='remember-me'> Remember me
			</label> -->
			<button class='btn btn-lg btn-primary btn-block' type='submit'>Register</button>
			</form>

			</div> <!-- /container -->


			<!-- Bootstrap core JavaScript
			================================================== -->
			<!-- Placed at the end of the document so the pages load faster -->
			</body>
			</html>";
} 

?>