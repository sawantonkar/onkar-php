<?php
require("sms_config.php");
$semester = $_POST['semester'];
//echo $semester;
$insert = "INSERT INTO `sms_semester`(`semester`) VALUES ('$semester')";
$query = mysqli_query($conn,$insert);
header("LOCATION:admin_semester.php");







?>