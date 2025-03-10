
<?php
session_start();

// Panggil koneksi database.php untuk koneksi database
require_once "../../../config/database.php";
require_once "../../../config/library.php";

// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login dan tampilkan pesan = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// jika user sudah login, maka jalankan perintah untuk insert, update, dan delete
else {
    if ($_GET['act']=='insert') {
        if (isset($_POST['save'])) {
            // ambil data hasil submit dari form
            $author              = mysqli_real_escape_string($mysqli, trim($_POST['author']));
            $is_category_materi_id = mysqli_real_escape_string($mysqli, trim($_POST['is_category_materi_id']));
            

            
            $nama_file          = $_FILES['file_materi']['name'];
            $ukuran_file        = $_FILES['file_materi']['size'];
            $tipe_file          = $_FILES['file_materi']['type'];
            $tmp_file           = $_FILES['file_materi']['tmp_name'];
            
            // tentuka extension yang diperbolehkan
            $allowed_extensions = array("zip", "rar", "doc", "docx", "ppt", "pptx", "pdf");
            
            // Set path folder tempat menyimpan imagenya
            $path               = "../../../materi/".$nama_file;
            
            // check extension
            $file               = explode(".", $nama_file);
            $extension          = array_pop($file);

            // Cek apakah tipe file yang diupload sesuai dengan allowed_extensions
            if(in_array($extension, $allowed_extensions)) {
                // Jika tipe file yang diupload sesuai dengan allowed_extensions, lakukan :
                if($ukuran_file <= 8000000) { // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
                    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
                    // Proses upload
                    if(move_uploaded_file($tmp_file, $path)) { // Cek apakah image berhasil diupload atau tidak
                        // Jika image berhasil diupload, Lakukan : 
                        // perintah query untuk menyimpan data ke tabel materi
                        $query = mysqli_query($mysqli, "INSERT INTO is_materi(nama_file,tanggal,author,is_category_materi_id)
                                                        VALUES('$nama_file','$tgl_sekarang','$author',$is_category_materi_id)")
                                                        or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));    

                        // cek query
                        if ($query) {
                            // jika berhasil tampilkan pesan berhasil simpan data
                            header("location: ../../main.php?module=materi&alert=1");
                        }   
                    } else {
                        // Jika image gagal diupload, tampilkan pesan gagal upload
                        header("location: ../../main.php?module=materi&alert=4");
                    }
                } else {
                    // Jika ukuran file lebih dari 1MB, tampilkan pesan gagal upload
                    header("location: ../../main.php?module=materi&alert=5");
                }
            } else {
                // Jika tipe file yang diupload bukan JPG / JPEG / PNG, tampilkan pesan gagal upload
                header("location: ../../main.php?module=materi&alert=6");
            }  
        }   
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['save'])) {
            if (isset($_POST['materi_id'])) {
                // ambil data hasil submit dari form
                $materi_id       = mysqli_real_escape_string($mysqli, trim($_POST['materi_id']));
                $author              = mysqli_real_escape_string($mysqli, trim($_POST['author']));
            $is_category_materi_id              = mysqli_real_escape_string($mysqli, trim($_POST['is_category_materi_id']));
            
                 
                $nama_file          = $_FILES['file_materi']['name'];
                $ukuran_file        = $_FILES['file_materi']['size'];
                $tipe_file          = $_FILES['file_materi']['type'];
                $tmp_file           = $_FILES['file_materi']['tmp_name'];
                
                // tentuka extension yang diperbolehkan
                $allowed_extensions = array("zip", "rar", "doc", "docx", "ppt", "pptx", "pdf");
                
                // Set path folder tempat menyimpan imagenya
                $path               = "../../../materi/".$nama_file;
                
                // check extension
                $file               = explode(".", $nama_file);
                $extension          = array_pop($file);

                // jika image tidak diubah
                if (empty($nama_file)) {
                    // perintah query untuk mengubah data pada tabel materi
                    $query = mysqli_query($mysqli, "UPDATE is_materi SET author        = '$author',
                                                                        tanggal='$tgl_sekarang',
                                                                        is_category_materi_id=$is_category_materi_id

                                                                      WHERE materi_id = '$materi_id'")
                                                    or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));

                    // cek query
                    if ($query) {
                        // jika berhasil tampilkan pesan berhasil update data
                        header("location: ../../main.php?module=materi&alert=2");
                    } 
                }
                // jika image diubah
                else {
                    // Cek apakah tipe file yang diupload sesuai dengan allowed_extensions
                    if(in_array($extension, $allowed_extensions)) {
                        // Jika tipe file yang diupload sesuai dengan allowed_extensions, lakukan :
                        if($ukuran_file <= 8000000) { // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
                            // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
                            // Proses upload
                            if(move_uploaded_file($tmp_file, $path)) { // Cek apakah image berhasil diupload atau tidak
                                // Jika image berhasil diupload, Lakukan : 
                                // perintah query untuk mengubah data pada tabel materi
                                $query = mysqli_query($mysqli, "UPDATE is_materi SET author        = '$author',tanggal='$tgl_sekarang',is_category_materi_id=$is_category_materi_id,
                                                                                        nama_file        = '$nama_file'
                                                                                  WHERE materi_id = '$materi_id'")
                                                                or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));

                                // cek query
                                if ($query) {
                                    // jika berhasil tampilkan pesan berhasil update data
                                    header("location: ../../main.php?module=materi&alert=2");
                                }
                            } else {
                                // Jika image gagal diupload, tampilkan pesan gagal upload
                                header("location: ../../main.php?module=materi&alert=4");
                            }
                        } else {
                            // Jika ukuran file lebih dari 1MB, tampilkan pesan gagal upload
                            header("location: ../../main.php?module=materi&alert=5");
                        }
                    } else {
                        // Jika tipe file yang diupload bukan JPG / JPEG / PNG, tampilkan pesan gagal upload
                        header("location: ../../main.php?module=materi&alert=6");
                    } 
                }      
            }
        }
    }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id'])) {
            $materi_id = $_GET['id'];
    
            // perintah query untuk menghapus data pada tabel materi
            
            // cek hasil query
            $data=mysqli_fetch_array(mysqli_query($mysqli,"SELECT nama_file FROM is_materi WHERE materi_id='$materi_id'"));
            if ($data['nama_file']!=''){
            mysqli_query($mysqli,"DELETE FROM is_materi WHERE materi_id ='$materi_id'");
            unlink("../../../materi/$_GET[namafile]");   
             }
            else{
             mysqli_query($mysqli,"DELETE FROM is_materi WHERE materi_id='$materi_id'");
            }
            // cek hasil query
            if ($data) {
                // jika berhasil tampilkan pesan berhasil delete data
                header("location: ../../main.php?module=materi&alert=3");
            }
        }
    }       
}       
?>