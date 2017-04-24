<?php
include 'koneksi.php';
$id_kategori=$_POST['kategori'];
$id_bab=$_POST['bab'];
$id_tingkatan=$_POST['tingkatan'];
$nama=$_POST['nama'];
$materi=$_POST['materi'];
$tambah=mysqli_query($koneksi,"INSERT INTO materi (id_kategori,id_bab,id_tingkatan,nama,materi) VALUES ($id_kategori,$id_bab,$id_tingkatan,'$nama','$materi')");
if ($tambah) {
  header("location:index.php?p=tambah-materi&&pesan=sukses");
} else {
  header("location:index.php?p=tambah-materi&&pesan=gagal");
}
?>
