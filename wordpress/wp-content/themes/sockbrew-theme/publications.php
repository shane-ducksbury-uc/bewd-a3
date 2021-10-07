<?php

/**
 * The template for displaying the publications page
 * 
 * Template Name: Publications
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sockbrew_Theme
 */

get_header();
?>

<main id="primary" class="publications-main">
	<h1>Publications</h1>


	<!-- Filter for Categories -->
	<div uk-filter="target: publications-list">
		<ul class="uk-subnav uk-subnav-pill">
			<?php 
				$publication_categories = get_categories(array(
					'taxonomy' => 'publications_category',
					'hide_empty' => 0,
				));
				if ($publication_categories) :
					foreach ($publication_categories as $publication_category) :  ?>
						<li uk-filter-control=".<?php echo $publication_category->slug ?>"><a href="#"><?php echo $publication_category->name ?></a></li>
				<?php endforeach; endif;?>
		</ul>
	<div class="publications-container">
		<ul class="publications-list">
		<?php
		$publications_posts_query = array(
			'number-posts' => -1,
			'post_type' => 'publication'
		);

		$publications = new WP_Query($publications_posts_query);

		while ($publications->have_posts()) :
			$publications->the_post(); ?>
			<li class="<?php 
				$post_categories = get_field('category');
				if ($post_categories) :
					foreach ($post_categories as $post_category) : 
						 echo $post_category->slug ; 
						endforeach; endif; ?>">
			<div class="uk-card uk-card-default">
				<div class="uk-card-header">
					<div class="uk-card-title">
						<a href=<?php the_permalink(); ?>>
							<?php the_title(); ?></a>
					</div>
				</div>
				<div class="uk-card-body">
					<?php the_field('authors') ?>
				</div>
				<div class="uk-card-footer">
					<?php
					$post_categories = get_field('category');
					if ($post_categories) :
						foreach ($post_categories as $post_category) : ?>
							<span class="uk-label"><?php echo $post_category->name ?></span>
					<?php endforeach;
					endif; ?>
				</div>
			</div>
				</li>
		<?php endwhile; ?>
		</ul>
	</div>
	</div>
</main>

<?php
// get_sidebar();
get_footer();

?>