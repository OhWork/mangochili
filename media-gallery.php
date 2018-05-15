<!DOCTYPE html>
<html lang="en">
<head>
<title>Mango Chill</title>
<?php include('inc_head.php'); ?>
<?php $pagename = 'GALLERY'; ?>
</head>
<body>
	<div class="wrapper">
	<?php include('inc_header.php'); ?>
	<!-- content here-->
	<div class="container media-container">
		<?php include('inc_medianav.php'); ?>
		<section class="cat-section">
			<div class="row">
				<div class="col-md-12"><h2 class="cat-title"><!-- GALLERY -->图片</h2></div>
				<img src="images/common/cat-page-hr.png" class="img-responsive cat-page-hr">
			</div>
			<div class="row row-section">
				<div class="col-md-12">
					<h3>IMAGES</h3>
				</div>
			</div>
			<?php for($i=0;$i<1;$i++){ ?>
			<div class="row row-eq-height item-list">
				<?php for($j=0;$j<4;$j++){ ?>
				<div class="col-md-3 col-xs-6 item-grid">
					<div class="item-slider-child">
						<figure class="border-frame">
							<a href="media-gallery-detail.php" class="showgal"><img src="images/media/item-slide-img1.jpg"></a>
						</figure>
						<div class="post-meta">
							<img src="images/common/icon-clock.svg"> December 16, 2017
						</div>
						<a href="media-gallery-detail.php" class="showgal">
							<h3>Mango Chili Napal</h3>
						</a>
					</div>
				</div>
				<?php } ?>
			</div>
			<?php } ?>
		</section>
		<section class="cat-section">
			<div class="row row-section">
				<div class="col-md-12">
					<h3>VIDEO</h3>
				</div>
			</div>
			<?php for($i=0;$i<1;$i++){ ?>
			<div class="row row-eq-height item-list">
				<?php for($j=0;$j<4;$j++){ ?>
				<div class="col-md-3 col-xs-6 item-grid">
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
							<h3>Mango Chili Napal</h3>
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
	<link href="css/jquery.bxslider.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/mwheelIntent.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<?php include('inc_media_modal.php'); ?>
	</div>
</body>
</html>