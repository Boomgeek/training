<?php 
$user = $_REQUEST['user'];
$password = $_REQUEST['password'];
$mode = $_REQUEST['mode'];

if(empty($user)){
	echo "Error: username was empty.";
	exit();
}
if(empty($password)){
	echo "Error: password was empty.";
	exit();
}
if(empty($mode)){
	echo "Error: mode was empty.";
	exit();
}

if($mode == "signin"){
	signin($user,$password);
}

//function zone
function signin($user,$password)
{
	include("./connection.php");
	$con = connection();
	// protect sqli 
	$user = mysqli_real_escape_string($con,$user);
	$password = mysqli_real_escape_string($con,$password);

	$checkSignin = "select * from emp where emp_user_name='".$user."' AND emp_password='".$password."'";
	if($result = mysqli_query($con,$checkSignin))
	{
		if(mysqli_num_rows($result))
		{
			$userData = mysqli_fetch_array($result,MYSQLI_NUM);
			$empID = $userData[0];
			$empUser = $userData[5];
			$empPassword = $userData[6];
			$empRole = $userData[7];
			//print_r($userData);
			session_start();
			$_SESSION["empID"] = $empID;
			$_SESSION["empUser"] = $empUser;
			$_SESSION["empPassword"] = $empPassword;
			$_SESSION["empRole"] = $empRole;
			session_write_close();
			echo "Success:Signin successful.";
		}
		else
		{
			echo "Error: Username or Password Incorrect!";
		}
	}
	else
	{
		printf("Error:%s", mysqli_error($con));
		exit();
	}
}
?>