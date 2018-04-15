<?php 
include 'dbcon.php';
$host = 'localhost';
$user = 'root';
$pass = '';

$conn = mysqli_connect($host, $user, $pass, 'cs3500_imagedb');

if(!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

?>