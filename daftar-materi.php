<?php
include'koneksi.php';
$tampil = mysqli_query($koneksi, "SELECT * FROM materi m, kategori k,bab b, tingkatan t WHERE m.id_kategori = k.id_kategori AND m.id_bab=b.id_bab AND m.id_tingkatan=t.id_tingkatan");
?>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Daftar Materi</h3>
        <a type="button" class="btn btn-danger pull-right" href="index.php?p=tambah-materi"><i class="fa fa-plus"></i> Tambah Materi</a>
      </div>
      <div class="panel-body">
        <?php
        if(isset($_GET['pesan'])){
          if($_GET['pesan'] == "gagal"){
            echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span> Materi gagal ditambahkan!</div><br><br><br><br>";
          } elseif ($_GET['pesan'] == "sukses") {
            echo "<div style='margin-bottom:-55px' class='alert alert-success' role='alert'><span class='glyphicon glyphicon-warning-sign'></span> Materi sukses ditambahkan!</div><br><br><br><br>";
          } elseif ($_GET['pesan'] == "editsukses") {
            echo "<div style='margin-bottom:-55px' class='alert alert-success' role='alert'><span class='glyphicon glyphicon-warning-sign'></span> Materi sukses diupdate!</div><br><br><br><br>";
          } elseif ($_GET['pesan'] == "editgagal") {
            echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span> Materi gagal diupdate!</div><br><br><br><br>";
          }
        }
        ?>
        <table id="dataTables" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Id</th>
              <th>Mata Pelajaran</th>
              <th>Bab</th>
              <th>Tingkatan</th>
              <th>Judul</th>
              <th style="width:100px">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php while($row=mysqli_fetch_array($tampil)) { ?>
              <tr>
                <td><?php echo $row['id_materi']; ?></td>
                <td><?php echo $row['kategori']; ?></td>
                <td><?php echo $row['bab']; ?></td>
                <td><?php echo $row['tingkatan']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td>
                  <a class="btn btn-danger" href="proses-hapus-materi.php?id_materi=<?php echo $row['id_materi'];?>"><i class="fa fa-trash-o"></i></a>
                  <a class="btn btn-primary" href="index.php?p=edit-materi&&id_materi=<?php echo $row['id_materi'];?>"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
