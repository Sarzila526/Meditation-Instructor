<?php 
	require('db.php');

	function login($username, $password)
	{
		$con = getConnection();
		$sql = "select * from instructors where username='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		if(mysqli_num_rows($result))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function registration($name, $email, $username, $password, $address, $phoneNo, $hiredate, $gender)
	{
		$con = getConnection();
        $sql = "insert into instructors values( NULL, '$name', '$email', '$username', '$password', 
		'$address', '$phoneNo', '$hiredate', '$gender', ' ')";
		if(mysqli_query($con, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function usernameExists($username)
	{
		$con = getConnection();
		$sql = "select * from instructors where username='{$username}'";
		$result = mysqli_query($con, $sql);
		if(mysqli_num_rows($result))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function emailExists($email)
	{
		$con = getConnection();
		$sql = "select * from instructors where email='{$email}'";
		$result = mysqli_query($con, $sql);
		if(mysqli_num_rows($result))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

?>