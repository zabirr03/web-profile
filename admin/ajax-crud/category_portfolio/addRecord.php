<?php
session_start();

// Panggil koneksi database.php untuk koneksi database
require_once "../../../config/database.php";

// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login dan tampilkan pesan = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// jika user sudah login, maka jalankan perintah untuk ubah password
else {
	if(isset($_POST['name']) && isset($_POST['name_seo']))
	{
		$name = $_POST['name'];
		$name_seo = $_POST['name_seo'];
		
		$query = mysqli_query($mysqli,"INSERT INTO is_category_portfolio(name,name_seo) VALUES('$name', '$name_seo')")  or die('Ada kesalahan pada query delete : '.mysqli_error($mysqli));
		
	}

}
?>