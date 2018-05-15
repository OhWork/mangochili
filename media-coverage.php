<!DOCTYPE html>
<html lang="en">
<head>
<title>Mango Chill</title>
<?php include('inc_head.php'); ?>
<?php $pagename = 'MEDIA COVERAGE'; ?>
</head>
<body>
	<div class="wrapper">
	<?php include('inc_header.php'); ?>
	<!-- content here-->
	<div class="container media-container">
		<?php include('inc_medianav.php'); ?>
		<section class="cat-section">
			<div class="row">
				<div class="col-md-12"><h2 class="cat-title"><!-- MEDIA COVERAGE -->媒体覆盖率</h2></div>
				<img src="images/common/cat-page-hr.png" class="img-responsive cat-page-hr">
			</div>
			<?php for($i=0;$i<2;$i++){ ?>
			<div class="row row-eq-height item-list">
				<?php for($j=0;$j<4;$j++){ ?>
				<div class="col-md-3 col-xs-6 item-grid">
					<div class="item-slider-child">
						<figure class="border-frame">
							<a href="media-coverage-detail.php"><img src="images/media/media-coverage-cover.jpg"></a>
						</figure>
						<div class="post-meta">
							<img src="images/common/icon-clock.svg"> December 19, 2017
						</div>
						<a href="media-coverage-detail.php">
							<h3>FUN AND LAUGHTER TAKES CENTRE STAGE AS COCA RESTAURANT
GROUP POPS A CORK TO CELEBRATE ITS 60 YEAR ANNIVERSARY</h3>
						</a>
					</div>
				</div>
				<?php } ?>
			</div>
			<?php } ?>
		</section>
	</div>
	<!-- end content here -->
	<?php include('inc_footer.php'); ?>
	<script type="text/javascript" src="js/main.js"></script>
	</div>
</body>
</html>