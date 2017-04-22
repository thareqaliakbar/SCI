<form method="POST">
				
				Kode Barang 	: <input type="text" name="kd" class="form-control"/>
				<br>
				<br>				
				Nama Barang 	: <input type="text" name="nb" class="form-control"/>
				<br>
				<br>
				Asal Daerah 	: <input type="text" name="peng" class="form-control"/>
				<br>
				<br>
				Keterangan		: <input type="text" name="terbit" class="form-control"/>
				<br>
				<br>
				Image			: <input type="text" name="pen" class="form-control"/>
				<br>
				<br>
				<input type="submit" name="submit" value="Tambah" />
			</form>

			<?php
				if (isset($_POST['submit'])){
					$kd = $_POST['kd'];
					$nb = $_POST['nb'];
					$peng = $_POST['peng'];
					$terbit = $_POST['terbit'];
					$pen = $_POST['pen'];
					include ('1.php');
					$tambah=mysqli_query($link,"INSERT INTO barang VALUES ('$kd', '$nb', '$peng', '$terbit', '$pen')");
			
					if($tambah==true){
						echo " Data berhasil masuk";
					}else{
						echo " Data tidak masuk";
					}
				}
			?>