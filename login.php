<?php
session_start();

$databaseHost = 'localhost';
$databaseName = 'account';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if(isset($_REQUEST['submit']))
{
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$res = mysqli_query($mysqli, "select * from account where username='$username' and password='$password'");
$result=mysqli_fetch_array($res);
if($result)
{
	if(isset($_REQUEST["rememberMe"]) && $_REQUEST["rememberME"]==1) {
        setcookie("login","1",time()+60);
    } else {
        setcookie("login","1");
	    header("location:homePage.php");
    }
	
	
}
else
{
	header("location:index.php?err=1");
	
}
}
?>