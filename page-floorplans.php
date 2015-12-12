<?php
	/* Template Name: floorplans */ 
	$loop = new WP_Query( array(
		'post_type' => 'floorplan',
		'posts_per_page' => -1,
		'orderby' => 'title'
		)
	);
?>
<div class="container">
	<?php
		// check if the flexible content field has rows of data
		if( $loop->have_posts() ):
			while ( $loop->have_posts() ) : $loop->the_post();
	?>
		<div class="plan-wrapper expando-wrapper">
			<div class="plan-header expando-trigger">
				<h2 class="plan-title"><?php echo the_title(); ?></h2>
				<p class="plan-subtitle"><?php echo the_field('sub_title'); ?></p>
			</div>
			<div class="floorplan expando">
				<div class="row">
					<div class="col-md-5 col-md-offset-1">
						<div class="floorplan-diagram">
							<img src="<?php echo the_field('floorplan_image') ?>" alt="<?php echo the_title(); ?>">
						</div>
					</div>
					<div class="col-md-5">
						<div class="floorplan-map">
							<img src="<?php echo the_field('floorplan_map_image') ?>" alt="<?php echo the_field('sub_title'); ?>">
							<table>
								<tr>
									<th class="number">KEY</th>
									<th class="room">SPACE</th>
									<th>DIMENSIONS</th>
								</tr>
								<tr>
								<?php 
									$rooms = get_field('key_fields');
									if (have_rows('key_fields') ) :
										while ( have_rows('key_fields') ) : the_row();
								?>
									<td><?php echo the_sub_field('key') ?></td>
									<td><?php echo the_sub_field('space') ?></td>
									<td class="dims"><?php echo the_sub_field('dimensions') ?></td>
								</tr>
								<?php
										endwhile;
									endif; 
								?>
							</table>
							<div class="north">
								<img src="<?php bloginfo('template_url') ?>/images/floorplan-north-marker.png" alt="North">
							</div>
						</div>
					</div>
				</div>
				<div class="closer">^</div>
			</div>
		</div>
	<?php 			
			endwhile;
		endif;
	?>
</div>
