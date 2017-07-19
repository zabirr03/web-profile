
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
             $judul              = mysqli_real_escape_string($mysqli, trim($_POST['judul']));
              $judul_seo          = mysqli_real_escape_string($mysqli, trim($_POST['judul_seo']));
               $isi              = mysqli_real_escape_string($mysqli, trim($_POST['isi']));

            $is_category_article_id = mysqli_real_escape_string($mysqli, trim($_POST['is_category_article_id']));
            

            
            $nama_file          = $_FILES['file_image']['name'];
            $ukuran_file        = $_FILES['file_image']['size'];
            $tipe_file          = $_FILES['file_image']['type'];
            $tmp_file           = $_FILES['file_image']['tmp_name'];
            
            // tentuka extension yang diperbolehkan
            $allowed_extensions = array('jpg','jpeg','png');
            
            // Set path folder tempat menyimpan imagenya
            $path               = "../../../images/article/".$nama_file;
            
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
                        // perintah query untuk menyimpan data ke tabel article
                        $query = mysqli_query($mysqli, "INSERT INTO is_article(judul,judul_seo,isi,file_image,tanggal,author,is_category_article_id)
                                                        VALUES(
                                                        '$judul','$judul_seo','$isi','$nama_file','$tgl_sekarang','$author',$is_category_article_id)")
                                                        or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));    

                        // cek query
                        if ($query) {
                            // jika berhasil tampilkan pesan berhasil simpan data
                            header("location: ../../main.php?module=article&alert=1");
                        }   
                    } else {
                        // Jika image gagal diupload, tampilkan pesan gagal upload
                        header("location: ../../main.php?module=article&alert=4");
                    }
                } else {
                    // Jika ukuran file lebih dari 1MB, tampilkan pesan gagal upload
                    header("location: ../../main.php?module=article&alert=5");
                }
            } else {
                // Jika tipe file yang diupload bukan JPG / JPEG / PNG, tampilkan pesan gagal upload
                header("location: ../../main.php?module=article&alert=6");
            }  
        }   
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['save'])) {
            if (isset($_POST['article_id'])) {
                // ambil data hasil submit dari form
                $article_id       = mysqli_real_escape_string($mysqli, trim($_POST['article_id']));
               $author              = mysqli_real_escape_string($mysqli, trim($_POST['author']));
             $judul              = mysqli_real_escape_string($mysqli, trim($_POST['judul']));
              $judul_seo          = mysqli_real_escape_string($mysqli, trim($_POST['judul_seo']));
               $isi              = mysqli_real_escape_string($mysqli, trim($_POST['isi']));

            $is_category_article_id = mysqli_real_escape_string($mysqli, trim($_POST['is_category_article_id']));
            
                 
                $nama_file          = $_FILES['file_image']['name'];
                $ukuran_file        = $_FILES['file_image']['size'];
                $tipe_file          = $_FILES['file_image']['type'];
                $tmp_file           = $_FILES['file_image']['tmp_name'];
                
                // tentuka extension yang diperbolehkan
                $allowed_extensions = array('jpg','jpeg','png');
                
                // Set path folder tempat menyimpan imagenya
                $path               = "../../../images/article/".$nama_file;
                
                // check extension
                $file               = explode(".", $nama_file);
                $extension          = array_pop($file);

                // jika image tidak diubah
                if (empty($nama_file)) {
                    // perintah query untuk mengubah data pada tabel article
                    $query = mysqli_query($mysqli, "UPDATE is_article SET author        = '$author',
                                                                        tanggal='$tgl_sekarang',
                                                                        isi='$isi',
                                                                        judul='$judul',
                                                                        judul_seo='$judul_seo',
                                                                        is_category_article_id=$is_category_article_id

                                                                      WHERE article_id = '$article_id'")
                                                    or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));

                    // cek query
                    if ($query) {
                        // jika berhasil tampilkan pesan berhasil update data
                        header("location: ../../main.php?module=article&alert=2");
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
                                // perintah query untuk mengubah data pada tabel article
                                $query = mysqli_query($mysqli, "UPDATE is_article SET 
                                    author        = '$author',
                                                                        tanggal='$tgl_sekarang',
                                                                        isi='$isi',
                                                                        judul='$judul',
                                                                        judul_seo='$judul_seo',
                                                                        is_category_article_id=$is_category_article_id,

                                                                                        file_image= '$nama_file'
                                                                                  WHERE article_id = '$article_id'")
                                                                or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));

                                // cek query
                                if ($query) {
                                    // jika berhasil tampilkan pesan berhasil update data
                                    header("location: ../../main.php?module=article&alert=2");
                                }
                            } else {
                                // Jika image gagal diupload, tampilkan pesan gagal upload
                                header("location: ../../main.php?module=article&alert=4");
                            }
                        } else {
                            // Jika ukuran file lebih dari 1MB, tampilkan pesan gagal upload
                            header("location: ../../main.php?module=article&alert=5");
                        }
                    } else {
                        // Jika tipe file yang diupload bukan JPG / JPEG / PNG, tampilkan pesan gagal upload
                        header("location: ../../main.php?module=article&alert=6");
                    } 
                }      
            }
        }
    }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id'])) {
            $article_id = $_GET['id'];
    
            // perintah query untuk menghapus data pada tabel article
            
            // cek hasil query
            $data=mysqli_fetch_array(mysqli_query($mysqli,"SELECT file_image FROM is_article WHERE article_id='$article_id'"));
            if ($data['file_image']!=''){
            mysqli_query($mysqli,"DELETE FROM is_article WHERE article_id ='$article_id'");
            unlink("../../../images/article/$_GET[namafile]");   
             }
            else{
             mysqli_query($mysqli,"DELETE FROM is_article WHERE article_id='$article_id'");
            }
            // cek hasil query
            if ($data) {
                // jika berhasil tampilkan pesan berhasil delete data
                header("location: ../../main.php?module=article&alert=3");
            }
        }
    }       
}       
?>