<!DOCTYPE html>
<html>
<?php
$uname = "";
$er = ""; $dp = ""; 
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
          $dp = $Info->Image ;
       }
    }
?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <title> CHANGE PROFILE PICTURE</title>
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
	height: 480px; 
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

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
<div class="column2">
<fieldset>
    <legend> <b><h3> PROFILE PICTURE</h3></b>
	</legend>
    <i class="fas fa-user-alt" style="font-size:65px;"></i> 
	<br> <br>
    <input type="file" name="fileToUpload" id="fileToUpload"> <br>
	<span class="underline"> ______________________________ </span> 
	<br> <br> 
	<label for="uname"> <?php echo $er?> </label> <br>
	<input type="submit" name="submit" value="Upload Image" > 
	<br> <br>
</fieldset>
</form>
</div>
</main>

<?php
$target_dir = "dp/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"]) && isset($_FILES["fileToUpload"])) 
{
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) 
  {
    $uploadOk = 1;
	if(file_exists($target_file))              
    {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    else
	{
     if ($_FILES["fileToUpload"]["size"] > 5000000) 
	 {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
     }
      else
	  {
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) 
		{
            echo "Sorry, only JPG, JPEG & PNG files are allowed.";
            $uploadOk = 0;
        }
        else
		{
          if ($uploadOk == 0) 
		  {
             echo "Sorry, your file was not uploaded.";
          } 
		  else 
		  {
             if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
			 {
                $dp = "dp/".htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
                require("user.class.php");
                $user = new User('data.json');
                $user-> updateUser($uname,'Image',$dp);
                header("location:view.php");
                $er =  "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
              } 
			  else 
			  {
                echo "Sorry, there was an error uploading your file.";
              }
          }
        }
      }
    }
  }
    else 
    {
      echo "File is not an image.";
      $uploadOk = 0;
    }
 }
?>
<?php include '_footer.php';?>
</body>
</html>