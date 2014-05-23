<!DOCTYPE html>
<?php
/* Program: mysql_connect.php
 * Desc:    Connects to MySQL Server and 
 *          outputs tables if any, to show
 *          that it is working.
 * 
 * Author: Patrick Kelley 2012
 */
 echo "<html>
       <head><title>Test MySQL</title></head>
       <body>";
 $host = "tund.cefns.nau.edu";
 $lclhost = "localhost";
 $user = "bjd96";                // YOUR USERID HERE
 $password = "Tlotre2r4";            // YOUR PASSWORD HERE
 $dbase = "bjd96";               // YOUR DATABASE NAME (SHOULD BE SAME AS USERID)
 $dbaselocal = "users";

echo "<h2>Trying CEFNS server</h2>";
 
// This code should connect.  If you get 'No connection possible', check your
// userid and password.  Be sure you are using the password for your database,
// which you specified when you set up the database.
// Also check that you are on the NAU network or VPN.
$cxn = mysql_connect($host,$user,$password) or die ("No connection possible");

// This code should select your database.  I've given it two chances to report
// the error.  If it fails, check the database name or call ITS for help.
$dbr = mysql_select_db($dbase,$cxn)or die(mysql_error());
if ($dbr == FALSE) echo "<h6>DB Error: ".mysql_error($cxn)."</h6>";

// Now we try to show a list of tables in the database.
 $sql="SHOW TABLES";
 $result = mysql_query($sql,$cxn);
 if($result == FALSE)
 {
    echo "<h4>Query Error: ".mysql_error($cxn)."</h4>";
 }
 else
 {
   // if the query succeeded but returned no rows (should not be possible UNLESS YOU HAVE NOT YET CREATED ANY TABLES) 
   // then print an error
   if(mysql_num_rows($result) < 1)
   {
      echo "<p>No current tables</p>";
   }
   // otherwise show the list of tables
   else
   {
      echo "<ol>";
      while($row = mysql_fetch_row($result))
      {
        echo "<li>$row[0]</li>";
      }
      echo "</ol>";
   }
 }

// Now let's try again on our localhost database server
echo "<h2>Trying localhost</h2>";
$cxn = mysql_connect($lclhost,$user,$password) or die ("No connection possible");

// This code should select your database.  I've given it two chances to report
// the error.  If it fails, check the database name or call ITS for help.
$dbr = mysql_select_db($dbaselocal,$cxn)or die(mysql_error());
if ($dbr == FALSE) echo "<h6>DB Error: ".mysql_error($cxn)."</h6>";

// Now we try to show a list of tables in the database.
 $sql="SHOW TABLES";
 $result = mysql_query($sql,$cxn);
 if($result == FALSE)
 {
    echo "<h4>Query Error: ".mysql_error($cxn)."</h4>";
 }
 else
 {
   // if the query succeeded but returned no rows (should not be possible UNLESS YOU HAVE NOT YET CREATED ANY TABLES) 
   // then print an error
   if(mysql_num_rows($result) < 1)
   {
      echo "<p>No current tables</p>";
   }
   // otherwise show the list of tables
   else
   {
      echo "<ol>";
      while($row = mysql_fetch_row($result))
      {
        echo "<li>$row[0]</li>";
      }
      echo "</ol>";
   }
 }
?>
