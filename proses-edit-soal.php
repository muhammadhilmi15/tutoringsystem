<?php
include'koneksi.php';
$id_soal=$_POST['id_soal'];
$id_materi=$_POST['materi'];
$id_tingkatan=$_POST['tingkatan'];
$soal=$_POST['soal'];
$opsi1=$_POST['opsi_satu'];
$opsi2=$_POST['opsi_dua'];
$opsi3=$_POST['opsi_tiga'];
$opsi_benar=$_POST['opsi_benar'];
$tambah=mysqli_query($koneksi,"UPDATE soal SET id_materi=$id_materi,id_tingkatan=$id_tingkatan,soal='$soal',opsi_satu='$opsi1',opsi_dua='$opsi2',opsi_tiga='$opsi3',opsi_benar='$opsi_benar' WHERE id_soal=$id_soal");
if ($tambah) {
  header("location:index.php?p=tambah-soal&&pesan=sukses");
} else {
  header("location:index.php?p=tambah-soal&&pesan=gagal");
}
?>
