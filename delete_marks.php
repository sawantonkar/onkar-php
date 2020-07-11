<?php

require('sms_config.php');
$id = $_GET['d_id'];
$delete = "DELETE FROM `sms_result` WHERE id='$id'";
$query = mysqli_query($conn,$delete);
header("LOCATION:teacher_upload_result.php");



?>