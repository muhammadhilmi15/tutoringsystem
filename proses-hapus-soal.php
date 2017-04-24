<?php
include_once('koneksi.php');
$id_soal=$_GET['id_soal'];
$hapus="DELETE FROM soal WHERE id_soal='$id_soal'";
$hasil=mysqli_query($koneksi,$hapus);
if ($hasil)
{
  header("location: index.php?p=daftar-soal");
}else
{
  header("location: index.php?p=daftar-soal");
}
?>
