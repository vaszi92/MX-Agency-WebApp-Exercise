<?php
include_once("includes/dbconnect.php");
include_once("includes/functions.php");
include_once("home.php");

if(isset($_POST['btn-submit'])) {
	global $connection;
	global $userRow;
	
	$note = htmlentities(mysqli_real_escape_string($connection, $_POST['new_note']));
	
	//validations
	if($note == ""){
		$_SESSION["message"] = "You must enter a note in order to be able to post it.";
		redirect_to("home.php");	
	}
	
    $notelength = strlen($note);
	if($notelength > 500) {
		$_SESSION["message"] = "Your note must be less than 500 characters.";
		redirect_to("home.php");	
	}
	
	
    
	$query  = "INSERT INTO web_app_ex_notes (";
	$query .= "user_id, content";
	$query .= ") VALUES (";
	$query .= "'{$userRow['id']}', '{$note}'";
	$query .= ")";
	$result = mysqli_query($connection, $query);
	
	if($result) {
		// Success
		$_SESSION["message"] = "Note created.";
		redirect_to("home.php");
	} else {
		// Failure
		$_SESSION["message"] = "Note creation failed.";
		redirect_to("home.php");
	}
}
mysqli_close($connection);
?>