<?php
  require('sms_config.php');

  $update = $_POST['updated_value'];
  $id = $_POST['id'];


  if(isset($_POST['submit'])){
    
    





    //$pattern = "/^[0-1]$/";
    $update = $_POST['updated_value'];
    $upd = "UPDATE `sms_teacher_data` SET `teacher_status_id`='$update' WHERE id='$id'";
       mysqli_query($conn,$upd);

       header("LOCATION:admin_teacher.php");


    /*$matched = preg_match($pattern,$update);

    if($matched==true){
      //header("LOCATION:update_teacher.php");
      $upd = "UPDATE `teacher_data` SET `teacher_status_id`='$update' WHERE id='$id'";
       mysqli_query($conn,$upd);

       header("LOCATION:admin_teacher.php");

    }else if($matched==false){
      //echo "Enter either numeric '0' or '1'";
      header("LOCATION:teacher_status_update.php");
    }else{
      
    }

*/

  }


            
/*if(isset($_POST['submit'])){
 //preg_match(pattern,string) => returns boolean value

    $pattern = "/^[0-1]$/";
    $string = $_POST['updated_value'];

    $matched = preg_match($pattern,$string);

    if($matched){
      //header("LOCATION:update_teacher.php");
    }else{
      echo "Enter either numeric '0' or '1'";
    }



  }
*/

          ?>
      