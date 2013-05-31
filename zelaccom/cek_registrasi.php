<?php
// menjalankan session
	session_start();
	include "connect.php";

	$username = $_POST['username'];
	$password = $_POST['password'];

	// mencari password terenkripsi berdasarkan username
	$query = "SELECT * FROM registrasi WHERE username = '$username'";
	$hasil = mysql_query($query) or die("Error");
	$data  = mysql_fetch_array($hasil);

	$pengacak  = "NDJS3289JSKS190JISJI";

	// cek kesesuaian password terenkripsi dari form login
	// dengan password terenkripsi dari database
	if (md5($pengacak.md5($password).$pengacak) == $data['password'])
	{
		// jika sesuai, maka buat session untuk username
		$_SESSION['username'] = $username;

		// menampilkan menu ke halaman akses
		echo "<script>alert('Login sukses');</script>";
		echo "<meta http-equiv='refresh' content='1 URL=index.php'>";
	}
	else echo "<script>alert('Login Gagal');</script>";
	echo "<meta http-equiv='refresh' content='0 URL=index.php?menu=registrasi'>";

?>