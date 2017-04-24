<?php
include 'koneksi.php';
$id_materi=$_POST['id_materi'];
$id_kategori=$_POST['kategori'];
$id_bab=$_POST['bab'];
$id_tingkatan=$_POST['tingkatan'];
$nama=$_POST['nama'];
$materi=$_POST['materi'];
$tambah=mysqli_query($koneksi,"UPDATE materi SET id_kategori=$id_kategori,id_bab=$id_bab,id_tingkatan=$id_tingkatan,nama='$nama',materi='$materi' WHERE id_materi=$id_materi");
if ($tambah) {
  header("location:index.php?p=tambah-materi&&pesan=sukses");
} else {
  header("location:index.php?p=tambah-materi&&pesan=gagal");
}
?>
