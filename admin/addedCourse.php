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
		$ielts = mysqli_real_escape_string($db, $_POST['ielts']);
		$cgpa = mysqli_real_escape_string($db, $_POST['cgpa']);
		$gre = mysqli_real_escape_string($db, $_POST['gre']);
		$toefl = mysqli_real_escape_string($db, $_POST['toefl']);
		$courseDuration = mysqli_real_escape_string($db, $_POST['courseDuration']);
		$courseFees = mysqli_real_escape_string($db, $_POST['courseFees']);
		// $date = new DateTime(null, new DateTimeZone('Pacific/Nauru'));
		// $updatedAt = $date->format('Y-m-d H:i:sP');
		
		//$courseImage = $_FILES['courseImage']['name'];

			$sql ="INSERT  INTO course_info (universityName, courseFees, courseDuration, country, toefl,gre,ielts,fieldOfStudy,programType,cgpa ) values('$universityName', '$courseFees',' $courseDuration','$country', '$toefl', '$gre','$ielts', '$fieldOfStudy', '$programType','$cgpa')"; 
		//$target = 'images/'.basename($courseImage);

			//if(move_uploaded_file($courseImage, $target)){
			if ($db->query($sql) === TRUE) {
				//session_start();
				// if ($db->query($courses) > 0) {
				//$_SESSION['courses']=$courses;
				//$url = "allCourse.php?courses=".$courses;
			    header('Location: home.php'); 
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