<footer>
	<div class="container">
		<div class="row">

			<div class="col-sm-4 col-sm-push-4">
				<div class="logo-holder">
					<img src="images/common/mainlogo.svg" class="mainlogo">
				</div>
			</div>
			<div class="col-sm-4 col-sm-pull-4">
				<div class="social-bar">
					<ul>
						<li><a href="#"><img src="images/common/icon-ig.svg" class="ico"></a></li>
						<li><a href="https://www.facebook.com/mangochiliglobal"><img src="images/common/icon-fb.svg" class="ico"></a></li>
						<li><a href="#"><img src="images/common/icon-wc.svg" class="ico"></a></li>
						<li><a href="#"><img src="images/common/icon-wb.svg" class="ico"></a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="row hidden-xs">
					<div class="col-sm-12">
						<ul class="lang-bar">
							<li><a href="#">EN</a></li>
							<li><a href="#">CH</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 copyright-text">
						All Copy Rights Reserved: www.mangochilli.com
					</div>
				</div>

			</div>
		</div>
	</div>
</footer>
<div class="up-btn"><a href="#"><img src="images/common/up-btn.svg"></a></div>


<?php if($device != 'tablet'){?>
<script type="text/javascript">
	/********************** parallax Control *******************/

$(function(){
	if($("#skrollr-body").length > 0){
		if($(window).width()>1140){
			skrollr.init({
				smoothScrolling: false,
				forceHeight: false,
				mobileDeceleration: 0.004
			});
			setTimeout(function () {
			  skrollr.get().refresh();
			}, 0);
		}

		$(window).on('resize', function () {
			//console.log("width = ", $(window).width());
			if($(window).width()>1140){
				if ($(window).width() <= 1140) {
			    	skrollr.init().destroy(); // skrollr.init() returns the singleton created above
			    }else{
				    skrollr.init({
						smoothScrolling: false,
						forceHeight: false,
						mobileDeceleration: 0.004
					});
					setTimeout(function () {
					  skrollr.get().refresh();
					}, 0);
			    }
			}

		});
	}

})
</script>
<?php } ?>