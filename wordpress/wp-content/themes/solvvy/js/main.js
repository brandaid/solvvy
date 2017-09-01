$(document).ready(function() {

		//SCROLL SUBIR
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});

	//PRELOADER

	window.onload = function(){
		$("#loader").fadeOut(350,function(){$(this).remove()});
	};
	
	$('.owl-brands').owlCarousel({
	    loop:false,
	    autoplay: false,
	    URLhashListener:true,
	    autoplayHoverPause:true,
	    margin: 10,
	    items: 1
	});


	$('.owl-navbars').owlCarousel({
	    loop:true,
	    margin:10,
	    navText: "",
	    nav:true,
	    responsive:{
	        0:{
	            items:5
	        },
	        600:{
	            items:5
	        },
	        1000:{
	            items:5
	        }
	    }
	});

	$('select').niceSelect();

	$('.tab-role').addClass('active');

	$('ul.list li, .tab-link').click(function() {
	    if($(this).data("value") === "role"){
	        $("#panel-role").delay("500").fadeIn();
	        $("#panel-business").delay("100").fadeOut();
	        $("#panel-industry").delay("100").fadeOut();
	        $(this).addClass('active');
	        $(".tab-industry, .tab-business").removeClass('active');
	    };
	    if($(this).data("value") === "business"){
	        $("#panel-role").delay("100").fadeOut();
	        $("#panel-business").delay("500").fadeIn();
	        $("#panel-industry").delay("100").fadeOut();

	        $(this).addClass('active');
	        $(".tab-industry, .tab-role").removeClass('active');
	    };
	    if($(this).data("value") === "industry"){
	        $("#panel-role").delay("100").fadeOut();
	        $("#panel-business").delay("100").fadeOut();
	        $("#panel-industry").delay("500").fadeIn();

	        $(this).addClass('active');
	        $(".tab-business, .tab-role").removeClass('active');
	    };
	});

});
