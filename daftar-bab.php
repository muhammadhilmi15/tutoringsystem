<?php
include'koneksi.php';
$tampil = mysqli_query($koneksi, "SELECT * FROM kategori k,bab b WHERE k.id_kategori = b.id_kategori");
$tampil2 = mysqli_query($koneksi, "SELECT * FROM kategori");
$tampil3 = mysqli_query($koneksi, "SELECT * FROM kategori");
?>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Daftar Bab</h3>
        <button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#modalTambah"><i class="fa fa-plus"></i> Tambah Bab</button>
      </div>
      <div class="panel-body">
        <?php
        if(isset($_GET['pesan'])){
          if($_GET['pesan'] == "gagal"){
            echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span> Bab gagal ditambahkan!</div><br><br><br><br>";
          } elseif ($_GET['pesan'] == "sukses") {
            echo "<div style='margin-bottom:-55px' class='alert alert-success' role='alert'><span class='glyphicon glyphicon-warning-sign'></span> Bab sukses ditambahkan!</div><br><br><br><br>";
          } elseif ($_GET['pesan'] == "editsukses") {
            echo "<div style='margin-bottom:-55px' class='alert alert-success' role='alert'><span class='glyphicon glyphicon-warning-sign'></span> Bab sukses diupdate!</div><br><br><br><br>";
          } elseif ($_GET['pesan'] == "editgagal") {
            echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span> Bab gagal diupdate!</div><br><br><br><br>";
          }
        }
        ?>
        <table id="dataTables" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Id</th>
              <th>Kategori</th>
              <th>Bab</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php while($row=mysqli_fetch_array($tampil)) { ?>
              <tr>
                <td><?php echo $row['id_bab']; ?></td>
                <td><?php echo $row['kategori']; ?></td>
                <td><?php echo $row['bab']; ?></td>
                <td>
                  <a class="btn btn-danger" href="proses-hapus-bab.php?id_bab=<?php echo $row['id_bab'];?>"><i class="fa fa-trash-o"></i></a>
                  <a
                    class="btn btn-primary editDialog2 detail-data"
                    data-toggle="modal" href="#modalEdit"
                    data-idbab="<?php echo $row['id_bab'];?>"
                    data-idkategori="<?php echo $row['id_kategori'];?>"
                    data-kategori="<?php echo $row['kategori'];?>"
                    data-bab="<?php echo $row['bab'];?>">
                    <i class="fa fa-edit"></i>
                  </a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal tambah -->
  <div class="modal fade" id="modalTambah" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Bab</h4>
        </div>
        <form class="" action="proses-tambah-bab.php" method="post">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="col-md-12">
                    <select class="form-control select" name="kategori">
                      <option value="">Pilih kategori</option>
                      <?php while ($row2=mysqli_fetch_array($tampil2)) { ?>
                        <option value="<?php echo $row2['id_kategori']?>"><?php echo $row2['kategori']?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div><br>
                <div class="form-group">
                  <div class="col-md-12">
                    <input type="text" class="form-control" name="bab" placeholder="Masukkan nama bab"/>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-primary" value="Tambah">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal tambah -->
  <div class="modal fade" id="modalEdit" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Kategori</h4>
        </div>
        <form class="" action="proses-edit-bab.php" method="post">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="col-md-12">
                    <select class="form-control select" name="kategori" id="kategori">
                      <option>Pilih kategori</option>
                      <?php while ($row3=mysqli_fetch_array($tampil3)) { ?>
                        <option value="<?php echo $row3['id_kategori']?>"><?php echo $row3['kategori']?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div><br>
                <div class="form-group">
                  <div class="col-md-12">
                    <input type="text" class="form-control" id="bab" name="bab" placeholder="Masukkan nama bab"/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <input type="hidden" class="form-control" id="id_bab" name="id_bab"/>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-primary" value="Edit"></input>
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
          </div>
        </form>
      </div>
    </div>
  </div>
