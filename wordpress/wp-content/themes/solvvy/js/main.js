
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

$(function(){

  $('.tab-link').on('click', function() {
    var $panel = $(this).closest('.tab-panels');

    $panel.find('.tab-link.active').removeClass('active');
    $(this).addClass('active');

    // figure out which panel to show
    var panelToShow = $(this).attr('rel');

    // hide current panel
    $panel.find('.panel.active').fadeOut(150, showNextPanel);

    // show next panelToShow
    function showNextPanel() {
      $(this).removeClass('active');

      $('#'+panelToShow).fadeIn(150, function() {
        $(this).addClass('active');
      })
    }
  });
});
function setEqualHeight() {
	if ($(window).width() > 768) {
    var tallestcolumn = 0;
    $('.asset-cards .content').each(
    function() {
        currentHeight = $(this).height();
        if(currentHeight > tallestcolumn) {
            tallestcolumn  = currentHeight;
            }
        }
    );
 $('.asset-cards .content').height(tallestcolumn + 36);
 }
}

var delay = (function(){
        var timer = 0;
        return function(callback, ms){
            clearTimeout (timer);
            timer = setTimeout(callback, ms);
    };
})();

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
		subIndicatorsPos: 	'append'
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

	//CLONE HEADER MENU AND LAST POST 
  	var $menuTop = $('.header-top ul li').clone();
	$('.menu-top-clone').html($menuTop);

	var postTop = $('#get-post').html();
	$('.menu-post').each(function(){ $(this).html(postTop); });

	$( ".post a" ).remove();
	e = $('<div class="menu-post-clone"><div class="menu-post"></div></div>');
	$('.post').append(e);
	$('.menu-post-clone .menu-post').html(postTop);
});

// RESOURCES FILTERS
// MAKE ALL RESOURCES CARDS THE SAME HEIGHT
 delay(function(){
        $('.asset-cards .content').css('height','auto'); //solve for all you browser stretchers out there!
        setEqualHeight($('.asset-cards .content'));
    }, 0);

$(".section-assets-cards li").css('opacity','1');

$('.open-div').click(function() {
	$("#filters").slideToggle();
	$(this).toggleClass('active');
	
});

$('#filters input[value="all"]').prop('checked', true); //check 'all' filter 

$('#filters input:checkbox').click(function() {
var checkbox = $('#filters input:checkbox:checked');

	$('.section-assets-cards li').hide(); // hide all cards

	if (checkbox.length > 0 && $(this).val()!=='all'){ // if a filter that isn't 'all' is checked
		$('#filters input[value="all"]').prop('checked', false); // uncheck 'all' filter 
	   checkbox.each(function() {
	   	    $("." + $(this).val()).fadeIn(500);  // show corresponding cards
	   });
   } else {
   	checkbox.prop('checked', false); // uncheck all filter 
   	$('#filters input[value="all"]').prop('checked', true); //check 'all' filter 
   	$(".section-assets-cards li").fadeIn(500); // show all cards
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
$(window).resize(function() {
 delay(function(){
        $('.asset-cards .content').css('height','auto'); //solve for all you browser stretchers out there!
        setEqualHeight($('.asset-cards .content'));
    }, 0);
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
	            $('.searchbox-input').val('');
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



//LINK ANCHOR
// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });



// SPHERES
/*
var elements = 10;
    var colors = ['#725AB0', '#D5CEFA', '#F6639A', '#5F108F'];
    var size = [1, 0.9, 0.8, 0.7, 0.6];

	var cy = cytoscape({
	  	container: document.getElementById('cy'),
	  	style: [
	    {
	        selector: 'node',
	        style: {
	            shape: 'ellipse',
	            label: 'data(id)'
	        }
	    }]
	});
	for (var i = 0; i < elements; i++) {
		var size2 = 200 * size[Math.floor(Math.random()*size.length)];
    	cy.add({
        	data: { id: 'node' + i },
        	style: { 
        		'background-color': colors[Math.floor(Math.random()*colors.length)],
        		'height' : size2 + 'px',
        		'width' : size2 + 'px',
        		'font-size' : size2/5 + 'px',
        		'color' : '#fff',
        		'text-valign' : 'center',
        	}
        });
	}
	for (var i = 0; i < elements; i++) {
    var source = 'node' + i;
    do { var target = 'node' + (Math.floor(Math.random() * elements * 0.5) ); }
	while (source == target);
    cy.add({
        data: {
            id: 'edge' + i,
            source: source,
            target: target
        	}
    	});
	}
	var layout = cy.layout({
  		name: 'cose'
		});
	layout.run();
*/