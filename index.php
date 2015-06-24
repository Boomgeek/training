<?php
session_start();
if(!isset($_SESSION["empID"]) || !isset($_SESSION["empUser"]) || !isset($_SESSION["empPassword"]) || !isset($_SESSION["empRole"]))
{
	header("location:signin.php");
}
else
{
	include("./php/connection.php");
	$con = connection();
	$confrimSession = "select * from emp where emp_user_name='".$_SESSION["empUser"]."' AND emp_password='".$_SESSION["empPassword"]."' AND emp_id='".$_SESSION["empID"]."'";
	if($result = mysqli_query($con,$confrimSession))
	{
		if(mysqli_num_rows($result))
		{
			include("./main.php");
		}
		else
		{
			header("location:signin.php");
		}
	}
	else
	{
		header("location:signin.php");
	}
}
?>