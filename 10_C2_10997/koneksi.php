<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="tugas10"; // Database name
$conn = mysqli_connect($host, $username, $password,$db_name);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
?>