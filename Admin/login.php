<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div id="container">
		<div id="content">
			<form action="buku.php" method="POST">
				Username 	: <input type="text" name="username" class="form-control"/>
				<br>
				<br>
				Password 	: <input type="text" name="password" class="form-control"/>
				<br>
				<br>
				<input type="submit" name="submit" value="Login" />
			</form>

			<?php
				include ('1.php');
				if (isset($_POST['submit'])){
					$username = $_POST['username'];
					$password = md5($_POST['password']);
					$login    = mysqli_query($link, "select * from admin where username='$username' and password='$password'");
					$result   = mysqli_num_rows($login);
					if($result>0){
						$user = mysqli_fetch_array($login);
						session_start();
						$_SESSION['username'] = $user['username'];
						header("location:buku.php");
					}else{
						header("location:login.php");
					}
				}
			?>
		</div>
	</div>
</body>
</html>