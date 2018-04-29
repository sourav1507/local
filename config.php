<?php
	
	$dbhost='localhost';
	$dbuser='root';
	$password='';
	$db="demo";
	$conn=mysqli_connect($dbhost,$dbuser,$password,$db);
	if(!$conn)
	{
		die('could not connect '.mysql_error());
	}
	
?>