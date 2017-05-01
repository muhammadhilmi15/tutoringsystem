<?php
include'koneksi.php';
$materi=mysqli_query($koneksi,"SELECT * FROM materi m, kategori k, bab b, tingkatan t WHERE m.id_kategori=k.id_kategori AND m.id_bab=b.id_bab AND m.id_tingkatan=t.id_tingkatan AND id_tingkatan=$id_tingkatan");
$materi2=mysqli_query($koneksi,"SELECT * FROM materi m, kategori k, bab b, tingkatan t WHERE m.id_kategori=k.id_kategori AND m.id_bab=b.id_bab AND m.id_tingkatan=t.id_tingkatan");
$materi3=mysqli_query($koneksi,"SELECT * FROM materi m, kategori k WHERE m.id_kategori=k.id_kategori");
?>
<br>
<div class="page-title">
  <h2><span class="fa fa-arrow-circle-o-left"></span> List Materi</h2>
</div>
<div class="row">
  <div class="col-md-9">
    <?php if (!empty($tingkatan)) { ?>
      <?php while ($row=mysqli_fetch_array($materi)) { ?>
        <div class="panel panel-default">
          <div class="panel-body posts">
            <div class="row">
              <div class="col-md-12">
                <div class="post-item">
                  <div class="post-title">
                    <a href="index.php?p=lihat-materi-detail&&id_materi=<?php echo $row['id_materi'];?>"><?php echo $row['nama'];?></a>
                  </div>
                  <div class="post-date"><span class="fa fa-book"></span><?php echo $row['kategori'];?> / <?php echo $row['bab'];?> / <?php echo $row['tingkatan'];?></div>
                  <div class="post-text">
                    <?php echo $row['materi'];?>
                  </div>
                  <div class="post-row">
                    <a class="btn btn-default btn-rounded pull-right" href="index.php?p=lihat-materi-detail&&id_materi=<?php echo $row['id_materi'];?>">Read more &RightArrow;</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
        <?php } elseif (empty($tingkatan)) { ?>
          <?php while ($row=mysqli_fetch_array($materi2)) { ?>
            <div class="panel panel-default">
              <div class="panel-body posts">
                <div class="row">
                  <div class="col-md-12">
                    <div class="post-item">
                      <div class="post-title">
                        <a href="index.php?p=lihat-materi-detail&&id_materi=<?php echo $row['id_materi'];?>"><?php echo $row['nama'];?></a>
                      </div>
                      <div class="post-date"><span class="fa fa-book"></span><?php echo $row['kategori'];?> / <?php echo $row['bab'];?> / <?php echo $row['tingkatan'];?></div>
                      <div class="post-text">
                        <?php echo $row['materi'];?>
                      </div>
                      <div class="post-row">
                        <a class="btn btn-default btn-rounded pull-right" href="index.php?p=lihat-materi-detail&&id_materi=<?php echo $row['id_materi'];?>">Read more &RightArrow;</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
            <?php } ?>

            <ul class="pagination pagination-sm pull-right push-down-20">
              <li class="disabled"><a href="#">«</a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">»</a></li>
            </ul>
          </div>

          <div class="col-md-3">
            <div class="panel panel-default">
              <div class="panel-body">
                <h3>Materi Terbaru</h3>
                <div class="links small">
                  <?php while ($row3=mysqli_fetch_array($materi3)) { ?>
                    <a href="index.php?p=lihat-materi-detail&&id_materi=<?php echo $row3['id_materi'];?>"><?php echo $row3['nama'];?></a>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
