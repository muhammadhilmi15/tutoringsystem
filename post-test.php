<?php
include 'koneksi.php';
$hasil=mysqli_query($koneksi, "SELECT * FROM soal WHERE tingkatan=$tingkatan ORDER BY RAND ()");
$jumlah=mysqli_num_rows($hasil);
$urut=0;
?>
<div class="col-md-12">
  <form class="form-horizontal" name="form1" method="post" action="jawaban-post.php">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><strong>Pre</strong> - Test</h3>
        <ul class="panel-controls">
          <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
        </ul>
      </div>
      <div class="panel-body">
        <div class="col-md-10 col-md-offset-1">
          <p><b>Petunjuk!</b> - Test ini bertujuan untuk mengukur kemampuan anda berada di tingkat easy, medium atau expert. Baca soal dengan baik dan teliti lalu pilih salah satu jawaban yang menurut anda benar!</p>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Soal Test Pilihan Ganda</h3>
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
              <?php
              echo "<div style='width:100%; border: 1px solid #EBEBEB; overflow:scroll;height:700px;'>";
              echo '<table width="100%" border="0">';

              while($row =mysqli_fetch_array($hasil))
              {
                $id=$row["id_soal"];
                $soal=$row["soal"];
                $pilihan_a=$row["opsi_satu"];
                $pilihan_b=$row["opsi_dua"];
                $pilihan_c=$row["opsi_tiga"];
                $pilihan_d=$row["opsi_empat"];
                ?>
                <input type="hidden" name="id[]" value=<?php echo $id; ?>>
                <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
                <tr>
                  <td width="17"><font color="#000000"><?php echo $urut=$urut+1; ?></font></td>
                  <td width="430"><font color="#000000"><?php echo "$soal"; ?></font></td>
                </tr>
                <tr>
                  <td height="21"><font color="#000000">&nbsp;</font></td>
                  <td><font color="#000000">
                    A.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A">
                    <?php echo "$pilihan_a";?></font> </td>
                  </tr>
                  <tr>
                    <td><font color="#000000">&nbsp;</font></td>
                    <td><font color="#000000">
                      B. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="B">
                      <?php echo "$pilihan_b";?></font> </td>
                    </tr>
                    <tr>
                      <td><font color="#000000">&nbsp;</font></td>
                      <td><font color="#000000">
                        C.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="C">
                        <?php echo "$pilihan_c";?></font> </td>
                      </tr>
                      <tr>
                        <td><font color="#000000">&nbsp;</font></td>
                        <td><font color="#000000">
                          D.   <input name="pilihan[<?php echo $id; ?>]" type="radio" value="D">
                          <?php echo "$pilihan_d";?></font> </td>
                        </tr>

                        <?php
                      }
                      ?>
                    </table>
                  </p>
                </div>
                <div class="panel-footer">
                  <input type="reset" class="btn btn-default" value="Reset">
                  <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
