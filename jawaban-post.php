<?php
include('koneksi.php');
if(isset($_POST['submit'])){
  $pilihan=$_POST["pilihan"];
  $id_soal=$_POST["id"];
  $jumlah=$_POST['jumlah'];
  $score=0;
  $benar=0;
  $kosong=0;
  $salah=0;
  for ($i=0;$i<$jumlah;$i++){
    //id nomor soal
    $nomor=$id_soal[$i];
    //jika user tidak memilih jawaban
    if (empty($pilihan[$nomor])){
      $kosong++;
    }else{
      //jawaban dari user
      $jawaban=$pilihan[$nomor];
      //cocokan jawaban user dengan jawaban di database
      $query=mysqli_query($koneksi,"SELECT * FROM soal WHERE id_soal='$nomor' AND kunci_jawaban='$jawaban'");
      $cek=mysqli_num_rows($query);
      if($cek){
        //jika jawaban cocok (benar)
        $benar++;
      }else{
        //jika salah
        $salah++;
      }
    }
    /*RUMUS
    Jika anda ingin mendapatkan Nilai 100, berapapun jumlah soal yang ditampilkan
    hasil= 100 / jumlah soal * jawaban yang benar
    */
    $result=mysqli_query($koneksi, "SELECT * FROM soal");
    $jumlah_soal=mysqli_num_rows($result);
    $score = 100/$jumlah_soal*$benar;
    $hasil = number_format($score,1);
  }
}
?>
<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"><strong>Pre</strong> - Test</h3>
      <ul class="panel-controls">
        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
      </ul>
    </div>
    <div class="panel-body">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Hasil Post - Test</h3>
            <ul class="panel-controls">
              <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                  <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span> Refresh</a></li>
                </ul>
              </li>
              <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
            </ul>
          </div>
          <div class="panel-body">
            <table align="center">
              <tr><td align="center">Jumlah Jawaban Benar</td></tr>
              <tr><td align="center"><h2><?php echo $benar;?></h2></td></tr>
              <tr><td align="center">Jumlah Jawaban Salah</td></tr>
              <tr><td align="center"><h2><?php echo $salah;?></h2></td></tr>
              <tr><td align="center">Jumlah Jawaban Kosong</td></tr>
              <tr><td align="center"><h2><?php echo $kosong;?></h2></td></tr>
              <tr><td align="center">Skor anda</td></tr>
              <tr><td align="center"><h2 style="color:red"><?php echo $hasil;?></h2></td></tr>
            </table>
          </div>
          <div class="panel-footer">
            <a href="index.php?p=mulai-test"><input type="button" class="btn btn-default" value="Test Ulang"></a>
            <a href="index.php?p=update-statistik&&id_user=<?php echo $iduser;?>&&benar=<?php echo $benar;?>&&salah=<?php echo $salah;?>&&kosong=<?php echo $kosong;?>&&skor=<?php echo $hasil;?>&&id_tingkatan=<?php echo $id_tingkatan;?>">
              <input type="button" class="btn btn-primary pull-right" value="Lanjut"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
