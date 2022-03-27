<?php

	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "web_laundry";

	$koneksi = mysqli_connect($host, $user, $password, $database);

	if (mysqli_connect_errno()){
	echo "Gagal Terhubung ke database : " . mysqli_connect_error();
	}

?>