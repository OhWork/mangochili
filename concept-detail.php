<!DOCTYPE html>
<html lang="en">
<head>
<title>Mango Chill</title>
<?php include('inc_head.php'); ?>
</head>
<body>
	<div class="wrapper">
	<?php include('inc_header.php'); ?>
	<div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="row">
	                <div class="col-md-10">
		                <div class="pop-slider mango-slider mango-slider-expage">
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
	                </div>
                </div>
            </div>
            <div class="col-md-5">
                <article class="article-concept-content">
					<div class="type-ico"><img src="images/common/icon-noodle.svg"></div>
					<div class="content-overflow">
						<h2>ก๋วยเตี๋ยวเนื้อ</h2>
						<h3>泰式牛肉面</h3>
						<img src="images/common/article-hr.svg" alt="article-hr" class="article-hr">
						<p>
							在四千多年前，中国青海省的厨师发明了当今为人们熟知的面条。后来在清朝嘉庆皇帝年代，牛肉面就成为了中原地区最受欢迎的菜品之一。
						</p>
						<p>
							至于泰国，粿条起源于十七世纪大城的那莱大帝时代，深受了泰国人的喜爱。中国人的烹饪技法给泰国人留下了深刻的印象，为了适应自己的口味，泰国人调整了传统烹饪法，如添加本地食材等。

						</p>
						<p>
						泰式牛肉面的特点是香浓郁汤底，其味道可口，由香菜根、高良姜、蒜头、香茅和甜罗勒等材料制作而成，三种最通常做泰式牛肉面的粿条有超细粿条、粿条和宽粿条。可根据自己喜爱的口味放入干辣椒粉、少许糖、醋和鱼露等调味料。
						</p>
						<p>
							目前泰式牛肉面非常流行，遍布泰国大街小巷，除此之外，泰国人认为牛肉面可以解酒，也是一道美味健康的菜。
						</p>

						<div class="readmore more-btn">
							<a href="concept.php">BACK</a>
						</div>
					</div>
				</article>

            </div>
        </div>
    </div>

	<?php include('inc_footer.php'); ?>

	<link href="css/jquery.bxslider.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.bxslider.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){


			var slider;
			var sliderthumb;
			slider = $('.pop-slider ul').bxSlider({
					            mode: 'fade', //mode: 'fade','horizontal'
					            speed: 500,
					            auto: false,
					            infiniteLoop: true,
					            hideControlOnEnd: true,
					            useCSS: false,
					            controls:false,
					            pager:false,
					            pagerCustom: 'sliderthumb',
					        });

					sliderthumb = $('.bx-thumb ul').bxSlider({
			            mode: 'horizontal', //mode: 'fade','horizontal'
			            speed: 300,
			            auto: false,
			            infiniteLoop: true,
			            hideControlOnEnd: true,
			            useCSS: false,
			            minSlides: 4,
						maxSlides: 5,
						slideWidth: 175,
						slideMargin: 7,
						moveSlides: 1,
						pager:false,
			            onSlideAfter: function() {
				            //slider.startAuto();
				        }
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


