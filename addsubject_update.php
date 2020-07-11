<?php

	require('sms_config.php');

	$semester = $_POST['sem_select'];
	//echo $semester;
	$subject1 = $_POST['sub1_name'];
	$marks1 = $_POST['sub1_marks'];
	$subject2 = $_POST['sub2_name'];
	$marks2 = $_POST['sub2_marks'];
	$subject3 = $_POST['sub3_name'];
	$marks3 = $_POST['sub3_marks'];
	$subject4 = $_POST['sub4_name'];
	$marks4 = $_POST['sub4_marks'];
	$id = $_POST['id'];

	$update = "UPDATE `sms_subjects` SET `semester`='$semester',`subject1`='$subject1',`marks1`='$marks1',`subject2`='$subject2',`marks2`='$marks2',`subject3`='$subject3',`marks3`='$marks3',`subject4`='$subject4',`marks4`='$marks4' WHERE id='$id'";

	mysqli_query($conn,$update);

	header("LOCATION:admin_subject.php");






?>