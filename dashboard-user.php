<?php
include 'koneksi.php';
$query=mysqli_query($koneksi,"SELECT * FROM statistik s, tingkatan t WHERE s.id_tingkatan=t.id_tingkatan AND id_user=$iduser");
?>

<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"><b>Dashboard</b> User</h3>
    </div>
    <div class="panel-body">
      <div class="row stacked">
        <div class="col-md-12">
          <div class="alert alert-success" role="alert">
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              Selamat datang, <strong><?php echo $namauser;?>!</strong> Kami menyediakan kemudahan untuk anda dalam memahami materi pelajaran di sekolah!
          </div>
        </div>
      </div>
      <div class="page-content-wrap">
        <!-- <div class="row">
          <div class="col-md-3">
              <div class="widget widget-primary widget-item-icon">
                  <div class="widget-item-left">
                      <span class="fa fa-user"></span>
                  </div>
                  <div class="widget-data">
                      <div class="widget-int num-count">599</div>
                      <div class="widget-title">Registred users</div>
                      <div class="widget-subtitle">On our website and app</div>
                  </div>
                  <div class="widget-controls">
                      <a href="#" class="widget-control-right"><span class="fa fa-times"></span></a>
                  </div>
              </div>
          </div>
          <div class="col-md-3">
              <div class="widget widget-primary widget-item-icon">
                  <div class="widget-item-left">
                      <span class="fa fa-user"></span>
                  </div>
                  <div class="widget-data">
                      <div class="widget-int num-count">599</div>
                      <div class="widget-title">Registred users</div>
                      <div class="widget-subtitle">On our website and app</div>
                  </div>
                  <div class="widget-controls">
                      <a href="#" class="widget-control-right"><span class="fa fa-times"></span></a>
                  </div>
              </div>
          </div>
          <div class="col-md-3">
              <div class="widget widget-primary widget-item-icon">
                  <div class="widget-item-left">
                      <span class="fa fa-user"></span>
                  </div>
                  <div class="widget-data">
                      <div class="widget-int num-count">599</div>
                      <div class="widget-title">Registred users</div>
                      <div class="widget-subtitle">On our website and app</div>
                  </div>
                  <div class="widget-controls">
                      <a href="#" class="widget-control-right"><span class="fa fa-times"></span></a>
                  </div>
              </div>

          </div>
          <div class="col-md-3">
              <div class="widget widget-primary widget-item-icon">
                  <div class="widget-item-left">
                      <span class="fa fa-user"></span>
                  </div>
                  <div class="widget-data">
                      <div class="widget-int num-count">599</div>
                      <div class="widget-title">Registred users</div>
                      <div class="widget-subtitle">On our website and app</div>
                  </div>
                  <div class="widget-controls">
                      <a href="#" class="widget-control-right"><span class="fa fa-times"></span></a>
                  </div>
              </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</div>

<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"><b>Statistik</b> Pengguna</h3>
      <ul class="panel-controls">
        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
      </ul>
    </div>
    <div class="panel-body">
      <table id="dataTables" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>No.</th>
            <th>Tanggal Test</th>
            <th>Jawaban Benar</th>
            <th>Jawaban Salah</th>
            <th>Jawaban Kosong</th>
            <th>Skor</th>
            <th>Tingkatan</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row=mysqli_fetch_array($query)) { ?>
            <tr>
              <td><?php echo $row['id_statistik']; ?></td>
              <td><?php echo $row['tgl_test']; ?></td>
              <td><?php echo $row['jawaban_benar']; ?></td>
              <td><?php echo $row['jawaban_salah']; ?></td>
              <td><?php echo $row['jawaban_kosong']; ?></td>
              <td><?php echo $row['skor']; ?></td>
              <td><?php echo $row['tingkatan']; ?></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
    </div>
  </div>
</div>
