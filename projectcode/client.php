<!DOCTYPE html>
<html>
<?php
$name = $cid = $em = $pn = $addrs = $aptid = ""; 

session_start();
if(isset( $_SESSION['username']))
{
	$uname = $_SESSION['username'];
}
if(empty($uname))
{
    header("location:login.php");
	
	$data = array 
        (
		  "Name" =>$_POST['name'],
		  "C_Id" =>$_POST['cid'],
		  "apt_Id" =>$_POST['aptid'],
		  "Phone_No_" =>$_POST['pn'],
          "Address" =>$_POST['addrs'],
		  "Email" =>$_POST['em'],
    
        );
       require("user.class.php");
       $user = new User('data3.json');
       $user-> insertNewUser($data);
}
      $info = file_get_contents("data2.json");
      $info = json_decode($info);
      foreach ($info as $Info) 
	  {
          $aptId = $Info-> apt_Id;   /*$ID = $Info-> Id;    if($ID == $id)
          if($aptId == $aptid) */
		  {
            $name = $Info-> Name;
			$cid = $Info-> C_Id;
            $pn = $Info-> Phone_No;
			$addrs = $Info-> Address;
			$em = $Info-> Email;
          }
      }
?>

<head>
  <title>CLIENTS' DETAILS</title>
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
	height: 1180px; 
	}
	h3 {
	font-size: 25px;
	background-color: #A5A5F8;
	}
	h4 {
	font-size: 22px;
	}
	h5 {
	font-size: 20px;
	}
	ul {
	line-height: 2.2;
	}
	p {
	line-height: 1.67;
	}
	legend {
	margin-left: 40%;
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
    <legend> <b><h3> &nbsp Clients' Details &nbsp </h3></b>
	</legend>
	<h5> Appointment No : &nbsp 500<?php echo $aptid ?> </h5> 
	<p> Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  : &nbsp &nbsp &nbsp Nova <br>
	    Client ID &nbsp &nbsp &nbsp : &nbsp &nbsp &nbsp 1 <br>
	    Phone No &nbsp &nbsp &nbsp : &nbsp &nbsp &nbsp 01984237651 <br>
	    Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : &nbsp &nbsp &nbsp nova09@gmail.com <br>
        Address &nbsp &nbsp &nbsp &nbsp : &nbsp &nbsp &nbsp 20/1, Samshur Rahman Road, Khulna </p>
	<p><span class="underline"> _______________________________________________________________________________________________________________________ </span></p> <br>
	<h5> Appointment No : &nbsp 510<?php echo $aptid ?> </h5> 
	<p> Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  : &nbsp &nbsp &nbsp Mahmud Asef <br>
	    Client ID &nbsp &nbsp &nbsp : &nbsp &nbsp &nbsp 2 <br>
	    Phone No &nbsp &nbsp &nbsp : &nbsp &nbsp &nbsp 01657223309 <br>
	    Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : &nbsp &nbsp &nbsp asef88@yahoo.com <br>
        Address &nbsp &nbsp &nbsp &nbsp : &nbsp &nbsp &nbsp 22/1, Mohammadpur, Dhaka </p>
	<p><span class="underline"> _______________________________________________________________________________________________________________________ </span></p> <br>

	<h5> Appointment No : &nbsp 520<?php echo $aptid ?> </h5> 
	<?php 
      echo "Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  : &nbsp &nbsp &nbsp" . $name; echo "<br>";
	  echo "Client ID &nbsp &nbsp &nbsp : &nbsp &nbsp &nbsp " . $cid; echo "<br>";
	  echo "Phone No &nbsp &nbsp &nbsp : &nbsp &nbsp &nbsp" . $pn; echo "<br>";
	  echo "Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : &nbsp &nbsp &nbsp" . $em; echo "<br>";
      echo "Address &nbsp &nbsp &nbsp &nbsp : &nbsp &nbsp &nbsp" . $addrs; echo "<br>";
	  echo " _______________________________________________________________________________________________________________________ <br> <br> ";
    ?>
</fieldset>
</form>
</div>
</main>
<?php include '_footer.php';?>
</body>
</html>