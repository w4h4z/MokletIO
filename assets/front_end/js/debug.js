
window.onload = function() {

        what();

        function what() {
        	
	/* ANIMASI AWAL MUNCUL */
	$('h3, h4, p, hr, input, .intro1-img img, .speaker-img img ,  textarea').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated fadeIn', // Class to add to the elements when they are visible
	    offset: 100    
	});
	$('.intro1-message h1, .form-message h1 , .intro2-message h1 , .about-message h1, landing2-message h1, .picture-gallery-message h1, .landing2-message h1, .slide-show-message h1, .speaker-message h1, .speaker-desc h1').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated bounceIn', // Class to add to the elements when they are visible
	    offset: 100    
	});

	$('.footer a , .footer span').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated slideInRight', // Class to add to the elements when they are visible
	    offset: 0    
	});

	$('.pct-container img').addClass("hideme").viewportChecker({
		    classToAdd: 'visible animated fadeInDownBig', // Class to add to the elements when they are visible
		    offset: -20    
	});

	$('.logo img:nth-child(odd)').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated slideInLeft', // Class to add to the elements when they are visible
	    offset: 100    
	});
	$('.logo img:nth-child(even)').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated slideInRight', // Class to add to the elements when they are visible
	    offset: 100    
	});

	$('li.daftar a').on('click', function() {
		$('#form').addClass('form-visible');
	});

	$('#form-close').on('click', function() {
		$('#form').removeClass('form-visible');
	});


	$('.nav-toggle').on('click', function() {
		$('.navbar-nav').toggleClass('slide-down');
	});


	$('.nav-toggle').click(function() {
		$('.navigation').css('background-color', '#222222');
	});

	$(window).scroll(function() {
	    if ($(document).scrollTop() > 0) {
	    	$('nav').addClass('nav-scroll');
	    	$('.dropdown a').addClass('nav-color');
	    	$('.navbar-nav li:first-Child').addClass('brand-scroll');
	    } else {
	    	$('nav').removeClass('nav-scroll');
	    	$('.dropdown a').removeClass('nav-color');
	    	$('.navbar-nav li:first-Child').removeClass('brand-scroll');
	    }
  	});

	/* Untuk Scrolling Ke ID Element */
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


	function readURL(input) {

	 if (input.files && input.files[0]) {
	        var reader = new FileReader();

	        reader.onload = function (e) {
	            $('#YourPhoto').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	   }
	}

	$("#photo").change(function(){
	    readURL(this);
	});

        };

    }

$(document).ready(function(){


});