<?php 

	$serverName = "localhost"; //host name
			$dbUserName = "root"; //Database Username
			$dbPassword = ""; //Database Password
			$dbName = "study"; //Database Name

			$db = new mysqli($serverName, $dbUserName, $dbPassword, $dbName); //Database Connectons 
			$courseId = intval($_GET['id']);

			$courses = "DELETE FROM course_info WHERE universityId = '$courseId' ";
			if($db->query($courses) === TRUE){
				header('Location: manageCourse.php');
			}
?>