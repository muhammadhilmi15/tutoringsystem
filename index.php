<?php
session_start();
include 'koneksi.php';
if (empty($_SESSION['id_user'])){
    header("location:login.php");
}
error_reporting(E_ALL & ~E_NOTICE);
ob_start();
$p=htmlentities($_GET['p']);
$iduser=$_SESSION['id_user'];
$coba = mysqli_query($koneksi, "SELECT * FROM user u,level l WHERE u.id_level = l.id_level AND id_user = $iduser");
$row = mysqli_fetch_array($coba);
$coba2 = mysqli_query($koneksi, "SELECT * FROM user u,tingkatan t WHERE u.id_tingkatan = t.id_tingkatan AND id_user = $iduser");
$row2 = mysqli_fetch_array($coba2);
$namauser=$row['nama'];
$iduser=$row['id_user'];
$level=$row['level'];
$tingkatan=$row2['tingkatan'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-Learning With ITS</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
</head>
<body>
  <!-- START PAGE CONTAINER -->
  <div class="page-container">
    <!-- START PAGE SIDEBAR -->
    <div class="page-sidebar">
      <!-- START X-NAVIGATION -->
      <ul class="x-navigation">
      <li class="xn-logo">
          <a href="index.php"></a>
          <a href="#" class="x-navigation-control"></a>
      </li>
      <li class="xn-profile">
        <a href="index.php" class="profile-mini">
          <img src="img/ocean.jpg"  alt="John Doe"/>
        </a>
        <div class="profile">
          <div class="profile-data">
            <div class="profile-data-name"><?php echo $waktu;?></div>
            <div class="profile-data-name"><?php echo $namauser;?></div>
            <div class="profile-data-title"><?php echo $kategori;?></div>
          </div>
          <div class="profile-controls">
          </div>
        </div>
      </li>
      <?php
      if($level=='superuser'){
        include "menu-superuser.php";
      }
      if($level=='user'){
        include "menu-user.php";
      }
      ?>
    </div>
    <div class="page-content">
      <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
        <!-- TOGGLE NAVIGATION -->
        <li class="xn-icon-button">
          <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
        </li>
        <!-- END TOGGLE NAVIGATION -->
        <!-- SEARCH -->
        <li class="xn-search">
          <form role="form">
            <input type="text" name="search" placeholder="Cari"/>
          </form>
        </li>
        <li class="pull-right">
          <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span>Keluar</a>
        </li>
      </ul>

      <div class="page-content-wrap">
        <?php
        $file="$p.php";
        $cek=strlen($p);
        if ($cek>30||!file_exists($file)||empty($p)) {
          if($level=='superuser'){
            include "dashboard-superuser.php";
          }
          if($level=='user'){
            include "dashboard-user.php";
          }
        } else {
          include ($file);
        }
        ?>
      </div>
    </div>
  </div>

  <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
      <div class="mb-middle">
        <div class="mb-title"><span class="fa fa-sign-out"></span> Keluar?</div>
        <div class="mb-content">
          <p>Apakah anda yakin ingin keluar?</p>
        </div>
        <div class="mb-footer">
          <div class="pull-right">
            <a href="logout.php" class="btn btn-success btn-md">Iya</a>
            <button class="btn btn-default btn-md mb-control-close">Tidak</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
  <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>

  <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
  <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>

  <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
  <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
  <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>

  <script type="text/javascript" src="js/plugins/morris/raphael-min.js"></script>
  <script type="text/javascript" src="js/plugins/morris/morris.min.js"></script>
  <script type="text/javascript" src="js/plugins/rickshaw/d3.v3.js"></script>
  <script type="text/javascript" src="js/plugins/rickshaw/rickshaw.min.js"></script>
  <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
  <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>
  <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
  <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>

  <script type="text/javascript" src="js/plugins/moment.min.js"></script>
  <script type="text/javascript" src="js/plugins/daterangepicker/daterangepicker.js"></script>

  <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
  <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
  <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="js/plugins/tableexport/tableExport.js"></script>
  <script type="text/javascript" src="js/plugins/tableexport/jquery.base64.js"></script>
  <script type="text/javascript" src="js/plugins/tableexport/html2canvas.js"></script>
  <script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
  <script type="text/javascript" src="js/plugins/tableexport/jspdf/jspdf.js"></script>
  <script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/base64.js"></script>

  <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
  <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
  <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>

  <script type="text/javascript" src="js/plugins/codemirror/codemirror.js"></script>
  <script type='text/javascript' src="js/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
  <script type='text/javascript' src="js/plugins/codemirror/mode/xml/xml.js"></script>
  <script type='text/javascript' src="js/plugins/codemirror/mode/javascript/javascript.js"></script>
  <script type='text/javascript' src="js/plugins/codemirror/mode/css/css.js"></script>
  <script type='text/javascript' src="js/plugins/codemirror/mode/clike/clike.js"></script>
  <script type='text/javascript' src="js/plugins/codemirror/mode/php/php.js"></script>

  <script type="text/javascript" src="js/plugins/summernote/summernote.js"></script>

  <script type="text/javascript" src="js/settings.js"></script>

  <script type="text/javascript" src="js/plugins.js"></script>
  <script type="text/javascript" src="js/actions.js"></script>

  <script type="text/javascript" src="js/demo_dashboard.js"></script>

  <script type="text/javascript">
  $(document).on("click", ".editDialog", function () {
    var id_kategori = $(this).data('id');
    var kategori = $(this).data('nama');
    $(".modal-body #nama_kategori").val(kategori);
    $(".modal-body #id_kategori").val(id_kategori);
  });
  </script>

  <script type="text/javascript">
  $(document).on("click", ".editDialog2", function () {
    var id_bab = $(this).data('idbab');
    var id_kategori = $(this).data('idkategori');
    var kategori = $(this).data('kategori');
    var bab = $(this).data('bab');
    $(".modal-body #id_kategori").val(id_kategori);
    $(".modal-body #id_bab").val(id_bab);
    $(".modal-body #kategori").val(kategori);
    $(".modal-body #bab").val(bab);
  });
  </script>
</body>
</html>
