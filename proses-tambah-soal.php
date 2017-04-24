<?php
include'koneksi.php';
$id_materi=$_POST['materi'];
$id_tingkatan=$_POST['tingkatan'];
$soal=$_POST['soal'];
$opsi1=$_POST['opsi_satu'];
$opsi2=$_POST['opsi_dua'];
$opsi3=$_POST['opsi_tiga'];
$opsi_benar=$_POST['opsi_benar'];
$tambah=mysqli_query($koneksi,"INSERT INTO soal (id_materi,id_tingkatan,soal,opsi_satu,opsi_dua,opsi_tiga,opsi_benar) VALUES ($id_materi,$id_tingkatan,'$soal','$opsi1','$opsi2','$opsi3','$opsi_benar')");
if ($tambah) {
  header("location:index.php?p=tambah-soal&&pesan=sukses");
} else {
  header("location:index.php?p=tambah-soal&&pesan=gagal");
}
?>
