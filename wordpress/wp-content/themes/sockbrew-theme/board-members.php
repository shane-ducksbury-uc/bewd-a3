<?php
/**
 * The template for displaying the forums page
 * 
 * Template Name: Board Members
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sockbrew_Theme
 */

get_header();
?>

	<main id="primary" class="forums-main container">
		<h1>IBQC Leadership</h1>

		<div class="forums-container">

		<!-- start leadership grid -->
			<div class="leaderGrid">
				<?php
			$board_member_posts_query = array(
				'posts_per_page' => -1,
				'post_type' => 'board-member',
				'orderby' => 'menu_order'
			);
			
			$board_members_posts = new WP_Query($board_member_posts_query);

			$board_members_posts_reversed = array_reverse($board_members_posts->posts);

			$board_members_posts->posts = $board_members_posts_reversed;
			
			while ( $board_members_posts->have_posts() ) :
				$board_members_posts->the_post(); ?>
				<div class="uk-card uk-card-default">


				<!-- card header start -->
					<div class="uk-card-header">

					<!-- olly's testing start -->

					<div class="uk-grid-small uk-flex-top" uk-grid>
						<div class="uk-width-auto">
							<img class="uk-border-circle" src="<?php the_field('board_member_image'); ?>">
						</div>
						<div class="uk-width-expand">
							<h3 class="uk-card-title uk-margin-remove-bottom"><?php the_title(); ?></h3>
							
						</div>

					</div>

					<!-- olly's testing end -->


						
							</div>
							<!-- card header end -->
							<!-- card body start -->
					<div class="uk-card-body">

						<?php if(get_field('board_member_title')): ?>
							<p class="uk-text-meta uk-margin-remove-top"><?php the_field('board_member_title'); ?></p>
						<?php endif;?>

						<?php if(get_field('secondary_title')): ?>
							<p class="uk-text-meta uk-margin-remove-top"><?php the_field('secondary_title'); ?></p>
						<?php endif;?>
					
						<?php if(get_field('bio')): ?>
							<ul uk-accordion>
								<li>
									<a class="uk-accordion-title" href="#">Bio</a>
									<div class="uk-accordion-content">
									<?php echo "<p>" . the_field('bio') . "</p>"; ?>
									</div>
								</li>
							</ul>
						<?php endif;?>
							

					</div>
					<!-- card body end -->


					<!-- card footer start -->
					<div class="uk-card-footer">

						<ul uk-accordion>
							<li>
								<a class="uk-accordion-title" href="#">Positions</a>
								<div class="uk-accordion-content">
									
								<?php if(get_field('professional_affiliations')): ?>
									<?php 		
										$affiliations = get_field('professional_affiliations'); 
										foreach ($affiliations as $affiliation): ?>
											<div class="professionalAttribution">
												<h5>Type:</h5>
												<p><?php echo $affiliation['role']?></p>
												<h5>Body:</h5>
												<p><?php echo $affiliation['professional_body']?></p>


												<?php if($affiliation['pro_start_year']):?>
													<h5>Year:</h5>
													<div class="yearFrame">
													<span><?php echo $affiliation['pro_start_year']; ?></span>
														<?php if($affiliation['pro_end_year']==null){ ?>
																</div>
														<?php } ?>
												<?php endif;?>
												<?php if($affiliation['pro_end_year']):?>
													<!-- // This field is optional - hence the if -->
													<span> to <?php echo $affiliation['pro_end_year']; ?></span>
													</div>
												<?php endif;?>
											</div>
											
										<?php endforeach; ?>
								<?php endif; ?>

								</div>
							</li>
							<li>
								<a class="uk-accordion-title" href="#">Awards</a>
								<div class="uk-accordion-content">
									
								<?php if(get_field('awards')): ?>
									<?php 		
										$awards = get_field('awards'); 
										foreach ($awards as $award): ?>
											<div class="professionalAttribution">
												<h5>Award:</h5>
												<p><?php echo $award['award_title']?></p>
												<h5>Issuer:</h5>
												<p><?php echo $award['award_issuer']?></p>
												<h5>Year:</h5>
												<p><?php echo $award['award_year']; ?></p>
											</div>		
									<?php endforeach; ?>
								<?php endif; ?>

								</div>
							</li>
						</ul>

						

						
						

					</div>
					<!-- card footer end -->
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</main>

<?php
// get_sidebar();
get_footer();

?>