<?php
include'koneksi.php';
$nama=$_POST['nama'];
$tgl_lahir=$_POST['tgl_lahir'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$id_level=$_POST['id_level'];
$input=mysqli_query($koneksi,"INSERT INTO user (nama,tgl_lahir,jenis_kelamin,email,username,password,id_level) VALUES ('$nama','$tgl_lahir','$jenis_kelamin','$email','$username','$password','$id_level')");
if ($input) {
  header("location:buat-akun.php?pesan=sukses")or die(mysql_error());
} else {
  header("location:buat-akun.php?pesan=gagal")or die(mysql_error());
}
?>
