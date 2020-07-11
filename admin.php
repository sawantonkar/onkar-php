<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		/*.bg{
			background-image: url(images/colg.jpg);
			background-size: cover;
			background-attachment:fixed;
			 
		}*/
	</style>
</head>
<body>
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
    <div class="text-left d-inline"><h3>Welcome <?php echo $_SESSION['admin'];?> !!</h3></div>
    <div class="text-right"><a href="sms_logout.php" class="btn btn-danger">Logout</a></div>

  </div>

  <!--HEADER END-->




<!--Body begins-->
  <div class="card-body bg">
  	<h3 class="text-left" style="font-size: 30px;color:black;font-weight: bolder;">Registration details</h3><br><br>
    <?php 

      require('sms_config.php');
      //teachers registered
      $select1 = "SELECT * FROM `sms_teacher_data`";
      $query1 = mysqli_query($conn,$select1);
      $row1 = mysqli_num_rows($query1);
      
      //teacher active
      $select2 = "SELECT * FROM `sms_teacher_data` WHERE teacher_status_id = 'Active'";
      $query2 = mysqli_query($conn,$select2);
      $row2 = mysqli_num_rows($query2);
      
      //students registered
      $select3 = "SELECT * FROM `sms_student_data`";
      $query3 = mysqli_query($conn,$select3);
      $row3 = mysqli_num_rows($query3);
      
      //student active
      $select4 = "SELECT * FROM `sms_student_data` WHERE student_status_id = 'Active'";
      $query4 = mysqli_query($conn,$select4);
      $row4 = mysqli_num_rows($query4);
      





    ?>

    <div class="container text-left" style="background-color: rgba(0,0,0,0.3);">
      <hr>
      <div class="d-inline" style="font-size: 30px;color:black;font-weight: bolder;">Number of teachers registered : </div>
      <div class="d-inline" style="font-size: 30px;color:black;font-weight: bolder;"><?php echo $row1;?></div><br><br>
      <div class="d-inline" style="font-size: 30px;color:black;font-weight: bolder;">Number of teachers activated : </div>
      <div class="d-inline" style="font-size: 30px;color:black;font-weight: bolder;"><?php echo $row2;?></div><br><br>
      <hr>

      <hr>
      <div class="d-inline" style="font-size: 30px;color:black;font-weight: bolder;">Number of students registered : </div>
      <div class="d-inline" style="font-size: 30px;color:black;font-weight: bolder;"><?php echo $row3;?></div><br><br>
      <div class="d-inline" style="font-size: 30px;color:black;font-weight: bolder;">Number of students activated : </div>
      <div class="d-inline" style="font-size: 30px;color:black;font-weight: bolder;"><?php echo $row4;?></div><br><br>
      <hr>





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

</body>
</html>






