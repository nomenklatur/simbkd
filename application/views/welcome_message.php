
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SISTEM BKD| Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='icon' href='<?= base_url()?>images/fav.ico' type='image/x-icon'/>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
	<div align="center">
    	<img src="<?=base_url()?>images/logo-new1.png" width="100px" heigth="100px"><br>
  </div>
  <div align="center" style="color:#ECEDF5;font-size:17px;font-family:sans-serif">
	<p><strong>Sistem Informasi Beban Kinerja Dosen<br>IAKN TARUTUNG</strong></p>
  </div>
<body class="hold-transition login-page" style="background-image: url('<?=base_url()?>/images/iakn.jpg');background-size: cover; height:100%;backgroun-position:center;background-repeat:no-repeat">

<div class="login-box">
  
  <br>
  				<?php if($this->session->login=='error'){ ?>
					<div style="text-align: center;background-color: #FFFF00; border-width: 2px; border-style: solid; border-color: #FFD600;color: #EF6C00; position:relative; top: -30px ; width: 100%; padding: 13px; border-radius: 25px;font-size:12pt"><img src="<?= base_url() ?>images/seru.png" style="height: 18px; margin-right: 15px" />Gagal Login !</div>
                <?php }?>
  <div class="card">
  

    <div class="card-body login-card-body">
      <form method="POST" action="<?= base_url()?>Welcome/login">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="nip"  placeholder="NIP / Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url()?>assets/dist/js/adminlte.min.js"></script>

</body>
</html>
