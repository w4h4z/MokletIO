<!DOCTYPE html>
<html style="overflow:hidden;">
<head>
	<meta charset=utf-8>
	<meta name="keywords" content="Esktrakulikuler SMK Telkom Malang, SMK Telkom Malang, basket SMK Telkom Malang, Volley SMK Telkom Malang, Moba SMK Telkom Malang, Pencak SIlat SMK Telkom Malang, Organisasi SMK Telkom Malang,OSIS SMK Telkom Malang, MPK SMK Telkom Malang, Dewan AMbalan SMK Telkom Malang, DA SMK Telkom Malang, Pepustakaan SMK Telkom Malang, MAC SMK Telkom Malang, METIC SMK Telkom Malang, Comet SMK Telkom Malang, MR SMK Telkom Malang, Paskibra SMK Telkom Malang, Futsal SMK Telkom Malang, Mading SMK Telkom Malang ">
	<meta name=description content="Website ekskul SMK Telkom Malang">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>Event Telkom</title>

	<link href="<?php echo base_url(); ?>assets/front_end/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/css/home_view.css"  type="text/css">
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
body{
	background-color: <?php echo $data->PRIMARY_COLOR; ?>;
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
.modal-header, .social-media:hover{
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
	  	.feature, .bug-report, .speaker-content, .speaker, .speaker-row{
	  		background-color:#E1E1E1 !important;
	  	}
	  	.footer{
	  		background-color: #D9D9D9;
	  	}
	  	.intro1-message , .speaker-content ,.bug-report , .schedule-content , .intro1-desc, .bug-title, .mini-title:not(.mini-title-gallery, mini-title-form), .schedule-table ,.about-message, .feature-content, .schedule-message, .schedule-navigation a, .footer a{
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
		.intro1-message, .speaker-content, .bug-report ,  .schedule-content , .intro1-desc, .bug-title , .mini-title, .about-message, .feature-content, .schedule-message, .navbar-nav li a, .schedule-, .schedule-navigation a, .footer a{
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

</style>
<body>
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

	<nav class="navigation">
		<ul class="navbar-responsive">
			<li><a href="<?php echo base_url('index.php/page/sub_index/'.$data->SINGKATAN_SUB.'/moklet') ?>"><?php echo $data->SINGKATAN_SUB ?></a></li>
			<button class="nav-toggle">
				<span class="fa fa-bars"></span>
			</button>
		</ul>
		<ul class="navbar-nav">
			<li><a href="<?php echo base_url('index.php/page/sub_index/'.$data->SINGKATAN_SUB.'/moklet') ?>" class="nav-brand"><?php echo $data->SINGKATAN_SUB?></a></li>
		</ul>
	</nav>
	<div class="container">
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
						<?php echo $data->DESC_SUB ?>
					</div>
					<div class="intro1-img">
						<img src="<?php echo base_url('uploads/').$data->LOGO_SUB; ?>" class="img-responsive thumbnail" alt="">
					</div>
				</div>
			</div>
		</div>
		<!--SPEAKER -->
		<div class="row">
			<div class="speaker">
				<?php foreach ($anggota as $val): ?>
				<div class="speaker-row"> <!--- L O O P    D I S I N I -->
					<div class="speaker-photo" style="background-image: url('<?php echo base_url('/uploads/member/'.$val->FOTO_MEMBER); ?>')">
						<div class="social-media">
							<a href="https://www.facebook.com/rizaldi.wahaz" target="_blank" class="fa fa-facebook fa-3x"></a>
							<a href="https://www.instagram.com/rizaldi_wahaz/" target="_blank" class="fa fa-instagram fa-3x"></a>
						</div>
					</div>
					<div class="speaker-content">
						<p class="mini-title"><?php echo $data->SINGKATAN_SUB ?></p>
						<h1><?php echo $val->NAMA_MEMBER ?></h1>
							<hr>
							<h4><?php echo $val->JABATAN_MEMBER ?></h4>
						<p style="word-wrap: break-word;">
							<?php echo $val->ALASAN_MEMBER ?>
						</p>
					</div>
				</div>

			<?php endforeach ?>

		</div>



		<div class="row">
			<div class="about" id="about">
				<div class="about-message">
					<span class="mini-title">about</span>
					<h1>MokletIO
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
		</div>
		<div class="row">
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
		</div>
		<div class="row">
			<div class="footer">
				<a href="">&copy; 2018 SMK Telkom Malang</a>		
			</div>
		</div>
	</div>

	<script src="<?php echo base_url(); ?>assets/front_end/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/front_end/js/home_view.js"></script>
	<script src="<?php echo base_url(); ?>assets/front_end/js/viewportchecker.js"></script>
	<script src="<?php echo base_url(); ?>assets/front_end/owlcarousel/owl.carousel.min.js"></script>
	<script>

		$(window).on('load', function(){ 
			setTimeout(function(){
				$('#preloader').delay(4000).addClass('load-success');
				setTimeout(function(){
					$('html').attr('style', '');
				}, 1000);
			}, 3000);
		});


//Scrolling ke id element
/*var $root = $('html, body');
$('a').click(function() {
    var href = $.attr(this, 'href');
    $root.animate({
        scrollTop: $(href).offset().top - 0
    }, 1000, function () {
        window.location.hash = href;
    });
    return false;
});
*/
/*BUg Report Button*/
$('.bug-report-button').click(function() {
	$(this).siblings('.form').toggleClass('bug-form-scrolldown');
});
//Navigasi
$(window).scroll(function() {
	
	if ($(document).scrollTop() > 0) {
		$('nav').addClass('nav-scroll');
		$('.navbar-nav li:first-Child').addClass('brand-scroll');
		$('.navbar-nav li a.nav-brand').css({
			color: 'white',
			border: '4px solid transparent'
		});
		$('.navbar-nav li:not(#sub, #organ) > a:not(.nav-brand)').addClass('nav-onscroll');
		$('.dropdown > a').addClass('dropdown-onscroll');
	} else {
		$('nav').removeClass('nav-scroll');
		$('.navbar-nav li a:not(.nav-brand) , .navbar-nav li > a:not(#sub, #organ)').removeClass('nav-onscroll')
		$('.navbar-nav li > a:not(.nav-brand)').css('color' , '');
		$('.navbar-nav li:first-Child').removeClass('brand-scroll');
		$('.navbar-nav li > a:not(.nav-brand)').css('border-color' ,'transparent');
		$('.dropdown > a').removeClass('dropdown-onscroll');

	}
});
$('#sub, #organ').hover(function() {
	$('nav').addClass('nav-scroll');
	$('.navbar-nav li:not(#sub, #organ) > a:not(.nav-brand)').addClass('nav-onscroll');
	$('.dropdown > a').addClass('dropdown-onscroll');
	$('.navbar-nav li:first-Child').addClass('brand-scroll');
}, function() {

});

/* SCROLL TO ID*/
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


</script>
</body>

</html>


