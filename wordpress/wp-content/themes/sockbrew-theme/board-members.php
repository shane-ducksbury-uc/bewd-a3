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

	<main id="primary" class="forums-main">
		<h1>IBQC Leadership</h1>

		<div class="forums-container">

			<?php
		$board_member_posts_query = array(
			'number-posts' => -1,
			'post_type' => 'board-member'
		);
		
		$board_members_posts = new WP_Query($board_member_posts_query);
		
		while ( $board_members_posts->have_posts() ) :
			$board_members_posts->the_post(); ?>
			<div class="uk-card uk-card-default">
				<div class="uk-card-header">
					<div class="uk-card-title">
							<?php the_title(); ?></div>
							<?php if(get_field('secondary_title')):
								echo "<p>" . the_field('secondary_title') . "</p>";
							endif;?>
						</div>
				<div class="uk-card-body">
					<img src="<?php the_field('board_member_image'); ?>" />
					<?php echo "<div>" . the_field('bio') . "</div>";
					
					if(get_field('professional_affiliations')): ?>
						<table class="uk-table uk-table-striped">
						<thead>
							<th>Role</th>
							<th>Professional Body</th>
							<th>Year</th>
						</thead>
						<tbody>
							<?php 		
							$affiliations = get_field('professional_affiliations'); 
							foreach ($affiliations as $affiliation): ?>
								<tr>
									<td><?php echo $affiliation['role']?></td>
									<td><?php echo $affiliation['professional_body']?></td>
									<td><?php echo $affiliation['pro_start_year'];
									if($affiliation['pro_end_year']):
										echo " - " . $affiliation['pro_end_year']; // This field is optional - hence the if	
									endif;
									?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
						</table>
					<?php endif; ?>
					
					<?php if(get_field('awards')): ?>
						<table class="uk-table uk-table-striped">
						<thead>
							<th>Award</th>
							<th>Issued By</th>
							<th>Year</th>
						</thead>
						<tbody>
							<?php 		
							$awards = get_field('awards'); 
							foreach ($awards as $award): ?>
								<tr>
									<td><?php echo $award['award_title']?></td>
									<td><?php echo $award['award_issuer']?></td>
									<td><?php echo $award['award_year']; ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
						</table>
					<?php endif; ?>
					

				</div>
				<div class="uk-card-footer">
				</div>
				</div>
			<?php endwhile; ?>
		</div>
	</main>

<?php
// get_sidebar();
get_footer();

?>