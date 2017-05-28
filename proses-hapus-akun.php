<?php
include 'koneksi.php';
$iduser=$_GET['id_user'];
$hapus=mysqli_query($koneksi,"DELETE FROM user WHERE id_user=$iduser");
if ($hapus) {
  header('location:login.php');
}
?>
