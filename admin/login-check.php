<?php
// panggil file untuk koneksi ke database
require_once "../config/database.php";
// ambil data hasil submit dari form
$username = mysqli_real_escape_string($mysqli, stripslashes(strip_tags(htmlspecialchars(trim($_POST['username'])))));
$password = md5(mysqli_real_escape_string($mysqli, stripslashes(strip_tags(htmlspecialchars(trim($_POST['password']))))));

// pastikan username dan password adalah berupa huruf atau angka.
if (!ctype_alnum($username) OR !ctype_alnum($password)) {
	header('location:index.php?alert=1');
}
else {
	// ambil data dari tabel user untuk pengecekan berdasarkan inputan username dan passrword
	$query = mysqli_query($mysqli, "SELECT * FROM is_user WHERE username='$username' AND password='$password'")
									or die('Ada kesalahan pada query user: '.mysqli_error($mysqli));
	$rows  = mysqli_num_rows($query);

	// jika data ada, jalankan perintah untuk membuat session
	if ($rows > 0) {
		$data  = mysqli_fetch_assoc($query);
		session_start();
		$_SESSION['user_id']  = $data['user_id'];
		$_SESSION['username'] = $data['username'];
		$_SESSION['password'] = $data['password'];
		$_SESSION['fullname'] = $data['fullname'];
		$_SESSION['avatar']	  = $data['avatar'];
		
		// lalu alihkan ke halaman user
		header('location:main.php?module=home');
	}

	// jika data tidak ada, alihkan ke halaman login dan tampilkan pesan = 1
	else {
		header("location:index.php?alert=1");
	}
}
?>
