<?php 
	$host_name = "localhost";
	$user_name = "root";
	$password  = "";
	$database  = "employee";

	$con = mysqli_connect($host_name, $user_name, $password);
	mysqli_select_db($con,$database); 
?>