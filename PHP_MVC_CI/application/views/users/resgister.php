<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url() ?>public/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>public/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url() ?>public/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>public/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<style type="text/css" media="screen">
  .alert-success {
    padding: 20px 0;
  }
</style>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="<?= base_url() ?>public/index2.html"><b>Admin</b>VSP</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="<?= base_url() ?>AdminController/DoResgister" method="post" enctype="multipart/form-data">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Full name" name="FullName" value="<?= set_value('FullName'); ?>">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <?= form_error('FullName');?> 
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="User name" name="UserName" value="<?= set_value('UserName') ?>">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <?php echo form_error('UserName');?>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="Email" value="<?= set_value('Email') ?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?php echo form_error('Email'); ?>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="Password" value="<?= set_value('Password') ?>">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <?php echo form_error('Password'); ?>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype password" name="passwordconfirm" value="<?= set_value('passwordconfirm') ?>">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
       <?php echo form_error('passwordconfirm'); ?>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Your Address" name="Address" value="<?= set_value('Address') ?>">
        <span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
        <?php echo form_error('Address'); ?>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Your Phonenumber" name="Phonenumber" value="<?= set_value('Phonenumber') ?>">
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
        <?php echo form_error('Phonenumber'); ?>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Date Of You" name="Birthday" value="<?= set_value('Birthday') ?>">
        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
        <?php echo form_error('Birthday'); ?>
      </div>
      <div class="form-group has-feedback">
            <label>Your Gender :
              <input type="radio" class="form-control" name="gender" value="Male" class="flat-red" checked> Male
            </label>
            <label>
              <input type="radio" class="form-control" name="gender" value="Female" class="flat-red"> Female
            </label>
            <!-- <label>
              <input type="radio" name="r3" class="flat-red" disabled>
              Flat green skin radio
            </label> -->
          </div>
      <div class="form-group has-feedback">
        <input type="hidden" class="form-control" placeholder="" name="role_id" value="">
      </div>
      <div class="form-group has-feedback">
        <input type="file" class="form-control" placeholder="Full name" name="avartar">
        <span class="glyphicon glyphicon-import form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="addDataUser">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>

    <a href="<?= base_url() ?>/AdminController" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="<?= base_url() ?>public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() ?>public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?= base_url() ?>public/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
