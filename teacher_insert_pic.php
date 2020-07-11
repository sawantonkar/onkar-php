<?php


//$arr = ['popat','udala'];
//$str = implode($arr);
//echo $str;

//echo '<pre>';
//print_r($_FILES['file_to_upload']);


require_once('sms_config.php');
	if($_FILES['teacher_pic']['name'] != ''){
	
	$id=$_POST['id'];
	$file_name = $_FILES['teacher_pic']['name'];
	$file_name_arr = explode('.',$file_name);//explode converts string into
	$ext = $file_name_arr[count($file_name_arr) - 1];
	$f_name = date('YmdHis').'.'.$ext;
	//implode
	//echo uniqid();
	$source = $_FILES['teacher_pic']['tmp_name'];
	$dest = "./uploads/".$f_name;
	move_uploaded_file($source,$dest);

	$update = "UPDATE `sms_teacher_data` SET `profile_pic`='$f_name' WHERE id='$id'";
	mysqli_query($conn,$update);
	header("Location:teacher.php");
}else{
	$id=$_POST['id'];
	$select = "SELECT * FROM `sms_teacher_data` WHERE id='$id'";
	$query = mysqli_query($conn,$select);
	$res = mysqli_fetch_assoc($query);
	$f_name = $res['profile_pic'];
	/*$f_name = 'defaulimg.jpg';*/
	$update = "UPDATE `sms_teacher_data` SET `profile_pic`='$f_name' WHERE id='$id'";
	mysqli_query($conn,$update);
	header("Location:teacher.php");
}


//unlink
?>