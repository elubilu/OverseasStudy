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
	$password= md5($password); //encrypt password

	//checking email & password

	$sql ="SELECT * FROM user_info WHERE email = '$email' AND password = '$password'";

		if ($db->query($sql) > 0) {
		    header('Location: studentApplication.php'); 
		} 
		else{
		//print_r($email); exit();
		header('Location: login.php'); 
		}

	}
		
	else {
		echo "Database Not connected";
	}





?>