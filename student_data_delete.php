<?php
require('sms_config.php');
$id=$_GET['d_id'];
//echo $id;

$delete = "DELETE FROM `sms_student_data` WHERE id='$id'";
mysqli_query($conn,$delete);
header("LOCATION:admin_student.php");





?>