<html>
<head>
	<title>Storage Of Culture Informations</title>
	<link href="http://localhost/Project_PBW/files/css/style.css" rel="stylesheet" type="text/css">
	<?php// echo base_url('files/css/style.css') ?>
</head>
<body>
	<div id="profile">
		<b id="welcome">Selamat Datang : <i><?php echo $this->session->userdata("nama"); ?></i></b>
		<b id="logout"><a href="<?php echo base_url('login/logout'); ?>">Log out</a></b>
	</div>
	<div id="header">
        <ul id="menu-utama"> 
			<li><a href="">Tambah Data</a></li>
			<li><a href="">Update Data</a></li> 
			<li><a href="">Lihat</a></li> 
        </ul>
	</div>
	<div>
		<form method="POST" action='<?php echo base_url('admin/insertBarang');?>'>				
			Kode Barang 	: <input type="text" name="kd" class="form-control"/>
			<br>
			<br>				
			Nama Barang 	: <input type="text" name="nb" class="form-control"/>
			<br>
			<br>
			Asal Daerah 	: <input type="text" name="peng" class="form-control"/>
			<br>
			<br>
			Kategori		: <input type="text" name="terbit" class="form-control"/>
			<br>
			<br>
			Image			: <input type="text" name="pen" class="form-control"/>
			<br>
			<br>
			<input type="submit" name="submit" value="Tambah" />
		</form>
	</div>
</body>
</html>