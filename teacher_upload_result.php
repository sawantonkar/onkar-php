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
   $semm = $res['semester'];

   $select2 = "SELECT * FROM `sms_subjects` WHERE semester='$semm'";
   $query2 = mysqli_query($conn,$select2);
   $res2 = mysqli_fetch_assoc($query2);
   
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
  <div class="card-body">
    <?php 

    $select4 = "SELECT * FROM sms_student_data WHERE semester='$semm'";
    $query4 = mysqli_query($conn,$select4);
    $res4 = mysqli_fetch_assoc($query4);
    if(isset($res4['name'])){?>
    <div class="container">
     <div class="text-right"><a href="teacheradd_result.php" class="btn btn-info mb-3">Add result</a></div>
     <br>
     </div>
     <?php
        require('sms_config.php');
        $select1 = "SELECT * FROM `sms_result` WHERE semester='$semm'";
        $query1 = mysqli_query($conn,$select1);
     ?>
     <?php if(isset($res2['subject1'])){?>
     <table class="table table-striped table-bordered" id="result">
        <thead>
          <tr>
            <th scope="col">Sr no.</th>
            <th scope="col">Student name</th>
            <th scope="col">Semester</th>
            <th scope="col"><?php echo $res2['subject1'];?></th>
            <th scope="col"><?php echo $res2['subject2'];?></th>
            <th scope="col"><?php echo $res2['subject3'];?></th>
            <th scope="col"><?php echo $res2['subject4'];?></th>
            <th scope="col">Total</th>
            <th scope="col">Percentage</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=0;while($res1=mysqli_fetch_assoc($query1)){?>
          <tr>
            <th scope="row"><?php echo ++$i;?></th>
            <td><?php echo $res1['student_name'];?></td>
            <td><?php echo $res1['semester'];?></td>
            <td><?php echo $res1['sub1marks'];?></td>
            <td><?php echo $res1['sub2marks'];?></td>
            <td><?php echo $res1['sub3marks'];?></td>
            <td><?php echo $res1['sub4marks'];?></td>
            <td><?php echo $res1['total'];?></td>
            <td><?php echo $res1['percentage'];?>%</td>
            <td><a href="edit_marks.php?e_id=<?php echo $res1['id'];?>" class="btn btn-warning">Edit</a></td>
            <td><a href="delete_marks.php?d_id=<?php echo $res1['id'];?>" class="btn btn-danger">Delete</a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
   <?php }else{?>
    <h3 class="text-left text-danger">Subjects are not uploaded</h3>
   <?php }?>

    
      <?php }else{?>
        <h3 class="text-left text-danger">No students have registered</h3>
      <?php }?>
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

  <script>
    $(document).ready(function(){
      $('#result').DataTable();
    });
  </script>



</body>
</html>