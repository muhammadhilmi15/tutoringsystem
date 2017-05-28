<?php
include 'koneksi.php';
$id_user=$_POST['id_user'];
$nama=$_POST['nama'];
$tgl_lahir=$_POST['tgl'];
$jk=$_POST['jk'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysqli_query($koneksi,"UPDATE user SET nama='$nama',tgl_lahir='$tgl_lahir',jenis_kelamin='$jk',email='$email',username='$username',password='$password' WHERE id_user=$id_user");
if ($query) {
  header('location:logout.php');
}
?>
