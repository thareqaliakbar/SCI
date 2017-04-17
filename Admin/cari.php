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
			 <li role="presentation"><a href="pinjam.php">Peminjaman Buku</a></li>
			 <li role="presentation"><a href="hapusmhs.php">Hapus Mahasiswa</a></li>
			 <li role="presentation"><a href="hapusbuku.php">Hapus Buku</a></li>
			 <li role="presentation"><a href="lihatdata.php">Lihat Data</a></li>
			 <li role="presentation" class="active"><a href="cari.php">Cari</a></li>
			 <li role="presentation"><a href="update.php">Update</a></li>
		</ul>
		<div id="content">
			<form method="POST">
				NIM	: <input type="text" name="nd" class="form-control"/>
				<br>
				<br>
				<input type="submit" name="submit" value="Lihat" />
			</form>

			<?php
				if (isset($_POST['submit'])){
					$nd = $_POST['nd'];
					include ('1.php');
					$lihat=mysqli_query($link,"Select * FROM mahasiswa WHERE NIM ='$nd'");
					$i=1;
						echo "<table border=1>
									<tr>
										<td>NIM</td>
										<td>NAMA</td>
									</tr>";
						foreach($lihat as $values){
							$nim = $values['NIM'];
							$nama = $values['Nama_mhs'];
							echo "<tr>
									<td>$nim</td>
									<td>$nama</td>
									</tr>";
								
						}
								$i++;
							echo "</table>";
			}
			?>
		</div>
	</div>
</body>
</html>