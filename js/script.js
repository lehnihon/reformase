( function( $ ) {

    var offset = $('#principal').offset().top;
    var $meuMenu = $('#principal'); // guardar o elemento na memoria para melhorar performance
    $(document).on('scroll', function () {
        if (offset <= $(window).scrollTop()-100) {
            $meuMenu.addClass('fixar');
            $meuMenu.addClass('animated fadeInDown');
            $('.tel').attr("src", "/wp-content/themes/datapontual/images/telb.png");
            $('.email').attr("src", "/wp-content/themes/datapontual/images/e-mailb.png");
        } else {
            $meuMenu.removeClass('fixar animated fadeInDown');

            $('.tel').attr("src", "/wp-content/themes/datapontual/images/tel.png");
            $('.email').attr("src", "/wp-content/themes/datapontual/images/e-mail.png");
        }
    });

    $('.a1').attr("class", "animated fadeInUp");
    $('.a2').attr("class", "animated fadeInUp");
	setTimeout(
	  function() 
	  {
	  	$('.a3').attr("class", "animated fadeInUp");
		setTimeout(
		  function()
		  {
		  	$('.a4').attr("class", "animated fadeIn");
		  }, 500);
	  }, 500);

    $('.b1').attr("class", "animated fadeInRight");
    $('.b2').attr("class", "animated fadeInDown");
	setTimeout(
	  function() 
	  {
	  	$('.b3').attr("class", "animated fadeInUp");
	  }, 500);

    $('.c1').attr("class", "animated fadeInLeft");
    $('.c2').attr("class", "animated fadeInLeft");
	setTimeout(
	  function() 
	  {
	  	$('.c3').attr("class", "animated fadeIn");
		setTimeout(
		  function() 
		  {
		  	$('.c4').attr("class", "animated fadeIn");
			setTimeout(
			  function() 
			  {
			  	$('.c5').attr("class", "animated fadeIn");
				setTimeout(
				  function() 
				  {
				  	$('.c6').attr("class", "animated fadeIn");
				  }, 300);
			  }, 300);
		  }, 300);
	  }, 300);

    $('.d1').attr("class", "animated fadeInLeft");
    $('.d3').attr("class", "animated fadeInLeft");
	setTimeout(
	  function() 
	  {
	  	$('.d2').attr("class", "animated fadeInDown");
	  }, 500);





	$('.ref-com').on('mouseenter',function(){
	   $('.e2').attr("class", "animated fadeInUp");
		setTimeout(
		  function() 
		  {
		  	$('.e4').attr("class", "animated fadeInUp");
		  	$('.e5').attr("class", "animated fadeInUp");
		  }, 500);
	});

	$('.ref-apt').on('mouseenter',function(){
	    $('.f1').attr("class", "animated fadeInUp");
		setTimeout(
		  function() 
		  {
		  	$('.f2').attr("class", "animated fadeInUp");
		  	$('.f4').attr("class", "animated fadeInUp");
		  }, 500);
	});

	$('.ref-res').on('mouseenter',function(){
	  	$('.g2').attr("class", "animated fadeInUp");
	  	$('.g3').attr("class", "animated fadeInDown");
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