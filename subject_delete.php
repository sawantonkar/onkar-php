<?php

require('sms_config.php');
$id = $_GET['d_id'];
$delete = "DELETE FROM `sms_subjects` WHERE id='$id'";
mysqli_query($conn,$delete);
header("LOCATION:admin_subject.php");








?>