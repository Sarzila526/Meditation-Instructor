<!DOCTYPE html>
<html>
<?php
$name = $id = $em = $pn = $addrs = $hire = $dp = ""; 
$uanme = "";

session_start();
if(isset( $_SESSION['username']))
{
	$uname = $_SESSION['username'];
}
if(empty($uname))
{
    header("location:login.php");
}
      $info = file_get_contents("data.json");
      $info = json_decode($info);
      foreach ($info as $Info) 
	  {
          $un = $Info-> User_Name;
          if($un == $uname)
		  {
            $name = $Info-> Name;
			$id = $Info-> Id;
            $em = $Info-> Email;
            $pn = $Info-> Phone_No;
			$addrs = $Info-> Address;
            $hire =$Info-> Hire_Date;
			$dp = $Info-> Image;
          }
       }
?>

<head>
  <title>VIEW PROFILE</title>
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
	height: 650px; 
	}
	h3 {
	font-size: 25px;
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

<form action="edit.php" method="post">
<div class="column2">
<fieldset style="background-color: #E6E6FA">
    <legend> <b><h3> PROFILE </h3></b>
	</legend>
	<div style="float:right">
    <img src="<?php echo $dp?>" width="240" height="280"> <br>
    <a href ="profile_pic.php"> Change </a> <br> <br>
	</div>
 <?php
      echo "Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  : &nbsp &nbsp &nbsp" . $name; echo "<br>";
	  echo " _____________________________________________ <br> <br>";
	  echo "ID &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : &nbsp &nbsp &nbsp" . $id; echo "<br>";
	  echo " _____________________________________________ <br> <br>";
	  echo "Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : &nbsp &nbsp &nbsp" . $em; echo "<br>";
	  echo " _____________________________________________ <br> <br>";
	  echo "Phone No &nbsp &nbsp &nbsp : &nbsp &nbsp &nbsp" . $pn; echo "<br>";
	  echo " _____________________________________________ <br> <br>";
      echo "Address &nbsp &nbsp &nbsp &nbsp &nbsp : &nbsp &nbsp &nbsp" . $addrs; echo "<br>";
	  echo " _____________________________________________ <br> <br>";
      echo "Hire Date &nbsp &nbsp &nbsp &nbsp : &nbsp &nbsp  " . $hire; echo "<br>";
	  echo " _______________________________________________________________________________________________________________________ <br> <br> <br>";
 ?>
   <a href="edit.php"> Edit Profile </a> 
   <br> <br>
</fieldset>
</form>
</div>
</main>
<?php include '_footer.php';?>
</body>
</html>