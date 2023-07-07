<?php
 include("connection.php");
 
 session_start();

if(isset($_POST['login']))
{
  $name = mysql_real_escape_string($conn, $_POST['name']);
  $email     = mysql_real_escape_string($conn, $_POST['email']);
  $telNo     =$_POST['telNo'];
  $password  = md5($_POST['password']);
  $repassword = md5($_POST['repassword']);
  
   $select ="SELECT * FROM register WHERE email = '$username'  && password ='$password' ";
   $result = mysqli_query($conn, $select);
    if ( mysqli_num_rows($result) > 0) {
     
     $row = mysqli_fetch_array($result);
     if ($row['']) {
      $_SESSION['username'] = $row['name'];
      header('location:home.php');
     } 
    else{
      $error[] = 'incoorect email or password!';
      
    }
    }
};

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport"content="width=device-width,initial-scale=1">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link rel="stylesheet"  href="login.css">
	<title>login page</title>
</head>
<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="home.php" method="post">
                            <h3 class="text-center text-info">Login</h3>

                             <?php
                  if(isset($error)){ 
                    foreach ($error as $error) {
                    
                    echo '<span class="error-msg">'.$error.'</span>';
                  };
                };

                   ?>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="email" placeholder="email" id="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" placeholder="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="submit-btn" value="login" onclick="auth()" />
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="register.php" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  

    <script>
      function auth()
      {  
        var email = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        if (email == "admin@gmail.com" && password=="admin123") {
          window.location.assign("home.php");
          alert ("login successfully");

        }
        else{ alert("invalid information");
         return;

        
      }
    </script>
</body>
</html>

