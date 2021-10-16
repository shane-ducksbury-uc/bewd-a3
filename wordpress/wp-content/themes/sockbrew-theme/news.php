<?php
/**
 * The template for displaying the forums page
 * 
 * Template Name: News
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sockbrew_Theme
 */

get_header();
?>

	<main id="primary" class="forums-main container">
		<h1>IBQC News</h1>

		<div class="forums-container">

			<?php
		$publications_posts_query = array(
			'posts_per_page' => -1,
			'post_type' => 'news-post'
		);
		
		$publications = new WP_Query($publications_posts_query);
		
		while ( $publications->have_posts() ) :
			$publications->the_post(); ?>
			<div class="uk-card uk-card-default">
				<div class="uk-card-header">
					<div class="uk-card-title">
						<?php the_title(); ?></div>
					</div>
					<div class="uk-card-body">
						<?php the_field('news_content') ?>
						<?php if(get_field('clickable_link_button')):
							foreach(get_field('clickable_link_button') as $button_parts): ?>
								<a href="<?php echo $button_parts['url'] ?>" target="_blank"><button class="uk-button uk-button-default"><?php echo $button_parts['button_text']?></button></a>
						<?php endforeach; endif;?>
						<div>
							<?php $image_url = get_field('news_post_title_image'); ?>
							<img src="<?= $image_url ?>" alt="">
						</div>
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
