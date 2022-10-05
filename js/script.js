// Cmd Shift L

var stickyNavModule = (function(){
	// Store if they scrolled more than delta, past header height, up or down
	var didScroll;
	var lastScrollTop = 0;
	var delta = 5;
	var navbarHeight = $(".sticky-nav").outerHeight() + 100;
	// console.log(navbarHeight);

	// on scroll, let the interval function know the user has scrolled
	$(window).scroll(function(event){
	  didScroll = true;
	});

	// run hasScrolled() and reset didScroll status
	setInterval(function() {
	  if (didScroll) {
	    hasScrolled();
	    didScroll = false;
	  }
	}, 250);

	function hasScrolled() {
	    var st = $(this).scrollTop();
	    
	    // Make sure they scroll more than delta
	    if(Math.abs(lastScrollTop - st) <= delta)
	        return;
	    
	    // If they scrolled down and are past the navbar, add class .nav-up.
	    // This is necessary so you never see what is "behind" the navbar.
	    if (st > lastScrollTop && st > navbarHeight){
	        // Scroll Down
	        $('.sticky-nav').removeClass('nav-down').addClass('nav-up');
	    } else {
	        // Scroll Up
	        if(st + $(window).height() < $(document).height()) {
	            $('.sticky-nav').removeClass('nav-up').addClass('nav-down');
	        }
	    }
	    
	    lastScrollTop = st;
	}
	
	function stickyNav () {
		var stck = $(".sticky-nav");
		    sna = "nav-active";
		    hdr = $('.sticky-nav').height();
		    console.log(hdr);
		$(window).scroll(function() {
		  if( $(this).scrollTop() > hdr ) {
		    stck.addClass(sna);
		    $('body').addClass('sticky-active');
		  } else {
		    stck.removeClass(sna);
		    $('body').removeClass('sticky-active');
		  }

		});
	}

	var init = function(){
	    stickyNav();
	}

	return {
	    init: init
	}

})();

var toggleModule = (function(){
	
	function burgerToggle() {
		console.log("burger");
		$("#burger").click(function(){
			$('body').toggleClass("mobile-open");
			console.log("burger toggle");
		});

		$(".parent span").on('touchstart', function(){
			$(this).parent().siblings().removeClass("active");
			$(this).parent().toggleClass("active");
		});

		$(".no-touchevents .parent span").click(function(){
			$(this).parent().siblings().removeClass("active");
			$(this).parent().toggleClass("active");
		});

	}	

	var init = function(){
	    burgerToggle();
	}

	return {
	    init: init
	}

})();


function sectionInView() {

    if ($('.page-template').length) {

        // console.log('sectionInView');
        var windowScrollTop = $(window).scrollTop();
        var windowHeight = $(window).height();
        var elementOffset = $('section, footer');

        $(elementOffset).each(function() {
            
            if ($(this).offset().top < (windowScrollTop + (windowHeight * 0.62))) {
            
                $(this).addClass('in-view');
            }

            if (windowScrollTop < ($(this).offset().top - windowHeight)) {
            
                $(this).removeClass('in-view');
            }
        });
    }
}

function removeHero() {  
    var scroll = $(window).scrollTop();    
    if (scroll > 800) {
    	// console.log("add hero");
        $('.page-template').addClass("remove-hero");

    } else {
    	$('.page-template').removeClass("remove-hero");
    	// console.log("remove hero");
    }
}

function openClose() {
	
	if ($('.page-template-services').length) {
		
		$(".grid-item").click(function(){
			
			// $(this).parent().siblings().removeClass("active-click");
			$(this).siblings().removeClass("active-togg");
			// $(this).parent().toggleClass("active-togg");
			// $(this).addClass("active-click");
			$(this).addClass("active-togg");
		});

		// $(".no-touchevents .parent span").mouseenter(function(){
		// 	$(this).parent().siblings().removeClass("active");
		// 	$(this).parent().addClass("active");
		// });
	}
}

function postLoad() {	
	console.log("Page loaded");
	$('.page-template').addClass("page-loaded");
}

// var responsiveSwitch = (function(){
	
// 	function switchOver() {
		
// 		if ($(window).width() > 719) {
// 			// console.log("more767");
// 			$("body").removeClass('mobile-open');
// 		} else {
// 			// console.log("less767");
// 		}

// 	};

// 	$(function() {
// 		switchOver();
// 	});

// 	$(window).resize(function() {
// 		switchOver();
// 	});

// }());

var masonryModule = (function(){
    var responsiveMasonry = function(){
        var msnry = null,
            loaded = false;

        if ($(window).width() < 485 && loaded === true) {
            msnry.destroy();
        } 
        
        setTimeout(function(){ 
            var elem = document.querySelector('.grid');
            msnry = new Masonry( elem, {
                columnWidth: '.grid-sizer',
                itemSelector: '.grid-item',
                gutter: 20,
                percentPosition: true
            });
            loaded = true;
        }, 1000);


    };
    
    return{
        init: function(){
            //$(window).trigger("resize");
            responsiveMasonry();
            $(window).resize(responsiveMasonry);
        }
    };
}());

/* lazyload.js (c) Lorenzo Giuliani
 * MIT License (http://www.opensource.org/licenses/mit-license.html)
 *
 * expects a list of:  
 * `<img src="blank.gif" data-src="my_image.png" width="600" height="400" class="lazy">`
 */

!function(window){
  var $q = function(q, res){
        if (document.querySelectorAll) {
          res = document.querySelectorAll(q);
        } else {
          var d=document
            , a=d.styleSheets[0] || d.createStyleSheet();
          a.addRule(q,'f:b');
          for(var l=d.all,b=0,c=[],f=l.length;b<f;b++)
            l[b].currentStyle.f && c.push(l[b]);

          a.removeRule(0);
          res = c;
        }
        return res;
      }
    , addEventListener = function(evt, fn){
        window.addEventListener
          ? this.addEventListener(evt, fn, false)
          : (window.attachEvent)
            ? this.attachEvent('on' + evt, fn)
            : this['on' + evt] = fn;
      }
    , _has = function(obj, key) {
        return Object.prototype.hasOwnProperty.call(obj, key);
      }
    ;

  function loadImage (el, fn) {
    var img = new Image()
      , src = el.getAttribute('data-src');
    img.onload = function() {
      if (!! el.parent)
        el.parent.replaceChild(img, el)
      else
        el.src = src;

      fn? fn() : null;
    }
    img.src = src;
  }

  function elementInViewport(el) {
    var rect = el.getBoundingClientRect()

    return (
       rect.top    >= 0
    && rect.left   >= 0
    && rect.top <= (window.innerHeight || document.documentElement.clientHeight)
    )
  }

    var images = new Array()
      , query = $q('img.lazy')
      , processScroll = function(){
          for (var i = 0; i < images.length; i++) {
            if (elementInViewport(images[i])) {
              loadImage(images[i], function () {
                images.splice(i, i);
              });
            }
          };
        }
      ;
    // Array.prototype.slice.call is not callable under our lovely IE8 
    for (var i = 0; i < query.length; i++) {
      images.push(query[i]);
    };

    processScroll();
    addEventListener('scroll',processScroll);

}(this);​





$(document).ready(function() {

	toggleModule.init();
	stickyNavModule.init();
	// masonryModule.init();
	openClose();

	
	AOS.init({
	  easing: 'ease-in-out-sine'
	});

	$(this).scrollTop(0);
	console.log("scolltoto");

	$(window).scroll(function() {
	    
	    sectionInView();
	    removeHero();
	  
	});



});

window.onload = function() {
	var s = Snap("#svg-logo");
	// console.log("Snap");
	
	// setTimeout(function(){
	//     postLoad(); 
	// }, 50);

	$('.lazyload').each(function() {

	    var lazy = $(this);
	    var src = lazy.attr('data-src');

	    $('<img>').attr('src', src).load(function(){
	        lazy.css('background-image', 'url("'+src+'")');
	    });
		console.log("lazyload");
	});
};



