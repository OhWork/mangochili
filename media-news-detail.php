<!DOCTYPE html>
<html lang="en">
<head>
<title>Mango Chill</title>
<?php include('inc_head.php'); ?>
<?php $pagename = 'NEWS RELEASE'; ?>
</head>
<body>
	<div class="wrapper">
	<?php include('inc_header.php'); ?>
	<!-- content here-->
	<div class="container media-container">
		<?php include('inc_medianav.php'); ?>
		<section class="news-grid">
			<div class="row">
				<div class="col-md-7 col-md-offset-1">
					<div class="cat-name"><!-- NEWS RELEASE -->新闻</div>
					<h2 class="news-title">ASIAN RESTAURANT GROUP RAISES AWARENESS FOR CHILDREN WITH MOVEMENT DIFFICULTIES IN INSPIRATIONAL “CLIMB TO CHANGE A LIFE” EVENT IN THAILAND</h2>
					<div class="post-meta"><img src="images/common/icon-clock.svg"> December 16, 2017</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7 col-md-offset-1">

					<div class="news-content">
						<figure>
							<img src="images/media/news-img1.jpg">
							<figcaption>COCA Restaurants CEO Pitaya Phanphensophon (third left) leads climbers to the top of Khao Daeng.</figcaption>
						</figure>
						<p>
							HUA HIN, THAILAND – Leading Asian restaurant group, featuring COCA and Mango Tree restaurant brands, recently welcomed their franchisee teams from around the region to a climb in Thailand’s Sam Roi Yot national park in support of the Zy Movement Foundation, an organisation assisting children born with movement difficulties.
						</p>



						<p>
						In a moving weekend of activities, franchisee partners from Hong Kong, India, Indonesia, Nepal, the Philippines and Vietnam joined the COCA and Mango Tree teams based in their Thai headquarters of Bangkok to help children from Zy Foundation climb the 750-metre Khao Daeng mountain.
						</p>
						<p>
						Funds were raised to the tune of USD25,000 for Zy Foundation which will go towards a one-year’s worth of doctors visits for five families, training for 25 therapists specialising in assistance with children with movement difficulties and supporting future Zy Movement Foundation activities.
						</p>
						<p>
						But it was the inspirational experience of helping and supporting the children during the difficult rocky climb, which often took up to three people per child, which left a strong impression on all participants who witnessed a level of courage and determination by the children that brought many close to tears.dren during the difficult rocky climb, which often took up to three people per child, which left a strong impression on all participants who witnessed a level of courage and determination by the children that brought many close to tears.
						</p>

						<figure>
							<img src="images/media/news-img2.jpg">
							<figcaption>COCA Restaurants CEO Pitaya Phanphensophon (third left) leads climbers to the top of Khao Daeng.</figcaption>
						</figure>



					</div>
					<div class="readmore more-btn" style="margin-bottom: 30px; text-align: center;">
						<a style="float: none;" href="media-news.php">BACK</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-11 col-md-offset-1">
							<section class="news-sidebar">
								<div class="cat-name"><!-- LATEST NEWS -->最新资讯</div>
								<?php for($i=0;$i<3;$i++){ ?>
								<a class="news-link" href="media-news-detail.php">
									LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH
								</a>
								<div class="hr">
									<hr>
								</div>
								<?php } ?>
							</section>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- end content here -->
	<?php include('inc_footer.php'); ?>
	<script type="text/javascript" src="js/main.js"></script>
	</div>
</body>
</html>