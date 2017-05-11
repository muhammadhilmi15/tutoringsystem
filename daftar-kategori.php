<?php
include'koneksi.php';
$tampil=mysqli_query($koneksi,"SELECT * FROM kategori");
?>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Daftar Kategori</h3>
        <button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#modalTambah"><i class="fa fa-plus"></i> Tambah Kategori</button>
      </div>
      <div class="panel-body">
        <?php
        if(isset($_GET['pesan'])){
          if($_GET['pesan'] == "gagal"){
            echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span> Kategori gagal ditambahkan!</div><br><br><br><br>";
          } elseif ($_GET['pesan'] == "sukses") {
            echo "<div style='margin-bottom:-55px' class='alert alert-success' role='alert'><span class='glyphicon glyphicon-warning-sign'></span> Kategori sukses ditambahkan!</div><br><br><br><br>";
          } elseif ($_GET['pesan'] == "editsukses") {
            echo "<div style='margin-bottom:-55px' class='alert alert-success' role='alert'><span class='glyphicon glyphicon-warning-sign'></span> Kategori sukses diupdate!</div><br><br><br><br>";
          } elseif ($_GET['pesan'] == "editgagal") {
            echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span> Kategori gagal diupdate!</div><br><br><br><br>";
          }
        }
        ?>
        <table id="dataTables" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Id</th>
              <th>Kategori</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php while($row=mysqli_fetch_array($tampil)) { ?>
              <tr>
                <td><?php echo $row['id_kategori']; ?></td>
                <td><?php echo $row['kategori']; ?></td>
                <td>
                  <a class="btn btn-danger" href="proses-hapus-kat.php?id_kategori=<?php echo $row['id_kategori'];?>"><i class="fa fa-trash-o"></i></a>
                  <a
                    class="btn btn-primary editDialog detail-data"
                    data-toggle="modal" href="#modalEdit"
                    data-id="<?php echo $row['id_kategori'];?>"
                    data-nama="<?php echo $row['kategori'];?>">
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
          <h4 class="modal-title">Tambah Kategori</h4>
        </div>
        <form class="" action="proses-tambah-kat.php" method="post">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="col-md-12">
                    <input type="text" class="form-control" name="nama_kategori" placeholder="Masukkan nama kategori"/>
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
        <form class="" action="proses-edit-kat.php" method="post">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="col-md-12">
                    <input type="hidden" class="form-control" name="id_kategori" id="id_kategori"/>
                    <input type="text" class="form-control" name="nama_kategori" placeholder="Masukkan nama kategori" id="nama_kategori"/>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-primary" value="Edit">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
          </div>
        </form>
      </div>
    </div>
  </div>
