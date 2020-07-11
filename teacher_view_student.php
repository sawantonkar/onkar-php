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
   $semester = $res['semester'];

   $select1 = "SELECT * FROM `sms_student_data` WHERE semester = '$semester'";
   $query1 = mysqli_query($conn,$select1);
   //$res1 = mysqli_fetch_assoc($query1);
 }
   ?>



<div class="card text-center w-100">

<!--HEADER BEGINS-->

  <div class="card-header text-right">
    <div class="text-left d-inline text-info"><h3>List of students</h3></div>
    <div class="text-right"><a href="sms_logout.php" class="btn btn-danger">Logout</a></div>

  </div>

  <!--HEADER END-->




<!--Body begins-->
  <div class="card-body">
      <table class="table table-striped table-bordered" id="students">
      <thead>
        <tr>
          
          <th scope="col">Name</th>
          <th scope="col">Password</th>
          <th scope="col">Email</th>
          <th scope="col">Semester</th>
        </tr>
      </thead>
      <tbody>
        <?php while($res1=mysqli_fetch_assoc($query1)){?>
        <tr>
          
          <td><?php echo $res1['name'];?></td>
          <td><?php echo $res1['password'];?></td>
          <td><?php echo $res1['email'];?></td>
          <td><?php echo $res1['semester'];?></td>
        </tr>
       <?php } ?>
      </tbody>
    </table>


    


  </div>
  <!--Body ends-->

  <!--Footer begins-->
<div class="card-footer text-muted">
    copywright@2019
  </div>
  <!--Footer ends-->


</div>


  <?php
  
  include('includes/footer.php');
  include('includes/scripts.php');
  ?>
  <script>
    $(document).ready(function(){
      $('#students').DataTable();
    });
  </script>
</body>
</html>




