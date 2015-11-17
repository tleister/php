<?php
session_start();
$servername = "localhost";
$username = "tleister";
$password = "humyjyjun";
$dbname = "tleister36_lecturesnippets";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>
