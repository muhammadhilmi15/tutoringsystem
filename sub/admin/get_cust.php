<?php
include "../config.php";

$id_cust=$_POST['id_supplier'];
$query=mysql_query("select * from supplier where id_supplier=$id_cust");
$array = array();
while($data = mysql_fetch_array($query)){
	$array['id_supplier']= $data['id_supplier'];
	$array['nama_pemilik']= $data['nama_pemilik'];
	$array['alamat']= $data['alamat'];
	$array['no_telp_supplier']= $data['country'];
	$array['tanggal_gabung']= $data['tanggal_gabung'];

}
echo json_encode($array);

?>