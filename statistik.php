<?php
include 'koneksi.php';
$query=mysqli_query($koneksi,"SELECT * FROM statistik s, tingkatan t WHERE s.id_tingkatan=t.id_tingkatan AND id_user=$iduser");
?>
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
