<?php
session_start();
$host = "tund.cefns.nau.edu";
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
$oldpwd = $_POST['oldpwd'];
$newpwd = $_POST['newpwd'];
$userid = $_SESSION['userid'];

//query to see if the user exists
$result = mysqli_query($con,"SELECT * FROM usertable
	WHERE username='$userid[0]'");
if ($result) {
	# if the old pass matches, change the password; else redirect to settings page
	$row = mysqli_fetch_array($result);
  if ($row['pwd'] == $oldpwd){
    	//update the database with new password
		mysqli_query($con,"UPDATE usertable 
			SET pwd = '$newpwd'
			WHERE username = '$userid[0]'");
		//send them back to the settings page
		header('Location: ./settings.php');
		exit();
	}

} else {
	//all else fails go back to the settings page.
	header('Location: ./settings.php');

}


?>