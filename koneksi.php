<?php 

$host = "baksogresikdb.mysql.database.azure.com";
$user = "qompac";
$pass = "Lenovo510";
$db = "dbpemesanan"; 

$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{DigiCertGlobalRootCA.crt.pem}", NULL, NULL);
mysqli_real_connect($conn, "baksogresikdb.mysql.database.azure.com", "qompac", "{Lenovo510}", "{dbpemesanan}", 3306, MYSQLI_CLIENT_SSL);

$koneksi = mysqli_connect($host, $user, $pass, $db);

	if (!$koneksi) {
		die("Koneksi Gagal:".mysqli_connect_error());
	}
 ?>
