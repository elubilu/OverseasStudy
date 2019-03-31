<?php 

$serverName = "localhost"; //host name
$dbUserName = "root"; //Database Username
$dbPassword = ""; //Database Password
$dbName = "study"; //Database Name

$db = new mysqli($serverName, $dbUserName, $dbPassword, $dbName); //Database Connectons 

	if($db){

		//Geting input
		$firstName = mysqli_real_escape_string($db, $_POST['firstName']);
		$lastName = mysqli_real_escape_string($db, $_POST['lastName']);
		$userName = mysqli_real_escape_string($db, $_POST['userName']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$confirm = mysqli_real_escape_string($db, $_POST['conPassword']);

		 if($password == $confirm){ //checking password
			$password= md5($password);
			$check= "SELECT * from user_info where email = '$email'";
			if ($db->query($check) === TRUE) {
			//inerting data to database
			$sql ="INSERT  INTO user_info (firstName, lastName, userName, email, password) values('$firstName', '$lastName',' $userName','$email', '$password')"; 
			if ($db->query($sql) === TRUE) {
			    header('Location: login.php'); 
			} 
			else {
			    echo "Error: " . $sql . "<br>" . $db->error;
			}

		}
		else{
			// $message = 'Please use another email';
			// if ($error == false) {
		    //$result='<div class="alert alert-danger">Please try with new mail</div>';
			header('Location: signup.php'); 
		}
	}
		else{
			
		}
	}	
	else {
		echo "Database Not connected";
	}

?>