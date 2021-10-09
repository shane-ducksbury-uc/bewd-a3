<?php
/**
 * The template for displaying the forums page
 * 
 * Template Name: Forums
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sockbrew_Theme
 */

get_header();
?>

	<main id="primary" class="forums-main">
		<h1>Publications</h1>

		<div class="forums-container">

			<?php
		$publications_posts_query = array(
			'number-posts' => -1,
			'post_type' => 'forum'
		);
		
		$publications = new WP_Query($publications_posts_query);
		
		while ( $publications->have_posts() ) :
			$publications->the_post(); ?>
			<div class="uk-card uk-card-default">
				<div class="uk-card-header">
					<div class="uk-card-title">
						<a href=<?php the_permalink(); ?>>
							<?php the_title(); ?></a></div>
							<p><?php the_field('forum_date') ?></p>
						</div>
				<div class="uk-card-body">
					<?php the_field('description') ?>
				</div>
				<div class="uk-card-footer">
					<?php 
						// Put some buttons in here if valid?
					
					
						?>
				</div>
				</div>
			<?php endwhile; ?>
		</div>
	</main>

<?php
// get_sidebar();
get_footer();

?>
