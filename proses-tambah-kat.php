<?php
include 'koneksi.php';
$nama_kategori=$_POST['nama_kategori'];
$tambah=mysqli_query($koneksi,"INSERT INTO kategori (kategori) VALUES ('$nama_kategori')");
if ($tambah) {
  header("location:index.php?p=daftar-kategori&&pesan=sukses");
} else {
  header("location:index.php?p=daftar-kategori&&pesan=gagal");
}
?>
