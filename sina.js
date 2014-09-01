$(document).ready(function(){
	$('ul li.buttons').hover(function(){
		$(this).children('ul').fadeIn(300, 1);
	}, function(){
		$(this).children('ul').fadeOut(300, 0);
	})
})