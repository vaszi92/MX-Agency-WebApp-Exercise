<?php

function redirect_to($new_location) {
  header("Location: ".$new_location);
  exit;
}

function isValid($str) {
    return !preg_match('/[^A-Za-z0-9.#\\-$]/', $str);
}

function confirm_query($result) {
	if (!$result) {
		die("Database query failed.");
	}
}

function find_notes_by_id($user_id) {
	global $connection;
	$row = array();
	
	$safe_user_id = mysqli_real_escape_string($connection, $user_id);
	
	$query = 'SELECT content ';
	$query .= 'FROM web_app_ex_notes ';
	$query .= 'WHERE user_id = '.$safe_user_id;
	$result = mysqli_query($connection, $query);
	
	confirm_query($result);
	
	$final_data = array();
    while($row = mysqli_fetch_assoc($result)){ // iterates over the result-set object to get all data
        $final_data[] = $row; //assigns value to the array
    }
	return $final_data;

}

?>
