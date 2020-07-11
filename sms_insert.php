<?php

require('sms_config.php');

$name = $_POST['username'];
//echo $name;
$password = $_POST['password'];
//echo $password;
$email = $_POST['email'];
//echo $email;
$contact = $_POST['contact'];
//echo $contact;
$semester = $_POST['semester'];
$profession = $_POST['profession'];
//echo $profession;
$status_id = 'Deactive';
$profile_pic = 'defaulimg.jpg';

if(isset($_POST['submit'])){
	if($profession == 'teacher'){
		$insert = "INSERT INTO `sms_teacher_data`(`name`, `password`, `email`, `contact`,`semester`,`profession`,`teacher_status_id`,`profile_pic` ) VALUES ('$name','teacher123','$email','$contact','$semester','$profession','$status_id','$profile_pic') ";
		mysqli_query($conn,$insert);
		header("LOCATION:sms_login.php");

	}
	else if($profession == 'student'){
		//echo 'student';
		$insert = "INSERT INTO `sms_student_data`(`name`, `password`, `email`, `contact`,`semester`,`profession`,`student_status_id`,`profile_pic` ) VALUES ('$name','student123','$email','$contact','$semester','$profession','$status_id','$profile_pic') ";
		mysqli_query($conn,$insert);
		header("LOCATION:sms_login.php");

	}
	else{

	}

	

}









?>