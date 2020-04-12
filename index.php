<?php include('server.php');
	?>
<!DOCTYPE html>
<html>
<head>
    <title> User Login and Registration </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="login-box"></div>
   <div class="row">
   <div class="col-md-6 login-left" >
	<div class="content">
	   <?php if (isset($SESSION['success'])):?>
	      <div class="error success">
		    <h3>
			   <?php 
			       echo $_SESSION['success'];
				   unset($_SESSION['success']);
				 ?>
			</h3>
			</div>
	   <?php endif ?>
	   
	   <?php if (isset($_SESSION['firstname'])): ?>
	   <p><h2 style ="color:Blue;">Welcome</h2> <h3><strong><?php echo $_SESSION['firstname']; ?></strong></h3></p>
	   <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
	 <?php endif ?>
   </div>	 
</div>
<div>
<div>
</body>

</html>