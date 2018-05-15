<!DOCTYPE html>
<html lang="en">
<head>
<title>Mango Chill</title>
<?php include('inc_head.php'); ?>
</head>
<body>
	<div class="wrapper">
	<?php include('inc_header.php'); ?>
		<div class="container  media-container">
			<?php include('inc_medianav.php'); ?>
			<div class="row">
				<div class="col-md-12">
		        	<h2 class="popup-h2">MANGO CHILI</h2>
	        	</div>
	        	<div class="row">
	                <div class="col-md-8 col-md-offset-2">
		                <div class="pop-slider mango-slider">
			                <ul>
				                <li data-slide-index="0"><img src="images/concept/slide1.jpg"></li>
				                <li data-slide-index="1"><img src="images/concept/slide2.jpg"></li>
				                <li data-slide-index="2"><img src="images/concept/slide3.jpg"></li>
			                </ul>
		                </div>
		                <div class="bx-thumb mango-slider-thumb">
			                <ul>
				                <li data-slide-index="0"><a class="active" href="#"><img src="images/concept/slide1.jpg"></a></li>
				                <li data-slide-index="1"><a href="#"><img src="images/concept/slide2.jpg"></a></li>
				                <li data-slide-index="2"><a href="#"><img src="images/concept/slide3.jpg"></a></li>
			                </ul>
		                </div>
						<div class="readmore more-btn" style="margin-top:30px; margin-bottom: 30px; text-align: center;">
							<a style="float: none;" href="media-gallery.php">BACK</a>
						</div>
	                </div>
                </div>
			</div>
		</div>
	<?php include('inc_footer.php'); ?>
	<link href="css/jquery.bxslider.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.bxslider.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			//slider
			slider = $('.pop-slider ul').bxSlider({
			            mode: 'fade', //mode: 'fade','horizontal'
			            speed: 500,
			            auto: false,
			            infiniteLoop: true,
			            hideControlOnEnd: true,
			            useCSS: false,
			            pager:false,
			            pagerCustom: 'sliderthumb',
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
				controls:false,
	        });

	        $(".bx-thumb ul li a").click(function(e){
				e.preventDefault();
				$(".bx-thumb ul li a.active").removeClass("active");
				$(this).addClass("active");
				var _index = $(this).parent().attr("data-slide-index");
				console.log("_index = ", _index);
				slider.goToSlide(_index);
			})
		})
	</script>
	</div>
</body>
</html>


