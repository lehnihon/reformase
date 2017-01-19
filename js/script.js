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

	$(window).scroll(function() {
		if ($(this).scrollTop() > 200 ) {
        	$(".anima-a").css('visibility','visible');
        	$(".anima-a").addClass('animated fadeInLeft');
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
				  }, 250);
			  }, 250);
			setTimeout(
			  function()
			  {
	        	$(".anima-b").css('visibility','visible');
	        	$(".anima-b").addClass('animated fadeInLeft');
			    $('.b1').attr("class", "animated fadeInRight");
			    $('.b2').attr("class", "animated fadeInDown");
				setTimeout(
				  function() 
				  {
				  	$('.b3').attr("class", "animated fadeInUp");
				  }, 500);
				setTimeout(
				  function()
				  {
		        	$(".anima-c").css('visibility','visible');
		        	$(".anima-c").addClass('animated fadeInLeft');
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
								  }, 250);
							  }, 250);
						  }, 250);
					  }, 250);
						setTimeout(
						  function()
						  {
				        	$(".anima-d").css('visibility','visible');
				        	$(".anima-d").addClass('animated fadeInLeft');
						    $('.d1').attr("class", "animated fadeInLeft");
						    $('.d3').attr("class", "animated fadeInLeft");
							setTimeout(
							  function() 
							  {
							  	$('.d2').attr("class", "animated fadeInDown");
							  }, 500);
						  }, 500);
				  }, 500);
			  }, 500);

		}
		if ($(this).scrollTop() > 800 ) {
			$(".anima-e").css('visibility','visible');
	        $(".anima-e").addClass('animated fadeIn');
			$(".anima-f").css('visibility','visible');
	        $(".anima-f").addClass('animated fadeInLeft');
			$(".anima-g").css('visibility','visible');
			$(".anima-g").addClass('animated fadeInRight');
		}

		if ($(this).scrollTop() > 1350 ) {
			$(".anima-h").css('visibility','visible');
	        $(".anima-h").addClass('animated zoomIn');
			setTimeout(
			  function() 
			  {
				$(".anima-i").css('visibility','visible');
		        $(".anima-i").addClass('animated zoomIn');
				setTimeout(
				  function() 
				  {
					$(".anima-j").css('visibility','visible');
			        $(".anima-j").addClass('animated zoomIn');
				  }, 250);
			  }, 250);
		}
	});

} )( jQuery );