<?php


require('sms_config.php');

$semester = $_POST['sem_select'];
$subject1 = $_POST['sub1_name'];
$marks1 = $_POST['sub1_marks'];
$subject2 = $_POST['sub2_name'];
$marks2 = $_POST['sub2_marks'];
$subject3 = $_POST['sub3_name'];
$marks3 = $_POST['sub3_marks'];
$subject4 = $_POST['sub4_name'];
$marks4 = $_POST['sub4_marks'];


$insert = "INSERT INTO `sms_subjects`(`semester`, `subject1`, `marks1`, `subject2`, `marks2`, `subject3`, `marks3`, `subject4`, `marks4`) VALUES 
('$semester', '$subject1', '$marks1', '$subject2', '$marks2', '$subject3', '$marks3', '$subject4', '$marks4')";
$query = mysqli_query($conn,$insert);
header("LOCATION:admin_subject.php");




?>