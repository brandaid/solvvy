$(document).ready(function() {

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


	$('ul.list li').click(function() {
	    if($(this).data("value") === "role"){
	        $("#panel-role").show();
	        $("#panel-business").hide();
	        $("#panel-industry").hide();
	    };

	});

	$('ul.list li').click(function() {
	    if($(this).data("value") === "business"){
	        $("#panel-role").hide();
	        $("#panel-business").show();
	        $("#panel-industry").hide();
	    };
	});

	$('ul.list li').click(function() {
	    if($(this).data("value") === "industry"){
	        $("#panel-role").hide();
	        $("#panel-business").hide();
	        $("#panel-industry").show();
	    };
	});
});
