<?php
include 'koneksi.php';
$soal=mysqli_query($koneksi,"SELECT * FROM soal");
?>
<div class="col-md-12">
  <form class="form-horizontal">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><strong>Pre</strong> - Test</h3>
        <ul class="panel-controls">
          <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
        </ul>
      </div>
      <div class="panel-body">
        <div class="col-md-10 col-md-offset-1">
          <p><b>Petunjuk!</b>-Test ini bertujuan untuk mengukur kemampuan anda berada di tingkat easy, medium atau expert. Baca soal dengan baik dan teliti lalu pilih salah satu jawaban yang menurut anda benar!</p>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Soal Test</h3>
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
              <?php while ($row=mysqli_fetch_array($soal)) { ?>
                <h4 for=""><?php echo $row['soal']?></h4>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" value="option1"/>
                    <?php echo $row['opsi_satu'];?>
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" value="option2"/>
                    <?php echo $row['opsi_dua'];?>
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" value="option3"/>
                    <?php echo $row['opsi_tiga'];?>
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" value="option3"/>
                    <?php echo $row['opsi_benar'];?>
                  </label>
                </div>
                <?php } ?>
              </div>
              <div class="panel-footer">
                <input type="reset" class="btn btn-default" value="Reset">
                <input type="submit" class="btn btn-primary pull-right" value="Submit">
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>

  </div>
