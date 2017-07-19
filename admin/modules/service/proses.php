
<?php
session_start();

// Panggil koneksi database.php untuk koneksi database
require_once "../../../config/database.php";

// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login dan tampilkan pesan = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// jika user sudah login, maka jalankan perintah untuk update
else {
    if (isset($_POST['save'])) {
        if (isset($_POST['service_id'])) {
            // ambil data hasil submit dari form
            $service_id = mysqli_real_escape_string($mysqli, trim($_POST['service_id']));
            $title      = mysqli_real_escape_string($mysqli, trim($_POST['title']));
            $content    = mysqli_real_escape_string($mysqli, trim($_POST['content']));

            // perintah query untuk mengubah data pada tabel service
            $query = mysqli_query($mysqli, "UPDATE is_service SET title      = '$title',
                                                                  content    = '$content'
                                                            WHERE service_id = '$service_id'")
                                            or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));
            
            // cek query
            if ($query) {
                // jika berhasil alihkan ke halaman service
                header("location: ../../main.php?module=service");
            }       
        }
    }   
}       
?>