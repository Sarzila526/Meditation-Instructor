<!DOCTYPE 2html>
<html>
<head>
  <title>INSTRUCTOR INFORMATION</title>
</head>

<body>
<main>      
<?php
 $data = array 
        (
          "User_Name" =>$_POST['un'],
          "Password" =>$_POST['pass'],
		  "Name" =>$_POST['name'],
		  "Id" =>$_POST['id'],
          "Email" =>$_POST['em'],
		  "Phone_No" =>$_POST['pn'],
		  "Address" =>$_POST['addrs'],
          "Hire_Date" =>$_POST['hire'],
          "Image" => "images/images.png" 
        );
           require("user.class.php");
           $user = new User('data.json');
           $user-> insertNewUser($data);
?>	

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data"> </form> 
</main>
</body>
</html>
