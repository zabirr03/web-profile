
<?php
session_start();

// Panggil koneksi database.php untuk koneksi database
require_once "../../../config/database.php";

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
              $username              = mysqli_real_escape_string($mysqli, trim($_POST['username']));
                $fullname              = mysqli_real_escape_string($mysqli, trim($_POST['fullname']));
                $email                 = mysqli_real_escape_string($mysqli, trim($_POST['email']));
                $password=md5(mysqli_real_escape_string($mysqli, trim($_POST['password'])));
                $phone                 = mysqli_real_escape_string($mysqli, trim($_POST['phone']));
                $age                 = mysqli_real_escape_string($mysqli, trim($_POST['age']));
                $address                 = mysqli_real_escape_string($mysqli, trim($_POST['address']));

               
            $nama_file          = $_FILES['avatar']['name'];
            $ukuran_file        = $_FILES['avatar']['size'];
            $tipe_file          = $_FILES['avatar']['type'];
            $tmp_file           = $_FILES['avatar']['tmp_name'];
            
            // tentuka extension yang diperbolehkan
            $allowed_extensions = array('jpg','jpeg','png');
            
            // Set path folder tempat menyimpan imagenya
            $path               = "../../../images/user/".$nama_file;
            
            // check extension
            $file               = explode(".", $nama_file);
            $extension          = array_pop($file);

            // Cek apakah tipe file yang diupload sesuai dengan allowed_extensions
            if(in_array($extension, $allowed_extensions)) {
                // Jika tipe file yang diupload sesuai dengan allowed_extensions, lakukan :
                if($ukuran_file <= 1000000) { // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
                    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
                    // Proses upload
                    if(move_uploaded_file($tmp_file, $path)) { // Cek apakah image berhasil diupload atau tidak
                        // Jika image berhasil diupload, Lakukan : 
                        // perintah query untuk menyimpan data ke tabel user
                        $query = mysqli_query($mysqli, "INSERT INTO is_user(username,fullname,email,password,avatar,phone,age,address)
                                                        VALUES('$username','$fullname','$email','$password','$nama_file','$phone','$age','$address')")
                                                        or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));    

                        // cek query
                        if ($query) {
                            // jika berhasil tampilkan pesan berhasil simpan data
                            header("location: ../../main.php?module=user&alert=1");
                        }   
                    } else {
                        // Jika image gagal diupload, tampilkan pesan gagal upload
                        header("location: ../../main.php?module=user&alert=4");
                    }
                } else {
                    // Jika ukuran file lebih dari 1MB, tampilkan pesan gagal upload
                    header("location: ../../main.php?module=user&alert=5");
                }
            } else {
                // Jika tipe file yang diupload bukan JPG / JPEG / PNG, tampilkan pesan gagal upload
                header("location: ../../main.php?module=user&alert=6");
            }  
        }   
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['save'])) {
            if (isset($_POST['user_id'])) {
                // ambil data hasil submit dari form
                $user_id       = mysqli_real_escape_string($mysqli, trim($_POST['user_id']));
                $username              = mysqli_real_escape_string($mysqli, trim($_POST['username']));
                $fullname              = mysqli_real_escape_string($mysqli, trim($_POST['fullname']));
                $email                 = mysqli_real_escape_string($mysqli, trim($_POST['email']));
              
                  $phone                 = mysqli_real_escape_string($mysqli, trim($_POST['phone']));
                $age                 = mysqli_real_escape_string($mysqli, trim($_POST['age']));
                $address                 = mysqli_real_escape_string($mysqli, trim($_POST['address']));


               
                
                $nama_file          = $_FILES['avatar']['name'];
                $ukuran_file        = $_FILES['avatar']['size'];
                $tipe_file          = $_FILES['avatar']['type'];
                $tmp_file           = $_FILES['avatar']['tmp_name'];
                
                // tentuka extension yang diperbolehkan
                $allowed_extensions = array('jpg','jpeg','png');
                
                // Set path folder tempat menyimpan imagenya
                $path               = "../../../images/user/".$nama_file;
                
                // check extension
                $file               = explode(".", $nama_file);
                $extension          = array_pop($file);

                // jika image tidak diubah
                if (empty($nama_file)) {
                    // perintah query untuk mengubah data pada tabel user
                    $query = mysqli_query($mysqli, "UPDATE is_user SET username        = '$username',
                                                                    fullname='$fullname',
                                                                    password='$password',
                                                                    email='$email',
                                                                    phone='$phone',
                                                                    age='$age',
                                                                    address='$address'

                                                                      WHERE user_id = '$user_id'")
                                                    or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));

                    // cek query
                    if ($query) {
                        // jika berhasil tampilkan pesan berhasil update data
                        header("location: ../../main.php?module=user&alert=2");
                    } 
                }
                // jika image diubah
                else {
                    // Cek apakah tipe file yang diupload sesuai dengan allowed_extensions
                    if(in_array($extension, $allowed_extensions)) {
                        // Jika tipe file yang diupload sesuai dengan allowed_extensions, lakukan :
                        if($ukuran_file <= 1000000) { // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
                            // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
                            // Proses upload
                            if(move_uploaded_file($tmp_file, $path)) { // Cek apakah image berhasil diupload atau tidak
                                // Jika image berhasil diupload, Lakukan : 
                                // perintah query untuk mengubah data pada tabel user
                                $query = mysqli_query($mysqli, "UPDATE is_user SET username        = '$username',
                                                                    fullname='$fullname',
                                                                    
                                                                    email='$email',
                                                                 avatar       = '$nama_file',
                                                                  phone='$phone',
                                                                    age='$age',
                                                                    address='$address'
                                                                                  WHERE user_id = '$user_id'")
                                                                or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));

                                // cek query
                                if ($query) {
                                    // jika berhasil tampilkan pesan berhasil update data
                                    header("location: ../../main.php?module=user&alert=2");
                                }
                            } else {
                                // Jika image gagal diupload, tampilkan pesan gagal upload
                                header("location: ../../main.php?module=user&alert=4");
                            }
                        } else {
                            // Jika ukuran file lebih dari 1MB, tampilkan pesan gagal upload
                            header("location: ../../main.php?module=user&alert=5");
                        }
                    } else {
                        // Jika tipe file yang diupload bukan JPG / JPEG / PNG, tampilkan pesan gagal upload
                        header("location: ../../main.php?module=user&alert=6");
                    } 
                }      
            }
        }
    }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id'])) {
            $user_id = $_GET['id'];
    
            // perintah query untuk menghapus data pada tabel user
           $data=mysqli_fetch_array(mysqli_query($mysqli,"SELECT avatar FROM is_user WHERE user_id='$user_id'"));
            if ($data['avatar']!=''){
            mysqli_query($mysqli,"DELETE FROM is_user WHERE user_id ='$user_id'");
            unlink("../../../images/user/$_GET[namafile]");   
             }
            else{
             mysqli_query($mysqli,"DELETE FROM is_user WHERE user_id='$user_id'");
            }
            // cek hasil query
            if ($data) {
                // jika berhasil tampilkan pesan berhasil delete data
                header("location: ../../main.php?module=user&alert=3");
            }
        }
    }       
}       
?>