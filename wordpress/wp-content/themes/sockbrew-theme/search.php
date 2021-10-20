<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Sockbrew_Theme
 */

get_header();
?>

	<main id="primary" class="site-main container">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'a-custom-theme-for-sockbrew-design' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				
				if (get_post_type() == "board-member"): { 
					$bio = get_field('bio'); // Overwrite the permalink below because I don't want to go the single		?>
					<a class="search-result" href="/ibqc-leadership#<?php echo the_id();?>/"><h2><?php the_title(); ?></h2></a>
					<p>Board Member</p>
					<?php echo substr($bio, 0, 250);?>...</p>
				<?php } elseif (get_post_type() == "publication"): { ?>
					<a href="<?php the_permalink()?>"><h2><?php the_title(); ?></h2></a>
					<p>Publication</p>
					<p><?php echo substr(get_field('abstract'), 0, 250) ?>...</p>
				<?php } elseif (get_post_type() == "forum"): { ?>
					<a href="<?php the_permalink()?>"><h2><?php the_title(); ?></h2></a>
					<p>Forum</p>
					<p><?php echo substr(get_field('description'), 0, 250) ?>...</p>
				<?php } else: { ?>
					<a href="<?php the_permalink()?>"><h2><?php the_title(); ?></h2></a>
					<?php the_excerpt()?>
				<?php }
			endif; ?>
				<hr>
			<?php endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
