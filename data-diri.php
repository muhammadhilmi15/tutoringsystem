<?php
include'koneksi.php';
$datadiri=mysqli_query($koneksi,"SELECT * FROM user u,level l,tingkatan t WHERE u.id_level=l.id_level AND id_user=$iduser");
$row=mysqli_fetch_array($datadiri);
?>
<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Profil Diri</h3>
    </div>
    <div class="panel-body">
      <div class="page-content-wrap">
        <div class="row">
          <table class="table table-striped">
            <tr>
              <td align="right"><label>ID User</label></td>
              <td><?php echo $row['id_user'];?></td>
            </tr>
            <tr>
              <td align="right"><label>Nama</label></td>
              <td><?php echo $row['nama'];?></td>
            </tr>
            <tr>
              <td align="right"><label>Jenis Kelamin</label></td>
              <td><?php echo $row['jenis_kelamin'];?></td>
            </tr>
            <tr>
              <td align="right"><label>Email</label></td>
              <td><?php echo $row['email'];?></td>
            </tr>
            <tr>
              <td align="right"><label>Username</label></td>
              <td><?php echo $row['username'];?></td>
            </tr>
            <tr>
              <td align="right"><label>Password</label></td>
              <td><?php echo $row['password'];?></td>
            </tr>
            <tr>
              <td align="right"><label>Hak Akses</label></td>
              <td><?php echo $row['level'];?></td>
            </tr>
            <tr>
              <td align="right"><label>Kemampuan</label></td>
              <td><?php echo $row['tingkatan'];?></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="panel-footer">
      <a type="button" class="btn btn-danger pull-left" >Hapus Akun</a>
      <input type="button" class="btn btn-primary pull-right" value="Edit Akun">
    </div>
  </div>
</div>
