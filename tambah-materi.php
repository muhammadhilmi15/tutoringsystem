<?php
include'koneksi.php';
$tampil=mysqli_query($koneksi,"SELECT * FROM kategori");
$tampil2=mysqli_query($koneksi,"SELECT * FROM bab");
?>
<div class="row">
  <div class="col-md-12">
    <form class="form-horizontal" method="post" action="proses-tambah-materi.php">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Tambah Materi</h3>
          <ul class="panel-controls">
            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
          </ul>
        </div>
        <div class="panel-body">
          <?php
          if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
              echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span> Tambah materi gagal! Silahkan lengkapi data yang dibutuhkan</div><br><br><br><br>";
            } elseif ($_GET['pesan'] == "sukses") {
              echo "<div style='margin-bottom:-55px' class='alert alert-success' role='alert'><span class='glyphicon glyphicon-warning-sign'></span> Tambah materi sukses! Silahan ke menu daftar materi untuk melakukan perubahan</div><br><br><br><br>";
            }
          }
          ?>
          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Mata Pelajaran</label>
            <div class="col-md-6 col-xs-12">
              <select class="form-control select" name="kategori">
                <?php while ($row=mysqli_fetch_array($tampil)) { ?>
                  <option value="<?php echo $row['id_kategori'];?>"><?php echo $row['kategori'];?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Bab</label>
            <div class="col-md-6 col-xs-12">
              <select class="form-control select" name="bab">
                <?php while ($row2=mysqli_fetch_array($tampil2)) { ?>
                  <option value="<?php echo $row2['id_bab'];?>"><?php echo $row2['bab'];?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Tingkatan</label>
            <div class="col-md-6 col-xs-12">
              <select class="form-control select" name="tingkatan">
                <option value="1">Easy</option>
                <option value="2">Medium</option>
                <option value="3">Expert</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Judul materi</label>
            <div class="col-md-6 col-xs-12">
              <input type="text" class="form-control" name="nama" placeholder="Judul materi"/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-10 col-md-offset-1">
              <textarea class="summernote" name="materi"></textarea>
            </div>
          </div>
        </div>
        <div class="panel-footer">
          <input type="reset" class="btn btn-danger" value="Reset">
          <input type="submit" class="btn btn-primary pull-right" value="Tambah">
        </div>
      </div>
    </form>
  </div>
</div>
