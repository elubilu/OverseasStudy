<?php 

$serverName = "localhost"; //host name
$dbUserName = "root"; //Database Username
$dbPassword = ""; //Database Password
$dbName = "study"; //Database Name

$db = new mysqli($serverName, $dbUserName, $dbPassword, $dbName); //Database Connectons 

	if($db){

		//Geting input
		$universityName = mysqli_real_escape_string($db, $_POST['universityName']);
		$country = mysqli_real_escape_string($db, $_POST['country']);
		$programType = mysqli_real_escape_string($db, $_POST['programType']);
		$fieldOfStudy = mysqli_real_escape_string($db, $_POST['fieldOfStudy']);
		$studentIelts = mysqli_real_escape_string($db, $_POST['studentIelts']);
		$studentCgpa = mysqli_real_escape_string($db, $_POST['studentCgpa']);
		$studentGre = mysqli_real_escape_string($db, $_POST['studentGre']);
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$lastInstitution = mysqli_real_escape_string($db, $_POST['lastInstitution']);
		$cgpaScale = mysqli_real_escape_string($db, $_POST['cgpaScale']);
		$lastDegree = mysqli_real_escape_string($db, $_POST['lastDegree']);
		// $date = new DateTime(null, new DateTimeZone('Pacific/Nauru'));
		// $updatedAt = $date->format('Y-m-d H:i:sP');
		
		//$courseImage = $_FILES['courseImage']['name'];

			$sql ="INSERT  INTO student_info (universityName, name, email, country, lastInstitution,studentGre,studentIelts,fieldOfStudy,programType,studentCgpa,lastDegree,cgpaScale ) values('$universityName', '$name',' $email','$country', '$lastInstitution', '$studentGre','$studentIelts', '$fieldOfStudy', '$programType','$studentCgpa','$lastDegree','$cgpaScale' )"; 
		//$target = 'images/'.basename($courseImage);

			//if(move_uploaded_file($courseImage, $target)){
			if ($db->query($sql) === TRUE) {
				//session_start();
				// if ($db->query($courses) > 0) {
				//$_SESSION['courses']=$courses;
				//$url = "allCourse.php?courses=".$courses;
			    header('Location: index.php'); 
				//}
			} 
		//}
			else {
			    echo "Error: " . $sql . "<br>" . $db->error;
			}

	}

	else {
		echo "Database Not connected";
	}

?>