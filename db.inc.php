<?php 

$conn = mysqli_connect('localhost', 'root', '', 'cs3500_imagedb');

if(!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

?>