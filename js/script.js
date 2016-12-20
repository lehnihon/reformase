( function( $ ) {

    var offset = $('#principal').offset().top;
    var $meuMenu = $('#principal'); // guardar o elemento na memoria para melhorar performance
    $(document).on('scroll', function () {
        if (offset <= $(window).scrollTop()-100) {
            $meuMenu.addClass('fixar');
        } else {
            $meuMenu.removeClass('fixar');
        }
    });

    $(".anima-a").css('visibility','hidden');
    $(".anima-b").css('visibility','hidden');
    $(".anima-c").css('visibility','hidden');
    $(".anima-d").css('visibility','hidden');
    $(".anima-e").css('visibility','hidden');
    $(".anima-f").css('visibility','hidden');
    $(".anima-g").css('visibility','hidden');

	$(window).scroll(function() {
		if ($(this).scrollTop() > 200 ) {
        	$(".anima-a").css('visibility','visible');
        	$(".anima-a").addClass('animated bounceInLeft');
        	$(".anima-b").css('visibility','visible');
        	$(".anima-b").addClass('animated bounceInRight');
		}
		if ($(this).scrollTop() > 800 ) {
			$(".anima-c").css('visibility','visible');
	        $(".anima-c").addClass('animated fadeIn');
		}


        if ($(this).scrollTop() > 1500 ) {
			var FunctionOne = function () {
				var r = $.Deferred();

	        	$(".anima-d").css('visibility','visible');
	        	$(".anima-d").addClass('animated bounceInLeft');
	        	$(".anima-e").css('visibility','visible');
	        	$(".anima-e").addClass('animated bounceInRight');

				setTimeout(function () {
				r.resolve();
				}, 500);
				return r;
			};
	
			FunctionOne().done(
				function () {
		        	$(".anima-f").css('visibility','visible');
		        	$(".anima-f").addClass('animated fadeIn');
				    $('.counter').counterUp({
				        delay: 50,
				        time: 1500
				    }).removeClass('counter');			 
				}
			);

        }

		if ($(this).scrollTop() > 2100 ) {
			$(".anima-g").css('visibility','visible');
	        $(".anima-g").addClass('animated fadeIn');
		}

        if($(window).scrollTop() + $(window).height() > $(document).height()-100) {
        	$(".anima-rino").addClass('animated wobble');
     	}

	});

} )( jQuery );