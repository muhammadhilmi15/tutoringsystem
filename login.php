<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>
  <title>Login | Adaptive E-Learning</title>
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
        echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span> Login gagal! Username dan Password yang anda masukkan salah!</div>";
      }
    }
    ?>
    <div class="login-box animated fadeInDown">
      <div class="login" align="center">
        <h1>
          <a href="login.php"><b>ADAPTIVE</b> E-LEARNING</a>
        </h1>
      </div><br>
      <div class="login-body">
        <div class="login-title"><strong>Selamat datang</strong>, Silahkan login</div>
        <form name="login" action="proses-login.php" class="form-horizontal" method="post">
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
              <button class="btn btn-info btn-block">Masuk</button>
            </div>
            <div class="col-md-6 login-subtitle">
              Belum punya akun? <a href="buat-akun.php">Buat akun</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
