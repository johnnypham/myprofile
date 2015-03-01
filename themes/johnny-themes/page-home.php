<?php
/**
 * Template Name: Home Page
 *
 * Description: Johnny Dev
 * 
 *
 * Tip: Everthing Dev.
 *
 * @package WordPress
 * @subpackage Johnny_Themes
 * @since Johnny Themes 1.0
 */?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Home | Johnny Pham</title>
		<meta name="description" content="Vien Pham profile,Johnny, html, css, html5, css3, johnny pro," />
		<meta name="keywords" content="background , boxes, background image, css, tutorial" />		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Raleway:200,400,600' rel='stylesheet' type='text/css'>


		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/menu/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/menu/csss/demo.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/menu/css/component.css" />
		<script src="<?php bloginfo('template_directory'); ?>/menu/js/modernizr.custom.js"></script>


		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/component.css" />
		<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.js"></script>
	

	</head>
	<body>
		<div class="container">
			<!-- Top Navigation -->
			<div style="display:none" class="codrops-top clearfix">
				<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/InlineAnchorStyles/"><span>Previous Demo</span></a>
				<span class="right"><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=19242"><span>Back to the Codrops Article</span></a></span>
			</div>
			<div id="boxgallery" class="boxgallery" data-effect="effect-1">
				<div class="panel"><img src="<?php bloginfo('template_directory'); ?>/img/1.jpg" alt="Image 1"/></div>
				<div class="panel"><img src="<?php bloginfo('template_directory'); ?>/img/2.jpg" alt="Image 2"/></div>
				<div class="panel"><img src="<?php bloginfo('template_directory'); ?>/img/3.jpg" alt="Image 3"/></div>
				<div class="panel"><img src="<?php bloginfo('template_directory'); ?>/img/4.jpg" alt="Image 4"/></div>
			</div>
			<header class="codrops-header">

				
				<h1>Welcome<span> to portfolio of Johnny Pham .<a href="#">Contact Me </a></span></h1>
				<nav style="display:none" class="codrops-demos">
					<a class="current-demo" href="#">Serge Thoroval</a>
					<a href="index2.html">Lateral</a>
					<a href="index3.html">Fall</a>
				</nav>
				<div style="display:none">
				<?php echo do_shortcode('[contact-form-7 id="9" title="Contact form 1"]'); ?>
				</div>	
			</header>
		</div><!-- /container -->


		<div class="container-menu">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li><a class="gn-icon gn-icon-help">Help</a></li>
								<li class="gn-search-item">
									<input placeholder="Search" type="search" class="gn-search">
									<a class="gn-icon gn-icon-search"><span>Search</span></a>
								</li>
								<li>
									<a class="gn-icon gn-icon-download">Downloads</a>
									<ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-illustrator">Vector Illustrations</a></li>
										<li><a class="gn-icon gn-icon-photoshop">Photoshop files</a></li>
									</ul>
								</li>
								<li><a class="gn-icon gn-icon-cog">Settings</a></li>
								<li><a class="gn-icon gn-icon-help">Help</a></li>
								<li>
									<a class="gn-icon gn-icon-archive">Archives</a>
									<ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-article">Articles</a></li>
										<li><a class="gn-icon gn-icon-pictures">Images</a></li>
										<li><a class="gn-icon gn-icon-videos">Videos</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li><a href="http://localhost/mysite/?page_id=5#">Portfolio</a></li>
				<li><a href="http://localhost/mysite/?page_id=7#">Resume</a></li>
				<li><a class="codrops-icon codrops-icon-prev" href="#"><span>Previous Product</span></a></li>
				<li><a class="codrops-icon codrops-icon-drop" href="http://localhost/mysite"><span>Back to go Home</span></a></li>
			</ul>

		</div><!-- /container -->
		<script src="<?php bloginfo('template_directory'); ?>/menu/js/classie.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/menu/js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
		<script src="<?php bloginfo('template_directory'); ?>/js/classie.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/boxesFx.js"></script>
		<script>
			new BoxesFx( document.getElementById( 'boxgallery' ) );
		</script>
		
	</body> 
</html>