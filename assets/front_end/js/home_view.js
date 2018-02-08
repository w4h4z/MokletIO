$(document).ready(function(){

	//Navigasi
	$('.navbar-nav li').before().remove('#text');
	$('.nav-toggle').on('click', function() {
		$('.navbar-nav').toggleClass('slide-down');
	});
	$('.navbar-nav li a').on('click', function() {
		$('.navbar-nav').removeClass('slide-down')
	});

	//Modal
	$('.modal-close').click(function() {
		$('.modal-background').fadeOut('slow');
	});


	/* ANIMASI AWAL MUNCUL */
	$('h3, hr, input, .intro1-img img, .speaker-photo, .intro1-desc > p, .speaker-img img ,  textarea').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated fadeIn', // Class to add to the elements when they are visible
	    offset: 100    
	});

	$('.intro1-message h1, .form-message h1, .about-message h1, intro2-message h1 , landing2-message h1, .picture-gallery-message h1, .landing2-message h1, .speaker-message h1, .speaker-desc h1').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated bounceIn', // Class to add to the elements when they are visible
	    offset: 100    
	});

	$('.about-message p, .intro1-desc > blockquote, .speaker-row:nth-child(even) .speaker-content ').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated slideInLeft', // Class to add to the elements when they are visible
	    offset: 0    
	});

	$('.feature-item').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated rotateIn', // Class to add to the elements when they are visible
	    offset: 0    
	});


	$('.footer a , .footer span, .about-content img, .speaker-row:nth-child(odd) .speaker-content ').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated slideInRight', // Class to add to the elements when they are visible
	    offset: 0    
	});

	$('.pct-container img, tr').addClass("hideme").viewportChecker({
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

/* Tidak Terpakai
	$('li.daftar a').on('click', function() {
		$('#form').addClass('form-visible');
	});*/

	$('#event').on('scrollSpy:enter', function() {
		alert("message?: DOMString")
	});

	/* Untuk Scrolling Ke ID Element */

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



//  Foto Bug
	function readURL(input) {
	 if (input.files && input.files[0]) {
	        var reader = new FileReader();

	        reader.onload = function (e) {
	            $('#bug-photo-preview').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	   }
	}

	$("#bugPhoto").change(function(){
	    readURL(this);
	});
	
  	$(window).scroll(function() {
	    if ($('#form').scrollTop() > 0) {
	    	alert($('#form').scrollTop() + "px")
	    } else {

	    }
  	});


});