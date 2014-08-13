(function($){
	
	$('.menu-clientes').on('click', function () {
		$('span').removeClass('active');
		$('html, body').animate({
		    scrollTop: $("section.clientes").offset().top-30
		}, 1000);
		$('.menu-clientes').removeClass('active');
		$(this).addClass('active');
	});

	$('.menu-metodologia').on('click', function () {
		$('span').removeClass('active');
		$('html, body').animate({
		    scrollTop: $("section.metodologia").offset().top-30
		}, 1000);
		$('.menu-metodologia').removeClass('active');
		$(this).addClass('active');
	});

	$('.menu-cases').on('click', function () {
		$('span').removeClass('active');
		$('html, body').animate({
		    scrollTop: $("section.cases").offset().top-30
		}, 1000);
		$('.menu-cases').removeClass('active');
		$(this).addClass('active');
	});

    $('.menu-missao').on('click', function () {
        $('span').removeClass('active');
        $('html, body').animate({
            scrollTop: $("section.missao").offset().top-40
        }, 1000);
        $('.menu-missao').removeClass('active');
        $(this).addClass('active');
    });

    $('.menu-servicos').on('click', function () {
        $('span').removeClass('active');
        $('html, body').animate({
            scrollTop: $("section.servicos").offset().top-40
        }, 1000);
        $('.menu-servicos').removeClass('active');
        $(this).addClass('active');
    });

    $('.top_menu.top').css('display','none');
	
    $('.top_menu.top').on('click', function () {
		$('html, body').animate({
		    scrollTop: $("#top").offset().top-30
		}, 1000);
	});

    $(document).ready(function(e){
        $('.slider_cases').carouFredSel({
            prev: '#prev-case',
            next: '#next-case',
            responsive: true,
            width: '100%',
            height: 330,
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

        var active_link_menu = function(){
            var cutoff = $(window).scrollTop();
            var cutoffRange = cutoff + 400;

            var curSec = $.find('.current');
            var curID = $(curSec).attr('id');
            var curNav = $.find('a[name='+curID+']');
            $(curNav).not('.top_menu.top').addClass('active');

            $('.top_menu').each(function(){
                var element = $(this).attr('data-element');
                if ($(element).offset().top > cutoff && $(element).offset().top < cutoffRange) {
                    $('.top_menu.active').removeClass('active')
                    $(this).not('.top_menu.top').addClass('active');
                    return false; //da break no each
                }
            });
            if (cutoff > $('#junto_section').offset().top) {
                $('.top_menu.top').css('display','block');

            }
            else{
                $('.top_menu.top').css('display','none');
            }
        }
        $(window).scroll(function () {
            active_link_menu();
        });

    });
    //function to generate the onepage menu
})(jQuery);