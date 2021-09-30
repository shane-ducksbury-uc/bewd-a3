<?php
/**
 * The template for displaying publications
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sockbrew_Theme
 */

get_header();
?>

	<main id="primary" class="site-main publication-main">
		

		<?php
		while ( have_posts() ) :
			the_post(); ?>
			
			<div class="publication-info-container">
				<!-- Could be refactored into a loop -->
				<h1><?php the_title() ?></h1>
				<h3><?php the_field('authors') ?></h3>
				<p><?php the_field('published_year') ?></p>
				<p><?php the_field('citation') ?></p>
				<p><?php the_field('abstract') ?></p>
			</div>

			<div class="publication-action-container">
				<img src="https://via.placeholder.com/300x400">
				<a class="uk-button uk-button-primary" href=<?php the_field('link_to_publication')?>>View Publication</a>
				<a class="uk-button uk-button-secondary" href="#">Share on LinkedIn</a>
			</div>





			<?php
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'a-custom-theme-for-sockbrew-design' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'a-custom-theme-for-sockbrew-design' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
