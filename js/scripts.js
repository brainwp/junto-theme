(function($){
$('.menu-clientes').on('click', function () {
	$('a').removeClass('active');
	$('html, body').animate({
	    scrollTop: $("#clientes").offset().top-40
	}, 2000);
	$('.menu-clientes').removeClass('active');
	$(this).addClass('active');
});
 
$('.top').on('click', function () {
	$('a').removeClass('active');
	$('html, body').animate({
	    scrollTop: $("#top").offset().top-40
	}, 400);
	$('.top').removeClass('active');
	$(this).addClass('active');
});

})(jQuery);