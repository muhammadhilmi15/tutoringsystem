<?php
include_once('koneksi.php');
$id_materi=$_GET['id_materi'];
$hapus="DELETE FROM materi WHERE id_materi='$id_materi'";
$hasil=mysqli_query($koneksi,$hapus);
if ($hasil)
{
  header("location: index.php?p=daftar-materi");
}else
{
  header("location: index.php?p=daftar-materi");
}
?>
