<!DOCTYPE html>
<html>
<head>
  <title></title>
  
    <style type="text/css">
    .bg{
      background-image: url(images/back.jpg);
      background-size: cover;
      background-attachment:fixed;
       
    }
    
  </style>
  	<?php include('includes/header.php');?>
	

</head>
<body>
    <?php
session_start();

if(!isset($_SESSION['admin'])){
  header("LOCATION:sms_login.php");
}



?>



<?php
   //include('includes/header.php');
   include('includes/navbar_admin.php');


   ?>



<div class="card text-center w-100">

<!--HEADER BEGINS-->

  <div class="card-header">
    <div class="text-left d-inline"><h3>Teacher</h3></div>
    <div class="text-right"><a href="sms_logout.php" class="btn btn-danger">Logout</a></div>

  </div>

  <!--HEADER END-->




<!--Body begins-->
  <div class="card-body">

    <?php
      require('sms_config.php');

      $select = "SELECT * FROM `sms_teacher_data`";
      $query = mysqli_query($conn,$select);




    ?>

    <table class="table  table-striped table-bordered" id="teacher_data">
          <thead>
            <tr>
              <th scope="col">Sr no.</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Contact</th>
              <th scope="col">Semester</th>
              <th scope="col">Status</th>
              <th scope="col">Update status</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=0;while( $res=mysqli_fetch_assoc($query)){?>
            <tr>
              <th scope="row"><?php echo ++$i;?></th>
              <td><?php echo $res['name'];?></td>
              <td><?php echo $res['email'];?></td>
              <td><?php echo $res['contact'];?></td>
              <td><?php echo $res['semester'];?></td>
              <td><?php echo $res['teacher_status_id'];?></td>
              <td><a href="teacher_status_update.php?e_id=<?php echo $res['id'];?>" class="btn btn-primary">Update</a></td>
              <td><a href="teacher_data_delete.php?d_id=<?php echo $res['id'];?>" class="btn btn-warning">Delete</a></td>
              <!-- <td>
              	<div class="custom-control custom-radio custom-control-inline">
				  <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
				  <label class="custom-control-label" for="customRadioInline1">Toggle this custom radio</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
				  <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
				  <label class="custom-control-label" for="customRadioInline2">Or toggle this other custom radio</label>
				</div>
			</td>
 -->              
              
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
  		$('#teacher_data').DataTable();
  	});
  </script>
</body>
</html>





