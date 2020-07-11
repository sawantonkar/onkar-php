<?php
require('sms_config.php');
$id=$_GET['d_id'];
//echo $id;

$delete = "DELETE FROM `sms_teacher_data` WHERE id='$id'";
mysqli_query($conn,$delete);
header("LOCATION:admin_teacher.php");





?>