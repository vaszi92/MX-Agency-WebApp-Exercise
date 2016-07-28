<?php
session_start();
include_once("includes/dbconnect.php");
include_once("includes/functions.php");

if(isset($_POST['btn-login'])){
	global $errors;
    $safe_username = mysqli_real_escape_string($connection, $_POST['username']);
    $safe_password = mysqli_real_escape_string($connection, $_POST['password']);
	
	//Validations
	if(($safe_username == "")||($safe_password == "")) {
       $_SESSION["message"] = "All fields must be filled!";
 	   redirect_to("index.php");	
	}

    $query= "SELECT * FROM web_app_ex_users WHERE username = '" .$safe_username. "'";

    $result = $connection->query($query);
	confirm_query($result);
    $row=mysqli_fetch_array($result);
        
    if($row['password'] == md5($safe_password))
    {
        $_SESSION['user'] = $row['id'];
        redirect_to("home.php");
    }
    else
    { 
       $_SESSION["message"] = "Incorrect username and/or password, please try again!";
	   redirect_to("index.php"); 
    }
}
?>