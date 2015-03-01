<div class="clear"></div>
</div>
<footer id="footer" role="contentinfo">
<div id="copyright">
<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); echo sprintf( __( ' Theme By: %1$s.', 'blankslate' ), '<a href="http://tidythemes.com/">TidyThemes</a>' ); ?>
</div>
</footer>
</div>
<?php wp_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/menu/js/classie.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/menu/js/gnmenu.js"></script>
<script>new gnMenu( document.getElementById( 'gn-menu' ) );</script>
<script src="<?php bloginfo('template_directory'); ?>/js/classie.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/boxesFx.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/scriptcus.js"></script>
<script>
		new BoxesFx( document.getElementById( 'boxgallery' ) );
</script>
</body>
</html>