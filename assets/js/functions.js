var over=0
$(document).ready(function(e) {
	
	$(".menu2 > li > a").last().css({marginLeft: 0});

	$('.item_dest').hover(function(e) {
        if(over==0){
			$(this).children('.over_dest').stop().fadeIn(200);
			over=1
		}else{
			$(this).children('.over_dest').stop().fadeOut(200);
			over=0
		}
    });

	$(window).load(function(){$(".slider-nav").css({display: "block"});});
	$(".ver-sub").hover(function(){$(this).children(".subnav").css({display: "block"});}, function(){$(this).children(".subnav").css({display: "none"});});

});

 			// Empieza función de Slider
			    $(function () {
			      // Slider
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 1200,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			   //finaliza función de Slider


	//Empieza menu de smartphones
$('#menu').slicknav();
	//Fin Menu smartphones