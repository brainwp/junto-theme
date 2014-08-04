(function($){
	
	$('.menu-clientes').on('click', function () {
		$('span').removeClass('active');
		$('html, body').animate({
		    scrollTop: $("section.clientes").offset().top-40
		}, 2000);
		$('.menu-clientes').removeClass('active');
		$(this).addClass('active');
	});

	$('.menu-metodologia').on('click', function () {
		$('span').removeClass('active');
		$('html, body').animate({
		    scrollTop: $("section.metodologia").offset().top-60
		}, 2000);
		$('.menu-metodologia').removeClass('active');
		$(this).addClass('active');
	});

	$('.menu-cases').on('click', function () {
		$('span').removeClass('active');
		$('html, body').animate({
		    scrollTop: $("section.cases").offset().top-40
		}, 2000);
		$('.menu-cases').removeClass('active');
		$(this).addClass('active');
	});
	 
	$('.top').on('click', function () {
		$('span').removeClass('active');
		$('html, body').animate({
		    scrollTop: $("#top").offset().top-40
		}, 2000);
		$('.top').removeClass('active');
		$(this).addClass('active');
	});

    $(document).ready(function(e){
        $('.slider_cases').carouFredSel({
            prev: '#prev-case',
            next: '#next-case',
            responsive: true,
            width: '100%',
            height: 350,
            scroll: {
                items: 1,
                pauseOnHover: true
            },
            items: {
                width: 350,
                visible: {
                    min: 1,
                    max: 4
                }
            }
        });
        $('.top_menu').each(function(){
            
        });
        var active_link_menu = function(){

        }
        $(window).scroll(function () {
            active_link_menu();
        });

    });
    //function to generate the onepage menu
})(jQuery);