<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
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

    $email = $res['email'];
    $select1 = "SELECT * FROM sms_result WHERE email='$email'";
    $query1 = mysqli_query($conn,$select1);
    $res1 = mysqli_fetch_assoc($query1);

    $semester = $res1['semester'];
    $select2 = "SELECT * FROM sms_subjects WHERE semester='$semester'";
    $query2 = mysqli_query($conn,$select2);
    $res2 = mysqli_fetch_assoc($query2);

   }

   ?>



<div class="card text-center w-100">

<!--HEADER BEGINS-->

  <div class="card-header text-right">
    <a href="sms_logout.php" class="btn btn-danger">Logout</a>

  </div>

  <!--HEADER END-->




<!--Body begins-->
  <div class="card-body">
      <h2 class="text-left">Your result</h2>
      <?php if(isset($res1['sub1marks'])){?>
      <table class="table">
          <thead class="thead-dark text-danger">
            <tr>
              <th scope="col">Semester</th>
              <th scope="col">Name</th>
              <th scope="col"><?php echo $res2['subject1'];?></th>
              <th scope="col"><?php echo $res2['subject2'];?></th>
              <th scope="col"><?php echo $res2['subject3'];?></th>
              <th scope="col"><?php echo $res2['subject4'];?></th>
              <th scope="col">Total marks</th>
              <th scope="col">Percentage</th>

            </tr>
          </thead>
          <tbody class="text-danger">
            <tr>
              <th scope="row"><?php echo $res['semester'];?></th>
              <td><?php echo $res1['student_name'];?></td>
              <td id="result1"><?php echo $res1['sub1marks'];?> / <?php echo $res2['marks1'];?></td>
              <td id="result2"><?php echo $res1['sub2marks'];?> / <?php echo $res2['marks2'];?></td>
              <td id="result3"><?php echo $res1['sub3marks'];?> / <?php echo $res2['marks3'];?></td>
              <td id="result4"><?php echo $res1['sub4marks'];?> / <?php echo $res2['marks4'];?></td>
              <td><?php echo $res1['total'];?></td>
              <td><?php echo $res1['percentage'];?>%</td>

            </tr>
          </tbody>
        </table>
        <span id="pass" class="text-left text-success"></span>
        <span id="fail" class="text-left text-danger"></span>
      <?php }else{?>
        <h4 class="text-left text-danger">Your result is not uploaded</h4>
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
  
</body>
</html>





