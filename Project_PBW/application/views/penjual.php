<form method="POST">
				Nama Toko 	: <input type="text" name="nt" class="form-control"/>
				<br>
				<br>
				Harga		: <input type="text" name="h" class="form-control"/>
				<br>
				<br>				
				Gambar		: <input type="text" name="gam" class="form-control"/>
				<br>
				<br>				
				Kode Barang	: <input type="text" name="kd" class="form-control"/>
				<br>
				<br>
				<input type="submit" name="submit" value="Tambah" />
			</form>

			<?php
				if (isset($_POST['submit'])){
					$nt = $_POST['nt'];
					$h = $_POST['h'];
					$gam = $_POST['gam'];
					$kd = $_POST['kd'];
					include ('1.php');
					$tambah=mysqli_query($link,"INSERT INTO penjual VALUES (NULL, '$nt', '$h', '$gam', '$kd')");
			
					if($tambah==true){
						echo " Data berhasil masuk";
					}else{
						echo " Data tidak masuk";
					}
				}
			?>