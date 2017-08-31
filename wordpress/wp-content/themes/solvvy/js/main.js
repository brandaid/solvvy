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

 //    if ($(this).data("value") === 'role') {
 //    	alert('hola quien sos vos');
	// } else if ($(this).data("value") === 'business') {
	//     alert('hola');
	// } else if ($(this).data("value") === 'industry') {
	//     alert('hola');
	// }


	$('ul.list li').click(function() {
	    if($(this).data("value") === "role"){
	        alert("You clicked me.");
	    };
	});

	$('ul.list li').click(function() {
	    if($(this).data("value") === "business"){
	        alert("fuck");
	    };
	});

	$('ul.list li').click(function() {
	    if($(this).data("value") === "industry"){
	        alert("dalee");
	    };
	});
});
