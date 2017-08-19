<?php
session_start(); // Starting Session
$error='Not Logged';
$ok='Checking..'; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";

}
else
{
// Define $username and $password
$Name=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
if(!$connection)
{
	$ok="<font color='red', size='+1' face='Arial, Helvetica, sans-serif'>Not Connected</font>";
}else
{
	$ok="<font color='lightGreen', size='+1' face='Arial, Helvetica, sans-serif'>Connected</font>";
}




$Name = stripslashes($Name);
$password = stripslashes($password);
$Name = mysql_real_escape_string($Name);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("avagroup", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from newform where password='$password' and Name='$Name'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1)
{ if ($Name=="leader") {
$_SESSION['login_user']=$Name; // Initializing Session
header("location: leader.php"); }
  if ($Name=="vivek") {
    $_SESSION['login_user']=$Name; // Initializing Session
    header("location: owner.php");
  }// Redirecting To Other Page
}
else
{
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}
if (isset($_POST['login_now']))
{
  header("location:checking_login.php");
}
if (isset($_POST['back']))
{
  header("location:index.php");
}
?>
