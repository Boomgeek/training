<?php 
function connection()
{
	//Start edit your database information
	$host = "localhost";
	$user = "root";
	$pass = "1234";
	$dbname = "inded_training";
	//End edit your database information

	$con = mysqli_connect($host,$user,$pass);
	// Check connection
	if (mysqli_connect_errno())
	{
		printf("Connect failed: %s", mysqli_connect_error());
    	exit();
	}
	else
	{
		mysqli_query($con,"SET NAMES UTF8");		// if remove inline you can't insert utf8
		mysqli_select_db($con,$dbname);
	}
	return $con;
}
?>