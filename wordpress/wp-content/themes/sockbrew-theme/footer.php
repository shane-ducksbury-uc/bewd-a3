<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sockbrew_Theme
 */

?>

	<footer id="colophon" class="site-footer">
	<div class="uk-grid uk-width-1-1">
		
		<div class="uk-width-1-3">
			<h3>Location</h3>

			<?php
			// check to see if the logo exists and add it to the page
			if ( get_theme_mod( 'a_custom_theme_for_sockbrew_design_footer_address' ) ) : ?>

			<p>
				<?php echo get_theme_mod( 'a_custom_theme_for_sockbrew_design_footer_address' ); ?>
			</p>
			<?php // add a fallback if the logo doesn't exist
			else : ?>

			<p>Building 1, 11 Kirinari St Bruce ACT 2617</p>
			<?php endif; ?>
		</div>
		<div class="uk-width-1-3">
			<h3>General Enquiries</h3>

				<?php
				// check to see if the logo exists and add it to the page
				if ( get_theme_mod( 'a_custom_theme_for_sockbrew_design_footer_phone' ) ) : ?>

				<p>
					Phone: <?php echo get_theme_mod( 'a_custom_theme_for_sockbrew_design_footer_phone' ); ?> (9am to 5pm)
				</p>
				<?php // add a fallback if the logo doesn't exist
				else : ?>

				<p>Phone: +61 2 6201 5111</p>
				<?php endif; ?>

				<?php
				// check to see if the logo exists and add it to the page
				if ( get_theme_mod( 'a_custom_theme_for_sockbrew_design_footer_email' ) ) : ?>

				<p>
					Email: <?php echo get_theme_mod( 'a_custom_theme_for_sockbrew_design_footer_email' ); ?>
				</p>
				<?php // add a fallback if the logo doesn't exist
				else : ?>

				<p>Email: ibqc@canberra.edu.au </p>
				<?php endif; ?>
		</div>
		<div class="uk-width-1-3">
		<ul class="uk-list">
				<li><a href="/leadership/">Leadership</a></li>
				<li><a href="/publications/">Publications</a></li>
				<li><a href="/contact">Contact</a></li>
				<li><a href="/ibqc-news">News</a></li>
			</ul>
		</div>
	</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



</body>
</html>
