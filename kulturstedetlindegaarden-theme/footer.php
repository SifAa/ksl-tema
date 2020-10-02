<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kulturstedet_Lindegaarden
 */

?>
</div>
	<footer id="colophon" class="site-footer">
		<?php if ( is_active_sidebar( 'sidebar-2' )  ) : ?>
			<div class="footer-widgets" role="complementary">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div>
		<?php endif; ?>

		<div class="site-info">
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<div class="bund-menu">
		<?php if ( is_active_sidebar( 'sidebar-3' )  ) : ?>
			<div class="side-menu" role="complementary">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</div>
		<?php endif; ?>
	</div>

<?php wp_footer(); ?>

</body>
</html>
