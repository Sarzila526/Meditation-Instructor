<!DOCTYPE html>
<html>
<?php
$uname =""; 
session_start();
if(isset( $_SESSION['username']))
{
    $uname = $_SESSION['username'];
}
if(empty($uname))
{
	header("location:login.php");
}
?>
<head>
  <title>WELCOME</title>
    <style>
   .column {
	float: left;
    width: 28%;
    padding: 1%;
    height: 400px; 
	}
   .column2 { 
	float: left;
	width: 68%;
	padding: 1%;
	height: 400px; 
	}
	h1 {
	font-size: 50px;
	padding: 4%;
	background-color: #FADADD;
	}
	h4 {
	font-size: 22px;
	}
	ul {
	line-height: 2.2;
	}
	li a {
	display: block;
	text-decoration: none;
	overflow: hidden;
	}
	li a:hover {
    color: #0000F8;
    }
	div {
    display: block;
	margin-bottom: auto;
	margin-left: auto;
	margin-right: auto;
	}
	</style>
</head>

<body>
<?php include '_headerL.php';?>  
<main> 
    <br> <br>
<div class="column">
<h4><b> Account </b> <br>
<span class="underline"> ___________________________ </span> <br>
</h4>
<ul>
  <li><a href="dashboard.php"> Dashboard </a></li> <br>
  <li><a href="view.php"> Instructor Profile </a></li> <br>
  <li><a href="appointment.php"> See Appointment List </a></li> <br>
  <li><a href="client.php"> See Client's Details </a></li> <br>
  <li><a href="#"> Salary Info </a></li> <br>
  <li><a href="schedule.php"> Course Schedule </a></li> <br>
  <li><a href="change.php"> Change Password </a></li> <br>   
  <li><a href="logout.php"> Logout </a></li> <br>  
</ul>  
</div>

<div class="column2">
   <h1> <i> WELCOME </i> 
   <a href="view.php" style="color:#DA73D6"> <?php echo $uname?> ! </a>
   </h1>
   <br> 
</div>
</main>
<?php include '_footer.php';?>
</body>
</html>