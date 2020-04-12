<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title> User Login and Registration </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container" >
  <div class="login-box"></div>
   <div class="row">
   <div class="col-md-10 login-left" >
<h2> Registration Form </h2>
<form method="post" action="register.php">
<?php include('errors.php'); ?>


    <div class="form-group" >
<label>First name</label>
<input type="text" name="firstname" class="form-control" required>
</div>

    <div class="form-group">
<label>Last name</label>
<input type="text" name="lastname" class="form-control" required>
</div>


    <div class="form-group">
<label>Email</label>
<input type="email" id="email" name="email" class="form-control" required>
</div>

    <div class="form-group">
<label>Password</label>
<input type="password" name="password_1"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{7,}" title=" one number, one uppercase, one lowercase letter, and more than 6 characters"  class="form-control" required>
</div> 

<div class="form-group">
<label>Confirm Password</label>
<input type="password" name="password_2"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{7,}" title=" one number, one uppercase, one lowercase letter, and  more than 6 characters"  class="form-control" required>
</div> 

<div class="form-group">
<label>Gender</label><br>
<label for="male">Male</label>
  <input type="radio" name="gender" id="male" value="male" style = "margin-right:70px;">
  <label for="female">Female</label>
  <input type="radio" name="gender" id="female" value="female" ><br>
  
</div>
    


<div class="form-group">
<label><h6>By clicking Agree you will accept the term and conditions associated with this page , If You don't want to continue please exit the page .</h6></label>
<button type="submit" name="register" class="btn-primary"> AGREE </button>
</div>
</form>
</div>
</div>

</body>

</html>