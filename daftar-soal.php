<?php
include'koneksi.php';
$tampil = mysqli_query($koneksi, "SELECT * FROM soal s, materi m, tingkatan t WHERE s.id_materi = m.id_materi AND s.id_tingkatan=t.id_tingkatan");
?>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Daftar Soal</h3>
        <a type="button" class="btn btn-danger pull-right" href="index.php?p=tambah-soal"><i class="fa fa-plus"></i> Tambah Soal</a>
      </div>
      <div class="panel-body">
        <?php
        if(isset($_GET['pesan'])){
          if($_GET['pesan'] == "gagal"){
            echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span> Soal gagal ditambahkan!</div><br><br><br><br>";
          } elseif ($_GET['pesan'] == "sukses") {
            echo "<div style='margin-bottom:-55px' class='alert alert-success' role='alert'><span class='glyphicon glyphicon-warning-sign'></span> Soal sukses ditambahkan!</div><br><br><br><br>";
          } elseif ($_GET['pesan'] == "editsukses") {
            echo "<div style='margin-bottom:-55px' class='alert alert-success' role='alert'><span class='glyphicon glyphicon-warning-sign'></span> Soal sukses diupdate!</div><br><br><br><br>";
          } elseif ($_GET['pesan'] == "editgagal") {
            echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span> Soal gagal diupdate!</div><br><br><br><br>";
          }
        }
        ?>
        <table id="dataTables" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Id</th>
              <th>Materi</th>
              <th>Tingkatan</th>
              <th>Soal</th>
              <th>Opsi A</th>
              <th>Opsi B</th>
              <th>Opsi C</th>
              <th>Opsi D</th>
              <th>Kunci Jawaban</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php while($row=mysqli_fetch_array($tampil)) { ?>
              <tr>
                <td><?php echo $row['id_soal']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['tingkatan']; ?></td>
                <td><?php echo $row['soal']; ?></td>
                <td><?php echo $row['opsi_satu']; ?></td>
                <td><?php echo $row['opsi_dua']; ?></td>
                <td><?php echo $row['opsi_tiga']; ?></td>
                <td><?php echo $row['opsi_empat']; ?></td>
                <td><?php echo $row['kunci_jawaban']; ?></td>
                <td style="width:120px">
                  <a class="btn btn-danger" href="proses-hapus-soal.php?id_soal=<?php echo $row['id_soal'];?>"><i class="fa fa-trash-o"></i></a>
                  <a class="btn btn-primary" href="index.php?p=edit-soal&&id_soal=<?php echo $row['id_soal'];?>"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
