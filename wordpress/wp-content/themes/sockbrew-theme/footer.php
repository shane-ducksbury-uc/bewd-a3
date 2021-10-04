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
		<h3>General Enquiries</h3>

		<?php
		// check to see if the logo exists and add it to the page
		if ( get_theme_mod( 'a_custom_theme_for_sockbrew_design_footer_phone' ) ) : ?>
		
		<p>
			Phone: <?php echo get_theme_mod( 'a_custom_theme_for_sockbrew_design_footer_phone' ); ?> (9am to 5pm)
		</p>
		<?php // add a fallback if the logo doesn't exist
		else : ?>
		
		<p>+61 2 6201 5111</p>
		<?php endif; ?>

		<?php
		// check to see if the logo exists and add it to the page
		if ( get_theme_mod( 'a_custom_theme_for_sockbrew_design_footer_email' ) ) : ?>
		
		<p>
			Email: <?php echo get_theme_mod( 'a_custom_theme_for_sockbrew_design_footer_email' ); ?>
		</p>
		<?php // add a fallback if the logo doesn't exist
		else : ?>
		
		<p>contact@example.com</p>
		<?php endif; ?>
			<ul>
				<li><a href="#">IBQC Leadership</a></li>
				<li><a href="#">Publications</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		
		
		


		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'a-custom-theme-for-sockbrew-design' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'a-custom-theme-for-sockbrew-design' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'a-custom-theme-for-sockbrew-design' ), 'a-custom-theme-for-sockbrew-design', '<a href="https://github.com/shane-ducksbury-uc/bewd-a3">Kate, Olly and Shane</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



</body>
</html>
