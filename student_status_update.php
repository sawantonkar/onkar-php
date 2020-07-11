<?php
session_start();

if(!isset($_SESSION['admin'])){
  header("LOCATION:sms_login.php");
}



?>



<?php
   include('includes/header.php');
   include('includes/navbar_admin.php');


   ?>



<div class="card text-center w-100">

<!--HEADER BEGINS-->

  <div class="card-header text-right">
    <div class="text-left d-inline"><h3>Update status</h3></div>
    <div class="text-right"><a href="sms_logout.php" class="btn btn-danger">Logout</a></div>


  </div>

  <!--HEADER END-->




<!--Body begins-->
  <div class="card-body text-left" >

    <?php

      require('sms_config.php'); 
      $id = $_GET['e_id'];
      //echo $id;
      $select = "SELECT * FROM `sms_student_data` WHERE id='$id'";
      //print_r($select);
      $query = mysqli_query($conn,$select);
      $res = mysqli_fetch_assoc($query);
      /*if($query){
        echo "fired";
      }else{
        echo "not fired";
      }
*/

    ?>


  <div class="container-fluid">

    <br><h5 class="text-danger">Deactive => Deny access</h5><br><h5 class="text-success">Active => Grant access</h5>
    <br><br><br>
      <form action="update_student.php" method="POST">
          <!--div class="form-group">
            <label for="formGroupExampleInput">Enter value here:</label><br>
            <input type="text"  id="formGroupExampleInput" name="updated_value" value="<?php echo $res['student_status_id'];?>">
          </div-->

          <div class="form-group">
              <label for="exampleFormControlSelect1">Update status:</label>
              <select class="" id="exampleFormControlSelect1" name="updated_value">
                <option value="Deactive"<?php if($res['student_status_id']=='Deactive'){echo 'selected';}?>>Deactive</option>
                <option value="Active"<?php if($res['student_status_id']=='Active'){echo 'selected';}?>>Active</option>
                
              </select>
            </div>
          <div class="form-group">
            
            <input type="submit" id="formGroupExampleInput" name="submit" value="UPDATE" class="btn btn-success">
          </div>
          <input type="hidden" name="id" value="<?php echo $res['id'];?>">
      </form>
          
  
  </div>
</div>


  
  <!--Body ends-->

  <!--Footer begins-->
<div class="card-footer text-muted">
    copywright@2019
  </div>
  <!--Footer ends-->


</div>


  <?php
  include('includes/scripts.php');
  include('includes/footer.php');

  ?>


