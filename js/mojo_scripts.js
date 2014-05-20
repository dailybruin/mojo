jQuery(document).ready(function($) {
	// DB.com top bar
	//$('span.db_section').animate({opacity:0},1500); 
	$('.db_sections').children().not(':last-child').after('|');
	var topbarFlag = false;
	$('div.db_refer').click(function() {
		if(topbarFlag) {
			$('span.db_section').stop().animate({opacity:0},400);
			topbarFlag = false;
		}
		else {
			$('span.db_section').stop().animate({opacity:1},400);
			topbarFlag = true;;
		}
	});
	
	// Photo Captions
	var captionOpacity = 0.8;
	$('figure').children('figcaption').animate({opacity:0},1000);
	$('figure').hover(function() {
		$(this).children('figcaption').stop().animate({opacity:captionOpacity},200);
	}, function() {
		$(this).children('figcaption').stop().animate({opacity:0},200);
	});
	
	// Left (categories) menu
	var top = $('nav').offset().top;
	$(window).scroll(function () {
		var scrollNow = $(this).scrollTop();
		if(scrollNow > top) {
			$('nav#left_sidebar').css({'position':'fixed','top':'0'});
		}
		else {
			$('nav#left_sidebar').css({'position':'absolute'});
		}
		fixFacebookCommentSize();
	});
	
	// Post time
	$('.right_sidebar').hover(function() {
		$(this).children('.time').animate({opacity:1},200);
	}, function() {
		$(this).children('.time').animate({opacity:0},200);
	});
	
	// Right sidebar on window adjust
	if($(window).width() <= 767)
	{
		$('.socialmedia').each(function() {
			$(this).removeClass('socialmedia');
			$(this).addClass('mobileSocialMedia');
		});
	}
	
	// Adjust location of social media sidebar
	window.addEventListener("load", loadFunction, false)
	$(window).resize(loadFunction);
	function loadFunction() {
		$('article.articlewrap').each(function() { 
			var x = $(this).height();
			x < 300 ? x = x - 200 : x = x - 300;
			$(this).next().next('.socialmedia').css({'position':'relative','top':x+'px'})
		});
	}	
	
	// Fix for liveblog posts
	jQuery('.livepost').parent().parent().children('.article_head').addClass('live');
	jQuery('.livepost').parent().parent().next('.right_sidebar').html('<div class="date live">Happening Now</div><img src="http://mojo.dailybruin.com/wp-content/themes/mojo/img/loader.gif" />');
	
	// Fix Facebook Comment Size
	jQuery(window).resize(function() {
		fixFacebookCommentSize();
	});
	fixFacebookCommentSize();
	
	function fixFacebookCommentSize() {
		var windowSize = jQuery(window).width();
		if(windowSize >= 960)
			jQuery("div.fb-comments span iframe").css('width','500px');
		else if(windowSize < 960 && windowSize > 480)
			jQuery("div.fb-comments span iframe").css('width','390px');
		else
			jQuery("div.fb-comments span iframe").css('width','280px')
	}
});
