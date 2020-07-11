<?php
require('sms_config.php');

$student_id = $_POST['student_id'];
//echo $student_select;
$select = "SELECT * FROM `sms_student_data` WHERE id='$student_id' ";
$query1 = mysqli_query($conn,$select);
$res1 = mysqli_fetch_assoc($query1);
$student_name = $res1['name'];
$student_mail = $res1['email'];
$semesster = $_POST['semesster'];
$gainedmarks1 = $_POST['gainedmarks1'];
$gainedmarks2 = $_POST['gainedmarks2'];
$gainedmarks3 = $_POST['gainedmarks3'];
$gainedmarks4 = $_POST['gainedmarks4'];
$gainedtotal = $_POST['gainedtotal'];
$percentage = $_POST['percentage'];
//echo $percentage;

$insert = "INSERT INTO `sms_result`(`student_name`,`email`, `semester`, `sub1marks`, `sub2marks`, `sub3marks`, `sub4marks`, `total`, `percentage`) 
				VALUES ('$student_name','$student_mail','$semesster','$gainedmarks1','$gainedmarks2','$gainedmarks3','$gainedmarks4','$gainedtotal','$percentage')";

$query = mysqli_query($conn,$insert);
header("LOCATION:teacher_upload_result.php");





?>