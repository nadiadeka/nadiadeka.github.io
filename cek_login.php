<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	
	    <!-- ##### sweet alert ##### -->
		<link rel="stylesheet" href="sweetalert/dist/sweetalert2.min.css">
		<script src="sweetalert/dist/sweetalert2.all.min.js"></script>
		<script src="sweetalert/dist/sweetalert2.all.js"></script>
</head>
<body>
<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'config.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM member where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	$_SESSION['userid'] = $data["id_member"];

	// cek jika user login sebagai admin
	if($data['level']=="murid"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "murid";
		// alihkan ke halaman dashboard pegawai
		
echo"

<script language='JavaScript'>
swal({
	title: 'Selamat!',
	text: 'Kamu Berhasil Login!',
	icon: 'success',
	button : false
  });document.location='murid/index.php';
</script>";
		
	
	}else if($data['level']=="admin"){
		// buat session login dan username
		$_SESSION['email'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard pegawai
		header("location:admin/starter.php");
	}else{
   ?>

			<script>
swal ( "Oops" ,  "Ada yang salah!" ,  "error" )            
      document.location='index.php';
        </script>
<?php
	}
}else{
	?>

<script language='JavaScript'>
swal ({
	title: 'Oops!',
	text: 'Ada yang salah!',
	icon: 'error',
	button : false
  });
document.location='index.php';
	   </script>
<?php
}
?>	
</body>
</html>
