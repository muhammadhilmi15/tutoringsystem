<?php
include 'koneksi.php';
$id_kategori=$_POST['kategori'];
$bab=$_POST['bab'];
$tambah=mysqli_query($koneksi,"INSERT INTO bab (id_kategori,bab) VALUES ($id_kategori,'$bab')");
if ($tambah) {
  header("location:index.php?p=daftar-bab&&pesan=sukses");
} else {
  header("location:index.php?p=daftar-bab&&pesan=gagal");
}
?>
