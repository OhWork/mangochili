<nav class="navbar navbar-default media-nav">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand visible-xs" href="#">
				<!--PRESS / MEDIA-->
				新闻 / 媒体
			</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
			<ul class="nav navbar-nav">
				<li data-page="EXECUTIVE BIOS">
					<a href="media-bio.php"><!--EXECUTIVE BIOS-->管理团队传记</a>
				</li>
				<li data-page="MEDIA COVERAGE">
					<a href="media-coverage.php"><!-- MEDIA COVERAGE -->媒体覆盖率</a>
				</li>
				<li data-page="NEWS RELEASE">
					<a href="media-news.php"><!-- NEWS RELEASE -->新闻</a>
				</li>
				<li data-page="GALLERY">
					<a href="media-gallery.php"><!-- GALLERY -->图片</a>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
<script type="text/javascript">
	$(".media-nav li").each(function(){
		if($(this).attr('data-page') == '<?php echo($pagename); ?>'){
			$(this).addClass('active');
		}

	})
</script>