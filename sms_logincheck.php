<?php
session_start();

require('sms_config.php');


if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$profession = $_POST['profession'];
	//echo $username;
	//echo $password;
	if($profession == 'teacher'){
	$select = "SELECT * FROM `sms_teacher_data` WHERE name = '$username' && password = 'teacher123' && teacher_status_id='Active'";
	$query = mysqli_query($conn,$select);
	$res = mysqli_fetch_assoc($query);
	//print_r($res);
	$teacher_id = $res['id'];
	$_SESSION['teacher_unique_id'] = $teacher_id;
	$row = mysqli_num_rows($query);
	//echo $row;
		if($row > 0){
			$_SESSION['teacher'] = $username;
			$_SESSION['teacher_password'] = $password;
			//$_SESSION['teacher_id'] = $a;
			header("LOCATION:teacher.php");
			
		}
		else{
			$msg1 = "**Invalid username or password**";
			header("LOCATION:sms_login.php?msg1=$msg1");
		}
	}else if($profession == 'student'){
		$select = "SELECT * FROM `sms_student_data` WHERE name = '$username' && password = 'student123' && student_status_id='Active'";
				$query = mysqli_query($conn,$select);
				$res = mysqli_fetch_assoc($query);
				//print_r($res);
				$student_id = $res['id'];
				$_SESSION['student_unique_id'] = $student_id;
				$row = mysqli_num_rows($query);
				//echo $row;
					if($row > 0){
						$_SESSION['student'] = $username;
						header("LOCATION:student.php");
						
					}
					else{
						$msg2 = "**Invalid username or password**";
						header("LOCATION:sms_login.php?msg2=$msg2");
					}
				
	}else if($profession == 'admin'){
		$select = "SELECT * FROM `sms_admin_data` WHERE name = 'admin' && password = 'admin123'";
				$query = mysqli_query($conn,$select);
				$res = mysqli_fetch_assoc($query);
				//print_r($res);
				$password = $_POST['password'];
				$pwd = $res['password'];
				$row = mysqli_num_rows($query);
				//echo $row;
					if($row > 0 && $password == $pwd){
						$_SESSION['admin'] = $username;
						header("LOCATION:admin.php");
						
					}
					else{
						//echo "Invalid username or password";
						$msg3 = "**Invalid username or password**";
						header("LOCATION:sms_login.php?msg3=$msg3");
					}
				
	}else{

		header("LOCATION:sms_login.php");
		
	}

}

//$profession = $_POST['profession'];
//echo $profession;



?>