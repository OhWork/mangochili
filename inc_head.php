<?php
	include('class/Mobile_Detect.php');
	$detect = new Mobile_Detect;
	$device = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'mobile') : 'desktop');
	//$ipadDetect = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'mobile') : 'desktop');
	//echo($ipadDetect);
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php if($device == 'tablet'){?>
	<meta name="viewport" content="width=1280">
<?php }else{ ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php } ?>


<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=yes"> -->


<!-- <meta name="viewport" content="width=device-width,maximum-scale=1"> -->
<!-- open if have favicon
<?php include('favicon.php'); ?>
-->
<!--<link type="text/css" rel="stylesheet" href="css/reset.css" media="screen,projection"/>-->
<!--<link type="text/css" rel="stylesheet" href="css/print.css" media="print"/>-->
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/layout.css" media="screen,projection"/>
<link type="text/css" rel="stylesheet" href="css/zh.css" media="screen,projection"/>
<?php if($device == 'tablet'){?>
<style>
	.article-concept-child{
		min-height: 0;
	}
	.article-concept-child .visible-xs{
		display: block !important;
		margin-left: -15px;
		margin-right: -15px;

	}
	.article-concept-row .bg{
		display: none;
	}
</style>
<?php }?>

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

<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>