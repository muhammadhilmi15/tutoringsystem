<?php
include('koneksi.php');
$id_kemampuan=$_GET['id_kemampuan'];
$query=mysqli_query($koneksi,"UPDATE user SET id_tingkatan=$id_kemampuan WHERE id_user=$iduser");
if ($query) {
  header("location:index.php")or die(mysql_error());
} else {
  echo "Gagal";
}
?>
