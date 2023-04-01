<!DOCTYPE html>
<html>
<?php
$id = $cid = $aptid = $date = $time = ""; 
$uanme = "";

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
		  "Id" =>$_POST['id'],
		  "C_Id" =>$_POST['cid'],
		  "apt_Id" =>$_POST['aptid'],
          "Date_" =>$_POST['date'],
		  "Time_" =>$_POST['time'],
        );
       require("user.class.php");
       $user = new User('data3.json');
       $user-> insertNewUser($data);
}
      $info = file_get_contents("data3.json");
      $info = json_decode($info);
      foreach ($info as $Info) 
	  {
          $ID = $Info-> Id;
          if($ID == $id)
		  {
			$cid = $Info-> C_Id;
            $aptid = $Info-> apt_Id;
            $date = $Info-> Date_;
			$time = $Info-> Time_;
          }
       }
?>

<head>
  <title>APPOINTMENT LIST</title>
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
	height: 1120px; 
	}
	h3 {
	font-size: 25px;
	}
	h4 {
	font-size: 20px;
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
	legend {
	margin-left: 35%;
    }
	table {
	width: 100%;
	border-collapse: collapse;
	}
	th {
    background-color: #9FBFDE;
	padding: 1.5%;
	text-align: center;
	font-size: 20px;
	}
	td {
	padding: 1.4%;
	text-align: center;
	}
	tr:hover {
	background-color:#7DF9FF;
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

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
<div class="column2">
<br>
<fieldset>
    <legend> <b><h3> &nbsp APPOINTMENT LIST &nbsp </h3></b> 
	</legend>
<table>
  <tr>
	<th><b>Appointment ID</b></th>
    <th><b>Date</b></th>
	<th><b>Time</b></th>
	<th><b>Client ID</b></th>
	<th><b>Instructor ID</b></th>
  </tr>
  <?php   
                        /*foreach($aptid as $row)					  
                          {  
                               echo '<tr>
                               <td>'.$row['apt_ID'].'</td>
                               <td>'.$row['Date_'].'</td>
                               <td>'.$row['Time_'].'</td>  
                               <td>'.$row['C_ID'].'</td>
							   <td>'.$row['ID'].'</td>
                               </tr>';  
                          }*/ 
   ?> 
  <tr>
    <td>500</td>
	<td>16-03-22</td>
	<td>18:30 - 19:30</td>
	<td>1</td>
	<td>101</td>
  </tr>
  <tr>
    <td>510</td>
	<td>16-03-22</td>
	<td>19:15 - 19:45</td>
    <td>2</td>
	<td>102</td>
  </tr>
</table>
</fieldset>
</div> </form>
</main>
<?php include '_footer.php';?>
</body>
</html>