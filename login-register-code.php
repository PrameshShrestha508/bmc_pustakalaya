<?php
	include('config.php');
// LOGIN USER

if (isset($_POST['lsubmit']))
 {
	$username = mysqli_real_escape_string($connection,$_POST['uname']);
	$password = mysqli_real_escape_string($connection,$_POST['password']);


		$query = "SELECT * FROM users WHERE name='$username' AND password='$password'";
		$results = mysqli_query($connection, $query);
		if (mysqli_num_rows($results) == 1) 
        {
			session_start();
			$_SESSION['username']=$username;
		
		  $_SESSION['success'] = "You are now logged in";
		  header('location: index.php');
		}
        else 
        {
			// array_push($errors, "Wrong username/password combination");
			header('location:login-register.php');
		}
 	 }
    ?>

  


<?php

// initializing variables
$errors = array(); 
// REGISTER USER
if (isset($_POST['rsubmit'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($connection, $_POST['uname']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $phone = mysqli_real_escape_string($connection, $_POST['phone']);
  $address = mysqli_real_escape_string($connection, $_POST['address']);
  $password = mysqli_real_escape_string($connection, $_POST['password']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($phone)) { array_push($errors, "Phone NO is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $sql = "SELECT * FROM users WHERE name='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($connection, $sql);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['name'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
else {
  	$password = $password;//encrypt the password before saving in the database

  	$query = "INSERT INTO users (name, email,phone,address,password) 
  			  VALUES('$username', '$email','$phone','$address','$password')";
  	$result=mysqli_query($connection, $query);

  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location:login-register.php');
  }
}
?>
