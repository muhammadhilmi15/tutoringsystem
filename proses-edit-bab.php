<?php
include 'koneksi.php';
$id_bab=$_POST['id_bab'];
$kategori=$_POST['kategori'];
$bab=$_POST['bab'];
$edit=mysqli_query($koneksi,"UPDATE bab SET id_kategori=$kategori, bab='$bab' WHERE id_bab=$id_bab");
if ($edit) {
  header("location:index.php?p=daftar-bab&&pesan=editsukses");
} else {
  header("location:index.php?p=daftar-bab&&pesan=editgagal");
}
?>
