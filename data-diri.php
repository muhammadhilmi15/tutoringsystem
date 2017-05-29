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
              <td align="right"><label>Nama</label></td>
              <td><?php echo $row['nama'];?></td>
            </tr>
            <tr>
              <td align="right"><label>Tanggal Lahir</label></td>
              <td><?php echo $row['tgl_lahir'];?></td>
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
      <a href="#" class="mb-control btn btn-danger pull-left" data-box="#mb-deleteuser"><i class="fa fa-trash-o"></i>Hapus Akun</a>
      <a
        class="btn btn-primary pull-right editDialog3 detail-data"
        data-toggle="modal" href="#modalEditAkun"
        data-iduser="<?php echo $row['id_user'];?>"
        data-nama="<?php echo $row['nama'];?>"
        data-tgl="<?php echo $row['tgl_lahir'];?>"
        data-jk="<?php echo $row['jenis_kelamin'];?>"
        data-email="<?php echo $row['email'];?>"
        data-username="<?php echo $row['username'];?>"
        data-password="<?php echo $row['password'];?>">
        <i class="fa fa-edit"></i>Edit Akun
      </a>
    </div>
  </div>
</div>
<div class="message-box animated fadeIn" data-sound="alert" id="mb-deleteuser">
  <div class="mb-container">
    <div class="mb-middle">
      <div class="mb-title"><span class="fa fa-trash-o"></span> Hapus akun?</div>
      <div class="mb-content">
        <p>Apakah anda yakin ingin menghapus akun anda?</p>
      </div>
      <div class="mb-footer">
        <div class="pull-right">
          <a href="proses-hapus-akun.php?id_user=<?php echo $iduser;?>" class="btn btn-success btn-md">Iya</a>
          <button class="btn btn-default btn-md mb-control-close">Tidak</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="modalEditAkun" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Akun</h4>
      </div>
      <form class="" action="proses-edit-akun.php" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <div class="col-md-12">
                  <label for="">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <label for="">Tanggal Lahir</label>
                  <input type="text" class="form-control datepicker" id="datepicker" name="tgl">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <label for="">Jenis Kelamin</label>
                  <select class="form-control select" id="jk" name="jk">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <label for="">Email</label>
                  <input type="text" class="form-control" id="email" name="email">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <label for="">Username</label>
                  <input type="text" class="form-control" id="username" name="username">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <label for="">Password</label>
                  <input type="text" class="form-control" id="password" name="password">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <input type="hidden" class="form-control" id="id_user" name="id_user"/>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Update"></input>
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
        </div>
      </form>
    </div>
  </div>
</div>
