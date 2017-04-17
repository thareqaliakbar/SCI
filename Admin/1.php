<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "6706154094";

$link = mysqli_connect($servername, $username, $password, $database);
	if($link==true){
		echo "Data terhubung";
	}else{
		echo "Data tidak terhubung";
	}
?>