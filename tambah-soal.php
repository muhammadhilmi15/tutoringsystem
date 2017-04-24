<?php
include'koneksi.php';
$tampil=mysqli_query($koneksi,"SELECT * FROM kategori");
$tampil2=mysqli_query($koneksi,"SELECT * FROM materi m, tingkatan t WHERE m.id_tingkatan=t.id_tingkatan");
?>
<div class="row">
  <div class="col-md-12">
    <form class="form-horizontal" method="post" action="proses-tambah-soal.php">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Tambah Soal</h3>
          <ul class="panel-controls">
            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
          </ul>
        </div>
        <div class="panel-body">
          <?php
          if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
              echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span> Tambah soal gagal! Silahkan lengkapi data yang dibutuhkan</div><br><br><br><br>";
            } elseif ($_GET['pesan'] == "sukses") {
              echo "<div style='margin-bottom:-55px' class='alert alert-success' role='alert'><span class='glyphicon glyphicon-warning-sign'></span> Tambah soal sukses! Silahan ke menu daftar soal untuk melakukan perubahan</div><br><br><br><br>";
            }
          }
          ?>
          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Mata Pelajaran</label>
            <div class="col-md-6 col-xs-12">
              <select class="form-control select" name="materi">
                <?php while ($row=mysqli_fetch_array($tampil)) { ?>
                  <option value="<?php echo $row['id_kategori'];?>"><?php echo $row['kategori'];?></option>
                <?php } ?>
              </select>
              <span class="help-block">Soal termasuk mata pelajaran apa</span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Materi</label>
            <div class="col-md-6 col-xs-12">
              <select class="form-control select" name="materi">
                <?php while ($row2=mysqli_fetch_array($tampil2)) { ?>
                  <option value="<?php echo $row2['id_materi'];?>"><?php echo $row2['nama'];?> - <?php echo $row2['tingkatan'];?></option>
                <?php } ?>
              </select>
              <span class="help-block">Soal termasuk materi apa</span>
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
              <span class="help-block">Soal termasuk materi apa</span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Soal</label>
            <div class="col-md-6 col-xs-12">
              <textarea class="form-control" rows="4" name="soal"></textarea>
              <span class="help-block">Ketikkan soal dengan detail</span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Opsi 1</label>
            <div class="col-md-6 col-xs-12">
              <input type="text" class="form-control" name="opsi_satu" placeholder="Jawaban salah"/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Opsi 2</label>
            <div class="col-md-6 col-xs-12">
              <input type="text" class="form-control" name="opsi_dua" placeholder="Jawaban salah"/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Opsi 3</label>
            <div class="col-md-6 col-xs-12">
              <input type="text" class="form-control" name="opsi_tiga" placeholder="Jawaban salah"/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Opsi Benar</label>
            <div class="col-md-6 col-xs-12">
              <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-check"></span></span>
                <input type="text" class="form-control" name="opsi_benar" placeholder="Jawaban benar"/>
              </div>
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
