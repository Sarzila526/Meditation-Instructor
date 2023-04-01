<?php 
	session_start();
	require('../models/userModel.php');
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$phoneNo = $_POST['phoneNo'];
	$hiredate = $_POST['hiredate'];
	$gender = $_POST['gender'];

	if($name != null && $email != null && $phoneNo != null && $gender != null)
	{
		if(strlen($password)<6 || strlen($password)>10)
		{
			$err = 'Password cannot be less than 6 characters or more than 10 characters';
			echo "<script>alert('$err'); </script>";
		}

		$isUserNameAvailable = usernameExists($username);
		if($isUserNameAvailable)
		{
			$message = 'This username is already taken.';
			echo "<script>alert('$message'); </script>";
		} 
		else
		{
			$isEmailAvailable = emailExists($email);
			if($isEmailAvailable)
			{
				$message = 'Email is already registered.';
				echo"<script>alert('$message'); </script>";
			}
			else
			{
				$status = registration($name, $email, $username, $password, $address, $phoneNo,
				                       $hiredate, $gender);
				if($status)
				{
					header('location: ../views/login.php');			
				}
				else
				{
					header('location: ../views/register.php');
				}
			}
		}
	}
	else
	{
		$message = 'Please fill out all the fields';
		echo "<script>alert('$message'); </script>";
	}
?>
