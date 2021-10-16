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

<main id="primary" class="publications-main container">
	<h1>Publications</h1>
	<!-- Filter for Categories -->
	<div>
		<ul class="uk-subnav uk-subnav-pill">
			<li class="js-filter-item uk-active"><a href="">All</a></li>
			<?php 
				$publication_categories = get_categories(array(
					'taxonomy' => 'publications_category',
					'hide_empty' => 0,
				));
				if ($publication_categories) :
					foreach ($publication_categories as $publication_category) :  ?>
						<li class="js-filter-item" data-category="<?php echo $publication_category->term_id?>"><a href="<?php echo $publication_category->term_id?>"><?php echo $publication_category->name ?></a></li>
				<?php endforeach; endif;?>
		</ul>
	<div class="publications-container">
		<?php 
		// Find this in the functions folder
		generate_publication_posts() ;
		?>
	</div>
	</div>
</main>

<?php
// get_sidebar();
get_footer();

?>