<?php
	require('sms_config.php');
	$student_id = $_POST['student_id'];
	$gainedmarks1 = $_POST['gainedmarks1'];
	$gainedmarks2 = $_POST['gainedmarks2'];
	$gainedmarks3 = $_POST['gainedmarks3'];
	$gainedmarks4 = $_POST['gainedmarks4'];
	$gainedtotal = $_POST['gainedtotal'];
	$semesster = $_POST['semesster'];
	$percentage = $_POST['percentage'];
	$id = $_POST['hidden_id'];

$update = "UPDATE `sms_result` SET `sub1marks`='$gainedmarks1',`sub2marks`='$gainedmarks2',`sub3marks`='$gainedmarks3',`sub4marks`='$gainedmarks4',`total`='$gainedtotal',`percentage`='$percentage' WHERE id='$id'";

$query = mysqli_query($conn,$update);
header("LOCATION:teacher_upload_result.php");



?>