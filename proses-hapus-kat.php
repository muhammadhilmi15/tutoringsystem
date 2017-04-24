<?php
include_once('koneksi.php');
$id_kategori=$_GET['id_kategori'];
$hapus="DELETE FROM kategori WHERE id_kategori='$id_kategori'";
$hasil=mysqli_query($koneksi,$hapus);
if ($hasil)
{
  header("location: index.php?p=daftar-kategori");
}else
{
  header("location: index.php?p=daftar-kategori");
}
?>
