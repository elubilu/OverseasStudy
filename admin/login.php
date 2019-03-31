<?php

$serverName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "study";
$db = new mysqli($serverName, $dbUserName, $dbPassword, $dbName);

	if($db){
		//Geting user data
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	//$password= md5($password); //encrypt password

	//checking email & password
	 //print_r($password); exit();
	$sql =$db->query("SELECT * FROM admin_info WHERE email = '$email' AND password = '$password'");
	//print_r($sql); exit();
		if ($sql->num_rows > 0) {
		    header('Location: home.php'); 
		} 
		else{
		//print_r($email); exit();
		header('Location: index.php'); 
		}

	}
		
	else {
		echo "Database Not connected";
	}





?>