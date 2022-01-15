<?php
include 'koneksi.php';
	$user = mysqli_real_escape_string($link, $_POST['username']);
	$pass = mysqli_real_escape_string($link, $_POST['password']);
	
	$query = mysqli_query($link, "SELECT * FROM akun WHERE username ='$user' AND 
		password='$pass'");
	$data = mysqli_fetch_array($query);
	$username = $data['username'];
	$password = $data['password'];

	if ($user==$username && $pass==$password){
		session_start();
		$_SESSION['nama'] = $username;
		echo "<script> alert('Selamat Datang') </script>";
		echo "Berhasil Login";
	}
		else{
			echo "<script> alert('Username dan Password Tidak Ditemukan');</script>";
			echo "<meta http-equiv='refresh' content='0; url=index.php'>";
	}
?>