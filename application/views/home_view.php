<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
<meta name=description content="">
<meta name=viewport content="width=device-width, initial-scale=1">
	<title><?php echo $data->SINGKATAN_SUB; ?> - SMK TELKOM</title>

	<link href="<?php echo base_url(); ?>assets/front_end/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/css/home_white.css"  type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/css/animate.css"  type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/css/navigation_white.css"  type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/owlcarousel/owl.theme.default.min.css">
</head>
<style>
	.nav-scroll{
		background-color: white;
		z-index: 2;
	}
	.intro1-desc p:first-child:first-letter{
	  color: <?php echo $data->SECONDARY_COLOR; ?>;
	}
	#ardown{
		background-color: <?php echo $data->SECONDARY_COLOR; ?>;
	}
	.brand-scroll{
		background-color: <?php echo $data->SECONDARY_COLOR; ?>;
	}/*
	html , body{
	  background-color: #222222;
	}*/
	.mini-title{
    	color: black;
	}
	hr{
  		background-color: <?php echo $data->SECONDARY_COLOR; ?> !important;
	}
	.intro1-desc p:first-child:first-letter{
  		color: #9E0707;
	}
	.picture-gallery{
	  	background-color: <?php echo $data->SECONDARY_COLOR; ?>;
	}
	.caption-button{
	  background-color: <?php echo $data->SECONDARY_COLOR; ?>;
	}

	.footer{
	  	background-color: <?php echo $data->SECONDARY_COLOR; ?>;
	}
	.feature{
  	  	background-color: <?php echo $data->PRIMARY_COLOR; ?>;
	}
		/* INTRO 1 */
	}
/*	.feature-icon span {
	  color: red !important; 
	}*/
	.intro1-message h1, .intro1-message h4, .intro1-desc{
	  	color: black;
	}
	.intro1-content{
	  	color: #A5A4A4;
	}
	.intro1-desc p {
	  	font-family: calibri;
	  	font-size: 1.3em;
	}


</style>
<body style="background-color: <?php echo $data->PRIMARY_COLOR; ?>;;">
	<nav class="navigation" id="mainNav">
		<ul class="navbar-responsive">
		    <li><a href=""><?php echo $data->SINGKATAN_SUB; ?></a></li>
		    <button class="nav-toggle">
		    	<span class="fa fa-bars"></span>
		    </button>
		</ul>
	    <ul class="navbar-nav">
	        <li><a href="#" class="nav-brand"><?php echo $data->SINGKATAN_SUB; ?></a></li><!--
	     --><li><a href="#">Home</a></li><!--
	     --><li><a class="nav-link js-scroll-trigger" href="#event">Event</a></li><!--
	     --><li><a class="nav-link js-scroll-trigger" href="#member">Member</a></li><!--
	     --><li><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
	     	<li class="daftar"><a class="nav-link js-scroll-trigger" href="#form">Daftar</a></li>
	    </ul>
	</nav>
	<div class="container">
		<div class="row">
			<div class="landing2" style="background-image: url('<?php echo base_url(); ?>assets/front_end/images/paskibra6.jpg')">
				<div class="landing2-message">
					<h1><?php echo $data->NAMA_SUB; ?></h1>
				</div>
				<a id="ardown" class="fa fa-angle-down" href="#about"></a>
			</div>		
		</div>
		<div class="row">
			<div class="intro1">
				<div class="intro1-message">
					<p class="mini-title">THE chairman</p>
					<h1>Abel Bima Wiratama</h1>
					<hr>
					<h4>Ketua PASKIBRA Periode 2018/2019</h4>
				</div>
				<div class="intro1-content">
					<div class="intro1-desc">
						<p>We are so excited to introduce to you our new Webflow Template called Conference. This Template is fully responsive and CMS ready, no coding skills required!
						Conference Template, also contains a lot of useful sections that you can edit or remove. </p>
						<blockquote>This template comes with Psd files, icons to fully customize it...</blockquote>
						<p>We hope you enjoy it using it as much as we did building it. Cheers!</p>	
					</div>
					<div class="intro1-img">
						<img src="<?php echo base_url(); ?>assets/front_end/images/abel.jpg" class="img-responsive thumbnail" alt="">
					</div>
				</div>
			</div>
		</div>
		<section id="event">
			<div class="row">
				<div class="landing2" style="background-image: url('<?php echo base_url(); ?>assets/front_end/images/paskibra4.jpg')">
					<div class="landing2-message">
						<h1>Pengibaran 2018</h1>
						<h4>lorem ipsum dolor sit amet monggo sampean terusno aku ora apal bos</h4>
					</div>
					<a id="ardown" class="fa fa-angle-down" href="#explain"></a>
				</div>		
			</div>
		</section>
		<div class="row">
			<div class="intro1">
				<div class="intro1-message">
					<p class="mini-title">THE Commander</p>
					<h1>Abel Lagi</h1>
					<hr>
					<h4>Komandan Pasukan Pengibar Bendera 2018</h4>
				</div>
				<div class="intro1-content">
					<div class="intro1-desc">
						<p>We are so excited to introduce to you our new Webflow Template called Conference. This Template is fully responsive and CMS ready, no coding skills required!
						Conference Template, also contains a lot of useful sections that you can edit or remove. </p>
						<blockquote>This template comes with Psd files, icons to fully customize it...</blockquote>
						<p>We hope you enjoy it using it as much as we did building it. Cheers!</p>	
					</div>
					<div class="intro1-img">
						<img src="<?php echo base_url(); ?>assets/front_end/images/abel.jpg" class="img-responsive thumbnail" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="row" id="carousel">
			<div style="position: relative;" id="carousel-container">				
			    <div id="owl-home" class="owl-carousel owl-theme">
			      <div class="item">
			      	<img src="<?php echo base_url(); ?>assets/front_end/images/fullimage1.jpg" alt="The Last of us">
			      	<div class="owl-caption">
			      		<h1>This event</h1>
			      		<h4>Event</h4>
				   		<a href="" class="caption-button">Info Lengkap</a>
			      	</div>
			      </div>
			      <div class="item">
			      	<img src="<?php echo base_url(); ?>assets/front_end/images/fullimage2.jpg" alt="GTA V">
			      	<div class="owl-caption">
			      		<h1>This event</h1>
			      		<h4>Event</h4>
				   		<a href="" class="caption-button">Info Lengkap</a>
			      	</div>
			      </div>
			      <div class="item">
			      	<img src="<?php echo base_url(); ?>assets/front_end/images/fullimage3.jpg" alt="Mirror Edge">
			      	<div class="owl-caption">
			      		<h1>This event</h1>
			      		<h4>Event</h4>
				   		<a href="" class="caption-button">Info Lengkap</a>
			      	</div>
			      </div>
			    </div>
			</div>
		</div>
		<div class="row">
			<div class="picture-gallery">
				<div>
					<div class="picture-gallery-message">
						<p class="mini-title">DOKUMENTASI</p>
						<h1>Pengibaran</h1>
							<hr>
						<h4>Etiam tristique, metus pretium rutrum elementum, risus tortor euismod urna, porta felis felis vel.</h4>
					</div>
				</div>
				<div class="picture-gallery-content">
					<div class="pct-container">
						<img  src="<?php echo base_url(); ?>assets/front_end/images/pg2.jpg" class="pct thumbnail" alt="">
						<img  src="<?php echo base_url(); ?>assets/front_end/images/pg7.jpg" class="pct thumbnail" alt="">
						<img  src="<?php echo base_url(); ?>assets/front_end/images/pg8.jpg" class="pct thumbnail" alt="">
					</div>
					<div class="pct-container">
						<img  src="<?php echo base_url(); ?>assets/front_end/images/pg2.jpg" class="pct thumbnail" alt="">
						<img  src="<?php echo base_url(); ?>assets/front_end/images/pg7.jpg" class="pct thumbnail" alt="">
						<img  src="<?php echo base_url(); ?>assets/front_end/images/pg8.jpg" class="pct thumbnail" alt="">
					</div><div class="pct-container">
						<img  src="<?php echo base_url(); ?>assets/front_end/images/pg2.jpg" class="pct thumbnail" alt="">
						<img  src="<?php echo base_url(); ?>assets/front_end/images/pg7.jpg" class="pct thumbnail" alt="">
						<img  src="<?php echo base_url(); ?>assets/front_end/images/pg8.jpg" class="pct thumbnail" alt="">
					</div>

				</div>
			</div>
		</div>

		<div class="row">
			<div class="form-pendaftaran" id="form">
				<div class="form-message">
					<p class="mini-title">PASKIBRA</p>
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
		<div class="row" id="member">
			<div class="schedule">
				<div class="schedule-message">
					<p class="mini-title">PASKIBRA</p>
					<h1 id="title">The Member</h1>
						<hr>
					<h4>Etiam tristique, metus pretium rutrum elementum, risus tortor euismod urna, porta felis felis vel.</h4>
				</div>

				<div class="schedule-content">
					<div class="schedule-navigation">
						<a href="">Table 1</a>
						<a href="">Table 2</a>
						<a href="">Table 3</a>
						<a href="">Table 4</a>
					</div>

					<table class="schedule-table" id="schedule">
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Keterangan</th>
						</tr>
						<tr>
							<td>1</td>
							<td>Dummy</td>
							<td>Anggota</td>
						</tr>
						<tr>
							<td>1</td>
							<td>Dummy</td>
							<td>Anggota</td>
						</tr>
						<tr>
							<td>1</td>
							<td>Dummy</td>
							<td>Anggota</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="row" id="about">
			<div class="about">
				<div class="about-message">
					<span class="mini-title" id="about">about</span>
					<h1>Paskibra
					</h1>
						<hr>
					<p>
						&emsp; Satuan Paskibra Telkom School Malang adalah  sub organ yg bergerak di bidang Kepaskibraan yang dibawah Osis SMK Telkom Malang, sub ini dibimbing dan dilatih oleh Gilang Agung Prabowo. <br>&emsp;Satuan kami menggunakan skep Perpang tahun 2014 yang sibuat oleh TENTARA NASIONAL INDONESIA PERATURAN PANGLIMA TENTARA NASIONAL INDONESIA NOMOR 46 TAHUN 2014.
					</p>
				</div>
				<div class="about-content">
					<img src="<?php echo base_url(); ?>assets/front_end/images/paskibra2.jpg" class="img-responsive thumbnail" alt="">
				</div>
			</div>
			<div class="feature">
				<div class="feature-item">
					<div class="feature-icon">
						<span class="fa fa-calendar fa-3x"></span>
					</div>
					<div class="feature-content">
						<h4>Leadership</h4>
						<p> kami juga mengajarkan cara menjadi seorang leader yang memiliki sifat sopan, santun, ramah, selalu siap dan juga cekatan dalam berbagai situasi</p>
					</div>
				</div>
				<div class="feature-item">
					<div class="feature-icon">
						<span class="fa fa-comments fa-3x"></span>
					</div>

					<div class="feature-content">
						<h4>Q&A Sessions</h4>
						<p>Would you like to have the Psd file of this Template? Sure! You can download it too.</p>
					</div>
				</div>
				<div class="feature-item">
					<div class="feature-icon">
						<span class="fa fa-volume-up fa-3x"></span>
					</div>

					<div class="feature-content">
						<h4>Live Training</h4>
						<p>Do you like the dual tone effect on the images? Download that too!</p>
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

	<script src="<?php echo base_url(); ?>assets/front_end/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/front_end/js/home_white.js"></script>
	<script src="<?php echo base_url(); ?>assets/front_end/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/front_end/js/viewportchecker.js"></script>
    <script src="<?php echo base_url(); ?>assets/front_end/js/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/front_end/js/scrolling-nav.js"></script>

	<script src="<?php echo base_url(); ?>assets/front_end/owlcarousel/owl.carousel.min.js"></script>
</body>
</html>


<script>


	$(document).ready(function() {
	 
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
	    	$('.navbar-nav li > a:not(.nav-brand)').css('color' ,'black');
	    	$('.navbar-nav li > a:not(.nav-brand)').css('border-color' ,'#BD0000');

	    } else {
	    	$('nav').removeClass('nav-scroll');
	    	$('.navbar-nav li > a:not(.nav-brand)').css('color' , '');
	    	$('.navbar-nav li:first-Child').removeClass('brand-scroll');
	    	$('.navbar-nav li > a:not(.nav-brand)').css('border-color' ,'transparent');

	    }
  	});

</script>