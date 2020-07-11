<?php
session_start();

if(!isset($_SESSION['student'])){
  header("LOCATION:sms_login.php");
}



?>






<?php
   include('includes/header.php');
   include('includes/navbar_student.php');
   require('sms_config.php');
   if(isset($_SESSION['student_unique_id'])){
    $id = $_SESSION['student_unique_id'];
    //echo $id;
    $select = "SELECT * FROM sms_student_data WHERE id='$id'";
    $query = mysqli_query($conn,$select);
    //$res = mysqli_fetch_assoc($query);
    //echo $res['email'];
   }

   ?>



<div class="card text-center w-100">

<!--HEADER BEGINS-->

  <div class="card-header text-right">
    <div class="text-left d-inline text-info"><h3>Update profile</h3></div>
    <div class="text-right"><a href="sms_logout.php" class="btn btn-danger">Logout</a></div>

  </div>

  <!--HEADER END-->




<!--Body begins-->
  <div class="card-body text-left">
     
      <?php
      require_once('sms_config.php');
      $id = $_GET['e_id'];
      $select1 = "SELECT * FROM `sms_student_data` WHERE `id`=".$id;
      $query1 = mysqli_query($conn,$select1);
      $res1 = mysqli_fetch_assoc($query1);
      ?>
      <form action="student_update_profile.php" method="POST">
        
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" value="<?php echo $res1['name'];?>" name="name">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" value="<?php echo $res1['password'];?>" name="password">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" value="<?php echo $res1['email'];?>" name="email">
          </div>
          <div class="form-group">
            <label>Contact</label>
            <input type="text" class="form-control" value="<?php echo $res1['contact'];?>" name="contact">
          </div>
          <div class="form-group text-center">
           
            <input type="submit" value="Update" class="btn btn-info">
          </div>
          
          <input type="hidden" name="id" value="<?php echo $res1['id'];?>" >
        
      </form>







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


