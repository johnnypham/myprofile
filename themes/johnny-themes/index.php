<?php get_header(); ?>

<div class="container">
	<!-- Top Navigation -->
	<div style="display:none" class="codrops-top clearfix">
		<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/InlineAnchorStyles/"><span>Previous Demo</span></a>
		<span class="right"><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=19242"><span>Back to the Codrops Article</span></a></span>
	</div>
	<div id="boxgallery" class="boxgallery" data-effect="effect-2">
		<div class="panel"><img src="<?php bloginfo('template_directory'); ?>/img/1.jpg" alt="Image 1"/></div>
		<div class="panel"><img src="<?php bloginfo('template_directory'); ?>/img/2.jpg" alt="Image 2"/></div>
		<div class="panel"><img src="<?php bloginfo('template_directory'); ?>/img/3.jpg" alt="Image 3"/></div>
		<div class="panel"><img src="<?php bloginfo('template_directory'); ?>/img/4.jpg" alt="Image 4"/></div>
	</div>
	<header style="with:100%" class="codrops-header">
		
		<div class="animation-step-1 animated  zoomInDown" style="font-size:55px">Do you want find partner <span>???</span></div>
		<div class="animation-step-2 animated rollIn" style="font-size:65px">I'm the perfect choice</div>
		<img class="animation-step-3 animated   " style="border-radius: 100%;text-align: left;float: left;" width='100' height='100' src="<?php bloginfo('template_directory'); ?>/img/johnny-pham.jpg" alt="Image 1"/>
		<img class="animation-step-4 animated   " style="border-radius: 100%;text-align: left;float: right;" width='100' height='100' src="<?php bloginfo('template_directory'); ?>/img/johnny-pham.jpg" alt="Image 1"/>
		<div class="animation-step-5 animated   fadeInUp" style="display:inline-block;width:100%;font-size:45px">I'm here <a href="#">Contact if you choice</a></div>
		
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



<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>