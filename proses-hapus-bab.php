<?php
include_once('koneksi.php');
$id_bab=$_GET['id_bab'];
$hapus="DELETE FROM bab WHERE id_bab='$id_bab'";
$hasil=mysqli_query($koneksi,$hapus);
if ($hasil)
{
  header("location: index.php?p=daftar-bab");
}else
{
  header("location: index.php?p=daftar-bab");
}
?>
