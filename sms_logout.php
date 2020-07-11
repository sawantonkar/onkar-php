<?php

session_start();
session_destroy();
header("LOCATION:sms_login.php");



?>