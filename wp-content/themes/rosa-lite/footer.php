<?php
/**
 * The template for displaying the footer widget areas.
 * @package Rosa Lite
 * @since   Rosa Lite 1.0.0
 **/

if ( ! defined( 'ABSPATH' ) ){
	exit; // Exit if accessed directly
}

if ( ! is_404() ) {
    $footer_sidebar_style = 'sidebar--footer__' . pixelgrade_option( 'footer_sidebar_style', 'dark' );
	$footer_bottom_bar_style = 'copyright-area__' . pixelgrade_option( 'footer_bottombar_style', 'dark' ); ?>

	<footer class="site-footer">
		
	</footer><!-- .site--footer -->

<?php } ?>

<div class="covers"></div>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
