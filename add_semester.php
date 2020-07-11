<!DOCTYPE html>
<html>
<head>
  <title></title>
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

  <div class="card-header">
    <div class="text-left d-inline"><h3>Semester</h3></div>
    <div class="text-right"><a href="sms_logout.php" class="btn btn-danger">Logout</a></div>

  </div>

  <!--HEADER END-->




<!--Body begins-->
  <div class="card-body text-left">

      <form method="post" action="addsemester_insert.php" onsubmit="return validation()">
          <div class="form-group">
            <label for="semester">Add semester</label>
            <input type="text" class="form-control" id="semester" placeholder="Enter numeric value" name="semester" autocomplete="off">
          </div>
          <span id="error" class="text-danger"> </span>
         <div><input class="btn btn-warning" type="submit" value="Add"></div>
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
<script type="text/javascript">
  
function validation(){
  var semester = document.getElementById('semester').value;
  //alert(semester);

  var semcheck =  /^([1-9]|1[0])$/;


  if(semcheck.test(semester)){
      document.getElementById('error').innerHTML=" ";
  }else{
    document.getElementById('error').innerHTML="Invalid input";
    return false;
  }
}


</script>
</body>
</html>






