<?php
// include Database co
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
// check request
if(isset($_POST))
{
    // get values
    $category_materi_id = $_POST['id'];
    $name = $_POST['name'];
    $name_seo = $_POST['name_seo'];
    // Updaste User details

    $query = mysqli_query($mysqli,"UPDATE is_category_materi SET name = '$name', name_seo = '$name_seo' WHERE category_materi_id = '$category_materi_id'")  or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));
  
    
    }
}
