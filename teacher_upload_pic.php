<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <?php
session_start();

if(!isset($_SESSION['teacher']) && !isset($_SESSION['teacher_password'])){
  header("LOCATION:sms_login.php");
}







   include('includes/header.php');
   include('includes/navbar_teacher.php');
   require('sms_config.php');
   if(isset($_SESSION['teacher_unique_id'])){
   //$name = $_SESSION['teacher'];
   //$password = $_SESSION['teacher_password'];
   //$id = $_SESSION['teacher_id'];
    $id = $_SESSION['teacher_unique_id'];
   $select = "SELECT * FROM `sms_teacher_data` WHERE id='$id'";
   $query = mysqli_query($conn,$select);
   $res = mysqli_fetch_assoc($query);
 }
   ?>



<div class="card text-center w-100">

<!--HEADER BEGINS-->

  <div class="card-header text-right">
    <div class="text-left d-inline text-info"><h3>Welcome <?php echo $_SESSION['teacher'];?> !!</h3></div>
    <div class="text-right"><a href="sms_logout.php" class="btn btn-danger">Logout</a></div>

  </div>

  <!--HEADER END-->




<!--Body begins-->
  <div class="card-body text-left">
    <form action="teacher_insert_pic.php" method="post" enctype="multipart/form-data">
        <div class="form-group text-info">
          <label>Select profile pic</label><br>
          <input type="file" name="teacher_pic">
        </div>
        <input type="submit" name="submit" value="Upload" class="btn btn-info">
        <input type="hidden" name="id" value="<?php echo $res['id'];?>">
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



</body>
</html>

