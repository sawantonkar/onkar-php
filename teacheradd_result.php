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
   $select1 = "SELECT * FROM `sms_teacher_data` WHERE id='$id'";
   $query1 = mysqli_query($conn,$select1);
   $res1 = mysqli_fetch_assoc($query1);
   $sem = $res1['semester'];
 }
   ?>



<div class="card text-center w-100">

<!--HEADER BEGINS-->

  <div class="card-header text-right">
    <div class="text-left d-inline text-info"><h3>Add results</h3></div>
    <div class="text-right"><a href="sms_logout.php" class="btn btn-danger">Logout</a></div>

  </div>

  <!--HEADER END-->




<!--Body begins-->
  <div class="card-body text-left">
    <form method="post" action="addresult_insert.php" onsubmit="return validation()">

          <div class="form-group">
            <label>Select student</label>
            <select class="form-control" name="student_id" id="stu">
              <option selected>--Select student--</option>
              <?php
                require('sms_config.php'); 
                $select = "SELECT * FROM `sms_student_data` WHERE semester='$sem'";
                $query = mysqli_query($conn,$select);
                while($res=mysqli_fetch_assoc($query)){
              ?>
              <option value="<?php echo $res['id'];?>">

                <?php echo $res['name'];?>
                  
                </option>
          <?php }?>
            </select>
            <span id="error5" class="text-danger font-weight-bold"></span>
         </div>
         
         <hr><hr>

         <?php
              $select2 = "SELECT * FROM sms_subjects WHERE semester='$sem'";
              $query2 = mysqli_query($conn,$select2);
              $res2 = mysqli_fetch_assoc($query2);

         ?>
        <?php if(isset($res2['subject1'])){?>
         <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Subject name</th>
                <th scope="col">Total marks</th>
                <th scope="col">Gained marks</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $res2['subject1'];?></td>
                <td id="totalmarks1"><?php echo $res2['marks1'];?></td>
                <td><input type="number" name="gainedmarks1" id="gainedmarks1"><br><span id="error1" class="text-danger font-weight-bold"></span></td>

              </tr>
              <tr>
                <td><?php echo $res2['subject2'];?></td>
                <td id="totalmarks2"><?php echo $res2['marks2'];?></td>
                <td><input type="number" name="gainedmarks2" id="gainedmarks2"><br><span id="error2" class="text-danger font-weight-bold"></span></td>
              </tr>
              <tr>
                <td><?php echo $res2['subject3'];?></td>
                <td id="totalmarks3"><?php echo $res2['marks3'];?></td>
                <td><input type="number" name="gainedmarks3" id="gainedmarks3"><br><span id="error3" class="text-danger font-weight-bold"></span></td>
              </tr>
              <tr>
                <td><?php echo $res2['subject4'];?></td>
                <td id="totalmarks4"><?php echo $res2['marks4'];?></td>
                <td><input type="number" name="gainedmarks4" id="gainedmarks4"><br><span id="error4" class="text-danger font-weight-bold"></span></td>
              </tr>
            </tbody>
          </table>
        
          <input type="submit" name="add_result" class="btn btn-success" value="Add result">
          <?php }else{?>
          <h4>Subjects are not uploaded</h4>
        <?php }?>
          <input type="hidden" name="gainedtotal" id="gainedtotal">
          <input type="hidden" name="percentage" id="percentage">
          <input type="hidden" name="semesster" value="<?php echo $res2['semester'];?>">
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
    //alert(1);
    var totalmarks1 = parseInt(document.getElementById('totalmarks1').innerHTML);
    var gainedmarks1 = parseInt(document.getElementById('gainedmarks1').value);

    var totalmarks2 = parseInt(document.getElementById('totalmarks2').innerHTML);
    var gainedmarks2 = parseInt(document.getElementById('gainedmarks2').value);

    var totalmarks3 = parseInt(document.getElementById('totalmarks3').innerHTML);
    var gainedmarks3 = parseInt(document.getElementById('gainedmarks3').value);

    var totalmarks4 = parseInt(document.getElementById('totalmarks4').innerHTML);
    var gainedmarks4 = parseInt(document.getElementById('gainedmarks4').value);

    var gm1 = document.getElementById('gainedmarks1').value;
    var gm2 = document.getElementById('gainedmarks2').value;
    var gm3 = document.getElementById('gainedmarks3').value;
    var gm4 = document.getElementById('gainedmarks4').value;

    var student = document.getElementById('stu').value;
    //alert(student);
    if(student == '--Select student--'){
      document.getElementById('error5').innerHTML='**Select student**';
      return false;
    }
    else{
      document.getElementById('error5').innerHTML='';
    }

    //gained marks should be less than total marks
    if(gm1 == ''){
      document.getElementById('error1').innerHTML = '**Enter marks here**';
      return false;
    }else{
      document.getElementById('error1').innerHTML = '';
    }

    if((gainedmarks1 > totalmarks1)){
      document.getElementById('error1').innerHTML = '**Gained marks should be less than total marks**';
      return false;
    }
    else{
      document.getElementById('error1').innerHTML = ' ';
    }

    if(gm2 == ''){
      document.getElementById('error2').innerHTML = '**Enter marks here**';
      return false;
    }else{
      document.getElementById('error2').innerHTML = '';
    }


    if(gainedmarks2 > totalmarks2){
      document.getElementById('error2').innerHTML = '**Gained marks should be less than total marks**';
      return false;
    }
    else{
      document.getElementById('error2').innerHTML = ' ';
    }


    if(gm3 == ''){
      document.getElementById('error3').innerHTML = '**Enter marks here**';
      return false;
    }else{
      document.getElementById('error3').innerHTML = '';
    }

    if(gainedmarks3 > totalmarks3){
      document.getElementById('error3').innerHTML = '**Gained marks should be less than total marks**';
      return false;
    }
    else{
      document.getElementById('error3').innerHTML = ' ';
    }


    if(gm4 == ''){
      document.getElementById('error4').innerHTML = '**Enter marks here**';
      return false;
    }else{
      document.getElementById('error4').innerHTML = '';
    }


    if(gainedmarks4 > totalmarks4){
      document.getElementById('error4').innerHTML = '**Gained marks should be less than total marks**';
      return false;
    }
    else{
      document.getElementById('error4').innerHTML = ' ';
    }

    var total = totalmarks1 + totalmarks2 + totalmarks3 + totalmarks4;
    //alert(total);
    var gainedmarks = gainedmarks1 + gainedmarks2 + gainedmarks3 + gainedmarks4;
    //alert(gainedmarks);

    var percentage = (gainedmarks/total)*100;
    //alert(percentage);

    document.getElementById('gainedtotal').value = gainedmarks;
    document.getElementById('percentage').value = percentage.toFixed(2);

    
  }


</script>
</body>
</html>







