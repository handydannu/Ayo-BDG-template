
$(window).scroll(function(e) {
	var scroller_anchor = $(".scroller_anchor").offset().top;
	if ($(this).scrollTop() >= scroller_anchor && $('.scroller').css('position') != 'fixed')
	{    
		$('.scroller').css({
			'background-image':'url("image/Menubar.png")',
			'position': 'fixed',
			'top': '0px'
		});
		$('.scroller_anchor').css('height', '50px');
	}
	else if ($(this).scrollTop() < scroller_anchor && $('.scroller').css('position') != 'relative')
	{    
		$('.scroller_anchor').css('height', '0px');

		
		$('.scroller').css({
			'position': 'relative',
			'margin-bottom' : '60px'
		});
	}
});

/*scroller sidebar kiri*/

$(window).scroll(function(e) {
	var scroller_anchor2 = $(".scroller_anchor2").offset().top;
	if ($(this).scrollTop() >= scroller_anchor2 && $('.mostread').css('position') != 'fixed')
	{    
		$('.mostread').css({
			'position': 'fixed',
			'top': '40px'
		});
		$('.scroller_anchor2').css('height', '50px');
	}
	else if ($(this).scrollTop() < scroller_anchor2 && $('.mostread').css('position') != 'relative')
	{    
		$('.scroller_anchor2').css('height', '0px');

	
		$('.mostread').css({
			'position': 'relative',
			'margin-bottom' : '60px'
		});
	}
});

/*scroller terkini*/

$(window).scroll(function(e) {
	var scroller_anchor3 = $(".scroller_anchor3").offset().top;
	if ($(this).scrollTop() >= scroller_anchor3 && $('.terkini').css('position') != 'fixed')
	{    
		$('.terkini').css({
			'background-image':'url("image/Tab terkini.png")',
			'position': 'fixed',
			'top': '30px'
		});
		$('.scroller_anchor3').css('height', '50px');
	}
	else if ($(this).scrollTop() < scroller_anchor3 && $('.terkini').css('position') != 'relative')
	{    
		$('.scroller_anchor3').css('height', '0px');

		$('.terkini').css({
			'position': 'relative',
			'margin-bottom' : '60px'
		});
	}
});

$(window).scroll(function(e) {
	var scroller_anchor4 = $(".scroller_anchor4").offset().top;
	if ($(this).scrollTop() >= scroller_anchor4 && $('.tuit').css('position') != 'fixed')
	{    
		$('.tuit').css({
			'background-image':'url("image/Ayotweet.png")',
			'position': 'fixed',
			'top': '40px'
		});
		$('.scroller_anchor4').css('height', '50px');
	}
	else if ($(this).scrollTop() < scroller_anchor4 && $('.tuit').css('position') != 'relative')
	{    
		$('.scroller_anchor4').css('height', '0px');

	
		$('.tuit').css({
			'position': 'relative',
			'margin-bottom' : '60px'
		});
	}
});

$(function() {
    $('.toggler').click(function() {
        $(this).find('div').slideToggle();
    });
});

$(document).ready(function() {
	var s = $("#sticker");
	var pos = s.position();	
	var stickermax = $(document).outerHeight() - $("#footer").outerHeight() - s.outerHeight() - 40; //40 value is the total of the top and bottom margin
	$(window).scroll(function() {
		var windowpos = $(window).scrollTop();
		s.html("Distance from top:" + pos.top + "<br />Scroll position: " + windowpos);
		if (windowpos >= pos.top && windowpos < stickermax) {
			s.attr("style", ""); //kill absolute positioning
			s.addClass("stick"); //stick it
		} else if (windowpos >= stickermax) {
			s.removeClass(); //un-stick
			s.css({position: "absolute", top: stickermax + "px"}); //set sticker right above the footer
			
		} else {
			s.removeClass(); //top of page
		}
	});
	//alert(stickermax); //uncomment to show max sticker postition value on doc.ready
});