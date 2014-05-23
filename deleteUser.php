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
$iamsure = $_POST['areyousure'];

$userid = $_SESSION['userid'];

//query to see if the user exists
$result = mysqli_query($con,"SELECT * FROM usertable
	WHERE username='$userid[0]'");
if ($result) {
	# if they are sure delete the account, else redirect to settings page
	if ($iamsure) {
		#if "Are you sure?" was selected
		mysqli_query($con,"UPDATE usertable 
			SET flag = 0
			WHERE username = '$userid[0]'");
		session_destroy();
		//send them bakc to index
		header('Location: ./index.php');
		exit();
	}

} else {
	//if it didn't send them back to the settings page
	header('Location: ./settings.php');

}


?>