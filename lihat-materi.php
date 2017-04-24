<?php
include'koneksi.php';
$materi=mysqli_query($koneksi,"SELECT * FROM materi WHERE id_tingkatan=$id_tingkatan");
?>
<br>
<div class="page-title">
    <h2><span class="fa fa-arrow-circle-o-left"></span> List Materi</h2>
</div>
<div class="row">
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-body posts">
                <div class="row">
                    <div class="col-md-6">
                        <div class="post-item">
                          <?php while ($row=mysqli_fetch_array($materi)) { ?>
                            <div class="post-title">
                                <a href="pages-blog-post.html">Outer space</a>
                            </div>
                            <div class="post-date"><span class="fa fa-calendar"></span> October 23, 2014 / <a href="pages-blog-post.html#comments">3 Comments</a> / <a href="pages-profile.html">by Dmitry Ivaniuk</a></div>
                            <div class="post-text">
                                <p>Outer space, or simply space, is the void that exists between celestial bodies, including the Earth. It is not completely empty, but consists of a hard vacuum containing a low density of particles: predominantly a plasma of hydrogen and helium.</p>
                            </div>
                            <div class="post-row">
                                <button class="btn btn-default btn-rounded pull-right">Read more &RightArrow;</button>
                            </div>
                          <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                <h3>Bab</h3>
                <div class="links">
                    <a href="#">Front-end <span class="label label-default">195</span></a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <h3>Recent</h3>
                <div class="links small">
                    <a href="#">Vestibulum porttitor neque vitae odio vulputate molestie</a>
                    <a href="#">Etiam tellus mi, interdum id nulla in</a>
                    <a href="#">Cras eu tincidunt quam</a>
                    <a href="#">Donec rhoncus quam tortor, id pulvinar erat elementum eu</a>
                    <a href="#">Nunc lorem est, suscipit bibendum</a>
                    <a href="#">Fusce sollicitudin quis turpis eget mollis</a>
                    <a href="#">Cras eget sagittis dui, et mollis tortor</a>
                </div>
            </div>
        </div>
    </div>
</div>
