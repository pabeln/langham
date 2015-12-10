<?php
	/* Template Name: Press Articles */ 
	$loop = new WP_Query( array(
		'post_type' => 'press-article',
		'posts_per_page' => -1,
		'orderby' => 'title'
		)
	);
?>
<div class="container">
	<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>
	<?php
		// check if the flexible content field has rows of data
		if( $loop->have_posts() ):
			while ( $loop->have_posts() ) : $loop->the_post();
	?>
		<div class="press-wrapper">
			<div class="press-header">
				<h2 class="press-title"><?php echo the_title(); ?></h2>
				<p class="press-subtitle"><?php echo the_field('sub_title'); ?></p>
			</div>
			<div class="article">
				
				<div class="closer">^</div>
			</div>
		</div>
	<?php 			
			endwhile;
		endif;
	?>
</div>
