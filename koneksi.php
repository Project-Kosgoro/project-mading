<?php

	$db_host     = "localhost";
	$db_user     = "root";
	$db_password = "";
	$db_name     = "db_akun";

	$link = mysqli_connect($db_host, $db_user, $db_password, $db_name);

	if (!$link){
		die("Gagal Koneksi". " - ".mysqli_connect_error());
		exit();
	}

?>