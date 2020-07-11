<?php

	require('sms_config.php');
	$id = $_POST['id'];
	//echo $id;
	$semester = $_POST['semester'];
	//echo $semester;
	$update = "UPDATE `sms_semester` SET `semester`='$semester' WHERE id='$id'";
	$query = mysqli_query($conn,$update);
	header("LOCATION:admin_semester.php");




?>