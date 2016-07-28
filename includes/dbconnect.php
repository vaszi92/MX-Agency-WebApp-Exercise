<?php

//Setting up connection
$servername = "127.0.0.1";
$username = "root";
$password = "root";

// Create connection
$dbname = 'web_app_exercise';
$connection = mysqli_connect($servername, $username, $password, $dbname);


//Validating connection
if(!mysqli_connect($servername, $username, $password))
{
	die('Error connecting to server!');
}
if(!mysqli_select_db($connection, $dbname))
{
	die('Error connecting to database!');
}

?>