<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>
  <title>Buat Akun | E-Learning</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
</head>
<body>
  <div class="login-container">
    <?php
    if(isset($_GET['pesan'])){
      if($_GET['pesan'] == "gagal"){
        echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span> Buat akun gagal! Silahkan lengkapi data anda <a href='login.php' class='btn btn-primary btn-sm pull-right'>Login</a></div>";
      } elseif ($_GET['pesan'] == "sukses") {
        echo "<div style='margin-bottom:-55px' class='alert alert-success' role='alert'><span class='glyphicon glyphicon-warning-sign'></span> Buat akun sukses! Silahkan login untuk masuk <a href='login.php' class='btn btn-primary btn-sm pull-right'>Login</a></div>";
      }
    }
    ?>
    <div class="login-box animated fadeInDown">
      <div class="login" align="center">
        <h1><span class="logo-mini"></span>
          <a href="index.php"><b>E-Learning</b> With ITS</a></h1>
        </div>
        <div class="login-body">
          <div class="login-title"><strong>Buat</strong> Akun</div>
          <form name="login" action="proses-daftar.php" class="form-horizontal" method="post">
            <div class="form-group">
              <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Nama lengkap" name="nama" />
              </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <input type="text" class="form-control datepicker" id="datepicker" placeholder="Tanggal lahir" name="tgl_lahir">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    <label class="check"><input type="radio" class="iradio" name="jenis_kelamin" value="Laki-laki" checked="checked"/> Laki-laki</label>
                </div>
                <div class="col-md-4">
                    <label class="check"><input type="radio" class="iradio" name="jenis_kelamin" value="Perempuan"/> Perempuan</label>
                </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <input type="text" class="form-control" placeholder="E-mail" name="email" />
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Username" name="username" />
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12" >
                <input type="password" class="form-control" placeholder="Password" name="password" />
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                <input type="submit" class="btn btn-info btn-block" value="Buat">
              </div>
              <div class="col-md-6 pull-right">
                <input type="reset" class="btn btn-danger btn-block" value="Reset">
              </div>
            </div>
            <input type="hidden" class="form-control" name="id_level" value="2" />
          </form>
        </div>
      </div>
    </div>
    <!-- START PLUGINS -->
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- END PLUGINS -->

    <!-- THIS PAGE PLUGINS -->
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
    <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
    <!-- END THIS PAGE PLUGINS -->

    <!-- START TEMPLATE -->
    <script type="text/javascript" src="js/settings.js"></script>

    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
    <!-- END TEMPLATE -->
    <script type="text/javascript">
    $(function () {
      $('#datepicker').datepicker({
        autoclose: true,
        dateFormat: 'yy-mm-dd'
      });
    });
    </script>
  </body>
  </html>
