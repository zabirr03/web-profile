<?php
/* panggil file database.php untuk koneksi ke database */
require_once "config/database.php";
/* panggil fungsi untuk format tanggal */
require_once "config/fungsi_tanggal.php";

// fungsi untuk pemanggilan file halaman konten
// jika halaman konten yang dipilih home, panggil file view home
if ($_GET['page'] == 'home') {
	include "pages/home/view.php";
}

// jika halaman konten yang dipilih about, panggil file view about
if ($_GET['page'] == 'blog-single') {
	include "pages/blog-single/view.php";
}

// jika halaman konten yang dipilih service, panggil file view service
if ($_GET['page'] == 'file') {
	include "pages/file/view.php";
}
if ($_GET['page'] == 'blog') {
	include "pages/blog/view.php";
}
if ($_GET['page'] == 'download') {
	include "pages/file/download.php";
}
if ($_GET['page'] == 'blog-category') {
	include "pages/blog/blog-category.php";
}

// jika halaman konten yang dipilih portfolio, panggil file view portfolio
if ($_GET['page'] == 'services') {
	include "pages/services/view.php";
}
if ($_GET['page'] == 'detail-view') {
	include "pages/file/detail-view.php";
}

// jika halaman konten yang dipilih contact, panggil file view contact
if ($_GET['page'] == 'contact') {
	include "pages/contact/view.php";
}
?>