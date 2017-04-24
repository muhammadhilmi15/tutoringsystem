<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$hasil = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' and password='$password'");
$data = mysqli_fetch_array($hasil);
if ($username == $data['username'] && $password==$data['password'])
{
  $_SESSION['id_user'] = $data['id_user'];
  header('location:index.php');
}
else
{
  header("location:login.php?pesan=gagal")or die(mysql_error());
}
?>
