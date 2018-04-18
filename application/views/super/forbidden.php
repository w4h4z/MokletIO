<!DOCTYPE html>
<html>
<head>
	<title>Forbidden </title>
	  <!-- Bootstrap 3.3.7 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css');?>">

  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/mokletio.ico"/>
  <style>
  	.alert-box{
  		width: 30%;
  		height: 30%;
  		border: 1px solid #222222;
  		border-radius: 20px;
  		padding: 3%;
  		box-shadow: -5px -5px 10px #A9A9A9;
  		position: absolute;
  		margin: auto;
  		top: 0;
  		bottom: 0;
  		right: 0;
  		left: 0;
  	}

  	#link{
  		position: absolute;
  		right: 20px;
  		bottom: 20px;

  	}
  </style>
</head>
<body>
	<div class="alert-box">
		<span class="fa fa-warning" style="color:#EA0000; font-size: 48px;"></span>
		<h3>You Are Not Allowed to Access This Page !</h3>
		<a href="<?php echo base_url('index.php/Login_super') ?>" id="link">Back to Home</a>
	</div>
</body>
</html>