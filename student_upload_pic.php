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
    $res = mysqli_fetch_assoc($query);
    //echo $res['email'];
   }

   ?>



<div class="card text-center w-100">

<!--HEADER BEGINS-->

  <div class="card-header text-right">
    <div class="text-left d-inline text-info"><h3>Welcome <?php echo $_SESSION['student'];?> !!</h3></div>
    <div class="text-right"><a href="sms_logout.php" class="btn btn-danger">Logout</a></div>

  </div>

  <!--HEADER END-->




<!--Body begins-->
  <div class="card-body text-left">
     <form action="student_insert_pic.php" method="post" enctype="multipart/form-data">
        <div class="form-group text-info">
          <label>Select profile pic</label><br>
          <input type="file" name="student_pic">
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


