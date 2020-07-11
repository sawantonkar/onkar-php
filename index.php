<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block"><img src="images/college.jpg" height="100%" width="100%"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>


              <form class="user" method="post" action="sms_insert.php" onsubmit="return validation()">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" autocomplete="off">
                    <span class="text-danger font-weight-bold" id="uname"></span>
                   
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="password" name="password" placeholder="Password" autocomplete="off">
                    <span class="text-danger font-weight-bold" id="pwd"></span>
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email" autocomplete="off">
                  <span class="text-danger font-weight-bold" id="eml"></span>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="contact" name="contact" placeholder="Contact" autocomplete="off">
                    <span class="text-danger font-weight-bold" id="con"></span>
                  </div>
                  </div>

                  <div class="form-group">
                  <label>Select semester</label>
                  <select class="form-control" id="semester" name="semester" placeholder="select">

                    <option class="selected">---Select any one---</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>

                    
                  </select>
                  <span class="text-danger font-weight-bold" id="sem"></span>
                </div>
                  
                  
                  <div class="form-group">
							    <label>Register as:</label>
							    <select class="form-control" id="profession" name="profession" placeholder="select">
							    	<option class="selected">---Select any one---</option>
							    
							      <option>teacher</option>
							      <option>student</option>

							      
							    </select>
							    <span class="text-danger font-weight-bold" id="prof"></span>
							  </div>

                <!-- <input type="hidden" name="status_id" value="Deactive"> -->
		                  
                


                <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-user btn-block" name="submit">
                </div>
                <hr>
                
              </form>

              <hr>
              
              <div class="text-center">
                <a class="small" href="sms_login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

 <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>


  <script type="text/javascript">
  	function validation(){
  		var username = document.getElementById('username').value;
  		var password = document.getElementById('password').value;
  		var email = document.getElementById('email').value;
  		var contact = document.getElementById('contact').value;
  		var cont = parseInt(document.getElementById('contact').value);
  		var semester = document.getElementById('semester').value;
  		var profession = document.getElementById('profession').value;
  		//var a = parseInt(document.getElementById('contact').value);
  		//alert(contact.length);
  		var flag = true;

  		if(username == ""){
  			document.getElementById('uname').innerHTML = " **Please enter username**";
  			flag = false;
  			//alert('1');
  		}else{
  			document.getElementById('uname').innerHTML = "";
  		}




  		if(password == ""){
  			document.getElementById('pwd').innerHTML = " **Please enter password**";
  			flag = false;
  			//alert('1');
  		}else{
  			document.getElementById('pwd').innerHTML = "";
  		}




  		if(email == ""){
  			document.getElementById('eml').innerHTML = " **Please enter email**";
  			flag = false;
  			//alert('1');
  		}else{
  			document.getElementById('eml').innerHTML = "";
  		}


  		if(contact == ""){
  			document.getElementById('con').innerHTML = " **Please enter contact number**";
  			flag = false;
  			//alert('1');
  		}
  		else if(Number.isInteger(cont) == false){
  			document.getElementById('con').innerHTML = " **Invalid contact number**";
  			flag = false;
  			//alert('1');
  		}
  		else if(contact.length != 10){
  			document.getElementById('con').innerHTML = " **Contact number must contain 10 digits**";
  			flag = false;
  			//alert('1');
  		}else{
  			document.getElementById('con').innerHTML = "";
  		}


		//alert(semester);

  		if(semester == "---Select any one---"){
  			document.getElementById('sem').innerHTML = " **Please select semester**";
  			flag =  false;
  			//alert('1');
  		}else{
  			document.getElementById('sem').innerHTML = "";
  		}


  		if(profession == "---Select any one---"){
  			document.getElementById('prof').innerHTML = " **Please select profession**";
  			flag = false;
  			//alert('1');
  		}else{
  			document.getElementById('prof').innerHTML = "";
  		}

  		if(flag == true){
  			return true;
  		}else{
  			return false;
  		}
  	}


  	
  </script>
</body>

</html>
