<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PILKADES | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/eksternal/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/eksternal/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">

  <!-- Supersized 
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/supersized/supersized.css">-->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo"><img src="<?php echo base_url(); ?>assets/img/logo_pilkades.png"></b>
    </div>
    <div style="color: #fff;">
      <p>
        <center>Sistem Informasi E-Voting</center>
      </p>
    </div>

    <!-- /.login-logo -->
    <div class="login-box-body">

      <p class="login-box-msg">
        Masukan Data Dengan Benar
      </p>

      <form action="<?php echo base_url('Auth/daftar'); ?>" method="post">
      <div class="form-group">
        <input name="username" placeholder="NIK" class="form-control" type="text">
        <span class="help-block"></span>
        <input type="hidden" value="" name="id"/>
      </div>
      <div class="form-group">
          <div class="input-group">
            <input id="password" name="password" placeholder="Password" class="form-control" type="password" data-toggle="password">
            <span class="input-group-btn">
              <button type="button" class="btn btn-flat" onclick="myFunction()"><i class="fa fa-eye"></i></button>
            </span>
            <span class="help-block"></span>
          </div>
      </div>
      <div class="form-group">
          <input name="first_name" placeholder="Nama Depan" class="form-control" type="text">
          <span class="help-block"></span>
      </div>
      <div class="form-group">
        <input name="last_name" placeholder="Nama Belakang" class="form-control" type="text">
        <span class="help-block"></span>
      </div>
        <input type="hidden" name="id_role" id="id_role" value="2">
      <div class="form-group">
          <input name="email" placeholder="Alamat" class="form-control" type="text">
          <span class="help-block"></span>
      </div>
      <div class="form-group">
        <input name="phone" placeholder="Phone" class="form-control" type="text">
        <span class="help-block"></span>
      </div>
        <!-- <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <select class="form-control" name="tahundata" placeholder="Password">
            <?php for($n=-5; $n <= 5; $n++) { ?>
              <option value="<?= date('Y')+$n ?>"><?= date('Y')+$n ?></option>
            <?php } ?>
          </select>
          <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
        </div> -->

        <div class="row">
          <div class="col-xs-8">
                <a href="<?= base_url('') ?>" class="btn btn-success btn-flat">Batal</a>
            </div>
          <div class="col-xs-4">
            <button type="submit" class="form-control btn btn-primary"><i class="fa fa-check"></i> Daftar</button>
          </div>

        </div>
      </form>

      <!-- <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
            Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
            Google+</a>
        </div> -->
      <!-- /.social-auth-links -->

      <!-- <a href="#">I forgot my password</a><br>
        <a href="register.html" class="text-center">Register a new membership</a> -->

    </div>
    <!-- /.login-box-body -->

    <?php
    echo show_err_msg($this->session->flashdata('error_msg'));
    ?>

  </div>


  <!-- /.login-box -->

  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <!-- <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script> -->
  <!-- <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script> -->
</body>
<!-- REQUIRED JS SCRIPTS -->
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
<!-- Supersized 
<script src="<?php echo base_url('assets/plugins/supersized/supersized.3.2.7.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/supersized/supersized-init.js') ?>" type="text/javascript"></script>
-->
<!-- My Ajax -->
<?php include './assets/js/ajax.php'; ?>

</html>