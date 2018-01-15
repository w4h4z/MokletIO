<!DOCTYPE html>
<html style="overflow:hidden;">
<head>
<meta charset=utf-8>
<meta name=description content="">
<meta name=viewport content="width=device-width, initial-scale=1">
	<title><?php echo $data->SINGKATAN_SUB; ?> - SMK TELKOM</title>

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
    .modal-header{
     background-color: <?php echo $data->SECONDARY_COLOR;  ?>;
    }

	.intro1-desc p:first-child:first-letter{
	  color: <?php echo $data->SECONDARY_COLOR; ?> !important;
	}

	.ardown, .brand-scroll, hr:not(.hr-gallery), .picture-gallery, .caption-button {
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
  	  			.feature{
	  	  			background-color:#E1E1E1;
	  	  		}
	  	  		.footer{
					background-color: #D9D9D9;
				}
				.about, .schedule{
					background-color: #212121>
				}
				.intro1-message, .schedule-content , .intro1-desc, .mini-title:not(.mini-title-gallery, mini-title-form), .schedule-table ,.about-message, .feature-content, .schedule-message, .schedule-navigation a, .footer a{
					color: #222222 !important ;
				}
				.form-message{
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
	  	  		.feature{
	  	  			background-color:#1D1D1D;
	  	  		}
	  	  		.footer{
					background-color: #1A1A1A;
				}
				.form-message{
					color: #C5C5C5 !important ;
				}
				.about, .schedule{
					background-color: #212121>
				}
				.intro1-message, .schedule-content , .intro1-desc, .mini-title, .about-message, .feature-content, .schedule-message, .navbar-nav li a, .schedule-, .schedule-navigation a, .footer a{
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
	     --><li><a class="dont-return" data-menuanchor="about" href="#about">About</a></li>
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
		<div class="row section">
			<div class="intro1">
				<div class="intro1-message">
					<p class="mini-title"><?php echo $data->SINGKATAN_SUB; ?></p>
					<h1><?php echo $data->NAMA_SUB ?></h1>
					<hr>
					<h4>Sub Organisasi SMK Telkom Malang</h4>
				</div>
				<div class="intro1-content">
					<div class="intro1-desc">
						<?php echo $data->DESC_SUB ?>
					</div>
					<div class="intro1-img">
						<img src="<?php echo base_url('uploads/').$data->LOGO_SUB; ?>" class="img-responsive thumbnail" alt="">
					</div>
				</div>
			</div>
		</div>
		<div  class="section"><!-- Event -->
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
		<div class="row section" id="explain2">
			<div class="intro1">
				<div class="intro1-message">
					<p class="mini-title"><?php echo $event->NAMA_MINI_TITLE ?></p>
					<h1><?php echo $event->NAMA_DETAIL ?></h1>
					<hr>
					<h4><?php echo $event->SUB_NAMA_TITLE ?></h4>
				</div>
				<div class="intro1-content">
					<div class="intro1-desc">
						<?php echo $event->DESC_DETAIL ?>

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
					      	<img src="'.base_url().'uploads/'.$data->BANNER_DETAIL.'" alt="The Last of us">
					      	<div class="owl-caption">
					      		<h1>'.$data->NAMA_EVENT.'</h1>
					      		<h4>'.$data->SUB_NAMA_EVENT.'</h4>
						   		<div class="caption-button">Info Lengkap</div>
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
					<p class="mini-title mini-title-gallery">DOKUMENTASI</p>
					<h1><?php echo $data->NAMA_SUB?></h1>
						<hr class="hr-gallery">
					<h4>Dokumentasi Kegiatan <?php echo $data->NAMA_SUB?></h4>
				</div>
				<div class="picture-gallery-content">
					<div class="picture-gallery-content">
						<div class="pct-container">

						</div>
						<div class="gallery-pagination">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row section">
			<div class="form-pendaftaran">
				<div class="form-message">
					<p class="mini-title mini-title-form">PASKIBRA</p>
					<h1>Form Pendaftaran Anggota</h1>
						<hr>
					<h4>Etiam tristique, metus pretium rutrum elementum, risus tortor euismod urna, porta felis felis vel.</h4>
				</div>
				<div class="form-content">
					<div class="form-photo">
						<img src="#" alt="Your Photo" id="YourPhoto" class="img-responsive">
					</div>
					<div class="form">
						<form class="" action="" method="">
							<div class="input-group-half">
								<label for="nama">Nama</label>
								<input type="text" class="form-input-half" name="nama">
							</div>
							<div class="input-group-half">
								<label for="kelas">Kelas</label>
								<select class="form-input-half" name="kelas">
									<option value="">XRPL1</option>
									<option value="">XRPL2</option>
									<option value="">XRPL3</option>
									<option value="">XRPL4</option>
									<option value="">XRPL5</option>
									<option value="">XRPL6</option>
									<option value="">XTKJ1</option>
									<option value="">XTKJ2</option>
									<option value="">XTKJ3</option>
									<option value="">XTKJ4</option>
									<option value="">XTKJ5</option>
									<option value="">XTKJ6</option>
								</select>
							</div>
							<div class="input-group">
								<label for="email">Email</label>
								<input type="Email" class="form-input" name="email">
							</div>
							<div class="input-group">
								<label for="photo">Photo</label>
								<input type="file" class="form-input" name="photo" id="photo">
							</div>
							<div class="input-group">
								<label for="keterangan">Alasan ingin bergabung</label>
								<textarea class="form-input-textarea" name="keterangan"></textarea>
							</div>
							<div class="button-group">
								<input type="submit" name="" value="Daftar" class="btn-submit">
								<input type="reset" name="" value="Reset" class="btn-reset">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row section">
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
		<div class="row section">
			<div class="about">
				<div class="about-message">
					<span class="mini-title">about</span>
					<h1><?php echo $data->NAMA_SUB ?>
					</h1>
						<hr>
					<p>
						&emsp; <?php echo $data->DESC_SUB ?>
					</p>
				</div>
				<div class="about-content">
					<img src="<?php echo base_url('uploads/').$data->FOTO_HEADER_SUB; ?>" class="img-responsive thumbnail" alt="">
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
			<div class="footer">
				<a href="">&copy; 2018 SMK Telkom Malang</a>		
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
							<div class="modal-intro1-message">
								<p class="mini-title">THE Commander</p>
								<h1>Abel Lagi</h1>
								<hr>
								<h4>Komandan Pasukan Pengibar Bendera 2018</h4>
							</div>
							<div class="modal-intro1-content">
								<div class="modal-intro1-img">
									<img src="<?php echo base_url(); ?>assets/front_end/images/abel.jpg" class="img-responsive thumbnail" alt="">
								</div>
								<div class="modal-intro1-desc">
									<p>We are so excited to introduce to you our new Webflow Template called Conference. This Template is fully responsive and CMS ready, no coding skills required!
									Conference Template, also contains a lot of useful sections that you can edit or remove. </p>
									<blockquote>This template comes with Psd files, icons to fully customize it...</blockquote>
									<p>We hope you enjoy it using it as much as we did building it. Cheers!</p>	

									<p>We are so excited to introduce to you our new Webflow Template called Conference. This Template is fully responsive and CMS ready, no coding skills required!
									Conference Template, also contains a lot of useful sections that you can edit or remove. </p>
									<blockquote>This template comes with Psd files, icons to fully customize it...</blockquote>
									<p>We hope you enjoy it using it as much as we did building it. Cheers!</p>	
								</div>
							</div>
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
		}
	</script>
	<script src="<?php echo base_url(); ?>assets/front_end/js/home_view.js"></script>
	<script src="<?php echo base_url(); ?>assets/front_end/js/viewportchecker.js"></script>
	<script src="<?php echo base_url(); ?>assets/front_end/owlcarousel/owl.carousel.min.js"></script>
</body>
</html>


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
		 		animateImg()
		 });
		
	}
	function animateImg(){
		$('.pct-container img').addClass("hideme").viewportChecker({
			    classToAdd: 'visible animated fadeInDownBig', // Class to add to the elements when they are visible
			    offset: -20    
		});
	}
	/*MEMFUNGSIKAN NAVIGASI*/
	$('.gallery-pagination a').click(function(event) {
		event.preventDefault();
		$start = $(this).attr("id").slice(-1) * 9;
		$('[id*="gallery-nav"]').removeClass('pagination-active');
		$(this).addClass('pagination-active')
		galleryPagination($start);
	});






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


	//Modal

	$('.caption-button').click(function() {
		$('.modal-background').fadeIn('slow');
	});
	$('.modal-close').click(function() {
		$('.modal-background').fadeOut('slow');
	});


  });
		

</script>