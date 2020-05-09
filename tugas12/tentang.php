<?php
    session_start();
    if(isset($_SESSION['level'])){
        if($_SESSION['level'] == NULL){
            header('Location: login.php');
        }
    }else{
        header('Location: login.php');
    }
?>  
<!DOCTYPE html>
<html>
<head>
	<title>web unud owen</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor=white>
	<div class="wrap">
		<div class="badan">			
			<div class="sidebar">
				<section class="logo">
				<img border="0" height="25%" width="95%" src="gambar/logo.jpg">	
				</section>
				<h2 style="background-color: DodgerBlue" align="center">Artikel Populer</h2>
				<h2 class="titik" align="center"><a href="">Desain Web</a></h2>
				<h2 class="titik" align="center"><a href="">HTML</a></h2>
				<h2 class="titik" align="center"><a href="">CSS</a></h2>
				<h2 class="titik" align="center"><a href="">Lain - lain</a></h2>
			</div>
			<div class="content">
				<div class="header">		
				</div>
				<div class="menu">
				<ul>
					<li><a href="logout.php"><h2>Log Out</h2></a></li>
					<li><a href="kontak.php"><h2>Kontak</h2></a></li>
					<li><a href="profil.php"><h2>Profil</h2></a></li>
					<li><a href="tentang.php"><h2>Tentang</h2></a></li>
					<li><a href="index.php"><h2>Home</h2></a></li>
				</ul>
				</div>
				<h1 align="center">UNIVERSITAS UDAYANA</h1>
				<img border="0" height="300" width="100%" src="gambar/rektorat.jpg">
				<p style="text-align: justify;">Universitas Udayana, disingkat UNUD, adalah perguruan tinggi negeri di Bali, Indonesia, yang berdiri pada 29 September 1962. Rektor Universitas Udayana dari tahun 2017-2022 adalah Prof. Dr. dr. Anak Agung Raka Sudewi, Sp.S (K).</p>
				<p style="text-align: justify;">Cikal bakal Unud adalah Fakultas Sastra Udayana cabang Universitas Airlangga yang diresmikan oleh P. J. M. Presiden Republik Indonesia Ir. Soekarno, dibuka oleh J. M. Menteri P.P dan K. Prof. DR. Priyono pada tanggal 29 September 1958 sebagaimana tertulis pada Prasasti di Fakultas Sastra Jalan Nias Denpasar. Universitas Udayana secara sah berdiri pada tanggal 17 Agustus 1962 dan merupakan perguruan tinggi negeri tertua di daerah Provinsi Bali. Sebelumnya, sejak tanggal 29 September 1958 di Bali sudah berdiri sebuah Fakultas yang bernama Fakultas Sastra Udayana sebagai cabang dari Universitas Airlangga Surabaya. Fakultas Sastra Udayana inilah yang merupakan embrio daripada berdirinya Universitas Udayana. Berdasarkan Surat Keputusan Menteri PTIP No.104/1962, tanggal 9 Agustus 1962, Universitas Udayana secara sah berdiri sejak tanggal 17 Agustus 1962. Tetapi oleh karena hari lahir Universitas Udayana jatuh bersamaan dengan hari Proklamasi Kemerdekaan Republik Indonesia maka perayaan Hari Ulang Tahun Universitas Udayana dialihkan menjadi tanggal 29 September dengan mengambil tanggal peresmian Fakultas Sastra yang telah berdiri sejak tahun 1958.</p>
		</div>
		</div>
		<div class="footer">
			<h2 align="center">Universitas Udayana</h2><hr>
			<h3 align="center">Jl. Raya Kampus UNUD, Bukit Jimbaran, Kuta Selatan, Badung-Bali-803611</h3>
			<h3 align="center">Phone Number: +62 (361) 701954, 704845</h3>
			<h3 align="center">Fax: +62 (361) 701907</h3>
			<h3 align="center">Email: info@unud.ac.id</h3>
		</div>
	</div>
</body>
</html>