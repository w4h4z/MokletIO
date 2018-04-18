<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
<meta name="keywords" content="Esktrakulikuler SMK Telkom Malang, SMK Telkom Malang, basket SMK Telkom Malang, Volley SMK Telkom Malang, Moba SMK Telkom Malang, Pencak SIlat SMK Telkom Malang, Organisasi SMK Telkom Malang,OSIS SMK Telkom Malang, MPK SMK Telkom Malang, Dewan AMbalan SMK Telkom Malang, DA SMK Telkom Malang, Pepustakaan SMK Telkom Malang, MAC SMK Telkom Malang, METIC SMK Telkom Malang, Comet SMK Telkom Malang, MR SMK Telkom Malang, Paskibra SMK Telkom Malang, Futsal SMK Telkom Malang, Mading SMK Telkom Malang ">
<meta name=description content="Website ekskul SMK Telkom Malang">
<meta name=viewport content="width=device-width, initial-scale=1">
	<title><?php echo $data->SINGKATAN_SUB; ?> - SMK TELKOM</title>

	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/mokletio.ico"/>
	<link href="<?php echo base_url(); ?>assets/front_end/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/css/home_view.css"  type="text/css">
	<script>
		if (screen && screen.width > 480) {
		  document.write('<link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/css/jquery.fullpage.min.css"  type="text/css">');
		}
	</script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/css/animate.css"  type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/css/navigation_home_view.css"  type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/owlcarousel/owl.theme.default.min.css">
</head>
<style>
	.navigation{
		z-index: 999;
	}
	.nav-scroll{
		background-color: <?php echo $data->PRIMARY_COLOR; ?>;
		z-index: 2;
	}
	input:focus, textarea:focus , select:focus{
	  box-shadow: 0px 0px 10px <?php echo $data->SECONDARY_COLOR; ?>;
	  border: 2px solid <?php echo $data->SECONDARY_COLOR; ?>;
	}


	.nav-active{
		border-bottom: 4px solid <?php echo $data->SECONDARY_COLOR; ?>
	}
	.pagination-active{
		background-color: #F7F7F7 !important;
		color: <?php echo $data->SECONDARY_COLOR; ?> !important;
	}
	blockquote {
		padding-left: 1.5rem;
 		border-left: 5px solid <?php echo $data->SECONDARY_COLOR; ?>;
	}
	.nav-onscroll{
		color: #222222 !important;
	}
	.navbar-nav li a:not(.nav-brand){
		color: #9A9A9A;
	}
    .modal-header, #struktur-organisasi{
     background-color: <?php echo $data->SECONDARY_COLOR;  ?>;
    }

	.intro1-desc p:first-child:first-letter{
	  color: <?php echo $data->SECONDARY_COLOR; ?> !important;
	}
	.ardown, .brand-scroll, hr:not(.hr-gallery), .picture-gallery, .caption-button, .bug-report-button {
		background-color: <?php echo $data->SECONDARY_COLOR; ?>;
	}

	.feature-icon span, .modal-intro1-desc p:first-child:first-letter{
		color: <?php echo $data->SECONDARY_COLOR; ?>;
	}

	.schedule-navigation a:hover{
	  border-bottom: 2px solid <?php echo $data->SECONDARY_COLOR; ?>;
	}
	.schedule-navigation-active{
	  border-bottom: 2px solid <?php echo $data->SECONDARY_COLOR; ?>!important;
	}



	#form-pendaftaran{
		background-color: #222222;
		color: #E3E3E3 !important;
	}




	/*
	html , body{
	  background-color: #222222;
	}*/
	.mini-title{
    	color: black;
	}
	@media only screen 
	and (min-width : 1224px) {

		.nav-onscroll:not(.nav-active):hover{
			border-bottom: 4px solid <?php echo $data->SECONDARY_COLOR; ?> !important;
		}	
	}

	#menu li a.active{
		border-bottom: 4px solid <?php echo $data->SECONDARY_COLOR; ?>;
	}
	 <?php 
  	  	if ($data->PRIMARY_COLOR == '#e9e9e9') {
  	  		echo '
  	  			.navbar-nav li a:not(.nav-brand):hover{
					color: black;
				}
  	  			.feature, .bug-report{
	  	  			background-color:#E1E1E1;
	  	  		}
	  	  		.footer{
					background-color: #D9D9D9;
				}
				.intro1-message, .bug-report , .schedule-content , .intro1-desc, .bug-title, .mini-title:not(.mini-title-gallery, mini-title-form), .schedule-table ,.about-message, .feature-content, .schedule-message, .schedule-navigation a, .footer a{
					color: #222222 !important ;
				}
				#form-pendaftaran .form-message{
					color: #C5C5C5 !important ;
				}
				.schedule-table tr{
				  background-image: -webkit-linear-gradient(top, #DEDEDE, #BDBDBD);
				  background-image:    -moz-linear-gradient(top, #DEDEDE, #BDBDBD);
				  background-image:     -ms-linear-gradient(top, #DEDEDE, #BDBDBD);
				  background-image:      -o-linear-gradient(top, #DEDEDE, #BDBDBD);
				  background-image:         linear-gradient(top, #DEDEDE, #BDBDBD);
				  -webkit-transition: all .4s ease;
				     -moz-transition: all .4s ease;
				      -ms-transition: all .4s ease;
				       -o-transition: all .4s ease;
				          transition: all .4s ease;
				}
				.schedule-table tbody tr:hover{
				  background-image: -webkit-linear-gradient(top, #BDBDBD, #DEDEDE);
				  background-image:    -moz-linear-gradient(top, #BDBDBD, #DEDEDE);
				  background-image:     -ms-linear-gradient(top, #BDBDBD, #DEDEDE);
				  background-image:      -o-linear-gradient(top, #BDBDBD, #DEDEDE);
				  background-image:         linear-gradient(top, #BDBDBD, #DEDEDE);
				}
  	  		';
  	  	}else{
  	  		echo '
	  	  		.feature, .bug-report{
	  	  			background-color:#1D1D1D;
	  	  		}
	  	  		.footer{
					background-color: #1A1A1A;
				}
				.form-message{
					color: #C5C5C5 !important ;
				}
				.intro1-message, .bug-report ,  .schedule-content , .intro1-desc, .bug-title , .mini-title, .about-message, .feature-content, .schedule-message, .navbar-nav li a, .schedule-, .schedule-navigation a, .footer a{
					color: #C5C5C5 !important ;
				}
				.mini-title-gallery{
					color: white !important;
				}
				.schedule-table tr{
				  background-image: -webkit-linear-gradient(top, #323232, #222222);
				  background-image:    -moz-linear-gradient(top, #323232, #222222);
				  background-image:     -ms-linear-gradient(top, #323232, #222222);
				  background-image:      -o-linear-gradient(top, #323232, #222222);
				  background-image:         linear-gradient(top, #323232, #222222);
				  -webkit-transition: all .4s ease;
				     -moz-transition: all .4s ease;
				      -ms-transition: all .4s ease;
				       -o-transition: all .4s ease;
				          transition: all .4s ease;
				}
				.schedule-table tr:hover{
				  background-image: -webkit-linear-gradient(top, #222222, #323232);
				  background-image:    -moz-linear-gradient(top, #222222, #323232);
				  background-image:     -ms-linear-gradient(top, #222222, #323232);
				  background-image:      -o-linear-gradient(top, #222222, #323232);
				  background-image:         linear-gradient(top, #222222, #323232);
				}
			';
  	  	}; 
  	  ?>
	
		/* INTRO 1 */
	
/*	.feature-icon span {
	  color: red !important; 
	}*/


</style>
<body style="background-color: <?php echo $data->PRIMARY_COLOR; ?>">
	<div id="preloader">
		<div class="loader-title">
			<h1 style="margin-right:10px">Loading </h1>
			<div class="loader-group">
				<div id="loader-circle" style="border-top-color:<?php echo $data->SECONDARY_COLOR;?>"></div>
				<div id="loader-circle-mini" style="border-top-color:<?php echo $data->SECONDARY_COLOR;?>"></div>
			</div>
		</div>
		<p><?php echo $data->NAMA_SUB; ?></p>
	</div>

	<div class="loader">		
		<div class="loader-group">
			<h1>Loading</h1>
		</div>
	</div>
	<nav class="navigation" id="mainNav">
		<ul class="navbar-responsive">
		    <li><a href=""><?php echo $data->SINGKATAN_SUB; ?></a></li>
		    <button class="nav-toggle">
		    	<span class="fa fa-bars"></span>
		    </button>
		</ul>
		  <ul class="navbar-nav" id="menu">
	        <li><a class="nav-brand" data-menuanchor="home" href="#home"><?php echo $data->SINGKATAN_SUB; ?></a></li><!--
	     --><li><a href="<?php echo base_url('index.php/page/') ?>">Home</a></li><!--
	     --><li><a class="dont-return" data-menuanchor="event" href="#event">Event</a></li><!--
	     --><li><a class="dont-return" data-menuanchor="member" href="#member">Member</a></li><!--
	     --><li><a class="dont-return" href="<?php echo base_url('index.php/page/sub_about/'.$data->SINGKATAN_SUB) ?>">About</a></li>
	     	<li class="daftar dont-return"><a class="" data-menuanchor="form" href="#form">Daftar</a></li>
	    </ul>
	</nav>
	<div class="container" id="fullpage">
		<div class="row section">
			<div class="landing2" style="background-image: url('<?php echo base_url('uploads/').$data->FOTO_HEADER_SUB; ?>')">
				<div class="landing2-message">
					<h1><?php echo $data->NAMA_SUB; ?></h1>
				</div>
				<a class="ardown fa fa-angle-down" data-menuanchor="home-explain" href="#home-explain"></a>
			</div>		
		</div>
		<div class="row section" id="home-explain">
			<div class="intro1">
				<div class="intro1-message">
					<p class="mini-title"><?php echo $data->SINGKATAN_SUB; ?></p>
					<h1><?php echo $data->NAMA_SUB ?></h1>
					<hr>
					<h4>Sub Organisasi SMK Telkom Malang</h4>
				</div>
				<div class="intro1-content">
					<div class="intro1-desc" id="sub-desc">
					</div>
					<div class="intro1-img">
						<img src="<?php echo base_url('uploads/').$data->LOGO_SUB; ?>" class="img-responsive thumbnail" alt="">
					</div>
				</div>
			</div>
		</div>
		<div  class="section" id="event"><!-- Event -->
			<div class="row">
				<div class="landing2" style="background-image: url('<?php echo base_url('uploads/').$event->BANNER_DETAIL; ?>')">
					<div class="landing2-message">
						<h1><?php echo $event->NAMA_EVENT ?></h1>
						<h4><?php echo $event->SUB_NAMA_EVENT ?></h4>
					</div>
					<a class="ardown fa fa-angle-down" data-menuanchor="detail-event" href="#detail-event"></a>
				</div>		
			</div>
		</div>
		<div class="row section" id="detail-event">
			<div class="intro1">
				<div class="intro1-message">
					<p class="mini-title"><?php echo $event->NAMA_MINI_TITLE ?></p>
					<h1><?php echo $event->NAMA_DETAIL ?></h1>
					<hr>
					<h4><?php echo $event->SUB_NAMA_TITLE ?></h4>
				</div>
				<div class="intro1-content">
					<div class="intro1-desc" id="event-desc">

					</div>
					<div class="intro1-img">
						<img src="<?php echo base_url('uploads/').$event->POSTER_DETAIL; ?>" class="img-responsive thumbnail" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="row section" id="carousel"> <!-- Carousel -->
			<div style="position: relative;" id="carousel-container">				
			    <div id="owl-home" class="owl-carousel owl-theme">
			    <?php
			    	foreach ($eventPast as $data) {
			    		echo '
			    		   <div class="item">
					      	<div style="background-image:url('.base_url().'uploads/'.$data->BANNER_DETAIL.')" class="owl-background">
						      	<div class="owl-caption">
						      		<h1>'.$data->NAMA_EVENT.'</h1>
						      		<h4>'.$data->SUB_NAMA_EVENT.'</h4>
							   		<div id="past-event'.$data->ID_EVENT.'" class="caption-button">Info Lengkap</div>
						      	</div>
						    </div>
					      </div>
			    		';
			    	}
			    ?>
			    </div>
			</div>
		</div>
		<div class="row section"><!-- Picture Gallery -->
			<div class="picture-gallery">
				<div class="picture-gallery-message">
					<p class="mini-title mini-title-gallery">Gallery</p>
					<h1><?php echo $data->NAMA_SUB?></h1>
						<hr class="hr-gallery">
					<h4>Dokumentasi Kegiatan <?php echo $data->NAMA_SUB?></h4>
				</div>
				<div class="picture-gallery-content">
					<div class="pct-container">

					</div>
					<div class="gallery-pagination">
					</div>
				</div>
			</div>
		</div>

		<div class="row section" id="form">
			<div class="form-container" id="form-pendaftaran">
				<div class="form-message">
					<p class="mini-title mini-title-form"><?php echo $data->SINGKATAN_SUB ?></p>
					<h1>Form Pendaftaran Anggota</h1>
						<hr>
					<h4>Form pendaftaran Anggota Baru <?php echo $data->SINGKATAN_SUB ?> SMK Telkom Malang</h4>
				</div>
				<div class="form-content">
					<div class="form-photo">
						<img src="#" alt="Your Photo" id="YourPhoto" class="img-responsive">
					</div>
					<div class="form-input-container">
						<form id="memberForm" class="form" enctype="multipart/form-data">
							<input type="hidden" name="id_sub" value="<?php echo $data->ID_SUB ?>">
							<div class="input-group-half">
								<label for="nama">Nama</label>
								<input type="text" class="form-input-half" name="nama_member" required>
							</div>
							<div class="input-group-half">
								<label for="kelas">Kelas</label>
								<select class="form-input-half" name="kelas_member">
									<option value="XRPL1">XRPL1</option>
									<option value="XRPL2">XRPL2</option>
									<option value="XRPL3">XRPL3</option>
									<option value="XRPL4">XRPL4</option>
									<option value="XRPL5">XRPL5</option>
									<option value="XRPL6">XRPL6</option>
									<option value="XTKJ1">XTKJ1</option>
									<option value="XTKJ2">XTKJ2</option>
									<option value="XTKJ3">XTKJ3</option>
									<option value="XTKJ4">XTKJ4</option>
									<option value="XTKJ5">XTKJ5</option>
									<option value="XTKJ6">XTKJ6</option>
								</select>
							</div>
							<div class="input-group">
								<label for="email">Angkatan</label>
								<input type="number" class="form-input-full" name="angkatan_member" required>
							</div>
							<div class="input-group">
								<label for="email">Nomor Telp</label>
								<input type="number" class="form-input-full" name="no_hp_member" required>
							</div>
							<div class="input-group">
								<label for="email">Email</label>
								<input type="Email" class="form-input-full" name="email_member" required>
							</div>
							<div class="input-group">
								<label for="photo">Photo</label>
								<input type="file" class="form-input-full" name="foto_member" id="photo" required>
							</div>
							<div class="input-group">
								<label for="keterangan">Alasan ingin bergabung</label>
								<textarea class="form-input-textarea" name="alasan_member" required></textarea>
							</div>
							<div class="button-group">
								<input type="submit" name="" id="buttonDaftar" value="Daftar" class="btn-submit">
								<input type="reset" name="" value="Reset" class="btn-reset" id="resetMember">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="row section"><!-- Picture Gallery -->
			<div class="picture-gallery">
				<div class="picture-gallery-message">
					<p class="mini-title mini-title-gallery">Organization Structure</p>
					<h1><?php echo $data->NAMA_SUB?></h1>
						<hr class="hr-gallery">
					<h4>Struktur Organisasi <?php echo $data->NAMA_SUB?> tahun <?php if (date('m') > 7)
						{// IKI OTOMATIS MENYESUAIKAN PERIODE JABATAN PER BULAN 7
							echo date('Y').'/'.date('Y', strtotime('+1 year'));
						}else{
							echo date('Y', strtotime('-1 year')).'/'.date('Y');
						} ?>
						
					</h4>
				</div>
				<div class="picture-gallery-content">
					<img src="<?php echo base_url('assets/images/Struktur.png') ?>" alt="" id="pct-struktur">
				</div>
			</div>
		</div>

		<div class="row section" id="member">
			<div class="schedule">
				<div class="schedule-message">
					<p class="mini-title"><?php echo $data->SINGKATAN_SUB; ?></p>
					<h1 id="title">The Member</h1>
						<hr>
					<h4>Etiam tristique, metus pretium rutrum elementum, risus tortor euismod urna, porta felis felis vel.</h4>
				</div>

				<div class="schedule-content">
					<div class="schedule-navigation">
					</div>

					<table class="schedule-table" id="schedule">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Angkatan</th>
							</tr>
						</thead>
						<?php $a = 1; ?>
						<?php foreach ($anggota as $anggota): ?>
							<tr>
								<td><?php echo $a; ?></td>
								<td><?php echo $anggota->NAMA_MEMBER ?></td>
								<td><?php echo $anggota->ANGKATAN_MEMBER ?></td>
							</tr>
						<?php $a++; endforeach ?>
						
					</table>
				</div>
			</div>
		</div>
		<div class="row section" id="about">
			<div class="about">
				<div class="about-message">
					<span class="mini-title">about</span>
					<h1>SMK Telkom Malang
					</h1>
						<hr>
					<p>
						SMK Telkom Malang adalah SMK berakreditasi "A" di bawah naungan yayasan pendidikan Telkom. SMK yang berdiri sejak tahun 1922 ini terletak di Jalan Danau Ranau, Sawojajar, Malang. Motto SMK Telkom sendiri adalah Attitude is Everything.
					</p>
				</div>
				<div class="about-content">
					<img src="<?php echo base_url(); ?>assets/front_end/images/telkomSchool.jpg" class="img-responsive" alt="">
				</div>
			</div>
			<div class="feature">
				<?php foreach ($feature as $features): ?>
					<div class="feature-item">
						<div class="feature-icon">
							<span class="fa <?php echo $features->ICON_FEATURE ?> fa-3x"></span>
						</div>
						<div class="feature-content">
							<h4><?php echo $features->NAMA_FEATURE ?></h4>
							<p> <?php echo $features->DESC_FEATURE ?></p>
						</div>
					</div>
				<?php endforeach ?>
			</div>
			<div class="bug-report">
				<button class="bug-report-button">Laporkan Bug</button>
				<div class="form-container">
					<div class="form-content">
						<div class="form-message" style="padding-bottom: 5%;">
							<p class="mini-title mini-title-form">Bug Report</p>
							<h1>Form Laporan Masalah</h1>
								<hr>
							<h4>Form untuk melaporkan kesalahan sistem</h4>
						</div>
						<div class="form-photo">
							<img src="#" alt="Foto Masalah" id="bug-photo-preview" class="img-responsive">
						</div>
						<div class="form-input-container">
							<form id="bugForm" enctype="multipart/form-data">
								<div class="input-group">
									<label for="email">Lokasi Masalah</label>
									<input type="text" class="form-input-full" name="masalah" required>
								</div>
								<div class="input-group">
									<label for="email">Email Pelapor</label>
									<input type="Email" class="form-input-full" name="email_reporter" required>
								</div>
								<div class="input-group">
									<label for="photo">Nama Pelapor </label>
									<input type="text" class="form-input-full" name="nama_reporter" required>
								</div>
								<div class="input-group">
									<label for="photo">Screen Shoot Masalah (optional)</label>
									<input type="file" class="form-input-full" name="foto_bug" id="bugPhoto" required style="background-color: white;">
								</div>
								<div class="input-group">
									<label for="keterangan">Deskripsi Masalah</label>
									<textarea class="form-input-textarea" name="deskripsi" required></textarea>
								</div>
								<div class="button-group">
									<input type="submit" name="" id="buttonDaftar" value="Laporkan" class="btn-submit">
									<input type="reset" name="" value="Reset" class="btn-reset" id="resetMember">
								</div>
							</form>
						</div>
					</div>
				</div>				
			</div>
			<div class="footer">
				<a href="">&copy; 2018 SMK Telkom Malang</a>		
			</div>
		</div>
		<div class="pct-modal-backdrop"><!-- MODAL ZOOM IMAGE -->
			<div class="pct-modal-content">
				<span class="fa fa-window-close-o"></span>
			</div>
		</div>
		<div class="modal-background">
			<div class="modal">
				<div class="modal-header">
					<p class="modal-title">Past Event</p>				
					<span class="modal-close">&times;</span>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="modal-intro1">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="<?php echo base_url(); ?>assets/front_end/js/jquery.js"></script>
	<script>
		if (screen && screen.width > 480) {
		  document.write('<script src="<?php echo base_url(); ?>assets/front_end/js/jquery.fullpage.min.js"><\/script>');
		  document.write('<script src="<?php echo base_url(); ?>assets/front_end/js/fullpage-home.js"><\/script>');
		  $('body').css('overflow', 'hidden');
		  $('#event').removeAttr('id');
		  $('#form').removeAttr('id');
		  $('#detail-event').removeAttr('id');
		  $('#member').removeAttr('id');
		  $('#home-explain').removeAttr('id');
		  $('#about').removeAttr('id');
		}else{
			var $root = $('html, body');
			$('a').click(function() {
			    var href = $.attr(this, 'href');
			    $root.animate({
			        scrollTop: $(href).offset().top - 0
			    }, 1000, function () {
			        window.location.hash = href;
			    });
			    return false;
			});
		}
	</script>
	<script src="<?php echo base_url(); ?>assets/front_end/js/home_view.js"></script>
	<script src="<?php echo base_url(); ?>assets/front_end/js/viewportchecker.js"></script>
	<script src="<?php echo base_url(); ?>assets/front_end/owlcarousel/owl.carousel.min.js"></script>

	<!-- Sweet Alert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script>
	$(window).on('load', function(){ 
		setTimeout(function(){
			$('#preloader').addClass('load-success');
			setTimeout(function(){
				//$('html').attr('style', '');
			}, 1000);
		 }, 1000);
	});


$(document).ready(function() {





		/*BUg Report Button*/
	$('.bug-report-button').click(function() {
		$(this).siblings('.form-container').toggleClass('bug-form-scrolldown');
	});

	$('#bugForm').on('submit', function(event) {
		var data = new FormData(document.getElementById("bugForm"));
		event.preventDefault();
		$.ajax({
			url: "<?php echo base_url('index.php/page/sendBugReport') ?>",
			data : data,
            mimeType:"multipart/form-data",
            processData: false,
            contentType: false,
			type: "POST",
			dataType: "JSON",
			success: function(){
				swal("Report Success", "Bug Report ", "success");
			},
			error: function(){
				swal("Report Failed", "Bug Report", "error");
			}
		})
	});








	/*LOADING DATA*/
	$('#sub-desc').html('<?php echo $data->DESC_SUB ?>')
	$('#event-desc').html('<?php echo $event->DESC_DETAIL ?>')


	/*PAST EVENT*/
	$('[id*="past-event"]').click(function() {
		$('.loader').fadeIn('400');
		$id_event = $(this).attr("id").slice(10);
		pastEventLoad($id_event);
	});

	function pastEventLoad($id_event){
		$('.modal-intro1').load("<?php echo site_url('index.php/page/modalPastEvent/')?>",{
		 ID_EVENT: $id_event},
		 	function(){
				$('.loader').fadeOut('400');
				$('.modal-background').fadeIn('slow');
		 });
	}
	//Modal Past Event Close
	$('.modal-close').click(function() {
		$('.modal-background').fadeOut('slow');
	});





	/*PAGINATION*/
	$current_page = 1;
	$gallery_totalrow = <?php echo $jumlahGallery; ?>;
	$gallery_totalPage = ($gallery_totalrow/9); /// JUMLAH RECORD PER PAGE
	galleryPagination(0);

	for (var i = 1; i <= $gallery_totalPage+1; i++) {
	 		$('.gallery-pagination').append('<a id="gallery-nav-'+(i-1)+'">'+i+'</a>');
	 }
	 $('#gallery-nav-0').addClass('pagination-active')

	function galleryPagination(start){
		 $('.pct-container').load("<?php echo site_url('index.php/page/galleryPagination/')?>",{
		 startPage: start},
		 	function(){
		 		animateImg();
		 		zoomImage();
		 });	
	}

	function animateImg(){
		$('.pct-container .pct').addClass("hideme").viewportChecker({
			    classToAdd: 'visible animated fadeInDownBig', // Class to add to the elements when they are visible
			    offset: -20    
		});
	}
	/*MEMFUNGSIKAN NAVIGASI*/
	$('.gallery-pagination a').click(function(event) {
		event.preventDefault();
		$start = $(this).attr("id").slice(12) * 9;
		$('[id*="gallery-nav"]').removeClass('pagination-active');
		$(this).addClass('pagination-active')
		galleryPagination($start);
	});

		/*IMAGE ZOOM*/
	function zoomImage(){
		$('.pct-container .pct').click(function() {
			var bgImage = $(this).css('background-image').replace(/^url|[\(\)]/g, '');
			$('.pct-modal-content').css('background-image', 'url('+bgImage+')');
			$('.pct-modal-backdrop').fadeIn(400);
		});
		$('.pct-modal-content span').click(function() {
			$('.pct-modal-backdrop').fadeOut(400);
		});
	}

	
/*	$('#buttonDaftar').click(function() {
          $.ajax({
            url : '<?php echo base_url('page/daftarMember'); ?>',
            type: 'POST',
            data: $('#memberForm').serialize(),
            dataType: 'JSON',
            success: function(r)
            {
               if(r.success){
					swal("Register Success", "Welcome !", "success");
				} 
            }
        });
	});*/

	$('#memberForm').submit(function(e){
    e.preventDefault(); 
         $.ajax({
             url:'<?php echo base_url('page/daftarMember'); ?>',
             type:"post",
             data:new FormData(this),
             processData:false,
             contentType:false,
             cache:false,
             async:false,
              success: function(data){
                if(data == 'true'){
                	swal("Register Success", "Welcome !", "success");
                	document.getElementById("memberForm").reset();
                } else if (data == 'false') {
                	swal("Register Failed", "You must fill all the form!", "error");
                } else {
                	swal("Register Failed", data, "error");
                }
           },
           error: function(){
           	alert("message?: DOMString")
           }
         });
    }); 

/*	function addMember() {
		event.preventDefault();
		$data = $('#memberForm').serialize();

		$.ajax({
				url: '<?php echo base_url('page/daftarMember'); ?>',
				data: data,
				type: 'POST',
				dataType: 'json',
				success: function (r) {
					if(!r.success){
						swal("Register Failed", "You must fill all the form!", "error");
					} else {
						swal("Register Success", "Welcome !", "success");
					}
				}
			})
				
	}*/
		


      
	$warnaPrimer ="<?php echo $data->PRIMARY_COLOR; ?>";

	/*SCHEDULE */
	var jumlahAnggota ="<?php echo $jumlahAnggota ?>"
	var jumlahTabel = (jumlahAnggota / 7)+1;
	var currentTabel = 1;
	var i;
	for(i =1; i <= jumlahAnggota; i++){
		if (i <= currentTabel*7) {
			$(' .schedule-table tbody tr:nth-child('+i+')').addClass('tabel-'+currentTabel)
		}else{
			currentTabel++;
			$(' .schedule-table tbody tr:nth-child('+i+')').addClass('tabel-'+currentTabel)
		}
	}
	//untuk mengatur navigasi
	for(i = 2; i <= jumlahTabel+1; i++){
		$('.tabel-'+i).css('display', 'none');;
		$('.schedule-navigation').append('<a href="" id="member-nav'+(i-1)+'">Tabel '+(i-1)+'</a>');
	}
	$('#member-nav1').addClass('schedule-navigation-active');
	// koding untuk memfungsikan schedule-naigation
	$('[id*="member-nav"]').click(function(event) {
		event.preventDefault();
		$id = $(this).attr('id').slice(-1);
		$('[id*="member-nav"]').removeClass('schedule-navigation-active')
		$(this).addClass('schedule-navigation-active')
		$('[class*="tabel-"]').fadeOut('400');
		$('.tabel-'+$id).fadeIn('400');
	});


	  $("#owl-home").owlCarousel({
	      slideSpeed : 1000,
	      paginationSpeed : 1000,
	      items : 1, 
	      autoplay : true,
	      loop : true,
	      dots : true,
	      itemsDesktop : false,
	      itemsDesktopSmall : false,
	      itemsTablet: false,
	      itemsMobile : false,
		  autoplayTimeout:2000,
		  autoplaySpeed: 2000,
		  nav: true,
		  navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
	  });
	  var owl = $('.owl-carousel');
	owl.owlCarousel();

	//Navigasi


	if ($warnaPrimer == "#e9e9e9") { //Mengganti tombol dan tulisan navbar-responsive
		$('.nav-toggle span').css('color', 'black');
		$('.navbar-responsive li a').css('color', 'black');
	}else{
		$('.nav-toggle span').css('color', 'white');
		$('.navbar-responsive li a').css('color', 'white');
	}
		

	$('nav-toggle').click(function() {
	   $('.navigation').addClass('nav-scroll');
	   $('.navbar-nav li a:not(.nav-brand)').addClass('nav-onscroll');
	});


	$(window).scroll(function() {
		
	    if ($(document).scrollTop() > 0) {
	    	$('nav').addClass('nav-scroll');
	    	$('.navbar-nav li:first-Child').addClass('brand-scroll');
	    	$('.navbar-nav li a.nav-brand').css({
	    		color: 'white',
	    		border: '4px solid transparent'
	    	});
	    	$('.navbar-nav li a:not(.nav-brand)').addClass('nav-onscroll');
	    	$('.navbar-nav li > a:not(.nav-brand)').attr('style', '');
	    } else {
	    	if ($(window).width() > 480) {
	    		$('nav').removeClass('nav-scroll');
	    	}
	    	$('.navbar-nav li a:not(.nav-brand)').removeClass('nav-onscroll')
	    	$('.navbar-nav li > a:not(.nav-brand)').css('color' , '');
	    	$('.navbar-nav li:first-Child').removeClass('brand-scroll');
	    	$('.navbar-nav li > a:not(.nav-brand)').css('border-color' ,'transparent');

	    }
  	});






  });
		

</script>

</body>
</html>