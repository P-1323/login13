
 <?php
 include("connection.php");


// if(isset($_POST['login']))
// {
//   $name = mysql_real_escape_string($conn, $_POST['name']);
//   $email     = mysql_real_escape_string($conn, $_POST['email']);
//   $telNo     =$_POST['telNo'];
//   $password  = md5($_POST['password']);
//   $repassword = md5($_POST['repassword']);
  
//    $select ="SELECT * FROM register WHERE email = '$username'  && password ='$password' ";
//    $result = mysqli_query($conn, $select);
//     if ( mysqli_num_rows($result) > 0) {
//   $error [] ='user already exist!';
// }
    
//     else
//     {
//       if ($password != $repassword) {
//       $error[] =' password not matched';
//       } else {
//         $insert = "INSERT INTO REGISTER(name, email, contact, password, repassword)
//   VALUES('$name','$email','$telNo','$password','$repassword')";
//   mysqli_query($conn, $insert);
//    header('location:login.php');
//       }
      
//     }
// };

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport"content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>FORM</title>
</head>
<body>
   <div class="container">
   	<section class="vh-100 bg-image"
  style="background-image: url('backimage.jpg') no-repeat;">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action="#" method="POST">
                  <?php
                  if(isset($error)){ 
                    foreach ($error as $error) {
                    
                    echo '<span class="error-msg">'.$error.'</span>';
                  };
                };

                   ?>
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                  <input type="text" id="form3Example1cg" name="name" class="form-control form-control-lg" required />
                  
                </div>

                <div class="form-outline mb-4">
                   <label class="form-label" for="form3Example3cg">Your Email</label>
                  <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" required />
                 
                </div>
                <div class="form-outline mb-4">
                   <label class="form-label" for="form3Example3cg">Contact No.</label>
                   <input id="telNo" name="telNo" type="telNo" size="20" minlength="9"  maxlength="10"  class="form-control form-control-lg" required /> 
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cg">Password</label>
                  <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" required />
                
                </div>

                <div class="form-outline mb-4">
                   <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                  <input type="password" name="repassword" id="form3Example4cdg" class="form-control form-control-lg" required />
                 
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" required />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <input type="submit" value="Register" class="btn" name="register">
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
	</div>
  </body>
</html>



<?php

 if($_POST['register'])
{
  $name      =$_POST['name'];
  $email     =$_POST['email'];
  $telNo     =$_POST['telNo'];
  $password  =$_POST['password'];
  $repassword =$_POST['repassword'];


  $query = "INSERT INTO REGISTER(name, email, contact, password, repassword)
  VALUES('$name','$email','$telNo','$password','$repassword')";
 
   $data = mysqli_query($conn,$query);

 if ($data)
  {
    echo "Data Inserted into Database";
  }
  else
  {
   echo "failed";
  }
 
}
?>


