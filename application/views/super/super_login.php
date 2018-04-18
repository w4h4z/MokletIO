<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Moklet Info Organization | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css');?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/Ionicons/css/ionicons.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css');?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/iCheck/square/blue.css');?>">

  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/mokletio.ico"/>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <p><b>MokletIO </b>Super Admin</p>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <div class="alert alert-danger" id="failed" style="display: none">Login Failed</div>
    <div class="alert alert-success" id="success" style="display: none">Login Success</div>
    <form id="login">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <input type="submit"  id="login-button"   class="btn btn-primary btn-block btn-flat" value="Log In">
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js');?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<!-- Sweet Alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- Waiting Dialog -->
<script src="<?php echo base_url('assets/dist/js/waitingfor.js');?>""></script>
<script type="text/javascript">

  $(document).ready(function() {

      $('#login-button').click(function(event) {
          event.preventDefault();
          var username = $('[name="username"]').val();
          var password = $('[name="password"]').val();
          if ($('[name="username"]').val() == "" || $('[name="password"]').val() == "") {
            swal("Username or Password Are Empty", "Please Check Again !", "warning");
          }else{
              $.post('<?php echo base_url('index.php/Login_super/login') ?>', {username : username , password : password}, function(data) {
                if (data.status == true) {
                  waitingDialog.show('Logging in');
                  setTimeout(function() {
                    document.location.href = "<?php echo base_url('index.php/Super') ?>";
                  }, 1000);
                }else{
                  swal("Wrong Username or Password", "Please Check Again !", "warning");
                }
              }, "json");
        }
      });


  });

</script>
</body>
</html>
