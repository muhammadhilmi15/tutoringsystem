<?php
include'koneksi.php';
$id_materi=$_GET['id_materi'];
$tampil=mysqli_query($koneksi,"SELECT * FROM materi m,kategori k, bab b, tingkatan t WHERE m.id_kategori=k.id_kategori AND m.id_bab=b.id_bab AND m.id_tingkatan=t.id_tingkatan AND id_materi=$id_materi");
$tampil2=mysqli_query($koneksi,"SELECT * FROM kategori");
$tampil3=mysqli_query($koneksi,"SELECT * FROM bab");
$row=mysqli_fetch_array($tampil);
?>
<div class="row">
  <div class="col-md-12">
    <form class="form-horizontal" method="post" action="proses-edit-materi.php">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Edit Materi</h3>
          <ul class="panel-controls">
            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
          </ul>
        </div>
        <div class="panel-body">
          <?php
          if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
              echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span> Edit materi gagal! Silahkan lengkapi data yang dibutuhkan</div><br><br><br><br>";
            } elseif ($_GET['pesan'] == "sukses") {
              echo "<div style='margin-bottom:-55px' class='alert alert-success' role='alert'><span class='glyphicon glyphicon-warning-sign'></span> Edit materi sukses! Silahan ke menu daftar materi untuk melakukan perubahan</div><br><br><br><br>";
            }
          }
          ?>
          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Mata Pelajaran</label>
            <div class="col-md-6 col-xs-12">
              <select class="form-control select" name="kategori">
                <?php while ($row2=mysqli_fetch_array($tampil2)) { ?>
                  <option value="<?php echo $row2['id_kategori'];?>"><?php echo $row2['kategori'];?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Bab</label>
            <div class="col-md-6 col-xs-12">
              <select class="form-control select" name="bab">
                <?php while ($row3=mysqli_fetch_array($tampil3)) { ?>
                  <option value="<?php echo $row3['id_bab'];?>"><?php echo $row3['bab'];?></option>
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
              <input type="text" class="form-control" name="nama" placeholder="Judul materi" value="<?php echo $row['nama']?>"/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-10 col-md-offset-1">
              <textarea class="summernote" name="materi"><?php echo $row['materi']?></textarea>
            </div>
          </div>
          <input type="hidden" name="id_materi" value="<?php echo $id_materi;?>">
        </div>
        <div class="panel-footer">
          <input type="reset" class="btn btn-danger" value="Reset">
          <input type="submit" class="btn btn-primary pull-right" value="Edit">
        </div>
      </div>
    </form>
  </div>
</div>
