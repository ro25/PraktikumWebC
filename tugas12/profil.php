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
				<h2 style="background-color: DodgerBlue">Profil Pengajar</h2>
				<div class="tabel">
					<table>
					<img border="0" height="200" width="100%" src="gambar/Yogs.jpg">
					<tr>
						<td> Nama </td>
						<td> Samson</td>
					</tr>
					<tr>
						<td> Kode </td>
						<td> 1708561049 </td>
					</tr>
					<tr>
						<td> Fakultas </td>
						<td> MIPA </td>
					</tr>
					<tr>
						<td> Alamat </td>
						<td> Denpasar </td>
					</tr>
					</table>
				</div>
				<div class="tabel">
					<table>
					<img border="0" height="200" width="100%" src="gambar/Diky.jpg">
					<tr>
						<td> Nama </td>
						<td> Diky</td>
					</tr>
					<tr>
						<td> Kode </td>
						<td> 1708561055 </td>
					</tr>
					<tr>
						<td> Fakultas </td>
						<td> FEB </td>
					</tr>
					<tr>
						<td> Alamat </td>
						<td> Ubung </td>
					</tr>
					</table>
				</div>
				<div class="tabel">
					<table>
					<img border="0" height="200" width="100%" src="gambar/Dede.jpg">
					<tr>
						<td> Nama </td>
						<td> Adi</td>
					</tr>
					<tr>
						<td> Kode </td>
						<td> 1708561054 </td>
					</tr>
					<tr>
						<td> Fakultas </td>
						<td> FIB </td>
					</tr>
					<tr>
						<td> Alamat </td>
						<td> Jimbaran </td>
					</tr>
					</table>
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