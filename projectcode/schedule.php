<!DOCTYPE html>
<html>
<head>
  <title>COURSE SCHEDULE</title>
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
	background-color: #0096FF;
	padding: 1.5%;
	text-align: center;
	font-size: 20px;
	}
	td {
	background-color: #9FBFDE;
	padding: 1.25%;
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

<div class="column2">
<br>
<fieldset>
    <legend> <b><h3> &nbsp COURSE SCHEDULE &nbsp </h3></b> 
	</legend>
<table>
  <tr>
    <th colspan="7"> <i>Beginners Weekly Class</i> </th>
  </tr>
    <tr>
    <td colspan="2"><b>ID</b></td>
	<td><b>Day / Date</b></td>
    <td><b>Time</b></td>
	<td><b>Topic</b></td>
	<td><b>Instructor ID</b></td>
	<td><b>Status</b></td>
  </tr>
  <tr>
    <td>W1</td>
	<td> </td>
	<td>Monday, Thursday</td>
	<td>6:30 - 7:30</td>
	<td>Spiritual Meditation</td>
	<td>101</td>
	<td>Active</td>
  </tr>
  <tr>
    <td>W2</td>
	<td> </td>
	<td>Sunday, Thursday</td>
	<td>8:15 - 9:15</td>
    <td>Transcendental Meditation</td>
	<td>101</td>
	<td>Active</td>
  </tr>
  <tr>
    <td>W3</td>
	<td> </td>
	<td>Wednesday, Saturday</td>
    <td>16:00 - 17:15</td>
	<td>Focused & Movement Meditation</td>
	<td>102</td>
	<td>Inactive</td>
  </tr>
  <tr>
    <td>W4</td>
	<td> </td>
	<td>Sunday, Tuesday</td>
    <td>19:00 - 20:00</td>
	<td>Progressive Relaxation</td>
	<td>104</td>
	<td>Inactive &nbsp</td>
  </tr>
  <tr>
    <td>W5</td>
	<td width="70px">Slot-1</td>
	<td rowspan="2">Friday</td>
	<td>9:30- 11:30</td>
	<td rowspan="2">Visualization Meditation</td>
	<td>105</td>
	<td>Inactive &nbsp</td>
  </tr>
   <tr>
    <td> </td>
	<td width="65px">Slot-2</td>
	<td>16:00- 18:00</td>
	<td>105</td>
	<td>Active</td>
  </tr>
  <tr> 
    <td colspan="7">  </td>
  </tr>
  
  <tr>
    <th colspan="7"> <i>Regular Mindful Class</i> </th>
  </tr>
    <tr>
  <td colspan="7"> *Regular Classes will be started soon. </td>
  </tr>
 <?php
 /*
    <tr>
    <td><b> </b></td>
    <td><b>Time</b></td>
	<td><b>Day</b></td>
	<td><b>Type</b></td>
	<td><b>Applicable For</b></td>
  </tr>
  <tr>
    <td>Slot-1</td>
    <td>7:30 - 8:00</td>
	<td>Saturday to Thursday</td>
	<td>Online</td>
	<td>All</td>
  </tr>
  <tr>
    <td>Slot-2</td>
    <td>9:45 - 10:15</td>
	<td>Saturday to Thursday</td>
	<td>Offline</td>
	<td>All</td>
  </tr>
  <tr>
    <td>Slot-3</td>
    <td>12:00 - 12:30</td>
	<td>Saturday to Thursday</td>
	<td>Online</td>
	<td>All</td>
  </tr>
  <tr>
    <td>Slot-4</td>
    <td>17:10 - 17:50</td>
	<td>Everyday</td>
	<td>Offline</td>
	<td>Old Citizen Only</td>
  </tr>
  <tr>
    <td>Slot-5</td>
    <td>18:00 - 18:30</td>
	<td>Sunday to Friday</td>
	<td>Offline</td>
	<td>Teengers Only</td>
  </tr>
  <tr>
    <td>Slot-6</td>
    <td>20:15 - 20:45</td>
	<td>Saturday to Thursday</td>
	<td>Online</td>
	<td>All</td>
  </tr>   */
?>
  <tr> 
    <td colspan="7">  </td>
  </tr> 
  
  <tr>
    <th colspan="7"> <i>Free Monthly Counseling and Yoga</i> </th>
  </tr>
  <tr>
    <td colspan="2"><b>ID</b></td>
    <td><b>Date / Day(of month)</b></td>
    <td><b>Time</b></td>
	<td><b>Topic</b></td>
	<td><b>Platform</b></td>
	<td><b>Status</b></td>
  </tr>
  <tr>
    <td colspan="2">F0</td>
    <td>1st Tuesday</td>
    <td>15.15 to 17.00</td>
	<td>Free Yoga & Counseling</td>
	<td>Online</td>
	<td>Open For All</td>
  </tr>
  <tr> 
    <td colspan="7">  </td>
  </tr>

  <tr>
    <th colspan="7"> <i>Personal Consultation</i> </th>
  </tr>
  <tr>
    <td colspan="7"> *Client will request for personal consultation. </td>
  </tr>
</table>
  <br>
  <p align="right"> <span style="color: #FF69B4"><b> * </b> </span> Online Class Platform : Microsoft Teams </p>
</fieldset>
</div>
</main>
<?php include '_footer.php';?>
</body>
</html>