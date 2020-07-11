<?php
session_start();

if(!isset($_SESSION['admin'])){
  header("LOCATION:sms_login.php");
}



?>



<?php
   include('includes/header.php');
   include('includes/navbar_admin.php');
   include('sms_config.php');

   $select = "SELECT * FROM `sms_subjects`";
   $query = mysqli_query($conn,$select);

   ?>



<div class="card text-center w-100">

<!--HEADER BEGINS-->

  <div class="card-header">
    <div class="text-left d-inline"><h3>Subject</h3></div>
    <div class="text-right"><a href="sms_logout.php" class="btn btn-danger">Logout</a></div>

  </div>

  <!--HEADER END-->




<!--Body begins-->
  <div class="card-body">

   <div class="container">
     <div class="text-right"><a href="add_subject.php" class="btn btn-info mb-3">Add subject</a></div>
     <br>
     <table class="table table-striped table-dark table-hover">
        <thead>
          <tr>
            <th scope="col">Sr no.</th>
            <th scope="col">Semester</th>
            <th scope="col">Subject</th>
            <th scope="col">Marks</th>
            <th scope="col">Subject</th>
            <th scope="col">Marks</th>
            <th scope="col">Subject</th>
            <th scope="col">Marks</th>
            <th scope="col">Subject</th>
            <th scope="col">Marks</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=0;while($res=mysqli_fetch_assoc($query)){?>
          <tr>
            <th scope="row"><?php echo ++$i;?></th>
            <td><?php echo $res['semester'];?></td>
            <td><?php echo $res['subject1'];?></td>
            <td><?php echo $res['marks1'];?></td>
            <td><?php echo $res['subject2'];?></td>
            <td><?php echo $res['marks2'];?></td>
            <td><?php echo $res['subject3'];?></td>
            <td><?php echo $res['marks3'];?></td>
            <td><?php echo $res['subject4'];?></td>
            <td><?php echo $res['marks4'];?></td>
            <td><a href="subject_edit.php?e_id=<?php echo $res['id'];?>" class="btn btn-warning">Edit</a></td>
            <td><a href="subject_delete.php?d_id=<?php echo $res['id'];?>" class="btn btn-danger">Delete</a></td>
          </tr>
         <?php } ?>
        </tbody>
      </table>
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


