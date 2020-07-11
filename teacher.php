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
   //$res = mysqli_fetch_assoc($query);
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
    <?php while($res=mysqli_fetch_assoc($query)){?>

      <div class="card" style="width: 10rem;">
        <?php if($res['profile_pic']=='defaulimg.jpg'){?>
        <img src="images/defaulimg.jpg" class="card-img-top" alt="..." height="120px" width="120px">
        
      <?php }else{?>
        <img src="uploads/<?php echo $res['profile_pic'];?>" class="card-img-top" alt="..." height="120px" width="120px">
      <?php }?>
        <div class="card-body">
          <p class="card-text">Profile pic</p>
        </div>
      </div><br>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Semester</th>
          <th scope="col">Name</th>
          <th scope="col">Password</th>
          <th scope="col">Email</th>
          <th scope="col">Contact</th>
        </tr>
      </thead>
      <tbody>
        
        <tr>
          <td><?php echo $res['semester'];?></td>
          <td><?php echo $res['name'];?></td>
          <td><?php echo $res['password'];?></td>
          <td><?php echo $res['email'];?></td>
          <td><?php echo $res['contact'];?></td>
          
        </tr>
       
      </tbody>
    </table>
    <span><a href="edit_teacher_profile.php?e_id=<?php echo $res['id'];?>" class="btn btn-info">Edit profile</a></span>
    <?php } ?>



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

