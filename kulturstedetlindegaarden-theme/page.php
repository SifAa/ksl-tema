<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kulturstedet_Lindegaarden
 */

get_header();
?>

	<div class="slider">
		<?php echo do_shortcode('[sp_wpcarousel id="104"]'); ?>
		<div class="slider-text-overlay">
			<div class="slider-text-content">
				<h1>Koncerter og kulturoplevelser</h1>
				<p>Gå på oplevelse i Kulturstedet Lindegaardens smukke omgivelser,
					<br>og lej lokaler til events og fester.</p>
				<span class="btn-primary slider-lokaler"><a href="selskabslokaler">Selskabslokaler</a></span>
				<span class="btn-primary slider-kontakt"><a href="kontakt">Kontakt</a></span>
			</div>
		</div>
	</div>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
