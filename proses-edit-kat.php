<?php
include 'koneksi.php';
$id_kategori=$_POST['id_kategori'];
$nama_kategori=$_POST['nama_kategori'];
$edit=mysqli_query($koneksi,"UPDATE kategori SET kategori='$nama_kategori' WHERE id_kategori=$id_kategori");
if ($edit) {
  header("location:index.php?p=daftar-kategori&&pesan=editsukses");
} else {
  header("location:index.php?p=daftar-kategori&&pesan=editgagal");
}
?>
