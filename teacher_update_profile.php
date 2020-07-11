<?php
	require('sms_config.php');
	$name = $_POST['name'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$id = $_POST['id'];

	$update = "UPDATE `sms_teacher_data` SET `name`='$name',`password`='$password',`email`='$email',`contact`='$contact' WHERE id='$id'";
	$query = mysqli_query($conn,$update);
	header("LOCATION:teacher.php");


?>