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
				<h1 align="center">SELAMAT DATANG</h1>
				<h1 align="center">di</h1>
				<h1 align="center">UNIVERSITAS UDAYANA</h1>
				<h2 style="background-color: DodgerBlue">Berita Terkini</h2>
				<img border="0" height="300" width="300" src="gambar/polda.jpg" style="float: left;">
				<h1>Polda Bali dan Unud Manfaatkan Arak Bali Jadi Disinfektan & Hand Sanitizer</h1>
				<p style="text-align: justify;">Polda Bali - Dunia dan Pemerintah Indonesia saat ini tengah gencar dan serius menangani penyebaran Covid-19. Sebelumnya Polda Bali bersama jajarannya menurunkan mobil water canon untuk menyemprotkan cairan disinfektan untuk mencegah penyebaran virus.</p>
				<p style="text-align: justify;">Langkah Kapolda Bali, Irjen Pol. Dr. Petrus Reinhard Golose tidak hanya sampai disitu, kali ini jenderal lulusan Akpol tahun 1988 ini berinovasi membuat cairan disinfektan dan hand sanitizer dengan menggunakan minuman tradisional arak Bali (redestilasi untuk membuat alkohol 96%).</p>
				<a href="https://humas.polri.go.id/download/polda-bali-dan-unud-manfaatkan-arak-bali-jadi-disinfektan-hand-sanitizer/">Baca Selengkapnya</a>
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