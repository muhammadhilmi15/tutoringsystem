<?php
include'koneksi.php';
$mapel=mysqli_query($koneksi,"SELECT COUNT(*) FROM kategori;");
$rowmapel=mysqli_fetch_array($mapel);
$bab=mysqli_query($koneksi,"SELECT COUNT(*) FROM bab;");
$rowbab=mysqli_fetch_array($bab);
$soal=mysqli_query($koneksi,"SELECT COUNT(*) FROM soal;");
$rowsoal=mysqli_fetch_array($soal);
$materi=mysqli_query($koneksi,"SELECT COUNT(*) FROM materi;");
$rowmateri=mysqli_fetch_array($materi);
?>
<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Dashboard Super User</h3>
    </div>
    <div class="panel-body">
      <div class="row stacked">
        <div class="col-md-12">
          <div class="alert alert-success" role="alert">
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <strong>Selamat datang!</strong> Anda mempunyai hak akses untuk memanage materi dan soal
          </div>
        </div>
      </div>
      <div class="page-content-wrap">
        <div class="row">
          <div class="col-md-3">
              <div class="widget widget-primary widget-item-icon">
                  <div class="widget-item-left">
                      <span class="fa fa-filter"></span>
                  </div>
                  <div class="widget-data"><br>
                      <div class="widget-int num-count"><?php echo $rowmapel['COUNT(*)'];?></div>
                      <div class="widget-title">Mata Pelajaran</div>
                  </div>
                  <div class="widget-controls">
                      <a href="#" class="widget-control-right"><span class="fa fa-times"></span></a>
                  </div>
              </div>
          </div>
          <div class="col-md-3">
              <div class="widget widget-primary widget-item-icon">
                  <div class="widget-item-left">
                      <span class="fa fa-sort-amount-desc"></span>
                  </div>
                  <div class="widget-data"><br>
                      <div class="widget-int num-count"><?php echo $rowbab['COUNT(*)'];?></div>
                      <div class="widget-title">Jumlah Bab</div>
                  </div>
                  <div class="widget-controls">
                      <a href="#" class="widget-control-right"><span class="fa fa-times"></span></a>
                  </div>
              </div>
          </div>
          <div class="col-md-3">
              <div class="widget widget-primary widget-item-icon">
                  <div class="widget-item-left">
                      <span class="fa fa-bars"></span>
                  </div>
                  <div class="widget-data"><br>
                      <div class="widget-int num-count"><?php echo $rowsoal['COUNT(*)'];?></div>
                      <div class="widget-title">Jumlah Soal</div>
                  </div>
                  <div class="widget-controls">
                      <a href="#" class="widget-control-right"><span class="fa fa-times"></span></a>
                  </div>
              </div>

          </div>
          <div class="col-md-3">
              <div class="widget widget-primary widget-item-icon">
                  <div class="widget-item-left">
                      <span class="fa fa-book"></span>
                  </div>
                  <div class="widget-data"><br>
                      <div class="widget-int num-count"><?php echo $rowmateri['COUNT(*)'];?></div>
                      <div class="widget-title">Jumlah Materi</div>
                  </div>
                  <div class="widget-controls">
                      <a href="#" class="widget-control-right"><span class="fa fa-times"></span></a>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
