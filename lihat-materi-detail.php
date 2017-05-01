<?php
include'koneksi.php';
$id_materi=$_GET['id_materi'];
$materi=mysqli_query($koneksi,"SELECT * FROM materi m, kategori k, bab b, tingkatan t WHERE m.id_kategori=k.id_kategori AND m.id_bab=b.id_bab AND m.id_tingkatan=t.id_tingkatan AND id_materi=$id_materi");
$materi2=mysqli_query($koneksi,"SELECT * FROM materi m, kategori k WHERE m.id_kategori=k.id_kategori");
?>
<br>
<div class="page-title">
    <h2><span class="fa fa-arrow-circle-o-left"></span> Materi</h2>
</div>
<div class="row">
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-body posts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="post-item">
                          <?php while ($row=mysqli_fetch_array($materi)) { ?>
                            <div class="post-title">
                                <a href="index.php?p=lihat-materi-detail&&id_materi=<?php echo $row['id_materi'];?>"><?php echo $row['nama'];?></a>
                            </div>
                            <div class="post-date"><span class="fa fa-book"></span><?php echo $row['kategori'];?> / <?php echo $row['bab'];?> / <?php echo $row['tingkatan'];?></div>
                            <div class="post-text">
                                <?php echo $row['materi'];?>
                            </div>
                            <div class="post-row">
                                <a class="btn btn-default btn-rounded pull-left" onclick="history.go(-1);">&LeftArrow; Kembali</a>
                            </div>
                          <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3>Materi Terbaru</h3>
                <div class="links small">
                    <?php while ($row3=mysqli_fetch_array($materi2)) { ?>
                      <a href="index.php?p=lihat-materi-detail&&id_materi=<?php echo $row3['id_materi'];?>"><?php echo $row3['nama'];?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
