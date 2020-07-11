<?php

require('sms_config.php');
$id = $_GET['d_id'];
//echo $id;
$delete = "DELETE FROM `sms_semester` WHERE id='$id'";
$query = mysqli_query($conn,$delete);
header("LOCATION:admin_semester.php");



?>