<html>
<head>
	<title>SCI | Budaya Nusantara</title>
	<link href="<?php echo base_url('files/css/styleView.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('files/css/style.css') ?>" rel="stylesheet" type="text/css">
</head>
<body>
	<table>
		<tr class="baris1">
			<td>
				<img src="icon.png" alt="logo"/>
			</td>
			<td colspan="6">
				<h3><i>Storage Of Culture Informations</i></h3> 
				<b>Budaya Nusantara</b>
			</td>
		</tr>
		<tr class="baris3">
			<td colspan="6">
				<div>
					<ul id="menu-utama"> 
						<li><a href=""><b>Alat Musik</b></a></li> 
						<li><a href=""><b>Batik</b></a></li> 
						<li><a href=""><b>Pakaian Adat</b></a></li> 
					</ul>
				</div>
			</td>
		</tr>
		<?php 
		echo form_open_multipart(base_url('index.php/admin/view_customer'));?>
		<form method="POST" class='baris2'>
		<?php
			$kolom=3;
			$i=0;
			foreach($data as $key){
				if($i>=$kolom){
					echo "<tr></tr>";
				}
				$i++;
				echo"<td colspan='2' class='baris2'>
						<a href='' target='_blank'>
							<img src='".$key->image."' width='150' height='150' style='margin:5px;'>
							<br><b>$key->nama_barang</b>
							<br><i>$key->asal_daerah</i>
						</a>
					</td>";
			}
		
		?>
		<tr class="baris4">
			<td colspan="6"></td>
		</tr>
		<tr class="baris3">
			<td colspan="6"><b> Storage Of Culture Informations </b></td>
		</tr>
	</table>
</body>
</html>