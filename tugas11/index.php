<?php
//Menggabungkan dengan file koneksi yang telah kita buat
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
	<title>Tugas 11 Owen</title>
	<!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-dark bg-warning">
	  <a class="navbar-brand" href="index.php" style="color: #fff;">
	    <h1>Universitas Saya</h1>
	  </a>
	</nav>
	
	<div class="container">
		<h2 align="center" style="margin: 30px;">DATA - DATA MAHASISWA</h2>
		<?php 
			$s_fakultas="";
            $s_keyword="";
            if (isset($_POST['search'])) {
                $s_fakultas = $_POST['s_fakultas'];
                $s_keyword = $_POST['s_keyword'];
            }
		?>
		<form method="POST" action="">
	        <div class="row mb-3">
			    <div class="col-sm-12"><h4>Cari</h4></div>
			    <div class="col-sm-3">
			        <div class="form-group">
			            <select name="s_fakultas" id="s_fakultas" class="form-control">
			                <option value="">Filter Fakultas</option>
			                <option value="FMIPA" <?php if ($s_fakultas=="FMIPA"){ echo "selected"; } ?>>FMIPA</option>
			                <option value="FH" <?php if ($s_fakultas=="FH"){ echo "selected"; } ?>>FH</option>
			            </select>
			        </div>
			    </div>
			    <div class="col-sm-4">
			        <div class="form-group">
			            <input type="text" placeholder="Keyword" name="s_keyword" id="s_keyword" class="form-control" value="<?php echo $s_keyword; ?>">
			        </div>
			    </div>
			    <div class="col-sm-4" >
			        <button id="search" name="search" class="btn btn-warning"><a style="color: #fff;">Cari</a></button>
			    </div>
			</div>
		</form>

		<table class="table table-striped table-bordered" style="width:100%">
		    <thead>
		        <tr>
					<td>NIM</td>
		            <td>Nama</td>
		            <td>Tanggal Lahir</td>
		            <td>Fakultas</td>
		            <td>Jurusan</td>
		            <td>Asal</td>
		        </tr>
		    </thead>
		    <tbody>
		        <?php
		            $search_fakultas = '%'. $s_fakultas .'%';
		            $search_keyword = '%'. $s_keyword .'%';
		            $no = 1;
		            $query = "SELECT * FROM mahasiswa WHERE fakultas LIKE ? AND (nama LIKE ? OR alamat LIKE ? OR jurusan LIKE ? OR fakultas LIKE ? OR tanggal_lahir LIKE ?) ORDER BY nim ASC";
		            $dewan1 = $db1->prepare($query);
		            $dewan1->bind_param('ssssss', $search_fakultas, $search_keyword, $search_keyword, $search_keyword, $search_keyword, $search_keyword);
		            $dewan1->execute();
		            $res1 = $dewan1->get_result();

		            if ($res1->num_rows > 0) {
		                while ($row = $res1->fetch_assoc()) {
							$nim = $row['nim'];
		                    $nama = $row['nama'];
		                    $tanggal_lahir = $row['tanggal_lahir'];
		                    $fakultas = $row['fakultas'];
		                    $jurusan = $row['jurusan'];
		                    $alamat = $row['alamat'];
		                    
		        ?>
		            <tr>
		                <td><?php echo $nim; ?></td>
		                <td><?php echo $nama; ?></td>
		                <td><?php echo $tanggal_lahir; ?></td>
		                <td><?php echo $fakultas; ?></td>
		                <td><?php echo $jurusan; ?></td>
		                <td><?php echo $alamat; ?></td>

		            </tr>
		        <?php } } else { ?> 
		            <tr>
		                <td colspan='7'>Data tidak ditemukan</td>
		            </tr>
		        <?php } ?>
		    </tbody>
		</table>
		
    </div>
</body>