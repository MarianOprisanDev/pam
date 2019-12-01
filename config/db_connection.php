<?php
// connect to database
$conn = mysqli_connect('localhost', 'pamweb', 'password', 'pam');

// check database connection
if (!$conn) {
	echo 'Connection error: ', mysqli_connect_error();
}

?>