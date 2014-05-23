<?php
//start the session and make the login info for the database a reusable variable
session_start();
$host = "tund.cefns.nau.edu";
$username = "bjd96script";
$password = "web212";
$db_name = "bjd96";?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="./ico/favicon.png">

  <title>Signin Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link href="./css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy this line! -->
  <!--[if lt IE 9]><script src="./js/ie8-responsive-file-warning.js"></script><![endif]-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <?php

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

	//if they are not in the system put them in it! flag them as active, add the username and password
     $sql = "INSERT INTO usertable (flag, username, pwd)
     VALUES (1, '$userid', '$pwd')";
     if (!mysqli_query($con,$sql))
     {
       die('Error: ' . mysqli_error($con));
     }
     echo "<h2>You are now in the system!</h2>
     <br> <h1><a href='./index.php'> Back to the begining!</a></h1>";
     if (!isset($_SESSION['userid'])) {
      //activate the session
       $_SESSION['userid'] = array();
     }
     array_push($_SESSION['userid'], $userid);


     ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
  </html>