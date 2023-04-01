<?php
session_start();
if(isset( $_SESSION['username']))
{
	session_destroy();          //Log-Out
	header("location:login.php");
}
else
{
	header("location:login.php");
}
?>