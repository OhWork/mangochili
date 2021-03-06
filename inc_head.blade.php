<?php

	//include('class/Mobile_Detect.php');

	//$detect = new Mobile_Detect;

	//$device = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'mobile') : 'desktop');

?>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
<meta name="viewport" content="width=device-width, maximum-scale=1">



<!-- open if have favicon



-->

@include('front.favicon')

<!--<link type="text/css" rel="stylesheet" href="css/reset.css" media="screen,projection"/>-->

<!--<link type="text/css" rel="stylesheet" href="css/print.css" media="print"/>-->

<!-- Bootstrap -->

<link href="{{ asset('/public/front/css/bootstrap.min.css') }}" rel="stylesheet">

<link href="{{ asset('/public/front/css/font-awesome.css') }}" rel="stylesheet">

<link type="text/css" rel="stylesheet" href="{{ asset('/public/front/css/layout.css') }}" media="screen,projection"/>


@if(Session::get('Lang')=='ch')
	<link href="{{ asset('/public/front/css/zh.css') }}" rel="stylesheet">
@endif


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

<!--[if lt IE 9]>

  <script src="js/html5shiv.min.js"></script>

  <script src="js/respond.min.js"></script>

  <script type="text/javascript" src="js/PIE_IE678.js"></script>

  <script type="text/javascript" src="js/PIE.js"></script>

<![endif]-->

<!--[if IE 9]>

<script type="text/javascript" src="js/IE9.js"></script>

<![endif]-->



<script type="text/javascript" src="{{ asset('/public/front/js/jquery-1.11.3.min.js') }}"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="{{ asset('/public/front/js/bootstrap.min.js') }}"></script>

<style type="text/css">

	/*.location-gallery-slider .bx-wrapper .bx-next {

	    background-image: url({{ asset('/public/images/common/thumb-nav-right.svg') }});

	}

	.location-gallery-slider .bx-wrapper .bx-prev {

	    background-image: url({{ asset('/public/images/common/thumb-nav-left.svg') }});

	}

	.mango-slider .bx-wrapper .bx-next {

	    background-image: url({{ asset('/public/images/common/gal-right.svg') }});

	}

	.mango-slider .bx-wrapper .bx-prev {

	    background-image: url({{ asset('/public/images/common/gal-left.svg') }});

	}

	.mango-slider-thumb .bx-wrapper .bx-next {

	    background-image: url({{ asset('/public/images/common/thumb-nav-right.svg') }});

	}

	.mango-slider-thumb .bx-wrapper .bx-prev {

	    background-image: url({{ asset('/public/images/common/thumb-nav-left.svg') }});

	}

	.home-mainbanner .bx-wrapper .bx-prev {
	    background-image: url({{ asset('/public/front/images/home/mainbanner-nav-left.svg') }});
	}
		.home-mainbanner .bx-wrapper .bx-next {
	    background-image: url({{ asset('/public/front/images/home/mainbanner-nav-right.svg') }});
	}
	header .navbar-nav > li > a:hover {
	    color: rgba(139, 139, 139, 0.5) !important;
	    background-image: url({{ asset('/public/images/common/mainmenuhover.svg') }});
	    background-repeat: no-repeat;
	    background-size: 5px;
	}
	.more-btn a:hover {
	    background-image: url({{ asset('/public/images/common/more-bg-hover.svg') }});
	    color: white;
	}
	.more-btn a {
    	background-image: url({{ asset('/public/images/common/more-bg-on.svg') }});
	}
	.media-popup .modal-content {
	    background-image: url({{ asset('/public/images/common/brush-large.svg') }});
	    background-size: 70%;
	    background-repeat: no-repeat;
	    background-position: center top;
	}
	.media-container{
		background-image: url({{ asset('/public/images/common/brush-large.svg') }});
	}
	@media(max-width:767px){
		.media-container{
			background: none;
			background-image: url({{ asset('/public/images/common/media-nav-mobile-bg.png') }});
		}

	}*/
</style>

