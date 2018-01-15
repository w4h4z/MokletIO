/*FULLPAGE JS*/
    $('#fullpage').fullpage({
        menu: '#menu',
        anchors: ['home', 'home-explain', 'event', 'detail-event', 'past-event', 'picture-gallery', 'form', 'member', 'about'],
        autoScrolling: false,
        responsiveWidth: 479,
		afterResponsive: function(isResponsive){
			
		}
    });