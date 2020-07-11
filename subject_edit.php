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
    <div class="text-left d-inline"><h3>Update subject details</h3></div>
    <div class="text-right"><a href="sms_logout.php" class="btn btn-danger">Logout</a></div>

  </div>

  <!--HEADER END-->

  <?php 
        include('sms_config.php');
        $id = $_GET['e_id'];
          //echo $id;
          $select = "SELECT * FROM `sms_subjects` WHERE id='$id'";

          $query = mysqli_query($conn,$select);
          $res = mysqli_fetch_assoc($query);
          
          //echo $res['product_name'];



      ?>


<!--Body begins-->
  <div class="card-body text-left">

      <form method="post" action="addsubject_update.php" onsubmit="return validation()">
          <h3>Change the subject details of semester <?php echo $res['semester'];?></h3>
          <div class="form-group invisible">
            <label>Semester</label>
            <select class="form-control" name="sem_select" id="sem">
              <option selected>Choose...</option>
              <?php
                require('sms_config.php'); 
                $select1 = "SELECT * FROM `sms_semester`";
                $query1 = mysqli_query($conn,$select1);
                while($res1=mysqli_fetch_assoc($query1)){
              ?>
              <option value="<?php echo $res['semester'];?>" <?php if($res['semester']==$res1['semester']){echo "selected";} ?>>

                <?php echo $res1['semester'];?>
                  
                </option>
          <?php }?>
            </select>
         </div>
         <span id="error9" class="text-danger font-weight-bold"></span>
         


          <div class="form-group">
            <label for="semester" class="text-primary">Enter subject1 name</label>
            <input type="text" class="form-control" id="subject1_name" name="sub1_name" value="<?php echo $res['subject1'];?>" autocomplete="off">
          </div>
          <span id="error1" class="text-danger font-weight-bold"></span>
          <div class="form-group">
            <label for="semester"  class="text-success">Enter subject1 marks</label>
            <input type="text" class="form-control" id="subject1_marks"  name="sub1_marks" value="<?php echo $res['marks1'];?>" autocomplete="off">
          </div>
          <span id="error5" class="text-danger font-weight-bold"></span>
          <br>
  
          <div class="form-group">
            <label for="semester" class="text-primary">Enter subject2 name</label>
            <input type="text" class="form-control" id="subject2_name"  name="sub2_name" value="<?php echo $res['subject2'];?>" autocomplete="off">
          </div>
          <span id="error2" class="text-danger font-weight-bold"></span>
          <div class="form-group">
            <label for="semester"   class="text-success">Enter subject2 marks</label>
            <input type="text" class="form-control" id="subject2_marks" name="sub2_marks" value="<?php echo $res['marks2'];?>" autocomplete="off">
          </div>
          <span id="error6" class="text-danger font-weight-bold"></span>
          <br>

          <div class="form-group">
            <label for="semester" class="text-primary">Enter subject3 name</label>
            <input type="text" class="form-control" id="subject3_name"  name="sub3_name" value="<?php echo $res['subject3'];?>" autocomplete="off">
          </div>
          <span id="error3" class="text-danger font-weight-bold"></span>
          <div class="form-group"  >
            <label for="semester" class="text-success">Enter subject3 marks</label>
            <input type="text" class="form-control" id="subject3_marks"  name="sub3_marks" value="<?php echo $res['marks3'];?>" autocomplete="off">
          </div>
          <span id="error7" class="text-danger font-weight-bold"></span>
          <br>

          <div class="form-group">
            <label for="semester" class="text-primary">Enter subject4 name</label>
            <input type="text" class="form-control" id="subject4_name"  name="sub4_name" value="<?php echo $res['subject4'];?>" autocomplete="off">
          </div>
          <span id="error4" class="text-danger font-weight-bold"></span>
          <div class="form-group" >
            <label for="semester"  class="text-success">Enter subject4 marks</label>
            <input type="text" class="form-control" id="subject4_marks" name="sub4_marks" value="<?php echo $res['marks4'];?>" autocomplete="off">
          </div>
          <span id="error8" class="text-danger font-weight-bold"></span>
          

          
         <div><input class="btn btn-warning" type="submit" value="Update"></div>
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
<script type="text/javascript">
  
function validation(){

  var sem = document.getElementById('sem').value;
  //alert(sem);
  if(sem == 'Choose...'){
    document.getElementById('error9').innerHTML="**Select semester**";
    return false;
  }
  else{
    document.getElementById('error9').innerHTML=" ";
  }
  

  var subject1_name = document.getElementById('subject1_name').value;
  var subject2_name = document.getElementById('subject2_name').value;
  var subject3_name = document.getElementById('subject3_name').value;
  var subject4_name = document.getElementById('subject4_name').value;

  

  var subject1_marks = document.getElementById('subject1_marks').value;
  var subject2_marks = document.getElementById('subject2_marks').value;
  var subject3_marks = document.getElementById('subject3_marks').value;
  var subject4_marks = document.getElementById('subject4_marks').value;
  
 
  var subject_name = /[a-zA-Z]+[a-zA-Z]+([\s][a-zA-Z]+)*/;
  var subject_marks = /^[0-9]{1,10}$/;

  if(subject_name.test(subject1_name)){
      document.getElementById('error1').innerHTML=" ";
  }else{
    document.getElementById('error1').innerHTML="**Invalid subject name**";
    return false;
  }

   if(subject_marks.test(subject1_marks)){
      document.getElementById('error5').innerHTML=" ";
  }else{
    document.getElementById('error5').innerHTML="**Invalid**";
    return false;
  }






  if(subject_name.test(subject2_name)){
      document.getElementById('error2').innerHTML=" ";
  }else{
    document.getElementById('error2').innerHTML="**Invalid subject name**";
    return false;
  }
  if(subject_marks.test(subject2_marks)){
      document.getElementById('error6').innerHTML=" ";
  }else{
    document.getElementById('error6').innerHTML="**Invalid**";
    return false;
  }






  if(subject_name.test(subject3_name)){
      document.getElementById('error3').innerHTML=" ";
  }else{
    document.getElementById('error3').innerHTML="**Invalid subject name**";
    return false;
  }
  if(subject_marks.test(subject3_marks)){
      document.getElementById('error7').innerHTML=" ";
  }else{
    document.getElementById('error7').innerHTML="**Invalid**";
    return false;
  }






  if(subject_name.test(subject4_name)){
      document.getElementById('error4').innerHTML=" ";
  }else{
    document.getElementById('error4').innerHTML="**Invalid subject name**";
    return false;
  }
  if(subject_marks.test(subject4_marks)){
      document.getElementById('error8').innerHTML=" ";
  }else{
    document.getElementById('error8').innerHTML="**Invalid**";
    return false;
  }



  

 
  
  
  

}


</script>
</body>
</html>






