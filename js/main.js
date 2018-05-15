$(document).ready(function(){


	$("header .navbar-toggle").click(function(){
		$(".navbar-collapse").addClass("active");
	})
	$("header .close-menu").click(function(e){
		e.preventDefault();
		$(".navbar-collapse").removeClass("active");
	})

	/****************** media page modal ********************/
	$(".showgal").click(function(e){
		if($(window).width()>767){
			e.preventDefault();
			$("#modal-gallery").modal('show');
		}
	})
	$(".showvideo").click(function(e){
		if($(window).width()>767){
			e.preventDefault();
			$("#modal-video").modal('show');
		}
	})

	$(".showbio").click(function(e){
		if($(window).width()>767){
			e.preventDefault();
			$("#modal-bio").modal('show');
		}

	})

	var slider;
	var sliderthumb;
	var apis = [];

	$("#modal-gallery").on('show.bs.modal', function (e){
		setTimeout(function(){
			//slider
			slider = $('.pop-slider ul').bxSlider({
			            mode: 'fade', //mode: 'fade','horizontal'
			            speed: 500,
			            auto: false,
			            infiniteLoop: true,
			            hideControlOnEnd: true,
			            useCSS: false,
			            pager:false,
			            pagerCustom: '#bx-thumb-slide',

			            onSlideAfter: function() {
							var curr = slider.getCurrentSlide();
							console.log('curr = ', curr);
							$(".bx-thumb ul li").each(function(){
								$(this).find('a').removeClass('active');
								if($(this).attr("data-slide-index") == curr){
									$(this).find('a').addClass('active');
								}
							})

				        }
			        });


			sliderthumb = $('.bx-thumb ul').bxSlider({
	            mode: 'horizontal', //mode: 'fade','horizontal'
	            speed: 300,
	            auto: false,
	            infiniteLoop: true,
	            hideControlOnEnd: true,
	            useCSS: false,
	            minSlides: 4,
				maxSlides: 4,
				slideWidth: 100,
				slideMargin: 10,
				moveSlides: 1,
				pager:false,
				controls:true

	        });



	       $(".bx-thumb ul li a").click(function(e){
				e.preventDefault();
				$(".bx-thumb ul li a.active").removeClass("active");
				$(this).addClass("active");
				var _index = $(this).parent().attr("data-slide-index");
				console.log("_index = ", _index);
				slider.goToSlide(_index);
			})

		}, 800)
		setTimeout(function(){
			$('.modal-body .article-concept-content').css({
				opacity : 1
			})
			$('.pop-slider').css({
		        opacity : 1
	        });
	        $('.bx-thumb').css({
		        opacity : 1
	        });
		}, 800)

	});
	$('#modal-gallery').on('hidden.bs.modal', function (e){
		/*
		slider.destroySlider();
		sliderthumb.destroySlider();
		$(".bx-thumb ul li").each(function(){
			$(this).find('a').removeClass('active');
		})
		$(".bx-thumb ul li").eq(0).find('a').addClass('active');
		*/
	});

	$("#modal-gallery .close").click(function(){
		setTimeout(function(){
	        slider.destroySlider();
			sliderthumb.destroySlider();
			$(".bx-thumb ul li").each(function(){
				$(this).find('a').removeClass('active');
			})
			$(".bx-thumb ul li").eq(0).find('a').addClass('active');
        }, 300)
		$('.modal-body .article-concept-content').css({
				opacity : 0
			})
		$('.pop-slider').css({

	        opacity : 0

        });

        $('.bx-thumb').css({

	        opacity : 0

        });


	})

	$("#modal-video").on('show.bs.modal', function (e){

		vUrl = 'https://www.youtube.com/embed/jqbvIG0bZxY?rel=0&amp;showinfo=0';
		$("#modal-video").find('iframe').attr('src',vUrl);

	});
	$('#modal-video').on('hidden.bs.modal', function (e){
		$("#modal-video").find('iframe').attr('src','');
	});


	$("#modal-bio").on('show.bs.modal', function (e){
		setTimeout(function(){
			// scroll area
			$('.content-overflow').each(
				function()
				{
					apis.push($(this).jScrollPane().data().jsp);
				}
			)

			$('.modal-body .article-concept-content').css({
				opacity : 1
			})

		}, 500)



	});

	$("#modal-bio .close").click(function(){



		$('.modal-body .article-concept-content').css({
			opacity : 0
		})

		if (apis.length) {
				$.each(
					apis,
					function(i) {
						this.destroy();
					}
				)
				apis = [];
			}

	})

	/****************** end media page modal ********************/

})



/****************** scroll Top **************************/

$(window).scroll(function (event) {

    var scroll = $(window).scrollTop();
    var topBtn = $(".up-btn");
    // Do something
    if(scroll > 1700){
    	topBtn.fadeIn('slow');
    }else{
	    topBtn.fadeOut();
    }
});
$(".up-btn a").click(function(e){
	e.preventDefault();
	$("html, body").animate({ scrollTop: 0 }, 500);
})




