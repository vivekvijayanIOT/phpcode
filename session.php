<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("avagroup", $connection);
session_start();

$user_check=$_SESSION['login_user'];

$ses_sql=mysql_query("select sno,Name from newform where Name='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['Name'];
$id=$row['sno'];

$ses_sq=mysql_query("select count(additional)'e' from book where sid ='$id'");
$wo = mysql_fetch_assoc($ses_sq);
$w=$wo['e'];


if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>
