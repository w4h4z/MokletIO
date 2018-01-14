<!DOCTYPE html>
<html style="overflow:hidden;">
<head>
<meta charset=utf-8>
<meta name=description content="">
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
	.nav-scroll{
		background-color: #2A2A2A;
		z-index: 2;
	}
	.nav-active{
		border-bottom: 4px solid #B20009;
	}
	.nav-onscroll{
		color: #222222 !important;
	}
	.dropdown-onscroll{
		background-color: #222222 !important;
	}
	.dropdown-onscroll:hover{
		background-color: #1A1A1A !important;
	}
	.nav-onscroll:hover{
		border-bottom: 4px solid #B20009 !important;
	}
	.navbar-nav li a:not(.nav-brand){
		color: #9A9A9A;
	}
	.navbar-nav li a:not(.nav-brand):hover{
		color: white;
	}

	.intro1-desc p:first-child:first-letter{
	  color: #B20009 !important;
	}

	.ardown, .brand-scroll, hr:not(.hr-gallery), .picture-gallery, .caption-button {
		background-color: #890108;
	}

	.feature-icon span, .modal-intro1-desc p:first-child:first-letter{
		color: #B20009;
	}

	.schedule-navigation a:hover{
	  border-bottom: 2px solid #B20009;
	}
	
    .modal-header{
     background-color: #BD0000;
    }
	html , body{
	  background-color: #222222;
	}

	.mini-title{
    	color: #DEDEDE;
	}

	.feature{
		background-color:#1D1D1D;
	}
	.logo{
		background-color: #1A1A1A;
	}
	.footer{
		background-color: #181818;
	}
	.about, .schedule{
		background-color: #212121>
	}
	.intro1-message, .intro1-desc, .mini-title, .about-message, .feature-content, .schedule-message, .navbar-nav li a, .schedule-, .schedule-navigation a, .footer a{
		color: #C5C5C5 !important ;
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

</style>
<body>
	<div id="preloader">
		<div class="loader-title">
			<h1>MokletI</h1>
			<div class="loader-group">
				<div id="loader-circle"></div>
				<div id="loader-circle-mini"></div>
			</div>
		</div>
		<p>Loading your web page</p>
	</div>
	<nav class="navigation">
		<ul class="navbar-responsive">
		    <li><a href="">Telkom School</a></li>
		    <button class="nav-toggle">
		    	<span class="fa fa-bars"></span>
		    </button>
		</ul>
	    <ul class="navbar-nav">
	        <li><a href="#" class="nav-brand">Telkom School</a></li><!--
	     --><li id="organ"><a>Sub Organisasi <span class="fa fa-caret-down"></span></a>
	     		<div class="dropdown">
	     		    <a href="<?php echo base_url('index.php/page/sub_index/BDI') ?>">BDI</a>
	     		    <a href="<?php echo base_url('index.php/page/sub_index/PASKIBRA') ?>">Paskibra</a>
	     		    <a href="palwaga.html">Palwaga</a>
	     		    <a href="">PMR</a>
	     		    <a href="">Comet</a>
	     		    <a href="metic.html">Metic</a>
	     		    <a href="">TSBC</a>
	     		    <a href="">TSCC</a>
	     		    <a href="">TSFC</a>
	     		    <a href="">TSVC</a>
	     		    <a href="mac.html">MAC</a>
	     		    <a href="memo.html">Memo</a>
	     		</div>
	     	</li><!--
	     --><li id="organ"><a>Organisasi <span class="fa fa-caret-down"></span></a>
	     		<div class="dropdown">
	     		    <a href="<?php echo base_url('index.php/page/sub_index/OSIS') ?>">OSIS</a>
	     		    <a href="<?php echo base_url('index.php/page/sub_index/MPK') ?>">MPK</a>
	     		    <a href="<?php echo base_url('index.php/page/sub_index/DA') ?>">DA</a>
	     		    <a href="<?php echo base_url('index.php/page/sub_index/PUSTEL') ?>">PUSTEL</a>
	     		</div>
	     	</li><!-- 
	     --><li>
	     		<a>About</a>
	     	</li>
	    </ul>
	</nav>
	<div class="container">
		<div class="row">
			<div class="landing2" style="background-image: url('<?php echo base_url(); ?>assets/front_end/images/MokletIOBackground.jpg')">
				<div class="landing2-message">
					<h1>Moklet Info Organisasi</h1>
					<h4>Portal Informasi Organisasi SMK Telkom Malang</h4>
				</div>
				<a class="ardown fa fa-angle-down" href="#explain"></a>
			</div>		
		</div>
		<div class="row" id="explain">
			<div class="intro1">
				<div class="intro1-message">
					<p class="mini-title">Introduction</p>
					<h1>MokletIO</h1>
					<hr>
					<h4>Portal Informasi Organisasi SMK Telkom Malang</h4>
				</div>
				<div class="intro1-content">
					<div class="intro1-desc">
						<p>MokletIO  so excited to introduce to you our new Webflow Template called Conference. This Template is fully responsive and CMS ready, no coding skills required!
						Conference Template, also contains a lot of useful sections that you can edit or remove. </p>
						<blockquote>This template comes with Psd files, icons to fully customize it...</blockquote>
						<p>We hope you enjoy it using it as much as we did building it. Cheers!</p>	
					</div>
					<div class="intro1-img">
						<img src="<?php echo base_url(); ?>assets/front_end/images/alllogo.png" style="background-color: transparent;" class="img-responsive" alt="">
					</div>
				</div>
			</div>
		</div>
		<!--SPEAKER -->
	<div class="row">
		<div class="speaker">
			<div class="speaker-row"> <!--- L O O P    D I S I N I -->
				<div class="speaker-photo" style="background-image: url('<?php echo base_url(); ?>assets/front_end/images/Wahaz.jpg')">
					<div class="social-media">
						<a href="https://www.facebook.com/rizaldi.wahaz" target="_blank" class="fa fa-facebook fa-3x"></a>
						<a href="https://www.instagram.com/rizaldi_wahaz/" target="_blank" class="fa fa-instagram fa-3x"></a>
					</div>
				</div>
				<div class="speaker-content">
					<p class="mini-title">Developer</p>
					<h1>Rizaldi Wahaz</h1>
						<hr>
						<h4>Back-End Programmer</h4>
					<p>
						Saya Rizaldi Wahaz, lahir di Kediri, 20 November 1999. Mengikuti Organisasi PUSTEL, dan Sub Organisasi Metic, dan BDI. Prestasi Juara 1 LKS Software Application Kota Malang.
					</p>
				</div>
			</div>
			<div class="speaker-row">
				<div class="speaker-photo" style="background-image: url('<?php echo base_url(); ?>assets/front_end/images/Nina.jpg')">
					<div class="social-media">
						<a href="https://www.facebook.com/nina.a.ramadhani.7" target="_blank" class="fa fa-facebook fa-3x"></a>
						<a href="https://www.instagram.com/ramadhaninaaa/" target="_blank" class="fa fa-instagram fa-3x"></a>
					</div>
				</div>
				<div class="speaker-content">
					<p class="mini-title">Developer</p>
					<h1>Nina Aulia R</h1>
						<hr>
						<h4>System Analyst</h4>
					<p>
						I'm Nina Aulia Ramadhani. Born in Malang, December 1999. I'm from programming class in Telkom Vocational High School Malang. I joined Community of Moklet English Debaters (COMET). And I'm grateful, I've been lead this community. 
					</p>
				</div>
			</div>	
			<div class="speaker">
				<div class="speaker-row"> <!--- L O O P    D I S I N I -->
					<div class="speaker-photo" style="background-image: url('<?php echo base_url(); ?>assets/front_end/images/Alfandy.jpg')">
						<div class="social-media">
							<a href="https://www.facebook.com/100011243626062" target="_blank" class="fa fa-facebook fa-3x"></a>
							<a href="https://www.instagram.com/ezaalfandy/" target="_blank" class="fa fa-instagram fa-3x"></a>
						</div>
					</div>
					<div class="speaker-content">
						<p class="mini-title">Developer</p>
						<h1>Miftakhul Eza Alfandy</h1>
							<hr>
							<h4>Front-End Programmer</h4>
						<p>
							Saya Miftakhul Eza Alfandy, lahir di Mojokerto 16 Desember 1999. Saya sangat tertarik belajar IT terutama Bidang Telekomunikasi. 
						</p>
					</div>
				</div>
		</div>
	</div>



		<div class="row">
			<div class="about" id="about">
				<div class="about-message">
					<span class="mini-title">about</span>
					<h1>MokletIO
					</h1>
						<hr>
					<p>
						Make sure to visit the Instructions and Resources Page of this template to get the most of it. Don't forget that you can reach us in case you need help	
					</p>
				</div>
				<div class="about-content">
					<img src="<?php echo base_url(); ?>assets/front_end/images/telkomSchool.jpg" class="img-responsive thumbnail" alt="">
				</div>
			</div>
			<div class="feature">
				<div class="feature-item">
					<div class="feature-icon">
						<span class="fa fa-calendar fa-3x"></span>
					</div>
					<div class="feature-content">
						<h4>Daily Workshop</h4>
						<p>This template comes with 40 pre build gradient icons, choose the one you like more!</p>
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
			<div class="logo">
				<img  src="<?php echo base_url(); ?>assets/front_end/logo/osis.png" class="pct" alt="">
				<img  src="<?php echo base_url(); ?>assets/front_end/logo/mpk.png" class="pct" alt="">
				<img  src="<?php echo base_url(); ?>assets/front_end/logo/pustel.png" class="pct" alt="">
				<img  src="<?php echo base_url(); ?>assets/front_end/logo/da.png" class="pct" alt="">
				<img  src="<?php echo base_url(); ?>assets/front_end/logo/bdi.png" class="pct" alt="">
				<img  src="<?php echo base_url(); ?>assets/front_end/logo/paski.png" class="pct" alt="">
				<img  src="<?php echo base_url(); ?>assets/front_end/logo/palwaga.png" class="pct" alt="">
				<img  src="<?php echo base_url(); ?>assets/front_end/logo/pmr.png" class="pct" alt="">
				<img  src="<?php echo base_url(); ?>assets/front_end/logo/comet.png" class="pct" alt="">
				<img  src="<?php echo base_url(); ?>assets/front_end/logo/metic.png" class="pct" alt="">
				<img  src="<?php echo base_url(); ?>assets/front_end/logo/tsbc.png" class="pct" alt="">
				<img  src="<?php echo base_url(); ?>assets/front_end/logo/tscc.png" class="pct" alt="">
				<img  src="<?php echo base_url(); ?>assets/front_end/logo/tsfc.png" class="pct" alt="">
				<img  src="<?php echo base_url(); ?>assets/front_end/logo/tsvc.png" class="pct" alt="">
				<img  src="<?php echo base_url(); ?>assets/front_end/logo/mac.png" class="pct" alt="">
				<img  src="<?php echo base_url(); ?>assets/front_end/logo/memo.png" class="pct" alt="">
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

	///modal
	$('.caption-button').click(function() {
		$('.modal-background').fadeIn('slow');
	});
	$('.modal-close').click(function() {
		$('.modal-background').fadeOut('slow');
	});

</script>
</body>
	
</html>


