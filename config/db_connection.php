<?php
// connect to database
$conn = mysqli_connect('192.168.0.200', 'pamweb', 'password', 'pam');

// check database connection
if (!$conn) {
	echo 'Connection error: ', mysqli_connect_error();
}

?>