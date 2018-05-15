<!DOCTYPE html>
<html lang="en">
<head>
<title>Mango Chill</title>
<?php include('inc_head.php'); ?>
<?php $pagename = ''; ?>
</head>
<body>
	<div id="skrollr-body" class="wrapper">
	<?php include('inc_header.php'); ?>
	<!-- content here-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="cat-mainbanner" style="background-image:url(images/media/media-mainbanner.jpg);"
					data-anchor-target=".cat-mainbanner"
					data-bottom-top="background-position-y:-200px"
					data-top-bottom="background-position-y:0px">
						<img src="images/media/media-mainbanner.jpg" class="visible-xs img-responsive">
					</div>
			</div>
		</div>
	</div>
	<div class="container media-container">
		<?php include('inc_medianav.php'); ?>
		<section class="cat-section">
			<div class="row">
				<div class="col-md-12"><h2 class="cat-title"><!-- EXECUTIVE BIOS -->管理团队传记</h2></div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 bio-article-list">
					<!-- loop content here -->
					<div class="row bio-article-row">
						<div class="col-md-4">
							<figure>
								<a href="#" class="showbio">
									<img src="images/media/bio-list-img1.jpg">
								</a>
							</figure>
						</div>
						<div class="col-md-8">
							<div class="row">
								<div class="col-md-11 col-md-offset-1">
									<h2>PITAYA PHANPHENSOPHON</h2>
									<div class="position">CEO & FOUNDER OF MANGO TREE WORLDWIDE AND COCA HOLDING INTERNATIONAL</div>
									<img src="images/common/gold-hr.svg" class="gold-hr article-hr">
									<h3>BIOGRAPHY</h3>
									<p>Pitaya Phanphensophon是个热情洋溢的人，他有着一双炯炯有神的眼睛，他的笑容总是能感染别人。Pitaya对工作充满着热情，并且非常坚定地持有一个信念，那就是工作应该要有趣，应该是不受禁锢的生命之悦。这份热情和信念让芒果树品牌成为了世界上的成功典范之一</p>
									<div class="readmore">
										<a href="media-bio-detail.php" class="showbio">READ MORE <img src="images/common/readmore-arrow.svg"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row bio-article-row">
						<div class="col-md-4">
							<figure>
								<a href="#" class="showbio">
									<img src="images/media/bio-list-img2.jpg">
								</a>
							</figure>
						</div>
						<div class="col-md-8">
							<div class="row">
								<div class="col-md-11 col-md-offset-1">
									<h2>TREVOR MACKENZIE</h2>
									<div class="position">MANAGING DIRECTOR, EXQUISINE SYSTEM CO. LTD.</div>
									<div class="bio-des">(A subsidiary of COCA Holding International which owns Mango Tree and COCA group of brands worldwide)</div>
									<img src="images/common/gold-hr.svg" class="gold-hr article-hr">
									<h3><!-- EXECUTIVE PROFILE -->领导团队简介</h3>
									<p>Trevor MacKenzie (中文名：马清华) 是偶然成为一个餐饮业老板的，而且他也并非专业出生。作为一个自学成才的企业家，Trevor在他的职业生涯开始之初也在不同领域尝试过很多种工作，只为了寻找能给他的生活带来激情的事业。</p>
									<div class="readmore">
										<a href="media-bio-detail.php" class="showbio">READ MORE <img src="images/common/readmore-arrow.svg"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end loop content here -->
				</div>
			</div>
		</section>
		<div class="row">
			<div class="col-md-12">
				<hr class="red-bar">
			</div>
		</div>
		<section class="cat-section scfade">
			<div class="row">
				<div class="col-md-12"><h2 class="cat-title"><!-- MEDIA COVERAGE -->媒体覆盖率</h2></div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-xs-10 col-xs-offset-1">
					<div class="item-slider">
						<ul>
							<?php  for($i=0;$i<10;$i++){ ?>
							<li>
								<div class="item-slider-child">
									<figure class="border-frame">
										<a href="media-coverage-detail.php"><img src="images/media/item-slide-img1.jpg"></a>
									</figure>
									<div class="post-meta">
										<img src="images/common/icon-clock.svg"> December 16, 2017
									</div>
									<a href="media-coverage-detail.php">
										<h3>Thailand’s renowned mango tree brand</h3>
									</a>
								</div>
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<div class="row">
			<div class="col-md-12">
				<hr class="red-bar">
			</div>
		</div>
		<section class="cat-section scfade">
			<div class="row">
				<div class="col-md-12"><h2 class="cat-title"><!-- NEWS RELEASE -->新闻</h2></div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-xs-10 col-xs-offset-1">
					<div class="item-slider">
						<ul>
							<?php  for($i=0;$i<5;$i++){ ?>
							<li>
								<div class="item-slider-child">
									<figure class="border-frame">
										<a href="media-news-detail.php"><img src="images/media/item-slide-img1.jpg"></a>
									</figure>
									<div class="post-meta">
										<img src="images/common/icon-clock.svg"> December 16, 2017
									</div>
									<a href="media-news-detail.php">
										<h3>Thailand’s renowned mango tree brand </h3>
									</a>
								</div>
							</li>
							<li>
								<div class="item-slider-child">
									<figure class="border-frame">
										<a href="media-news-detail.php"><img src="images/media/item-slide-img1.jpg"></a>
									</figure>
									<div class="post-meta">
										<img src="images/common/icon-clock.svg"> December 16, 2017
									</div>
									<a href="media-news-detail.php">
										<h3>Global restaurant group celebrates five years in the philippines with bold growth plans, charitable activities and deeper culinary innovations</h3>
									</a>
								</div>
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<div class="row">
			<div class="col-md-12">
				<hr class="red-bar">
			</div>
		</div>
		<section class="cat-section scfade">
			<div class="row">
				<div class="col-md-12"><h2 class="cat-title"><!-- GALLERY -->图片</h2></div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-xs-10 col-xs-offset-1">
					<div class="item-slider">
						<ul>
							<?php  for($i=0;$i<10;$i++){ ?>
							<li>
								<div class="item-slider-child">
									<figure class="border-frame">
										<a href="media-gallery-detail.php" class="showgal">
											<img src="images/media/item-slide-img1.jpg">
										</a>
									</figure>
									<div class="post-meta">
										<img src="images/common/icon-clock.svg"> December 16, 2017
									</div>
									<a href="media-gallery-detail.php" class="showgal">
										<h3>Thailand’s renowned mango tree brand </h3>
									</a>
								</div>
							</li>
							<li>
								<div class="item-slider-child">
									<figure class="border-frame">
										<a href="media-video-detail.php" class="playbtn showvideo">
											<img src="images/media/item-slide-img1.jpg">
											<img src="images/common/btn-play.svg" class="playbtn-img">
										</a>
									</figure>
									<div class="post-meta">
										<img src="images/common/icon-clock.svg"> December 16, 2017
									</div>
									<a href="media-video-detail.php" class="showvideo">
										<h3>Thailand’s renowned mango tree brand </h3>
									</a>
								</div>
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- end content here -->
	<?php include('inc_footer.php'); ?>
	<link href="css/jquery.jscrollpane.css" rel="stylesheet">
	<link href="css/jquery.bxslider.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/mwheelIntent.js"></script>
	<script type="text/javascript" src="js/skrollr.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript">

		var slideMargin;
		var slideWidth;
		var maxSlides;
		var itemslider;

		$(document).ready(function(){
			if($(window).width()<767){
				slideMargin = 15;
				slideWidth = 320;
				maxSlides = 2;
			}else{
				slideMargin = 40;
				slideWidth = 220;
				maxSlides = 4;
			}
			itemslider = $('.item-slider ul').bxSlider({
	            mode: 'horizontal', //mode: 'fade','horizontal'
	            speed: 300,
	            auto: false,
	            infiniteLoop: true,
	            hideControlOnEnd: true,
	            useCSS: false,
	            minSlides: 1,
				maxSlides: maxSlides,
				slideWidth: slideWidth,
				slideMargin: slideMargin,
				moveSlides: 1,
				pager:false,
	        });

		})




		$(window).scroll(function (event) {
	    	var scroll = $(window).scrollTop();
			$("body").find(".scfade").each(function(){
		    	var _offset = $(this).offset();
				if(scroll > (_offset.top - $(window).height()) + 300){
					$(this).addClass("scfade-in");
				}
	    })


	});
	</script>
	<?php include('inc_media_modal.php'); ?>



	</div>
</body>
</html>