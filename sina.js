/*$(document).ready(function(){
$('ul li.buttons').hover(function(){
$(this).children('ul').fadeIn(300, 1);
}, function(){
$(this).children('ul').fadeOut(300, 0);
})
})
*/


$(document).ready(function () {
	$(".menu ul li").hover(function(){
		$(this).children("ul").stop().slideDown(300);
	},
	function(){
		$(this).children("ul").stop().slideUp(300);
	});

	$('#bounce').mouseover(function(){
		$(this).effect('bounce',{times:3}, 300);
	});
});
