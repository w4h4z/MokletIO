<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $sub->NAMA_SUB ;?> | Dashboard Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Live Preview -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/css/live_preview.css"  type="text/css">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/owlcarousel/owl.theme.default.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="<?php echo base_url('assets/');?>dist/css/skins/_all-skins.min.css">
   <!-- DataTables -->
   <link rel="stylesheet" href="<?php echo base_url('assets/');?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
   <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"> -->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>bower_components/datatables.net-bs/css/buttons.dataTables.min.css">
   <!-- Bootstrap Color Picker -->
   <link rel="stylesheet" href="<?php echo base_url('assets/');?>bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
   <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/mokletio.ico"/>

   <!-- Ajax CSS -->
   <link rel="stylesheet" href="<?php echo base_url('assets/');?>dist/css/ajax.css">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/');?>bower_components/jquery/dist/jquery.min.js"></script>
<style >
.appear{
  display: block;
}
.menu-active{
  background-color: #222222;
}
</style>
</head>
<body class="hold-transition skin-blue sidebar-mini fixed" style="padding-right: 0px;">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><?php echo $sub->SINGKATAN_SUB ;?></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b><?php echo $sub->NAMA_SUB ;?></b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
           <li class="dropdown">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdown-sub">
                <img src="<?php echo base_url();?>/uploads/<?php echo $sub->LOGO_SUB ;?>" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $sub->NAMA_SUB ;?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo base_url();?>/uploads/<?php echo $sub->LOGO_SUB ;?>" class="img-circle" alt="User Image">
                  <p>
                    <?php echo $sub->NAMA_SUB ;?>
                    <small><?php echo $sub->SINGKATAN_SUB ;?></small>
                  </p>
                </li>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#modal_password">Account Setting</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('auth/logout'); ?>" class="btn btn-flat btn-danger">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>/uploads/<?php echo $sub->LOGO_SUB ;?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $sub->NAMA_SUB ;?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Member</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#newMember>" id="newMember"><i class="fa fa-circle-o"></i> New Register Member</a></li>
            <li><a href="#listMember" id="listMember"><i class="fa fa-circle-o"></i> List Member</a></li>
          </ul>
        </li>
        <li><a href="#profile" id="profile"><i class="fa fa-user-o"></i> <span>Profile</span></a></li>
        <li><a href="#event" id="event"><i class="fa fa-calendar-check-o"></i> <span>Event</span></a></li>
        <li><a href="#gallery" id="gallery"><i class="fa fa-picture-o"></i> <span>Gallery</span></a></li>

        <li><a href="#proporsal" id="proposal"><i class="fa fa-book"></i> <span>Proposal</span></a></li>
        <li class="header">HELP</li>
  <!--       <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>User Manual</span></a></li>
    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Documentation</span></a></li> -->
    <li><a href="#about"><i class="fa fa-circle-o text-aqua"></i> <span>About</span></a></li>
  </ul>
</section>
<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <?php
  $this->load->view($main_view);
  ?>

</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> BETA
  </div>
  <strong>Copyright &copy; Project Work.</strong> All rights
  reserved.
</footer>

<!-- Control Sidebar -->

<!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
   <div class="control-sidebar-bg"></div>
 </div>
 <!-- ./wrapper -->

 <!-- Bootstrap 3.3.7 -->
 <script src="<?php echo base_url('assets/');?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
 <!-- FastClick -->
 <script src="<?php echo base_url('assets/');?>bower_components/fastclick/lib/fastclick.js"></script>
 <!-- AdminLTE App -->
 <script src="<?php echo base_url('assets/');?>dist/js/adminlte.min.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="<?php echo base_url('assets/');?>dist/js/demo.js"></script>
 <!-- SlimScroll -->
 <script src="<?php echo base_url('assets/');?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
 <!-- bootstrap color picker -->
 <script src="<?php echo base_url('assets/');?>bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
 <!-- DataTables -->
 <script src="<?php echo base_url('assets/');?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
 <script src="<?php echo base_url('assets/');?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>
 <!-- Owl Carousel -->
 <script src="<?php echo base_url(); ?>assets/front_end/owlcarousel/owl.carousel.min.js"></script>
 <!-- CKEDITOR -->
 <script src="<?php echo base_url('assets/');?>dist/js/ckeditor/ckeditor.js"></script><!-- 
 <script src="<?php echo base_url('assets/');?>dist/js/ckeditor/ckeditor-inline.js"></script> -->
  <!-- Waiting Dialog -->
  <script src="<?php echo base_url('assets/dist/js/waitingfor.js');?>""></script>
  <!-- Sweet Alert -->
  <script src="<?php echo base_url('assets/');?>dist/js/sweetalert.js"></script>
 <!-- Bootstrap 3.3.7 -->
 <!-- page script -->
 <script>
  jQuery(document).ready(function() {
    
    $('.sidebar-menu li').click(function() {
      $('.sidebar-menu li').removeClass('menu-active');
      $(this).addClass('menu-active');
    });
    $('#proposal').click(function () {
      $('.content-wrapper').load('<?php echo base_url('dashboard/proposal') ?>', function(){
        getProposal();
      });
    });

    $('#gallery').click(function () {
      $('.content-wrapper').load('<?php echo base_url('dashboard/gallery') ?>', function(){

      });
    });

    $('#event').click(function () {
      $('.content-wrapper').load('<?php echo base_url('dashboard/event') ?>', function(){

      });
    });

    $('#member').click(function () {
      $('.content-wrapper').load('<?php echo base_url('dashboard/member') ?>', function(){

      });
    });

    $('#profile').click(function () {
      $('.content-wrapper').load('<?php echo base_url('dashboard/profile') ?>', function(){

      });
    });

    $('#newMember').click(function () {
      $('.content-wrapper').load('<?php echo base_url('dashboard/newMember') ?>', function(){

      });
    });


    $('#listMember').click(function () {
      $('.content-wrapper').load('<?php echo base_url('dashboard/listMember') ?>', function(){

      });
    });

  });

  //Modal Fix
  $('#editFeature, #editProfile').on('show.bs.modal', function () {
    $('body').css("padding-right", "0px");
  });
  /*Drop Down*/
  $('#dropdown-sub').click(function() {
    $(this).siblings('.dropdown-menu').toggleClass('appear');
  });
  $('.content-wrapper, .sidebar, .main-footer').click(function() {
    if ($('#dropdown-sub').siblings('.dropdown-menu').hasClass('appear')) {
      $('#dropdown-sub').siblings('.dropdown-menu').removeClass('appear');
    }
  });
  $(function () {
    $('#newMemberTable').DataTable(/*{
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true,
      dom: 'Bfrtip',
      buttons: [
      {
        extend: 'copyHtml5',
        exportOptions: {
          columns: [ 0, ':visible' ]
        }
      },
      {
        extend: 'excelHtml5',
        exportOptions: {
          columns: [ 0, ':visible' ]
        }
      },
      {
        extend: 'pdfHtml5',
        exportOptions: {
          columns: [ 0, ':visible' ]
        }
      },
      {
        extend: 'print',
        exportOptions: {
          columns: [ 0, ':visible' ]
        }
      },
      'colvis'

      ]
    }*/)
  })

/*  $(function () {
    $('#event').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })*/

  function getProposal() {
    $.ajax({
        url: '<?php echo base_url('proposal/getProposal'); ?>',
        dataType: 'JSON',
        success: function (r) {
          html = '';
          no = 1;
          $.each(r, function(key, data) {
            html += '\
            <tr>\
            <td>'+ no +'</td>\
            <td>'+ data.judul +'</td>\
            <td>'+ data.tgl +'</td>\
            <td>'+ data.keterangan +'</td>\
            <td><a href="./uploads/proposal/'+data.file+'" target="_blank" class="btn btn-info" style="margin-right: 10px">Open Proposal</a><button class="btn btn-warning btnEditFileProposal" data-toggle="modal" data-target="#modal_form_update_file" onclick="getFileProposal('+data.id_proposal+')">Edit File</button></td>\
            <td><button class="btn btn-warning" style="margin-right: 10px" data-target="#modal_form_update" data-toggle="modal" onclick="getDetailProposal('+data.id_proposal+')">Edit</button><button class="btn btn-danger" onclick="confirmDelete('+data.id_proposal+')">Delete</button></td>';
            no++;
          });
          $('#dataProposal').html(html);
        }
      })
  }
</script>

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_password" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Account Setting</h3>
      </div>
      <div class="modal-body form">
        <form action="<?php echo base_url('auth/changePass');?>" id="form" method="post" class="form-horizontal">
          <input type="hidden" value="" name="akun_id"/>
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">Username</label>
              <div class="col-md-9">
                <input name="username" value="<?php echo $account->USERNAME ;?>" class="form-control" type="text" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">New Password</label>
              <div class="col-md-9">
                <input name="password" value="" class="form-control" type="Password" required>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          <button type="submit" id="btnSave" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

</body>
</html>