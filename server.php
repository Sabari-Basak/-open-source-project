<?php
session_start();
$firstname = "";
$lastname = "";
$email = "";

$a = "registration";
$errors = array();
    $db = mysqli_connect('localhost', 'root','', $a,'3308');
	
	if(isset($_POST['register'])){
		$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		
		$gender = mysqli_real_escape_string($db, $_POST['gender']);
	
	if(empty($firstname)) {
			array_push($errors, "firstname is required");
		}
		if(empty($lastname)) {
			array_push($errors, "lastname is required");
		}
			
		if(empty($email)) {
			array_push($errors, "email is required");
		}
		if(empty($password_1)) {
			array_push($errors, "Password is required");
		}
		if($password_1 != $password_2) {
			array_push($errors, "Check Password again");
			
		}
		
		if(empty($gender)) {
			array_push($errors, "gender is required");
		}
	
	
		
		
		
		if(count($errors) == 0 ){
			$password= md5($password_1);
			$sql ="INSERT INTO usertable (firstname , lastname , email, password , gender )
			          VALUES ('$firstname','$lastname', '$email', '$password', '$gender')";
		 mysqli_query($db,$sql);
		 $_SESSION['firstname'] = $firstname;
		 $_SESSION['success'] = "You are now logged in";
		 header('location: index.php');
		}
		
    }
	if(isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['firstname']);
		header('location: register.php');
	}
		
		?>