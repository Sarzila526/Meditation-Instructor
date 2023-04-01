<!DOCTYPE html>
<html>
<?php
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
            $em = $Info-> Email ;
            $pn = $Info-> Phone_No ;
			$addrs = $Info-> Address;
            $hire = $Info-> Hire_Date ;
			$dp = $Info-> Image ;
          }
       }
	if(isset($_POST['submit']))
	{
        require("user.class.php");
        $user = new User('data.json');
        $user->updateUser($uname,'Name',$_POST['name']);
        $user->updateUser($uname,'Email',$_POST['em']);
		$user->updateUser($uname,'Phone_No',$_POST['pn']);
		$user->updateUser($uname,'Address',$_POST['addrs']);
        $user->updateUser($uname,'Hire_Date',$_POST['hire']);
        header("location:view.php");
   }        
?>

<head>
  <title>EDIT PROFILE</title>
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
	height: 580px; 
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
    <br> <br> <br>
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

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<div class="column2">
<fieldset>
    <legend> <b><h3> EDIT PROFILE </h3></b>
	</legend>
    <label for="name"> Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:   
    <input type="text" name="name" value = "<?php echo $name?>"> </label> <br>  
	<span class="underline"> _____________________________________________ </span> <br><br>	
	<label for="em"> Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : 
	<input type="text" name="em" value = "<?php echo $em?>"> </label> <br>
	<span class="underline"> _____________________________________________ </span> <br><br>	
	<label for="pn"> Phone No &nbsp &nbsp &nbsp &nbsp &nbsp : 
	<input type="text" name="pn" value = "<?php echo $pn?>"> </label> <br>
	<span class="underline"> _____________________________________________ </span> <br><br>	
	<label for="addrs"> Address &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : 
	<input type="text" name="addrs" value = "<?php echo $addrs?>"> </label> <br>
	<span class="underline"> _____________________________________________ </span> <br><br>	
    <label for="hire"> Hire Date &nbsp &nbsp &nbsp &nbsp &nbsp :  
	<input type="date" name="hire" value = "<?php echo $hire?>"> </label> <br>
	<span class="underline"> _____________________________________________ </span> <br><br>
    <input type="submit" name="submit" value="Submit">
	<br> <br>
</fieldset>
</form>
</div>
</main>
<?php include '_footer.php';?>
</body>
</html>