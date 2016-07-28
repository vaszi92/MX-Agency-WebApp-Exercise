<?php
session_start();
include_once("dbconnect.php");
include_once("functions.php");

if(isset($_POST['btn-signup']))
{
    $safe_username = mysqli_real_escape_string($connection, $_POST['username']);
    $safe_password = md5(mysqli_real_escape_string($connection, $_POST['password']));
	$safe_password2 = md5(mysqli_real_escape_string($connection, $_POST['password2']));
    
	//Validations
	if(($safe_username == "")||($safe_password == "")||($safe_password2 == "")) {
       $_SESSION["message"] = "All fields must be filled!";
 	   redirect_to("registration.php");	
	}
	if(!isValid($safe_username)|| !isValid($safe_password)){
       $_SESSION["message"] = "Fields must contain only valid characters.";
  	   redirect_to("registration.php");
	}
	if($safe_password !== $safe_password2){
       $_SESSION["message"] = "The entered passwords must be the same.";
   	   redirect_to("registration.php");
	}
	
    $test_query = 'SELECT username FROM web_app_ex_users WHERE username = "'.$safe_username.'"';
    $check_username = mysqli_query($connection, $test_query);

    if(mysqli_num_rows($check_username) > 0) {
        $_SESSION['message'] = "This username has already been registered, please choose another one!";
		redirect_to("registration.php");
    }
	 
	$query = "INSERT INTO web_app_ex_users(username,password) VALUES('$safe_username','$safe_password')";
	$regentry = mysqli_query($connection, $query);
	if($regentry){
		$_SESSION['message'] = "You've been successfully registered, please log in!";
        redirect_to("index.php");      
    }
    else
    {   
		$_SESSION['message'] = "An error occured while registering, please try again!";
    }
}
mysqli_close($connection);
?>