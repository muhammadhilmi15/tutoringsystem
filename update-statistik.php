<?php
include 'koneksi.php';
$id_user=$_GET['id_user'];
$benar=$_GET['benar'];
$salah=$_GET['salah'];
$kosong=$_GET['kosong'];
$skor=$_GET['skor'];
$tingkatan=$_GET['id_tingkatan'];
$naiktingkat=$tingkatan++;
if ($salah==0 AND $kosong==0 AND $tingkatan<=3) {
  $query=mysqli_query($koneksi,"INSERT INTO statistik (id_user,tgl_test,skor,id_tingkatan,jawaban_benar,jawaban_salah,jawaban_kosong) VALUES ($id_user,DATE_FORMAT(NOW(),'%Y-%m-%d'),$skor,$tingkatan,$benar,$salah,$kosong)");
  $query2=mysqli_query($koneksi,"UPDATE user SET id_tingkatan=$tingkatan WHERE id_user=$id_user");
} else {
  $query=mysqli_query($koneksi,"INSERT INTO statistik (id_user,tgl_test,skor,id_tingkatan,jawaban_benar,jawaban_salah,jawaban_kosong) VALUES ($id_user,DATE_FORMAT(NOW(),'%Y-%m-%d'),$skor,$tingkatan,$benar,$salah,$kosong)");
}
if ($query) {
  header('location:index.php');
}
?>
