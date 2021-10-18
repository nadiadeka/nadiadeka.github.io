<?php 
$koneksi = mysqli_connect("localhost","root","","clever");
$host = "localhost";
$username = "root";
$password = "";
$db = "clever";
$connect = mysqli_connect($host, $username, $password, $db) or die ("koneksi database gagal!");
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>