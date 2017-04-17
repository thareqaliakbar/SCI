<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div id="container">
		<ul class="nav nav-pills nav-stacked sidebar">
			 <li role="presentation"><a href="index.php">Tambah Mahasiswa</a></li>
			 <li role="presentation"><a href="buku.php">Tambah Buku</a></li>
			 <li role="presentation" class="active"><a href="pinjam.php">Peminjaman Buku</a></li>
			 <li role="presentation"><a href="hapusmhs.php">Hapus Mahasiswa</a></li>
			 <li role="presentation"><a href="hapusbuku.php">Hapus Buku</a></li>
			 <li role="presentation"><a href="lihatdata.php">Lihat Data</a></li>
			 <li role="presentation"><a href="cari.php">Cari</a></li>
			 <li role="presentation"><a href="update.php">Update</a></li>
		</ul>
		<div id="content">
			<form method="POST">
				NIM 	: <input type="text" name="nim" class="form-control" />
				<br>
				<br>
				Id Buku : <input type="text" name="id" class="form-control"/>
				<br>
				<br>
				<input type="submit" name="submit" value="Tambah" />
			</form>
			<?php
				if (isset($_POST['submit'])){
					$nim = $_POST['nim'];
					$id = $_POST['id'];
					$tanggal = date("Y-m-d");
					include ('1.php');
					$tambah=mysqli_query($link,"INSERT INTO pinjam VALUES (NULL, '$tanggal', '$nim', '$id')");
			
					if($tambah==true){
						echo " <script>alert('Data berhasil masuk');</script>";
					}else{
						echo " Data tidak masuk";
					}
				}
			?>
		</div>
	</div>
</body>
</html>