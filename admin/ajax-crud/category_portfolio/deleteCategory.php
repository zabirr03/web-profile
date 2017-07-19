<?php

session_start();

// Panggil koneksi database.php untuk koneksi database
require_once "../../../config/database.php";

// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login dan tampilkan pesan = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}else{


// check request
if(isset($_REQUEST['id']) && isset($_REQUEST['id']) != "")
{
    // include Database connection file
    // get user id
    $category_portfolio_id = $_REQUEST['id'];

    // delete User
    
     $query = mysqli_query($mysqli, "DELETE FROM is_category_portfolio WHERE category_portfolio_id = '$category_portfolio_id'")
                                            or die('Ada kesalahan pada query delete : '.mysqli_error($mysqli));

}
}
?>