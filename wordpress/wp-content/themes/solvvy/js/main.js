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
		$("#loader").fadeOut(550,function(){$(this).remove()});
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

	$('.owl-careers').owlCarousel({
	    loop:true,
	    autoplay: true,
	   	navText: "",
	    nav:true,
	    URLhashListener:true,
	    autoplayHoverPause:true,
	    margin: 10,
	    items: 1
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

	// TABS ON SOFTWARE PAGE
	
	$("#tab2, #tab3").hide();

	$('ul.list li, .tab-link-without-icon').click(function() {
	    if($(this).data("value") === "tab1"){
	        $("#tab1").delay("500").fadeIn();
	        $("#tab2").delay("100").fadeOut();
	        $("#tab3").delay("100").fadeOut();

	        $(this).addClass('active');
	        $("#tab2, #tab3").removeClass('active');
	    };
	    if($(this).data("value") === "tab2"){
	        $("#tab1").delay("100").fadeOut();
	        $("#tab2").delay("500").fadeIn();
	        $("#tab3").delay("100").fadeOut();

	        $(this).addClass('active');
	        $("#tab1, #tab3").removeClass('active');
	    };
	    if($(this).data("value") === "tab3"){
	        $("#tab1").delay("100").fadeOut();
	        $("#tab2").delay("100").fadeOut();
	        $("#tab3").delay("500").fadeIn();

	        $(this).addClass('active');
	        $("#tab2, #tab1").removeClass('active');
	    };
	});

	// MODAL

	$('#myBtn').click(function() {
		$("#myModal").fadeIn();
	});

	$('.close').click(function() {
		var src = $("#myModal").find('iframe').attr('src');
		$("#myModal iframe").attr('src','');
		$("#myModal iframe").attr('src', src);
		$("#myModal").fadeOut();	
	});

	$('#myModal').click(function(event){
		var src = $("#myModal").find('iframe').attr('src');
		$("#myModal iframe").attr('src','');
		$("#myModal iframe").attr('src', src);
		$("#myModal").fadeOut();
	    event.stopPropagation();
	});

});




// SmartMenus init
$(function() {
	$('#main-menu').smartmenus({
		mainMenuSubOffsetX:	0,
		mainMenuSubOffsetY:	10,
		showOnClick:		true,
		hideOnClick:		true,
		subIndicators: 		true,
		subIndicatorsPos: 	'append',
		subIndicatorsText:	''
	});
});

// SmartMenus mobile menu toggle button
$(function() {
  var $mainMenuState = $('#main-menu-state');
  if ($mainMenuState.length) {
    // animate mobile menu
    $mainMenuState.change(function(e) {
      var $menu = $('#main-menu');
      if (this.checked) {
        $menu.hide().slideDown(250, function() { $menu.css('display', ''); });
      } else {
        $menu.show().slideUp(250, function() { $menu.css('display', ''); });
      }
    });
    // hide mobile menu beforeunload
    $(window).bind('beforeunload unload', function() {
      if ($mainMenuState[0].checked) {
        $mainMenuState[0].click();
      }
    });
  }

  	var $menuTop = $('.header-top ul li').clone();
	$('.menu-top-clone').html($menuTop);

	var $postTop = $('.last-post').clone();
	$('.menu-post-clone').html($postTop);
});

$("#show-all-none, .section-assets-cards").hide();

$('.open-div').click(function() {
	$("#show-all-none").slideToggle();
	$(this).toggleClass('active');
	
});

$("#styled-checkbox-1, #styled-checkbox-2, #styled-checkbox-4").click(function() {
    if($(this).is(":checked")) {
        $(".section-assets-cards").slideDown(300);
    } else {
        $(".section-assets-cards").slideUp(200);
    }
});

$(".button-more").click(function(){
    if($(this).text()=== "READ MORE"){
        $(this).text("READ LESS");
        $(this).siblings(".hidden-info").fadeIn("fast");
        $(this).addClass("less-class");
    }
    else{
        $(this).text("READ MORE");
        $(this).siblings(".hidden-info").fadeOut("fast");
        $(this).removeClass("less-class");
    }
    
});

$(window).scroll(function(){
  if ($(this).scrollTop() > 400) {
      $('.marketo-follow-us').addClass('fixed-form');
  } else {
      $('.marketo-follow-us').removeClass('fixed-form');
  }
});




//SEARCH
  $(document).ready(function(){
	var submitIcon = $('.searchbox-icon');
	var inputBox = $('.searchbox-input');
	var searchBox = $('.searchbox');
	var isOpen = false;
	submitIcon.click(function(){
	    if(isOpen == false){
	        searchBox.addClass('searchbox-open');
	        $('li.search').css('width','290px');
	        inputBox.focus();
	        isOpen = true;
	    } else {
	        searchBox.removeClass('searchbox-open');
	        $('li.search').css('width','40px');
	        inputBox.focusout();
	        isOpen = false;
	    }
	});  
	 submitIcon.mouseup(function(){
	        return false;
	    });
	searchBox.mouseup(function(){
	        return false;
	    });
	$(document).mouseup(function(){
	        if(isOpen == true){
	            $('.searchbox-icon').css('display','block');
	            submitIcon.click();
	        }
	    });
	});

	function buttonUp(){
	    var inputVal = $('.searchbox-input').val();
	    inputVal = $.trim(inputVal).length;
	    if( inputVal !== 0){
	        $('.searchbox-icon').css('display','none');
	    } else {
	        $('.searchbox-input').val('');
	        $('.searchbox-icon').css('display','block');
	    }
	}

//END SEARCH


$(".link-author").click(function(){
    $(this).siblings(".popup-author").addClass("show-us");
});
$(".link-author").mouseout(function() {
    $(this).siblings(".popup-author").removeClass("show-us");
});

//SLIDER SOLUTIONS SUBPAGE

(function() {
  var $, card;
  $ = jQuery;
  (card = $.fn).redraw || (card.redraw = function() {
      return $(this).each(function() {
          return this.offsetHeight
      })
  });
  $(function() {
      return $(".insights-animation").each(function() {
          var card;
          card = $(this).find(".cards"); //define elements to rotate
          card.children().eq(1).addClass('active'); // add class active to center element
          return setInterval(function() {
              var cardActive, cardCloned;
              cardActive = card.find(".card.active");
              cardActive.prev().addClass("active");
              cardActive.removeClass("active"); // managing active state
              cardCloned = card.find(".card:not(.cloned):last");
              cardActive = cardCloned.clone();
              card.prepend(cardActive);
              card.removeClass("slide-in").redraw().addClass("slide-in");
              cardCloned.addClass("cloned"); // clone element to make loop
              return setTimeout(function() {
                      return cardCloned.remove()
                  },
                  1000)
          }, 4500) //set animation time
      })
  })
}).call(this);