<?php
/**
 * The template file for the home page
 *
 * 
 *  Template Name: Home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sockbrew_Theme
 */

get_header();
?>
	<section class="banner">

	</section>

	<main id="primary" class="home site-main">

		<?php
		if ( have_posts() ) :


			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;

		$publications_posts_query = array(
					'posts_per_page' => 1,
					'post_type' => 'news-post'
				);
		

				$news_posts = new WP_Query($publications_posts_query);

				while ( $news_posts->have_posts()):
					$news_posts->the_post();?>

					<div class="homecolumns">
						<div class="news-text">
							<h2>Latest News</h2>
							<?php the_title("<h3>", "</h3>"); ?>
							<?php the_field('news_content'); ?>
							<?php if(get_field('clickable_link_button')):
							foreach(get_field('clickable_link_button') as $button_parts): ?>
								<a href="<?php echo $button_parts['url'] ?>" target="_blank"><button class="uk-button uk-button-default"><?php echo $button_parts['button_text']?></button></a>
						<?php endforeach; endif;?>
						</div>
						<div class="news-image">
							<?php $image_url = get_field('news_post_title_image'); ?>
							<img src="<?= $image_url ?>" alt="">
						</div>
					</div>
				<?php endwhile;?>
		</main>

<?php
get_footer();
