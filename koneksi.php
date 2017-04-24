<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "its";
$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die();
if($koneksi){
} else {
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}
$waktu=date("Y-m-d H:i:s");
?>
