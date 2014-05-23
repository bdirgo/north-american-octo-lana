<?php
$host = "localhost";
$username = "bjd96script";
$password = "web212";
$db_name = "users";


// Create connection
$con = mysqli_connect($host, $username, $password);

// Check connection
if (mysqli_connect_errno($con))
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = msql_select_db($db_name);
if (!$result) {
	// if there is no connection, error
	echo "Fail to connect to database: " . mysqli_error();

} elseif ($result) {
	//if there is a connection to the database
	$date = date("G:i:s");
	if () {
		// if they are a user log them in


	}

	if (){
		// if they are not a user add them to the database
		$sql = "INSERT INTO usertable (flag, username, pwd, TSIN)
		VALUES (1, $_POST['username'], $_POST['password'], $date)"
	}
}

// // Create table
// $sql = "CREATE TABLE Person 
// (
// PID INT NOT NULL AUTO_INCREMENT, 
// PRIMARY KEY(PID),
// FirstName CHAR(15),
// LastName CHAR(15),
// Age INT
// )";
// $sql = "CREATE TABLE users.usertable(
//     UID INT NOT NULL AUTO_INCREMENT,
//     flag BIT NOT NULL,
//     username VARCHAR(255) NOT NULL,
//     pwd VARCHAR(255) NOT NULL,
//     failedAttempts INT NULL,
//     TSIN VARCHAR(8) NOT NULL,
//     TSOUT VARCHAR(8) NOT NULL,
//     primary key (UID)
//     )";



// // Execute query
// if (mysqli_query($con,$sql))
//   {
//   echo "Table person created successfully";
//   }
// else
//   {
//   echo "Error creating table: " . mysqli_error($con);
//   }

// // Check connection
// if (mysqli_connect_errno($con))
// {
// 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
// }
// // Close connection
// mysqli_close($con);
?>