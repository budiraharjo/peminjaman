<?php session_start(); ?> 
<?php 
// mengaktifkan session php

// menghubungkan dengan koneksi
include 'db.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($bd,"select * from user where username='$username' AND password='$password' ");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);



if($cek > 0){
 
	$data = mysqli_fetch_assoc($data);
 
	// cek jika user login sebagai admin
	if($data['level']=="Admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "Admin";
		// alihkan ke halaman dashboard admin
		echo '<script type="text/javascript">
		alert("Lgoin berhasil ..!");
		location="admin.php";</script>';
 
	// cek jika user login sebagai pegawai
	}else if($data['level']=="User"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "User";
		// alihkan ke halaman dashboard pegawai
		echo '<script type="text/javascript">
		alert("Lgoin berhasil ..!");
		location="index.php";</script>';
 
	// cek jika user login sebagai pengurus
	}else{
 
		// alihkan ke halaman login kembali
		echo '<script type="text/javascript">
		alert("Login gagal ..!");
		location="login.php";</script>';
	}	
}else{
	echo '<script type="text/javascript">
	alert("Login gagal ..!");
	location="login.php";</script>';
}
?>