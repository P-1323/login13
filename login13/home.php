<?php
 include("connection.php");
 
 session_start();
 if (! isset($_SESSION['uername'])) {
 	header('location:login.php');
 }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<link rel="stylesheet" type="text/css" href="./stylehome.css">

	<title>Home Page</title>

</head>
<body>
	<header> 

<div class="main">
	<dir class="logo">
		<img src="logo.jpg">
	</dir>
	<ul>
	    <li class="active"><a href="home.php">Home</a></li>
	    <li><a href="services.php">Services</a></li>
	    <li><a href="gallery.php">Gallery</a></li>
	    <li><a href="#">About</a></li>
	    <li><a href="#">Contact</a></li>
	    <li><a href="logout.php">Logout</a></li>
	</ul>
</div>
	</header>
  <h2>LETS PLAN A TRIP</h2>
   <div class="container">
  <div class="content">
    <h1>TRAVEL</h1>
   <p> The beauty of the journey is found not in the destination, 
  but in the scenery along the way.</p>
   
  </div>
</div> 

</body>
</style>
</html
