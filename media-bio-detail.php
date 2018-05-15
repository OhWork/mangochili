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
            <div class="col-md-4 col-md-offset-1">
	            <div class="bio-frame">
                <figure class="border-frame">
					<img src="images/media/bio-list-img1.jpg"/>
				</figure>
	            </div>
				<div class="bio-profile">
					<div class="bio-name">TREVOR MACKENZIE</div>
					<div class="bio-position">CEO & FOUNDER OF MANGO TREE WORLDWIDE AND COCA HOLDING INTERNATIONAL</div>
					<!-- if has this -->
					<!--
					<div class="bio-des">(A subsidiary of COCA Holding International which owns Mango Tree and COCA group of brands worldwide)</div>
					-->
					<!----------------->
				</div>
            </div>
            <div class="col-md-6 col-md-offset-1">
                <article class="article-concept-content">
					<div class="content-overflow">
						<p>
									Pitaya Phanphensophon是个热情洋溢的人，他有着一双炯炯有神的眼睛，他的笑容总是能感染别人。Pitaya对工作充满着热情，并且非常坚定地持有一个信念，那就是工作应该要有趣，应该是不受禁锢的生命之悦。这份热情和信念让芒果树品牌成为了世界上的成功典范之一。
									</p>
									<p>
									Pitaya 说：“我十分坚信，如果用热情和爱来烹饪菜肴，自然就会得到美味。”正是这份热情让他成为了泰国餐饮最杰出的企业家之一，同时也是文化大使。58年前他的父亲开了泰国第一家火锅店，到现在他的餐饮品牌已经位居世界前列，并成功地在包括中国在内的13个国家开设了60  家分店。
									</p>
									<p>
									对 Pitaya 而言，他在乎的并不是分店的数量，而是每一家芒果树或是COCA品牌下的餐厅都要诚实守信，为顾客提供优质的菜品。“我出生在餐饮世家，餐饮已经渗透在了我的血液里。我希望在500年之后还能看到我们的品牌和餐厅。”Pitaya微笑着补充说：“这就叫做长远的眼光”。
									</p>
									<p>
									在父亲去世之后，Pitaya继承了父亲的事业。他不仅在泰国树立了品牌，更把品牌推向了国际，先后在很多国际化的大都市开设了旗舰店，包括曼谷、伦敦、东京、迪拜、雅加达，马尼拉和香港。
									</p>
									<p>
									Pitaya总是喜欢卷起袖子，因为他是个什么事都亲历亲为的CEO。每个月Pitaya都会主持一档电视节目，在他的研发厨房里教授烹饪课。他也经常在家举行晚会，为家人和朋友制作美食。
									</p>
									<p>
									“我对泰餐的热爱是从我在国外留学的时候开始的。那时我和其他亚洲同学们都非常想念泰国的大米，刚开始我们只会用一个小电饭锅，还有酱油和腊肠来做些简单的饭菜，后来我慢慢加入了蘑菇、鸡肉，再后来便开始研究更复杂精致的食谱。”
他出版了一本烹饪书，名字叫做: “I Am Not a Chef, But I Sure Am a Good Cook”，书里有他对烹饪的精心研究，他发现那些热爱自己工作的厨师都能做出最好的食物。“这就是为什么我鼓励我们的厨师把热情倾注在他们的工作上，并真正地热爱自己的工作。”
									</p>

						<div class="readmore more-btn">
							<a href="media-bio.php">BACK</a>
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


