<html>
	<head>
		<title>SCI | Budaya Nusantara</title>
		<link href="<?php echo base_url('files/css/styleView.css') ?>" rel="stylesheet" type="text/css">
	</head>
	<body>
		<?php echo form_open_multipart(base_url('index.php/admin/daftarPenjual')); ?>
		<table>
			<tr class="baris1">
				<td><img src="<?php echo $data[0]->image?>" width='175' height='175' style='margin:5px;'></td>
				<td colspan="6" style='float:left;padding-Top:65px;padding-Bottom:65px;'>
					<b><?php echo $data[0]->nama_barang?></b><br>
					<i><?php echo $data[0]->asal_daerah?></i>
				</td>
			</tr>
			<tr class="baris4">
				<td colspan="6" style='padding-Left:7px;'>
					<p style='text-align:justify;'><?php echo $data[0]->keterangan?></p>
				</td>
			</tr>
			<th>
				Toko Penjual:
			</th>
			<?php foreach($data as $key) {
						echo"<tr>
							<td width='175px'><img src='$key->image_penjual' width='150' height='150' style='margin:5px;'></td>
							<td ><h1>$key->toko_penjual</h1></td>
							<td>Rp. ".$key->harga."</td>
						</tr>
					"; 
				}	
			?>
			<tr class="baris4">
				<td colspan="6"></td>
			</tr>
		</table>
	</body>
</html>