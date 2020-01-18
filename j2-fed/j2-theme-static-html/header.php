<!DOCTYPE html>
<html dir="ltr" lang="en-US"><!-- modified on page 76 -->

	<head>
		<title>J2 Design | Just another WordPress site</title><!-- modified on page 77 -->
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><!-- modified on page 80 -->
	    <meta name="viewport" content="width=device-width" />
	    
						
						
						
						
	    <!-- custom web fonts -->
	    	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
	    	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,600' rel='stylesheet' type='text/css'>
	    <!-- custom web fonts -->
	    
						
						
						
						
	    <!-- Dear Reader,
	    Just a quick note to make something clear. The css here is not going to be perfect or browser compatible. In the future this theme will be available in the the Theme Directory for all to download and at that point the css will be altered to provide the best possible user experience for everyone. However the css included in with these files is optimized for the latest Firefox and Chrome browsers only. REMEMBER the goal of these files is to help you learn how to convert and build WordPress Templates not necessarily write great HTML or CSS. In other words, ignore any css bugs cause they aren't important, happy coding :) -->
	    <link rel="stylesheet" type="text/css" media="all" href="style.css" /><!-- modified on page 81 -->
	    <link rel="apple-touch-icon" href="images/apple-icon-file.png"><!-- This needs to be linked to the same way you'll link to js and other theme files found on page 82 -->
		<link rel="icon" type="image/x-icon" href="images/favicon.ico" /><!-- These need to be linked to the same way you'll link to js and other theme files found on page 82 -->

						
						
						
						
		<script type='text/javascript' src='scripts/jquery.js'></script><!-- jQuery should be enqueued via wp_enqueue_script() http://wdgwp.com/enqueue or page 242 we didn't cover this in detail in the book. When you enqueue your script it should go above the wp_head() function (because it uses that to embed the script) then both the enqueue function and wp_head() should be above any other calls that require jQuery otherwise they won't exist before you embed them. -->
		
		
		<!-- wp_head() goes here if you're enqueueing page 82-->
	   
						
						
						
						
	   	<!-- HTML 5 Shiv for IE -->
	    	<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	    <!-- HTML 5 Shiv -->
	    
	    <!-- JavaScripts -->
	        <script src="scripts/selectnav.js"></script>
	        <script src="scripts/functions.js" type="text/javascript"></script>
	        	<!-- Nivo Slider -->
			        <script src="scripts/jquery.nivo.slider.js" type="text/javascript"></script><!-- modified on page 82 -->
					<link rel="stylesheet" type="text/css" href="css/nivo/nivo-slider.css" ><!-- modified on page 81 -->
					<link rel="stylesheet" type="text/css" href="css/nivo/nivo.css" ><!-- modified on page 81 -->
				<!-- Nivo Slider -->
	    <!-- JavaScripts -->
						
						
						
						
	</head>
	
	<body><!-- insert body class page 83 some things will look broken until this is put in -->
						
						
						
						
		<div class="width100">
			<header id="header" class="width100 clearfix">
				<div class="navbar width100pad clearfix">
					<div class="widthfull mar0auto">
						
						
						
						
						<!-- START wp_nav_menu() function found on page 95 -->
						<nav id="header-main-nav" class="alignleft widecol">
							<ul id="main-nav-header-top" >
								<li><a href="">Home</a></li>
								<li><a href="">About</a></li>
								<li><a href="">News</a></li>
								<li><a href="">Contact</a></li>
							</ul>
						</nav>
						<!-- END wp_nav_menu() function found on page 95 -->
						
						
						
						
						<div class="narcolrt alignright">
							<nav class="alignright social">
								<ul>
									<li class="alignleft nobull"><a href="http://twitter.com/professor" target="_blank"><img src="images/social/twitter-lg.png" alt="Twitter Icon" title="J2 Design on Twitter"></a></li>
									<li class="alignleft nobull"><a href="https://www.facebook.com/wordpressandweb" target="_blank"><img src="images/social/facebook-lg.png" alt="Facebook Icon" title="J2 Design on Facebook"></a></li>					
									<li class="alignleft nobull"><a href="feed/" target="_blank"><img src="images/social/rss-lg.png" alt="J2 Design RSS Icon" title="Subscribe to J2 Design"></a></li>
								</ul>
							</nav><!-- .social -->





							<form class="alignright">
								<input id="s" name="s" type="text" value="search" class="osc italic txttranup">
								<input id="submit" name="submit" type="submit" value="" class="alignleft">
							</form><!-- form (search box) -->





						</div><!-- .narcolrt -->
					</div><!-- .widthfull -->
				</div><!-- .navbar -->
				<div class="width100pad clear widthfull mar0auto">
					<div class="halfcol alignleft">
						<h1 class="displaynone">Your Business Name</h1>
						<a href="/" title=""><img src="imgs/logo.png" alt="" class="logo" /></a>
					</div><!-- .halfcol -->




					<!-- START dyanamic_sidebar() page 127 -->
					<div class="widget halfcolrt alignright">
						<div class="textwidget">
							<a href="http://wdgwp.com/bluehost" target="_top"><img border="0" src="http://img.bluehost.com/120x120/bh_120x120_03.gif" class="alignright"></a>
						</div><!-- .textwidget -->
					</div><!-- widget -->
					<!-- END dyanamic_sidebar() page 127 -->




				</div><!-- width100pad -->
			</header><!-- header -->
						
						
						
						
			<!-- START wp_nav_menu() function found on page 96 -->
			<nav class="clearfix subnav">
				<div class="width100pad widthfull mar0auto">
					<ul id="sub-nav-header-bottom" class="">
						<li><a href="">Design</a></li>
						<li><a href="">Typography</a></li>
						<li><a href="">Development</a></li>
						<li><a href="">WordPress</a></li>
						<li><a href="">Tutorials</a></li>
						<li><a href="">Freebies</a></li>
						<li><a href="">Marketing</a></li>
						<li><a href="">Business</a></li>
					</ul>
				</div>
			</nav>
			<!-- END wp_nav_menu() function found on page 96 -->
						
						
						
						
			<div id="container" class="width100pad clearfix">
				<div class="widthfull mar0auto">
