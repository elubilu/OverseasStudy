<?php 

		$serverName = "localhost"; //host name
		$dbUserName = "root"; //Database Username
		$dbPassword = ""; //Database Password
		$dbName = "study"; //Database Name
		//$courseId = intval($_GET['id']);

		$db = new mysqli($serverName, $dbUserName, $dbPassword, $dbName); //Database Connectons intval
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
		$courseId = mysqli_real_escape_string($db, $_POST['courseId']);

		//print_r($universityName); exit();
		
		//$courseImage = $_FILES['courseImage']['name'];

			$update ="UPDATE course_info SET universityName='$universityName', courseFees='$courseFees' , courseDuration ='$courseDuration' , country='$country' , toefl='$toefl',gre='$gre' ,ielts='$ielts',fieldOfStudy='$fieldOfStudy' ,programType = '$programType',cgpa='$cgpa' WHERE universityId='$courseId' "; 
			
			
			if($db->query($update) == TRUE){
				//print_r("Hello World"); exit();
				header('Location: manageCourse.php');
			}
			else{
				//print_r($courseId); exit();
				header('Location: editCourse.php?id=', $courseId);
			}
		
?>