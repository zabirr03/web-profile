-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2017 at 08:07 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `is_about`
--

CREATE TABLE `is_about` (
  `about_id` int(1) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `is_about`
--

INSERT INTO `is_about` (`about_id`, `title`, `content`) VALUES
(1, 'My Story', '<p>Hello, my name is Muhammad Farid. I&#39;m from Ponorogo, East Java, and now I live in Keputih,Sukolilo,Surabaya.I&#39;m web developer since 2 years ago, when I take department of IT engineering on Vocational High School SMK TI Global Ponorogo.I passionate to learn about latest technology of website development.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `is_article`
--

CREATE TABLE `is_article` (
  `article_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `judul_seo` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `file_image` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `author` varchar(255) NOT NULL,
  `is_category_article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `is_article`
--

INSERT INTO `is_article` (`article_id`, `judul`, `judul_seo`, `isi`, `file_image`, `tanggal`, `author`, `is_category_article_id`) VALUES
(3, 'Cara Enjoy Menaklukkan Semua Bahasa Pemrograman', 'cara-enjoy-menaklukkan-semua-bahasa-pemrograman', '<p style="text-align: justify;">Pada prinsipnya sama seperti kita ingin menuju Roma, akan ada banyak jalan. Kita bisa lewat Bogor, kemudian ke Bandung lalu sampai di Roma. Atau kita juga bisa lewat Karawang, kemudian ke Jakarta, selanjutnya mendaki gunung Krakatau dan sampailah di Roma (anggap saja itu benar :D). Ya, untuk <strong>menjadi seorang programmer</strong> pun demikian, ada banyak cara yang bisa ditempuh untuk belajarnya.</p>\r\n\r\n<p style="text-align: justify;">Beberapa di antara kita tentu berbeda-beda caranya dalam <a class="record-data" href="https://www.codepolitan.com/tag/belajar-pemrograman" target="_blank"><strong>belajar pemrograman</strong></a>, dan ini dipengaruhi oleh banyak faktor, seperti latar belakang, kecepatan belajar, keadaan ekonomi dan juga mungkin lingkungan. Selain itu, cara saya jatuh cinta dengan pemrograman bisa jadi berbeda dengan cara Kamu. Dan mungkin itu pun mempengaruhi.</p>\r\n\r\n<p style="text-align: justify;">Sesuatu yang harus kita pahami adalah, bahwa tidak mungkin hari ini ingin jadi seorang master programmer, kemudian kita hanya nonton tv, kemudian tidur dan pagi harinya kita tiba-tiba bisa membuat program super keren yang bisa mengalahkan sofware buatan Microsoft. Tidak ada ceritanya kita sedang berjalan-jalan di musium Taman Mini, tiba-tiba ada seekor laba-laba yang menggigit kita, kemudian kita ketiduran di jalanan, dibangunkan satpam dan setelah bangun kita langsung bisa coding sambil bergelantungan di pohon. Satu hal yang harus kita sepakati adalah, ada sebuah proses yang harus kita lalui untuk itu.</p>\r\n\r\n<p style="text-align: justify;">Pernah ada yang bertanya pada saya, &ldquo;Kak, saya sudah lama ingin belajar pemrograman, gimana ya caranya?&rdquo;. Kemudian saya tanyakan, &ldquo;Apa yang sudah kamu lakukan supaya Kamu bisa belajar pemrograman?&rdquo;, kemudian dia menggeleng dan menjawab &ldquo;belum ngapa-ngapain sih&rdquo;. Kemudian saya tanya, &ldquo;Kamu sudah coba beli buku tentang pemrograman?&rdquo;, dia jawab &ldquo;belum&rdquo;. &ldquo;Kamu sudah baca artikel di internet tentang pemrograman?&rdquo;, dia pun menjawab belum. Saya kaget, kok bisa menginginkan sesuatu, tapi tidak melakukan sesuatu untuk mencapainya? Semua butuh proses kawan...</p>\r\n\r\n<p style="text-align: justify;">Sesuatu yang saya ingin sampaikan di atas adalah, buat Kamu yang ingin bisa pemrograman, Kamu harus siap untuk menjalani prosesnya, tidak ada yang instan untuk pandai pemrograman. Tidak gampang memang, tapi saya jamin akan menarik. Kalau kamu sependapat dengan saya, sebenarnya programming itu bukan hanya sebatas ilmu untuk membuat program komputer, tetapi juga merupakan gaya hidup, dan kamu bisa menikmatinya.</p>\r\n\r\n<p style="text-align: justify;">Baca juga: <a class="record-data" href="https://www.codepolitan.com/coder-journey-begin/" target="_blank">Semua yang Perlu Kamu Ketahui untuk Memulai Belajar Pemrograman</a></p>\r\n\r\n<p style="text-align: justify;">Artikel ini saya tulis bukan untuk yang sudah mahir pemrograman, tidak... tidak mungkin saya mengajarkan ikan cara untuk berenang :D. Artikel ini khusus untuk Kamu yang baru melihat keindahan dari pemrograman, dan kamu tergoda untuk mendalaminya, karena kamu melihat ada secercah kebahagiaan yang bisa didapatkan di dalamnya, namun Kamu bingung bagaimana cara memulainya.</p>\r\n\r\n<p style="text-align: justify;">Apa yang akan saya sampaikan selanjutnya, tidak bersifat absolute, artinya tidak mesti demikian. Karena seperti yang saya singgung di awal, ada banyak jalan untuk menuju Roma. Dan cara setiap orang berbeda-beda. Namun semoga ini bisa membantu Kamu untuk memulai. Buat teman-teman yang sudah lama mendalami programming, dan punya sebuah &ldquo;cara&rdquo;, nanti bisa dishare juga ya di kotak komentar, itu pasti akan bermanfaat.</p>\r\n\r\n<p style="text-align: justify;">Berikut ini adalah beberapa hal yang bisa Kamu lakukan untuk memulai belajar pemrograman:</p>\r\n\r\n<h2 style="text-align: justify;">1. Mengerti dulu apa itu &quot;programming&quot;</h2>\r\n\r\n<p style="text-align: justify;">Sebelum Kamu melakukan sesuatu, Kamu harus tau dulu dong apa yang ingin Kamu lakukan. Kamu harus tau dulu apa itu programming. Sama seperti Kamu suka seorang wanita, sebelum Kamu mulai melakukan pendekatan, apalagi menembaknya, minimalnya Kamu harus punya informasi tentang dia. Misalnya Kamu harus tau berapa jumlah lubang hidungnya, apakah dia makan menggunakan tangan atau tidak, bagaimana cara berjalannya, apakah kakinya ada 2, apakah ibunya perempuan :D. Semakin banyak informasi yang Kamu tau, maka akan semakin baik. Dan mungkin akan membuat Kamu semakin jatuh cinta.</p>\r\n\r\n<p style="text-align: justify;">Sebagian dari kita tidak mencoba mendalami pemrograman, karena mungkin hanya tau sebagian saja. Misalnya hanya tau, &ldquo;pemrograman itu lo akan nulis kode di texteditor dan lo bisa bikin program&rdquo;. Kalau hanya itu yang diketahui, wajar saja jika dia tidak tertarik untuk belajar pemrograman.</p>\r\n\r\n<p style="text-align: justify;">Bayangkan jika kita tau bahwa dengan pemrograman kita bisa membuat sebuah program yang bermanfaat bagi orang banyak, semua dunia akan senang menggunakan program kita, bahkan dengan program itu kita bisa menjadi kaya raya, kita bisa membuat perusahaan sendiri, kita bisa membuka lapangan pekerjaan baru, dan bisa membuat orang lain bahagia dan sejahtera. Itu akan terdengar lebih menarik. Atau mungkin juga, ketika kita punya anak nanti, kita bisa membuatkan game khusus edisi spesial untuk ulang tahun anak kita, atau membuatkan website untuk keluarga bahagia kita, atau mungkin kita bisa membuat sebuah aplikasi untuk menembak gebetan kita dengan aplikasi yang super romantis. Bro.. Bayangkan banyak sekali yang bisa kita lakukan. Semakin banyak informasi yang kita tahu, maka semakin banyak juga alasan yang kita punya untuk mempelajari pemrograman.</p>\r\n\r\n<p style="text-align: justify;">So, sekali lagi, kalau kamu ingin memulai belajar pemrograman, maka mengertilah terlebih dahulu apa itu pemrograman dan pengetahuan dasar yang mendukungnya, agar tidak tersesat. Kamu bisa mulai baca-baca di sini: <a class="record-data" href="https://www.codepolitan.com/start-learning" target="_blank">Pengetahuan Dasar Pemrograman</a>.</p>\r\n\r\n<p style="text-align: justify;">Baca juga: <a class="record-data" href="https://www.codepolitan.com/kode-etik-programmer-yang-wajib-kita-ketahui/" target="_blank">Kode Etik Programmer Yang Wajib Kita Ketahui</a></p>\r\n\r\n<h2 style="text-align: justify;">2. Pilihlan sebuah bahasa pemrograman</h2>\r\n\r\n<p style="text-align: justify;">&nbsp;</p>\r\n\r\n<p style="text-align: justify;">Pada akhirnya kita memang harus memilih. Banyak sekali <a class="record-data" href="https://www.codepolitan.com/tag/bahasa-pemrograman/" target="_blank">bahasa pemrograman</a> yang ada di dunia, mulai dari bahasa mesin, bahasa tingkat rendah, bahasa tingkat menengah dan bahasa tingkat tinggi. Kamu bisa cek sendiri di sini <a class="record-data" href="http://id.wikipedia.org/wiki/Bahasa_pemrograman" target="_blank" title="Bahasa Pemrograman">http://id.wikipedia.org/wiki/Bahasa_pemrograman</a>, silahkan pelajari kelebihan dan kekurangannya masing-masing. Atau buat kamu yang masih bingung saking banyaknya bahasa pemrograman dan butuh rekomendasi juga pencerahan untuk memilih bahasa pemrograman apa yang harus kamu pelajari untuk memulai belajar, kamu bisa baca artikel <a class="record-data" href="https://www.codepolitan.com/bahasa-pemrograman-apa-cocok-dipelajari-pertama-kali/" target="_blank">&quot;Bahasa Pemrograman Apa yang Cocok untuk Dipelajari Pertama Kali ?&quot;</a>.</p>\r\n\r\n<p style="text-align: justify;">Kamu mungkin bisa saja mempelajari semuanya, tapi saya sarankan pilihlah satu terlebih dahulu. Kuasailah satu terlebih dahulu. Dalamilah. Yang harus kita ingat adalah, bahasa pemrograman bukanlah sebuah agama yang kita hanya boleh memilih satu dan tidak bisa seenaknya kita ganti. Kamu bebas saja berganti-ganti bahasa pemrograman yang Kamu ingin kuasai nanti, jika Kamu mau. Tapi... Pelajarilah dulu satu. Kuasailah secara mendalam.</p>\r\n\r\n<h2 style="text-align: justify;">3. Mulailah belajar</h2>\r\n\r\n<p style="text-align: justify;">Sekarang Kamu sudah tau apa itu pemrograman dan Kamu sudah punya bahasa pemrograman yang ingin Kamu kuasai, selanjutnya pelajarilah. Belajarlah algoritma dasar dengan bahasa pemrograman yang Kamu pilih. Caranya banyak sekali, bisa melalui buku, bisa juga melalui artikel-artikel di internet, tutorial-tutorial pemrograman di internet seperti <a class="record-data" href="https://www.codepolitan.com/tutorial-set" target="_blank">Tutorial CodePolitan</a> dan <a class="record-data" href="https://www.codepolitan.com/interactive-coding" target="_blank">Interactive Coding (Belajar Coding Online Interaktif)</a>. Atau Kamu juga bisa coba belajar pemrograman dari majalah/ebook pemrograman seperti <a class="record-data" href="https://www.codepolitan.com/ebook" target="_blank" title="CodePolitan Magazine">CodePolitan Magazine</a>. Atau buat kamu yang ingin belajar lebih cepat dan intensif, kamu bisa mengikuti <a class="record-data" href="https://www.codepolitan.com/course" target="_blank">Kursus Belajar Pemrograman</a>. Ya, banyak sekali caranya. Silahkan Kamu pilih sendiri yang paling sesuai dengan metode belajarmu.</p>\r\n\r\n<h2 style="text-align: justify;">4. Buatlah program-program sederhana</h2>\r\n\r\n<p style="text-align: justify;">Belajar saja tidak cukup, harus dipraktekan. Cobalah buat program-program sederhana. Jika Kamu masih sekolah, Kamu bisa mencoba membuat program sederhana untuk mata pelajaran Matematikamu, seperti membuat program &ldquo;menghitung luas lingkaran&rdquo;, &ldquo;menghitung volume balok&rdquo;. Itu sangat menarik kawan, dulu saya melakukan hal itu. Kalau Kamu adalah seorang guru, mungkin Kamu bisa membuat program untuk menjelaskan pada muridmu bagaimana sebuah planet berputar. Atau apa saja lah... Nggak mesti yang serius juga bisa, misalnya membuat program untuk mendaftar nama mantan-mantanmu. Hehehe... Pada intinya, cobalah untuk membuat sesuatu, mulai dari yang sederhana dari apa yang Kamu sudah kuasai.</p>\r\n\r\n<h2 style="text-align: justify;">5. Updatelah selalu informasi</h2>\r\n\r\n<p style="text-align: justify;">Informasi sangat penting kawan. Boleh jadi apa yang Kamu sedang pelajari sudah tidak lagi dipelajari oleh orang lain karena sudah ada yang lebih menarik atau lebih baik. Kamu tidak akan tau itu kecuali Kamu update informasi.</p>\r\n\r\n<p style="text-align: justify;">Salah satu cara update informasi adalah, kamu bisa mengunjungi web-web yang senantiasa memberikan informasi, seperti <a class="record-data" href="http://www.sitepoint.com/" target="_blank" title="SitePoint">SitePoint</a>, <a class="record-data" href="http://mashable.com/" target="_blank" title="Mashable">Mashable</a>, <a class="record-data" href="http://www.omgubuntu.co.uk/" target="_blank">OMG! Ubuntu!</a> atau <a class="record-data" href="https://www.codepolitan.com" target="_blank" title="CodePolitan">CodePolitan</a> (website yang sedang kamu baca ini).</p>\r\n\r\n<p style="text-align: justify;">Kamu juga bisa like fan page dan follow twitter, pihak-pihak yang senantiasa memberikan informasi tentang programming atau teknologi secara umum.</p>\r\n\r\n<p style="text-align: justify;">Beberapa akun twitter orang hebat yang bisa Kamu follow bisa Kamu baca di sini <a class="record-data" href="http://www.codepolitan.com/koleksi-akun-twitter-pembuat-framework/" target="_blank">http://www.codepolitan.com/koleksi-akun-twitter-pembuat-framework/</a>.</p>\r\n\r\n<p style="text-align: justify;">Kamu juga bisa like fanpage Kami di <a class="record-data" href="http://www.facebook.com/codepolitan" target="_blank" title="CodePolitan">http://www.facebook.com/codepolitan</a>, follow twitter kami di <a class="record-data" href="http://twitter.com/codepolitan" target="_blank" title="@CodePolitan">@CodePolitan</a> dan subscribe channel Youtube kami <a class="record-data" href="https://www.youtube.com/channel/UCf9YmYfSG0d_vxxZDMJfElA/featured" target="_blank">CodePolitan</a>. Kami selalu update informasi yang mungkin bisa bermanfaat buat kamu.</p>\r\n\r\n<p style="text-align: justify;">Baca juga: <a class="record-data" href="https://www.codepolitan.com/ebook/" target="_blank">Download Ebook Belajar Pemrograman dan Teknologi Gratis!</a></p>\r\n\r\n<h2 style="text-align: justify;">6. Bergabunglah di grup-grup atau forum-forum pemrograman</h2>\r\n\r\n<p style="text-align: justify;">&nbsp;</p>\r\n\r\n<p style="text-align: justify;">Kawan, Kamu tidak sendiri! Banyak sekali orang-orang sepertimu yang sedang belajar atau bahkan sudah jago. Kamu bisa menyapa mereka, bahkan Kamu bisa bertanya kepada mereka jika memang perlu.</p>\r\n\r\n<p style="text-align: justify;">Ketika Kamu bergabung di forum atau grup pemrograman, Kamu akan melihat ada banyak orang hebat yang bisa Kamu tiru dan teladani dari segi programmingnya. Bahkan nggak jarang, mereka pun sering memberikan informasi-informasi penting yang mungkin bermanfaat buat Kamu. Dan ketika Kamu terlibat dalam sebuah forum, Kamu pun bisa membantu rekan-rekan yang lain yang mungkin bisa Kamu bantu. Beberapa forum pemrograman yang bisa Kamu ikuti bisa Kamu temukan di artikel <a class="record-data" href="http://www.codepolitan.com/17-grup-populer-tentang-pemrograman-di-facebook-yang-berasal-dari-indonesia/" target="_blank">17 Grup Populer tentang Pemrograman di Facebook yang Berasal dari Indonesia</a> atau <a class="record-data" href="http://www.codepolitan.com/5-grup-pemrograman-visual-basic-terbesar-dari-indonesia-di-facebook/" target="_blank">5 Grup Pemrograman Visual Basic Terbesar dari Indonesia di Facebook</a>, dan jika kamu mau, kamu juga bisa bergabung bersama kami dalam facebook group <a class="record-data" href="https://www.facebook.com/groups/CoderTalk.id/" target="_blank">Coders Indonesia</a>.</p>\r\n\r\n<p style="text-align: justify;">&nbsp;</p>\r\n\r\n<p style="text-align: justify;">Demikianlah, semoga bermanfaat. Ingat kawan, memang tidak mudah belajar pemrograman. Kita harus belajar algoritma yang penuh dengan logika yang rumit, kita juga harus mempelajari sebuah bahasa pemrograman yang bahasanya nggak mirip dengan bahasa manusia. Tapi jika dijalani dan menganggapnya sebagai sebuah tantangan dan proses yang harus dilalui, ternyata itu semua bisa menjadi menyenangkan.</p>\r\n\r\n<p style="text-align: justify;">Bagi kamu yang masih bingung karena baru mengenal pemrograman, kamu bisa memulainya dengan mempelajari konten-konten dasar tentang pemrograman melalui tautan berikut:</p>\r\n\r\n<ul>\r\n	<li style="text-align: justify;">Pengetahuan dasar pemrograman: <a class="record-data" href="https://www.codepolitan.com/start-learning" target="_blank">Start Learning</a></li>\r\n	<li style="text-align: justify;">Kumpulan artikel yang harus diketahui pemula: <a class="record-data" href="https://www.codepolitan.com/coder-journey-begin/" target="_blank">Coder Journey: BEGIN</a></li>\r\n	<li style="text-align: justify;">Cara belajar pemrograman di CodePolitan: <a class="record-data" href="https://www.codepolitan.com/how-to-start" target="_blank">How to Start?</a></li>\r\n</ul>', 'Screenshot from 2017-06-05 21-13-08.png', '2017-07-16', 'admin', 7),
(4, 'Ingin Jadi Programmer Profesional, Hindari Mental-Mental Berikut Ini', 'ingin-jadi-programmer-profesional-hindari-mental-mental-berikut-ini', '<div>\r\n<div>\r\n<div>\r\n<div>\r\n<p style="text-align:justify">Salah satu profesi yang mengandalkan <em>hardskill</em> yang saat ini cukup potensial adalah profesi sebagai <strong>programmer</strong>. Bagaimana tidak, selain karena sering kali profesi programmer ini biasanya memiliki gaji yang relatif tinggi juga kebutuhan akan profesi ini di industri tergolong tinggi. Sehingga hampir bisa dikatakan <strong>jika kita punya skill yang cukup baik</strong> dalam profesi ini, hampir mustahil untuk menganggur atau tidak memiliki pekerjaan. Sekali lagi saya garis bawahi, syaratnya punya skill yang cukup.</p>\r\n\r\n<p style="text-align:justify">Enaknya lagi menjadi programmer, terkadang perusahaan memperlakukan kita lebih fleksibel, khususnya terkait waktu dan tempat kerja. Dalam beberapa kasus (tidak berlaku secara keseluruhan) perusahaan lebih fokus pada target pekerjaannya, mengenai waktu pengerjaannya diberikan keleluasaan kepada programmer itu sendiri. Bahkan ada juga perusahaan yang memperbolehkan programmernya bekerja secara <em>remote</em>, yaitu bekerja dari jarak jauh, tidak harus selalu hadir di kantor.</p>\r\n\r\n<p style="text-align:justify">Selain itu juga, menjadi programmer juga memiliki beberapa keuntungan lain. Misalnya kalau kamu memang memiliki pengetahuan tentang bisnis atau memiliki teman yang jago bisnis, kamu bisa membangun usahamu sendiri dan membangun sebuah produk. Kalaupun tidak, kamu juga bisa memanfaatkan skill programmingmu untuk menerima proyek <em>freelance</em> sebagai tambahan pendapatan.</p>\r\n\r\n<p style="text-align:justify">Meskipun demikian, walaupun banyak orang yang paham akan potensinya dan tertarik untuk menjadi programmer. Ternyata pada kenyataannya banyak orang yang gagal dan menyerah dalam meniti karir sebagai programmer. Bukan karena begitu sulitnya menjadi programmer. Tidak! Menjadi programmer sebenarnya tidak sesulit yang dibayangkan (saya juga tidak bilang mudah ya hehehe). Hanya saja banyak orang yang tidak tahu bagaimana caranya.</p>\r\n\r\n<p style="text-align:justify">Di artikel sebelumnya saya pernah membahas tentang 7 penyakit yang sering kali menjangkit mahasiswa IT sehingga dengan penyakit itu banyak mahasiswa IT yang kesulitan bersaing di dunia industri. Dan tentu saja sedikit banyak penyakit itu juga yang menyebabkan banyak mahasiswa IT gagal memiliki skill coding setelah lulusnya. Kamu bisa membaca artikel tersebut melalui tautan berikut: <a href="https://www.codepolitan.com/7-penyakit-mahasiswa-it-yang-menyebabkan-sulit-bersaing-di-industri" target="_blank">7 &quot;Penyakit&quot; Mahasiswa IT yang Menyebabkan Sulit Bersaing di Industri</a>.</p>\r\n\r\n<p style="text-align:justify">Nah pada kesempatan kali ini saya ingin menambahkan. Selain dari karena banyak yang tidak tahu caranya, sehingga menyebabkan kesulitan dalam menjadi programmer profesional. Ada hal lain yang tidak kalah penting yaitu ada berapa mental buruk yang menjadi block penghalang yang menyebabkan seseorang kesulitan dalam berkembang dan menjadi programmer profesional. Dan menurut saya, pemahaman akan mental buruk ini lebih penting dari pada paham bagaimana caranya belajar pemrograman itu sendiri. Karena meskipun kita sudah tahu bagaimana caranya belajar pemrograman, kalau masih memiliki beberapa mental buruk ini, pasti seseorang akan kesulitan dalam berkembang. Dan kabar buruknya lagi dari yang saya amati, mental buruk ini banyak hinggap di karakter-karakter programmer pemula yang ada di Indonesia.</p>\r\n\r\n<p style="text-align:justify">Berikut ini beberapa mental buruk yang harus benar-benar dihindari kalau kamu ingin menjadi programmer profesional:</p>\r\n\r\n<h3 style="text-align:justify">1. Malas mencari tahu</h3>\r\n\r\n<p style="text-align:justify">Materi belajar pemrograman saat ini sebenarnya sudah cukup banyak tersedia di internet. Kalau kamu yang terbiasa dengan bahasa Inggris sebenarnya sumber belajar tersedia sangat melimpah. Buat kamu yang lebih suka yang berbahasa Indonesia juga sudah banyak yang menyediakannya, salah satunya kamu bisa belajar dari berbagai konten belajar di CodePolitan, seperti <a href="https://www.codepolitan.com/articles" target="_blank">artikel</a>, <a href="https://www.codepolitan.com/interactive-coding" target="_blank">interactive coding</a>, <a href="https://www.codepolitan.com/tutorial-set" target="_blank">tutorial set</a> dan <a href="https://www.codepolitan.com/ebook" target="_blank">ebook</a>. Nah masalahnya adalah banyak programmer pemula atau calon programmer punya kecenderungan malas mencari tahu. Padahal hanya jika mereka mau mencari tahu, maka semuanya akan menjadi lebih mudah.</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">Ini pula lah yang sering kali menyebabkan terjadinya pem-bully-an di forum-forum pemrograman. Banyak programmer pemula sering kali bertanya untuk hal-hal yang sangat sederhana, yang sebenarnya jika dia meluangkan waktu sedikit saja untuk mencari tahu, maka masalahnya atau pertanyaannya langsung terjawab. Terlepas dari ketidak-tahuannya, sehingga para senior melihat tidak adanya usaha dalam bersungguh-sungguh untuk mencari tahu. Bukan berarti saya mendukung pem-bully-an. Namun jika semua pihak paham etikanya maka sebenarnya hal-hal seperti pem-bully-an di forum pemrograman tidak perlu terjadi.</p>\r\n\r\n<p style="text-align:justify">Baca juga: <a href="https://www.codepolitan.com/agar-tidak-dibully-saat-bertanya-di-forum-pemrograman?utm_source=codepolitan&amp;utm_medium=article&amp;utm_campaign=inset" target="_blank">Agar Tidak Dibully Saat Bertanya Di Forum Pemrograman</a></p>\r\n\r\n<p style="text-align:justify">Oleh karena itu, mental ini harus benar-benar dihindari jika ingin menjadi seorang programmer. Toh banyak sekali sumber belajar tersedia di internet. Hanya saja masalahnya adalah mau atau tidak mau untuk mencari tahu. Jika hanya mengandalkan untuk disuapi dan tidak belajar jika tidak ada yang memberi tahu, percayalah keinginan untuk menjadi programmer profesional akan sulit terwujud. Bagaimana tidak, dalam dunia pemrograman teknologi akan selalu berkembang dan setiap saat menuntut kita untuk terus belajar. Jika kita hanya berdiam saja dan menunggu disuapi maka kita akan terus tertinggal.</p>\r\n\r\n<h3 style="text-align:justify">2. Pengen jalan pintas</h3>\r\n\r\n<p style="text-align:justify">Kalau kita melihat orang hebat atau orang sukses dalam bidangnya, jangan hanya lihat bagaimana ketika dia telah sukses saja. Lihat juga bagaimana perjuangannya dalam menuju kehebatan atau kesuksesan tersebut. Kalau kita melihat <a href="https://www.codepolitan.com/codertalk-sofian-hadiwijaya-dari-mahasiswa-drop-out-menjadi-developer-hero" target="_blank">Sofian Hadiwijaya</a>, <a href="https://www.codepolitan.com/codertalk-peter-jack-kambey-sang-pejuang-komunitas-php-indonesia" target="_blank">Peter Jack Kambey</a>, <a href="https://www.codepolitan.com/wawancara-bersama-luri-darmawan-pembuat-aksi-ide" target="_blank">Luri Darmawan</a>, <a href="https://www.codepolitan.com/codertalk-rahmat-awaludin-penulis-buku-laravel-dan-founder-malescast" target="_blank">Rahmat Awaludin</a> atau <a href="https://www.codepolitan.com/codertalk-bernaridho-imanuel-hutabarat-inventor-teori-pemrograman-VOpTOq" target="_blank">Bernaridho Hutabarat</a> sebagai programmer hebat, percayalah itu tidak terjadi begitu saja. Entah berapa ratus jam telah mereka habiskan untuk belajar dan mengembangkan skillnya. Jadi kalau kamu ingin juga seperti mereka tidak ada jalan lain selain menjalani prosesnya. Tidak ada jalan pintas!</p>\r\n\r\n<p style="text-align:justify">Jangan sangka orang-orang yang saya sebutkan tadi tidak pernah mengalami kesulitan dalam belajar. Coba sesekali tengok kisah perjalanan mereka dalam meniti karir sebagai programmer di <a href="https://www.codepolitan.com/category/codertalk" target="_blank">CoderTalk</a>. Mereka juga pernah mengalami kesulitan dalam belajar, hanya saja mereka tidak menyerah, hingga jadilah mereka seperti sekarang ini.</p>\r\n\r\n<h3 style="text-align:justify">3. Mental gratisan</h3>\r\n\r\n<p style="text-align:justify">Kalau kita ingin dihargai dan dibayar atas jasa yang kita lakukan, maka orang lain pun demikian. Kita tentu tidak ingin dong ketika kita sudah bersusah payah membuatkan sebuah website, app atau software untuk klien kita tiba-tiba klien kita bilang &quot;Lho, saya kira gratis? Itu kan cuma diketik doang bikinnya!&quot;. Maka berikanlah hak untuk orang lain juga sebagaimana kita ingin hak kita dipenuhi.</p>\r\n\r\n<p style="text-align:justify">Masalah yang sering terjadi di kalangan developer pemula yang kronis di Indonesia yang membuat sulit untuk berkembang adalah mental gratisan. Banyak yang ingin jago dan menjadi master namun tidak ingin mengeluarkan biaya investasi untuk menujunya. Ketika ada yang jual ebook berbayar, atau ketika ada yang bikin video tutorial berbayar atau workshop berbayar akan ada yang berkomentar &quot;Wah kok berbayar, dasar pelit! Ilmu aja dijual!&quot;, percayalah orang seperti itu akan kesulitan untuk maju.</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">Dari apa yang saya amati dan pelajari, justru orang-orang hebat sangat leluasa untuk berinvestasi dalam belajar. Mereka tidak segan-segan untuk mengeluarkan biaya demi mendapatkan ilmu baru sebagai investasi masa depan. Itulah yang menyebabkan mereka selalu selangkah lebih dahulu dari pada orang-orang kebanyakan. Karena mereka pikir investasi biaya yang mereka keluarkan akan berbanding lurus dengan apa yang mereka dapatkan nantinya.</p>\r\n\r\n<h3 style="text-align:justify">4. Malas ngoprek</h3>\r\n\r\n<p style="text-align:justify">Ini merupakan perluasan dari point nomor 2. Apa jadinya programmer tanpa ngoprek? Programming adalah sebuah hardskill, sebuah bidang ilmu seperti bela diri yang jika semakin sering dilatih maka akan semakin jago. Programming bukanlah bidang ilmu hafalan, jika sudah hafal maka selesai sudah. Coba cari satu orang saja yang jago dalam bidang programming yang tidak suka ngoprek! Pasti tidak akan ada. Orang-orang yang menjadi expert saat ini, mereka adalah orang yang senantiasa ngoprek dan praktek. Mereka adalah pembelajar sejati. Mereka mempelajarinya kemudian mempraktekannya. Kalau kamu saat ini masih malas ngoprek sedangkan cita-cita kamu adalah menjadi programmer profesional, mungkin kamu harus introspeksi diri terlebih dahulu. Ingat kawan, programmer adalah pembelajar.</p>\r\n\r\n<hr />\r\n<p style="text-align:justify">Oke, itu tadi 4 mental buruk yang harus benar-benar kita hindari jika kita memang berniat untuk menjadi seorang programmer yang profesional. Mudah-mudahan artikel ini bisa bermanfaat dan mencerahkan terutama buat para programmer pemula yang baru memulai belajar. Jika menurut kamu ada mental-mental lain selain dari yang saya sebutkan di atas, silahkan share di kolom komentar agar kita bisa berdiskusi dan berbagi. Kalau kamu merasa artikel ini bermanfaat buat kamu, jangan lupa dikasih <strong>&quot;THANKS&quot;</strong> ya melalui tombol thanks yang ada di sidebar kanan atau di bawah artikel ini. Dan jangan lupa share ya :)</p>\r\n\r\n<p style="text-align:justify">Buat kamu yang masih kebingungan gimana cara belajarnya supaya jadi programmer, mungkin kamu bisa baca tulisan lawas saya yang ini <a href="https://www.codepolitan.com/cara-enjoy-memulai-belajar-pemrograman" target="_blank">&quot;Cara Enjoy Memulai Belajar Pemrograman&quot;</a>. Kamu juga bisa lihat referensi berikut sebagai penambah wawasan: <a href="https://www.codepolitan.com/start-learning" target="_blank">Start Learning</a> dan <a href="https://www.codepolitan.com/coder-journey-begin" target="_blank">Coder Journey Begin</a>.</p>\r\n\r\n<p style="text-align:justify">Dan buat kamu yang memang benar-benar serius ingin belajar pemrograman dan menjadi seorang programmer profesional. Saya sangat sarankan untuk mengikuti program terbaru dari CodePolitan, yaitu program <a href="https://www.codepolitan.com/school" target="_blank">CodePolitan Developer School</a>, yaitu program pelatihan belajar coding intensif selama satu minggu secara tatap muka (offline) dengan bimbingan mentor berpengalaman (tim pengajar CodePolitan dan partner) yang dilengkapi dengan fasilitas asrama selama belajar.</p>\r\n\r\n<p style="text-align:justify">Semoga bermanfaat.</p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n</div>', 'IMG_4422.jpg', '2017-07-16', 'admin', 13);
INSERT INTO `is_article` (`article_id`, `judul`, `judul_seo`, `isi`, `file_image`, `tanggal`, `author`, `is_category_article_id`) VALUES
(5, 'Memahami Cara Kerja Bitcoin', 'memahami-cara-kerja-bitcoin', '<div>\r\n<div>\r\n<div>\r\n<p style="text-align: justify;">Bitcoin adalah mata uang digital yang mulai populer pada tahun 2003. Mata uang ini tidak dikontrol Bank atau lembaga lain. Mata uang yang terdesentralisasi ini didesain untuk menjaga uang kita dari mereka yang ingin mengambil keuntungan. Tapi bagaimana cara kerja sebuah mata uang digital? Bagaimana bisa mata uang ini berlaku jika tidak ada orang yang bisa mengatakan mereka menyimpannya.</p>\r\n\r\n<p style="text-align: justify;">Bitcoin terdiri atas tiga bagian yaitu: <em>block chain</em>, <em>mining network</em>, dan <em>wallet</em>. Untuk dapat memahami cara kerja Bitcoin, kita harus memahami cara kerja tiap bagiannya. Buatlah segelas kopi/teh dan nikmati artikel ini.</p>\r\n\r\n<h2 style="text-align: justify;">Block Chain</h2>\r\n\r\n<p style="text-align: justify;"><em>Block chain</em> adalah daftar tiap transaksi Bitcoin yang pernah terjadi. Sebelum transaksi masuk ke <em>block chain</em>, maka transaksi itu belum selsai. Sesuai namanya, <em>block chain</em> merupakan rangkaian/rentetan sebuah blok. Blok tersebut berisi sekumpulan transaksi baru dan terhubung dengan blok sebelumnya. Semua orang dapat memvalidasi <em>block chain</em> dengan mengikuti seluruh catatan yang merekam setiap transaksi sampai dengan transaksi pertama saat Satoshi Nakamoto membuat Bitcoin.</p>\r\n\r\n<p style="text-align: justify;">Sampai disini, kamu mungkin berpikir keras, siapa yang bertugas mengelola <em>block chain</em> ini. Jawabannya adalah: tidak ada. Tidak ada satu organisasi atau perseorangan pun yang memegang salinan <em>block chain</em> sendiri. Bitcoin dibuat agar terdistribusi dengan baik, sehingga tidak ada titik kesalahan yang dapat merusak <em>block chain</em> baik secara sengaja maupun tidak disengaja. <em>Block chain</em> dipegang oleh setiap komputer yang menambang Bitcoin.</p>\r\n\r\n<p style="text-align: justify;">&nbsp;</p>\r\n\r\n<h2 style="text-align: justify;">Menambang Bitcoin</h2>\r\n\r\n<p style="text-align: justify;">Orang-orang yang menambang Bitcoing (<em>miner</em>), adalah orang-orang yang menjaga transaksi lama serta memastikan transaksi baru tercatat. Tugas mereka adalah membuat (atau menambang) blok baru. Blok-blok ini menyimpan transaksi baru yang terjadi. Sebagai kompensasi telah menambang blok-blok baru ini, mereka diberikan beberapa Bitcoin. Insentif seperti ini memastikan ada cukup orang untuk melakukan penambangan sehingga sistem jaringan Bitcoin terus berjalan.</p>\r\n\r\n<h2 style="text-align: justify;">Wallet</h2>\r\n\r\n<p style="text-align: justify;"><em>Wallet</em> adalah bagian Bitcoin yang sering dilihat oleh pengguna. Istilah <em>wallet</em> (dompet) sendiri kurang tepat karena <em>wallet</em> sebetulnya tidak menyimpan Bitcoin. Wallet hanya menyimpan <em>private key</em> yang mengijinkan sang pemilik untuk menambah transaksi ke <em>block chain</em> disebuah alamat berupa <em>public key</em>. Bitcoin-nya tersimpan sebagai sebuah catatan transaksi di dalam <em>block chain</em> tersebut.</p>\r\n\r\n<p style="text-align: justify;">Paragraf-paragraf sebelumnya memberikan garis besar tentang cara kerja Bitcoin dan kita dapat mulai menambang atau menggunakan Bitcoin. Meskipun begitu, ada kemungkinan kamu tidak mempercayai mata uang ini karena cara kerjanya yang agak aneh.</p>\r\n\r\n<p style="text-align: justify;">Kehebatan mata uang ini adalah teknik kriptografi yang melindungi pengguna. Mari kita lihat secara lebih mendalam bagaimana cara teknik ini bekerja.</p>\r\n\r\n<p style="text-align: justify;">Keamanan Bitcoin sebagian besar datang dari <em>hashing</em>, dan hash inilah yang digunakan untuk menautkan blok yang satu dengan blok lainnya di <em>block chain</em>. Setiap blok menyimpan hash blok sebelumnya, dan nilai hash tersebut tidak dapat diganti tanpa mengubah nilai hash blok sekarang (yang juga perlu diubah di blok berikutnya, dst.). Semua orang bisa memeriksa bahwa tidak ada transaksi yang pernah mengubah nilai hash karena, jika hal itu dilakukan maka nilai hash berikutnya akan terpengaruh dan tidak lagi tertaut.</p>\r\n\r\n<h2 style="text-align: justify;">Bertransaksi dengan Bitcoin</h2>\r\n\r\n<p style="text-align: justify;">Saat melakukan transaksi dengan Bitcoin, kita mengirimkan transaksi tersebut ke jaringan miner. Untuk menjaga bahwa tidak ada orang yang dapat melakukan transasi menggunakan wallet kita tanpa diketahui, terdapat beberapa keamanan yang diberlakukan.</p>\r\n\r\n<p style="text-align: justify;">Transaksi Bitcoin terjadi antara dua wallet atau lebih. Seperti yang telah dijelaskan sebelumnya, kedua wallet ini hanyalah pasangan public/private key yang digunakan untuk mengenkrip data. Cara kerja kedua pasangan key ini memastikan bahwa semua data yang dienkripsi dengan public key dapat dibaca dengan private key, dan begitu pula sebaliknya.</p>\r\n\r\n<p style="text-align: justify;">Di Bitcoin, kita tidak memiliki tumpukan uang yang bisa naik turun seperti di Bank. Sebagai gantinya, kita memiliki sekumpulan Bitcoin yang dapat ditelusuri hingga miner pertamanya. Saat melakukan transaksi, kita harus mereferensi transaksi saat mendapatkan Bitcoin tersebut (bisa mereferensikan lebih dari satu). Selanjutnya, kita harus menandai secara digital setiap transaksi yang direferensikan. Artinya, kita meng-hash-kan detail dari transaksi dan mengkripsinya dengan private key. Karena public key akan selalu terhubung dengan alamat kita (juga transaksi yang direferensikan), maka akan dipastikan bahwa hanya kita yang memiliki otorisasi untuk melakukan transaksinya.</p>\r\n\r\n<p style="text-align: justify;">(Untuk penjelasan lebih lengkap, kunjungi <a href="https://en.bitcoin.it/wiki/Transactions" target="_blank">https://en.bitcoin.it/wiki/Transactions</a>)</p>\r\n\r\n<p style="text-align: justify;">Perhatikan bahwa tidak ada data fisik yang keluar dari <em>wallet</em> selain pesan ke <em>block chain</em>. Jumlah Bitcoin di dalam sebuah <em>wallet</em> dikalkulasi dengan melihat transaksi yang ada di <em>block chain</em>. Artinya siapapun dapat memeriksa jumlah Bitcoin yang ada di <em>wallet</em> manapun. Namun, bukan berarti siapapun dapat mengetahui siapa yang memiliki <em>wallet</em> tertentu karena tidak mudah untuk menentukan pemilik dari tiap <em>wallet</em> tersebut.</p>\r\n\r\n<p style="text-align: justify;">Saat transaksi ini sampai ke tangan miner, transaksi ditambahkan ke <em>block</em> berikutnya. Seperti yang telah kita pahami bahwa tiap <em>block chain</em> dapat dibagi lagi (dan seorang miner dengan <em>computing power</em> yang besar dapat membaginya secara berkelanjutan). Tidak ada garansi transaksi akan langsung masuk <em>block chain</em>, tapi dilihat dari jumlah block yang ada. Jika hanya ada satu blok, maka seorang penyerang yang beruntung dapat mengacaukan keseluruhan <em>mining network</em>. Dengan bertambahnya blok yang masuk ke <em>block chain</em>, kerjaan penyerang akan makin banyak dan lebih menyulitkan.</p>\r\n\r\n<p style="text-align: justify;">Enam blok biasanya dianggap cukup untuk memastikan sebuah transaksi ditambah dengan benar ke dalam <em>block chain</em>. Dengan laju satu blok setiap sepuluh menit, maka proses penambahan transaksi dapat terjadi dalam waktu satu jam. Untuk transaksi dengan nominal besar, kamu mungkin akan menunggu sedikit lebih lama sebelum transaksi sudah selesai di-<em>transfer</em>.</p>\r\n\r\n<p style="text-align: justify;"><em>Block chain</em> merupakan catatan tiap transaksi yang dapat diverfikasi secara publik. Setiap detail transaksi akan disebarluaskan ke semua miner yang ada di jaringan bitcoin dengan permintaan agar dimasukkan ke blok berikutnya.</p>\r\n\r\n<p style="text-align: justify;">Agar seorang miner dapat dibayar atas pekerjaannya menambah sebuah blok, ada dua hal yang harus terjadi: mereka harus memastikan hash-nya valid dan blok tersebut tercatat di <em>block chain</em>. Syarat pertama murni tantangan yang bersifat teknis, sedangkan syarat yang kedua akan memaksa mereka untuk memeriksa semua kemungkinan. Jika <em>block chain</em> mengandung transaksi yang tidak valid (misal, seseorang melakukan transaksi dengan coin yang tidak mereka miliki), maka miner berikutnya yang mendapatkan kiriman dari miner tersebut akan menolak sehingga ia tidak mendapat bayaran. Oleh karena itu miner akan memeriksa setiap transaksi untuk memastikan kevalidannya sebelum ditambahkan ke dalam sebuah blok.</p>\r\n\r\n<p style="text-align: justify;">&nbsp;</p>\r\n\r\n<p style="text-align: justify;">Saat seorang miner menerima sebuah blok dari miner lainnya, mereka akan mendapatkan insentif saat menemukan kesalahan karena dua hal. Pertama, jika mereka menolak sebuah blok, itu artinya mereka masih memiliki kesempatan untuk menambangnya untuk diri mereka sendiri. Kedua, jika mereka menerima blok yang oleh miner lain ditolak karena tidak valid, maka penambangan yang mereka lakukan akan sia-sia karena blok ini tidak akan masuk ke <em>block chain</em>.</p>\r\n\r\n<p style="text-align: justify;">Diwaktu yang sama mereka akan mendapatkan insentif saat menerima blok yang valid, karena jika mereka menolak sebuah blok yang diterima oleh miner lain, maka blok selanjutnya yang mereka tambang akan ditolak oleh miner-miner lain.</p>\r\n\r\n<h2 style="text-align: justify;">Hashtag</h2>\r\n\r\n<p style="text-align: justify;">Hashing &ndash; sering dikenal juga sebagai enkripsi satu arah &ndash; adalah sebuah metode untuk mengubah suatu data dengan satu cara yang tidak dapat dibalik tapi bisa diverifikasi. Mari kita lihat sebuah contoh hashing yang sangat sederhana dengan operator modulus 10. Dicontoh ini, kita membagi suatu angka dengan 10 dan sisa hasil bagi ini adalah hash-nya &ndash; sehingga angka 45 memiliki hash 5.</p>\r\n\r\n<p style="text-align: justify;">Ada dua fungsi krusial yang harus dimiliki oleh hash. Yang pertama adalah mudah untuk diverfikasi. Tiap kali dilakukan, prosesnya haruslah cepat dan menghasilkan hasil yang sama. Fungsi kedua adalah tidak bisa dibalik. Jika seseorang mengatakan nilai sebuah hash adalah 5, seharusnya kita tidak tahu bahwa nilai aslinya adalah 45.</p>\r\n\r\n<p style="text-align: justify;">Meskipun begitu modulo 10 adalah teknik algoritma hashing yang buruk karena memungkinkan adanya nilai hash yang sama dari sumber data yang berbeda. Hash yang bagus harus memiliki dua elemen tadi. Sedikit perubahan pada nilai awal akan membuat nilai hash-nya berubah drastis.</p>\r\n\r\n<p style="text-align: justify;">Hash sering dipakai dalam keamanan komputer. Contohnya yaitu penyimpanan <em>password</em> di Linux. Sistem Linux tidak pernah menyimpan password, tetapi yang disimpan adalah nilai hash-nya. Kita bisa melihat nilai-nilai hash password di Linux dengan mengetikan:</p>\r\n\r\n<p style="text-align: justify;">sudo cat /etc/shadow</p>\r\n\r\n<p style="text-align: justify;">Setiap kali <em>log in</em>, komputer akan merumuskan nilai hash dari <em>password</em> yang dimasukkan dan membandingkannya dengan hash yang tersimpan. Jika kedua hash memiliki nilai yang sama, maka <em>log in</em> berhasil. Meskipun bisa melihat semua hash yang ada di sistem, bukan berarti standar keamannya rendah karena sangat sulit untuk membalikkan nilai hash menjadi nilai asal.</p>\r\n\r\n<p style="text-align: justify;">Dalam sistem Bitcoin, hash dipakai untuk memverifikasi integritas <em>block chain</em>, dan menjadi bukti bahwa seorang miner sudah menambang sebuah blok. Tugas hash di <em>block chain</em> adalah memastikan tidak ada blok yang diubah sejak mereka ditambang.</p>\r\n\r\n<p style="text-align: justify;">Ada sebuah masalah yang mungkin terjadi yaitu dua miner dapat membuat block yang sama pada waktu yang bersamaan dan mengirimkannya ke miner lain. Saat hal ini terjadi, akan ada sebuah perpecahan di <em>block chain</em>. Beberapa miner dapat bekerja di salah satu blok, dan miner yang lain di blok satunya. Aturan Bitcoin menyatakan bahwa <em>block chain</em> valid yang lebih panjang yang akan dipakai. Salah satu dari perpecahan dua perpecahan tadi salah satunya akan masuk ke blok berikutnya lebih dulu, sehingga miner akan melewatkan <em>chain</em> yang lebih pendek agar mendapat bayaran untuk menambang *chain yang lebih panjang.</p>\r\n\r\n<p style="text-align: justify;">Aturan ini memastikan bahwa sebuah jaringan <em>miner</em> yang ingin memaksimalkan keuntungan pribadi tetap menjaga integritas mata uang ini. Sekelompok miner yang ingin mengakali sistem akan membutuhkan <em>computing power</em> yang lebih besar dari kombinasi semua <em>miner</em> yang benar (agar mereka dapat menambang blok dengan <em>rate</em> yang lebih cepat dan memiliki <em>block chain</em> lebih panjang). Hashcash selanjutnya mengamankan jaringan Bitcoin melalui <em>raw computing power</em>.</p>\r\n\r\n<p style="text-align: justify;">Ini lah alasan mengapa penambangan Bitcoin harus tetap untung. Saat ini, jaringan Bitcoin memiliki performa sebesar 15 peta hash per detik dan terus naik. Untuk membeli <em>computing power</em> yang lebih besar untuk mengalahkan angka di atas akan membutuhkan sekitar 150 juta poundsterling dan akan terus bertambah. Harga ini belum termasuk listrik, ruang penyimpanan, pendinginan, gaji orang yang menjalankannya, dll.</p>\r\n\r\n<h2 style="text-align: justify;">Hashcash</h2>\r\n\r\n<p style="text-align: justify;">Hashcash adalah sistem yang digunakan oleh miner untuk memverifikasi bahwa mereka telah menambah sebuah blok sebelum blok tersebut dimasukkan ke <em>block chain</em>. Fungsi dasarnya adalah membuat <em>block chain</em> menjadi tidak memungkinkan untuk diubah.</p>\r\n\r\n<p style="text-align: justify;">Proses ini bergantung pada proses <em>hashing</em>, terutama fungsi hash SHA256. Fungsi ini menerima sebuah input dan mengeluarkan output sebuah angka 256-bit. Angka yang dimasukkan ke fungsi hash adalah <em>header block</em> (didalamnya terdapat sebuah <em>counter</em>) dan semua hash dari transaksi lain. Tugas miner adalah mencari nilai untuk <em>counter</em> dimana output dari fungsi hash berada di bawah nilai tertentu. Batas nilai ini akan menyesuaikan dengan pengaturan kesulitan saat ini, yang normalnya berubah tiap 2016 blok.</p>\r\n\r\n<p style="text-align: justify;">Satu-satunya cara untuk mendapatkan nilai hash yang dibutuhkan adalah dengan <em>computing power</em> yang besar. Dengan makin banyaknya nilai hash yang didapatkan dalam waktu yang lebih cepat akan memperbesar kemungkinan mendapatkan nilai yang memenuhi. Saat nilai hash ditemukan, itu artinya kita sudah menambah blok tersebut dan dapat mengirimkannya ke miner lain di jaringan.</p>\r\n\r\n<p style="text-align: justify;">Kecepatan sebuah jaringan atau sebuah komputer penambang Bitcoin dilihat dari berapa banyak hash yang dapat dicoba dalam satuan waktu (biasanya dihitung dalam juta hash perdetik atau GHs).</p>\r\n\r\n<p style="text-align: justify;">Miner tidak perlu khawatir pekerjaan mereka diambil orang karena didalamnya ada hash dari semua transaksi dan salah satu transaksi itu adalah bayaran untuk miner itu sendiri karena menambang blok. Hasil ini tidak bisa diambil orang tanpa mengubah nilai hash-nya.</p>\r\n\r\n<p style="text-align: justify;">Perlu dicatat bahwa algoritma hashcash yang digunakan oleh Bitcoin sedikit berbeda dengan algoritma yang digunakan untuk mendeteksi pesan spam, meskipun cara kerja keduanya hampir mirip.</p>\r\n\r\n<p style="text-align: justify;">&nbsp;</p>\r\n\r\n<h2 style="text-align: justify;">Pencegahan Penipuan</h2>\r\n\r\n<p style="text-align: justify;">Keuntungan menambang Bitcoin dikontrol oleh dua faktor: kesulitan dalam menambang tiap blok, dan jumlah Bitcoin yang didapatkan oleh miner di tiap blok. Kedua hal ini harus diimbangi dengan memperhitungkan <em>computing power</em> dan nilai Bitcoin yang terus meningkat di pasar.</p>\r\n\r\n<p style="text-align: justify;">Jumlah Bitcoin yang diberikan tiap blok berubah dalam nilai yang pas: bermula di 50,5 tiap 210.000 blok (kurang lebih empat tahun) sampai 21 juta Bitcoin sudah ditambang, dan tidak ada lagi Bitcoin yang dapat diberikan untuk menambang blok-blok selanjutnya.</p>\r\n\r\n<p style="text-align: justify;">Tingkat kesulitannya bervariasi setiap 2.016 blok. Jaringan Bitcoin didesain untuk membuat blok baru rata-rata setiap 10 menit. Waktu ini dipilih karena dua hal: waktu yang lebih singkat akan membuat transaksi lebih cepat terjadi, namun waktu yang terlalu singkat juga dapat membuat lebih dari satu miner membuat blok baru di saat yang bersamaan sehingga akan ada sumber daya yang terbuang karena ada dua <em>block chain</em> yang saling berkompetisi menjadi yang lebih panjang.</p>\r\n\r\n<p style="text-align: justify;">Kamu mungkin bisa melihat sedikit kekurangan dari penjelasan sebelumnya. Pertama, penulis menyatakan bahwa keamanan sistem bergantung pada <em>computing power</em> yang dimiliki pada akhirnya bergantung pada profitabilitas penambangan. Namun kemudian penulis menyatakan bahwa suatu saat nanti di masa yang akan datang saat 21 juta Bitcoin sudah telah ditambang, tidak akan ada lagi upah untuk penambangan.</p>\r\n\r\n<p style="text-align: justify;">Hal ini tidak sepenuhnya benar. Meskipun tidak ada lagi bitcoin baru sebagai upah menambang, namun saat melakukan transaksi kita dapat menambahkan biaya transaksi yang akan masuk ke kantong miner. Biaya transaksi jarang dilakukan saat ini karena proses penambangan masih cukup menguntungkan sehingga orang tidak tambahan uang receh, selain itu volume transaksi juga masih sedikit.</p>\r\n\r\n<p style="text-align: justify;">Tiap blok memiliki batasan ukuran sebesar 1MB (keputusan untuk mengubah angka ini masih diperdebatkan). Artinya, ada sebuah batasan jumlah transaksi untuk tiap blok. Jika seorang miner menemukan situasi dimana ada lebih banyak transaksi dibanding ruang dalam blok, mereka akan memutuskan transaksi mana yang akan ditambahkan. Tentunya, miner akan memilih transaksi yang memiliki biaya transaksi lebih besar. Transaksi lain tidak akan hilang, mereka hanya akan disimpan untuk dimasukkan di blok berikutnya. Makin besar biaya transaksi akan mempercepat transaksi masuk ke <em>block chain</em>.</p>\r\n\r\n<p style="text-align: justify;">Sebagian besar transaksi Bitcoin pada hari ini belum memiliki biaya transaksi. Belum dapat ditentukan apakah biaya transaksi ini akan menjadi satu-satunya cara atau akan ada fitur lain.</p>\r\n\r\n<h2 style="text-align: justify;">Satoshi Nakamoto</h2>\r\n\r\n<p style="text-align: justify;">Bitcoin kini sudah sangat terkenal dan nilainya mencapai miliaran pounds, tetapi untuk semua ketenaran itu, ada satu rahasia yang tersimpan begitu rapat: identitas penciptanya. Pencipta Bitcoin dikenal dengan nama Satoshi Nakamoto. Tidak diketahui apakah Satoshi ini seorang laki-laki atau perempuan, apakah terdiri dari satu orang saja atau kelompok.</p>\r\n\r\n<p style="text-align: justify;">Satoshi menambang cukup banyak Bitcoin di masa-masa awalnya (kemungkinan mencapai satu jutaan), sehingga dengan nilai tukar saat ini, dia sudah kaya raya. Meski memiliki kekayaan dengan nilai yang cukup besar, hingga saat ini Satoshi belum pernah membelanjakannya sama sekali.</p>\r\n\r\n<p style="text-align: justify;">Ada beberapa spekulasi tentang siapa saja yang mungkin dapat membuat mata uang ini. Peneliti dan jurnalis telah menunjuk beberapa nama, namun semua membantah tuduhan itu. Mungkin di masa depan saat warnanya berubah menjadi hijau, sang pembuat misterius ini akan menunjukkan jati dirinya. Mari kita tunggu saja tanggal mainnya ...</p>\r\n\r\n<h2 style="text-align: justify;">Transaksi Anonim</h2>\r\n\r\n<p style="text-align: justify;">Bitcoin menjadi terkenal sebagai mata uang pilihan dalam melakukan transaksi online, terutama untuk toko online ilegal seperti Silk Road. Walaupun begitu, Bitcoin tidak didesain sebagai mata uang anonim, dan faktanya memang tidak dapat dilakukan karena cara kerja <em>block chain</em> yang mencatat semua transaksi Bitcoin dan memperbolehkan siapapun untuk melihat alur Bitcoin manapun.</p>\r\n\r\n<p style="text-align: justify;">Satu-satunya faktor yang membuat Bitcoin populer sebagai sarana transaksi anonim adalah karena kita dapat membuat <em>wallet</em> Bitcoin tanpa memberitahu identitas siapa kita. Dalam pengertian ini, <em>wallet</em> akan tetap bersifat pribadi, namun mata uangnya akan tetap terpublikasi. Ini artinya jika kita mendapatkan koin secara anonim (misalnya, kita menambangnya atau membeli lewat jalan yang tak terlacak), membelanjakannya lewat cara yang tak terlacak (misalnya, membayar untuk sesuatu yang tidak dikirimkan atau terkait secara pribadi dengan cara apapun), dan tidak menghubungkan <em>wallet</em> dengan lokasi fisik (misalnya, hanya menggunakan <em>wallet</em> melalui Tor) maka seharusnya transaksi ini akan bersifat anonim. Namun keanoniman ini harus dilakukan dengan benar. Satu saja gagal, maka transaksi dapat dilacak sampai ujung.</p>\r\n\r\n<p style="text-align: justify;">Meski transaksi anonim memungkinkan untuk dilakukan dengan Bitcoin, namun tunai tetap cara paling aman. <em>Block chain</em> merupakan tambang emas untuk analis big-data dan kemungkinan akan ada hukum yang mengaturnya di masa depan.</p>\r\n\r\n<h1 style="text-align: justify;">Menggunakan Bitcoin</h1>\r\n\r\n<p style="text-align: justify;">Manfaat sebuah mata uang, bagi kebanyakan orang, adalah bagaimana menggunakannya. Sebagian besar mata uang dunia digunakan dengan melibatkan lingkaran logam atau selembar kertas, tapi tidak ada hal seperti itu untuk Bitcoin.</p>\r\n\r\n<p style="text-align: justify;">Untuk melakukan transaksi, hal pertama yang dibutuhkan adalah sebuah <em>wallet</em> Bitcoin. <em>Wallet</em> ini hanya pasangan <em>public/private key</em> yang dipakai untuk menandai transaksi. Akan tetapi, kita memerlukan tempat yang aman untuk menyimpan <em>key</em> ini karena jika hilang semua coin itu akan turut lenyap dari muka bumi. Tingkat keamanan bergantung pada jumlah uang yang ingin disimpan. Ada berbagai jenis <em>wallet</em> untuk hampir semua perangkat komputer termasuk gawai alias <em>smartphone</em>. Patut diingat bahwa tidak ada biaya untuk membuat sebuah wallet, jadi tidak ada yang membatasi kita untuk membuat beberapa.</p>\r\n\r\n<p style="text-align: justify;">Semua <em>wallet</em> Bitcoin memiliki cara kerja yang sama, dan menyimpan semua informasi yang dibutuhkan untuk menerima dan mengirim Bitcoin serta melihat transaksi yang pernah dilakukan.</p>\r\n\r\n<p style="text-align: justify;">Setelah membuat <em>wallet</em>, kita perlu mendapatkan coin. Untuk sebagian besar orang, artinya kita perlu membeli dari tempat penukaran seperti <a href="https://coinbase.com/" target="_blank">Coinbase</a>. Sayangnya, opsi ini tidak semudah membeli sebagian besar barang, dan jarang pula yang menggunakan kartu kredit atau Paypal dalam transaksi jual beli coin. Hal ini terjadi karena banyak oknum yang telah membeli menggunakan metode ini komplain kepada perusahaan penyedia kartu kredit ini bahwa mereka tidak pernah menerima coin yang dibeli dan kemudian meminta uang kembali uang yang telah diterima oleh penjual. Perusahaan kartu kredit dapat dengan mudah memeriksa <em>block chain</em>, tapi dulu mereka lebih memilih untuk berpihak pada pembeli dan hasilnya sekarang sebagian besar tempat penukaran tidak menerima kartu kredit. Saat ini cara paling umum untuk membeli coin ialah dengan transfer antar bank.</p>\r\n\r\n<p style="text-align: justify;">Saat membeli Bitcoin kita akan dimintai alamat <em>wallet</em>. Saat transfer bank telah dilakukan, tempat penukaran akan mengirimkan koin ke <em>wallet</em> tersebut.</p>\r\n\r\n<p style="text-align: justify;">Membelanjakan coin jauh lebih mudah dibanding membelinya. Semakin banyak perusahaan yang menerima pembayaran lewat Bitcoin. Dibagian <em>checkout</em> akan ada alamat <em>wallet</em> untuk mengirimkan coin. Perlu diingat bahwa kita tidak mengirimkan transaksi ke penjual, namun ke jaringan. Penjual akan menerima <em>block chain</em> dari jaringan dan memeriksa transaksi yang dikirimkan ke <em>wallet</em> tertentu.</p>\r\n\r\n<p style="text-align: justify;">Perusahaan yang menerima uang biasanya akan menunggu sampai transaksi mencapai enam blok atau lebih, yang akan memakan waktu hingga satu jam. Saat transaksi selesai, kita akan mendapatkan produk yang diinginkan.</p>\r\n\r\n<p style="text-align: justify;"><em>Diterjemahkan dari artikel asli berjudul &quot;<a href="https://www.linuxvoice.com/bitcoin/" target="_blank">How Bitcoin Works</a>&quot; dari majalah Linux Voice Issue 1 di bawah lisensi <a href="https://www.linuxvoice.com/creative-commons-issues/" target="_blank">Creative Commons BY-SA</a>. </em></p>\r\n</div>\r\n</div>\r\n</div>', 'bitcoin-225080_960_720_1.png', '2017-07-17', 'admin', 13);

-- --------------------------------------------------------

--
-- Table structure for table `is_category_article`
--

CREATE TABLE `is_category_article` (
  `category_article_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_seo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `is_category_article`
--

INSERT INTO `is_category_article` (`category_article_id`, `name`, `name_seo`) VALUES
(7, 'java', 'java'),
(9, 'PHP', 'php'),
(11, 'Kotlin', 'kotlin'),
(12, 'Javascript', 'javascript'),
(13, 'Opini', 'opini'),
(14, 'node js', 'node-js');

-- --------------------------------------------------------

--
-- Table structure for table `is_category_materi`
--

CREATE TABLE `is_category_materi` (
  `category_materi_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_seo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `is_category_materi`
--

INSERT INTO `is_category_materi` (`category_materi_id`, `name`, `name_seo`) VALUES
(2, 'Pemrograman', 'pemrograman'),
(3, 'Kuliah', 'kuliah'),
(4, 'Project', 'project'),
(5, 'Tutorial', 'tutorial'),
(6, 'Jaringan', 'jaringan');

-- --------------------------------------------------------

--
-- Table structure for table `is_category_portfolio`
--

CREATE TABLE `is_category_portfolio` (
  `category_portfolio_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_seo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `is_category_portfolio`
--

INSERT INTO `is_category_portfolio` (`category_portfolio_id`, `name`, `name_seo`) VALUES
(1, 'Web Development', 'web-development');

-- --------------------------------------------------------

--
-- Table structure for table `is_materi`
--

CREATE TABLE `is_materi` (
  `materi_id` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `author` varchar(255) NOT NULL,
  `is_category_materi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `is_materi`
--

INSERT INTO `is_materi` (`materi_id`, `nama_file`, `tanggal`, `author`, `is_category_materi_id`) VALUES
(3, 'Shell Programming.docx', '2017-07-15', 'admin', 2),
(4, 'MuhammadFarid-Praktikum18.docx', '2017-07-15', 'admin', 3),
(5, 'Praktikum 07 Pemrograman bash shell 1.pdf', '2017-07-17', 'admin', 6),
(6, 'ABC_bank.rar', '2017-07-17', 'admin', 4),
(7, '35571_Laporan Praktikum 21.pdf', '2017-07-17', 'admin', 6),
(8, 'TugasAkhir.rar', '2017-07-17', 'admin', 4),
(9, 'Curriculum Vitae.doc', '2017-07-19', 'admin', 3);

-- --------------------------------------------------------

--
-- Table structure for table `is_message`
--

CREATE TABLE `is_message` (
  `message_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `is_message`
--

INSERT INTO `is_message` (`message_id`, `date`, `name`, `email`, `message`, `status`) VALUES
(12, '2017-07-16 15:39:18', 'bejo', 'bejo@gmail.com', 'pesan sudah masuk', 'n'),
(13, '2017-07-17 11:58:04', 'noel', 'noel@gmail', 'test', 'n'),
(14, '2017-07-18 01:59:18', 'imam', 'imam@imam', 'amamamamma', 'n'),
(15, '2017-07-18 03:10:45', 'noel', 'aaaaa@aaa', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'n'),
(16, '2017-07-18 18:30:40', 'imamm', 'imamm@imamm', 'sesokkkk', 'n'),
(17, '2017-07-19 05:39:49', 'aaa', 'imamm@imamm', 'aaaaaa', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `is_portfolio`
--

CREATE TABLE `is_portfolio` (
  `portfolio_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `is_category_portfolio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `is_portfolio`
--

INSERT INTO `is_portfolio` (`portfolio_id`, `title`, `image`, `is_category_portfolio_id`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit', '1.jpg', 0),
(2, 'Quae repudiandae fugiat illo cupiditate', '2.jpg', 0),
(3, 'Natus quibusdam recusandae illum', '3.jpg', 0),
(4, 'Illo itaque ipsum sit harum', '4.jpg', 0),
(5, 'At quia quaerat asperiores', '5.jpg', 0),
(6, 'Cupiditate excepturi esse officiis consectetur', '6.jpg', 0),
(7, 'accusantium expedita debitis impedit rerum totam', '7.jpg', 0),
(8, 'Lorem ipsum dolor sit amet', '8.jpg', 0),
(9, 'Voluptas eum incidunt dolores magni itaque autem', '9.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `is_service`
--

CREATE TABLE `is_service` (
  `service_id` int(1) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `is_service`
--

INSERT INTO `is_service` (`service_id`, `title`, `content`) VALUES
(1, 'Our Services', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod</p>\r\n\r\n<ul>\r\n	<li><strong>Web Design,</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod.</li>\r\n	<li><strong>Web Development, </strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod.</li>\r\n	<li><strong>Mobile Apps, </strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod.</li>\r\n	<li><strong>Desktop Application, </strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod.</li>\r\n	<li><strong>Course and Training</strong><strong>,&nbsp;</strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod.</li>\r\n	<li><strong>Photography</strong><strong>,&nbsp;</strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `is_user`
--

CREATE TABLE `is_user` (
  `user_id` int(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `is_user`
--

INSERT INTO `is_user` (`user_id`, `username`, `password`, `fullname`, `email`, `phone`, `age`, `address`, `avatar`) VALUES
(6, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Muhammad Farid H', 'faridzy09@gmail.com', '089644223272', '20', 'Jalan Nusa Indah 12,Ponorogo East Java', '_MG_8467.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `is_about`
--
ALTER TABLE `is_about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `is_article`
--
ALTER TABLE `is_article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `is_category_article`
--
ALTER TABLE `is_category_article`
  ADD PRIMARY KEY (`category_article_id`);

--
-- Indexes for table `is_category_materi`
--
ALTER TABLE `is_category_materi`
  ADD PRIMARY KEY (`category_materi_id`);

--
-- Indexes for table `is_category_portfolio`
--
ALTER TABLE `is_category_portfolio`
  ADD PRIMARY KEY (`category_portfolio_id`);

--
-- Indexes for table `is_materi`
--
ALTER TABLE `is_materi`
  ADD PRIMARY KEY (`materi_id`);

--
-- Indexes for table `is_message`
--
ALTER TABLE `is_message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `is_portfolio`
--
ALTER TABLE `is_portfolio`
  ADD PRIMARY KEY (`portfolio_id`);

--
-- Indexes for table `is_service`
--
ALTER TABLE `is_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `is_user`
--
ALTER TABLE `is_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `is_about`
--
ALTER TABLE `is_about`
  MODIFY `about_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `is_article`
--
ALTER TABLE `is_article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `is_category_article`
--
ALTER TABLE `is_category_article`
  MODIFY `category_article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `is_category_materi`
--
ALTER TABLE `is_category_materi`
  MODIFY `category_materi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `is_category_portfolio`
--
ALTER TABLE `is_category_portfolio`
  MODIFY `category_portfolio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `is_materi`
--
ALTER TABLE `is_materi`
  MODIFY `materi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `is_message`
--
ALTER TABLE `is_message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `is_portfolio`
--
ALTER TABLE `is_portfolio`
  MODIFY `portfolio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `is_service`
--
ALTER TABLE `is_service`
  MODIFY `service_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `is_user`
--
ALTER TABLE `is_user`
  MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
