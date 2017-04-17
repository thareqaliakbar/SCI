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
			 <li role="presentation" class="active"><a href="buku.php">Tambah Buku</a></li>
			 <li role="presentation"><a href="pinjam.php">Peminjaman Buku</a></li>
			 <li role="presentation"><a href="hapusmhs.php">Hapus Mahasiswa</a></li>
			 <li role="presentation"><a href="hapusbuku.php">Hapus Buku</a></li>
			 <li role="presentation"><a href="lihatdata.php">Lihat Data</a></li>
			 <li role="presentation"><a href="cari.php">Cari</a></li>
			 <li role="presentation"><a href="update.php">Update</a></li>
		</ul>
		<div id="content">
			<form method="POST">
				Nama Buku 	: <input type="text" name="nb" class="form-control"/>
				<br>
				<br>
				Pengarang 	: <input type="text" name="peng" class="form-control"/>
				<br>
				<br>
				Tahun Terbit 	: <input type="text" name="terbit" class="form-control"/>
				<br>
				<br>
				<input type="submit" name="submit" value="Tambah" />
			</form>

			<?php
				if (isset($_POST['submit'])){
					$nb = $_POST['nb'];
					$peng = $_POST['peng'];
					$terbit = $_POST['terbit'];
					include ('1.php');
					$tambah=mysqli_query($link,"INSERT INTO buku VALUES (NULL, '$nb', '$peng', '$terbit')");
			
					if($tambah==true){
						echo " Data berhasil masuk";
					}else{
						echo " Data tidak masuk";
					}
				}
			?>
		</div>
	</div>
</body>
</html>