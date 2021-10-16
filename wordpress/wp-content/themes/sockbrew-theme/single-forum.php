<?php
/**
 * The template for displaying forum posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sockbrew_Theme
 */

get_header();
?>

	<main id="primary" class="site-main forum-main container">

		<?php
		while ( have_posts() ) :
			the_post(); ?>

			<div class="forum-container">
				<h1><?php the_title() ?></h1>
				<h4><?php the_field('forum_date') ?></h4>
				<p><?php the_field('description') ?></p>
				<p><?php the_field('youtube_link') ?></p>
				<h3>Topics and Speakers</h3>
				<table class="uk-table uk-table-striped">
					<thead>
						<th>Speaker</th>
						<th>Credentials</th>
						<th>Topic</th>
					</thead>
					<tbody>
						<?php 		
						$speakers = get_field('topics_and_speakers'); 
						foreach ($speakers as $speaker): ?>
							<tr>
								<td><?php echo $speaker["speaker_name"]?></td>
								<td><?php echo $speaker["speaker_credentials"]?></td>
								<td><?php echo $speaker["speaker_topic"]?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<?php endwhile; ?>
	</main>

<?php
get_footer();
