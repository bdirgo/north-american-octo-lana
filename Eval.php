<?php
$myEmail = "bdirgo@gmail.com";

if ($_POST['email'] && $_POST['subject'] && $_POST['message'] && $_POST['fname'])
//if "email" is filled out, send email
{
  //send email
  $now = date('Y-m-d h:i:s');
  $email = $_POST['email'] ;
  $subject = $_POST['subject'] ;
  $message = $_POST['type'] . "\n" . "\n" . $_POST['message'] . "\n" . "\n" . $now;
  mail($myEmail, $subject, $message, "From:" . $email);
  echo "<font color='green'>Thank you for using our mail form</font>";
}
session_start();
if (isset($_SESSION['userid'])) {
header('Location: ./index.php');}
exit();
?>