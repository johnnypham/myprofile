<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="description" content="Vien Pham profile,Johnny, html, css, html5, css3, johnny pro," />
<meta name="keywords" content="background , boxes, background image, css, tutorial" />
<meta name="author" content="Johnny Pham" />
<link rel="shortcut icon" href="../favicon.ico">
<link href='http://fonts.googleapis.com/css?family=Raleway:200,400,600' rel='stylesheet' type='text/css'>

<title><?php wp_title( ' | ', true, 'right' ); ?></title>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/menu/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/menu/csss/demo.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/menu/css/component.css" />
<script src="<?php bloginfo('template_directory'); ?>/menu/js/modernizr.custom.js"></script>



<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/demo.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/component.css" />
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.js"></script>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/cus-animation.css">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
		<div class="container-menu"><!-- /container-menu -->
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a id="ates" class="gn-icon gn-icon-menu animated    bounceInLeft"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li class="gn-search-item">
									<input placeholder="Search" type="search" class="gn-search">
									<a class="gn-icon gn-icon-search"><span>Search</span></a>
								</li>
								<li>
									<a class="gn-icon gn-icon-download">Downloads Profile</a>
									<ul style="display:none" class="gn-submenu">
										<li><a class="gn-icon gn-icon-illustrator">Vector Illustrations</a></li>
										<li><a class="gn-icon gn-icon-photoshop">Photoshop files</a></li>
									</ul>
								</li>
								<li><a class="gn-icon codrops-icon-drop">Portfolio</a></li>
								<li><a class="gn-icon gn-icon-article">Contact</a></li>
								<li><a class="gn-icon codrops-icon-drop">Servies</a></li>
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
				<!-- <li><a href="http://localhost/mysite/?page_id=5#">Portfolio</a></li>
				<li><a href="http://localhost/mysite/?page_id=7#">Resume</a></li>
				<li><a class="codrops-icon codrops-icon-prev" href="#"><span>Previous Product</span></a></li>
				<li><a class="codrops-icon codrops-icon-drop" href="http://localhost/mysite"><span>Back to go Home</span></a></li> -->	
		</ul>

		</div><!-- /container-menu -->

<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<section id="branding">
<div id="site-title"><?php if ( ! is_singular() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( ! is_singular() ) { echo '</h1>'; } ?></div>
<div id="site-description"><?php bloginfo( 'description' ); ?></div>
</section>
<nav id="menu" role="navigation">
<div id="search">
<?php get_search_form(); ?>
</div>
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav>
</header>
<div id="container">