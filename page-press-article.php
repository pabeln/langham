<?php
	/* Template Name: Press Room */ 
	$loop = new WP_Query( array(
		'post_type' => 'press-article',
		'posts_per_page' => -1,
		'orderby' => 'title'
		)
	);
	the_post();
?>
<div class="container">
	<h1><?php the_title(); ?></h1>
	<div class="content"><?php the_content(); ?></div>
	<?php
		// check if the flexible content field has rows of data
		if( $loop->have_posts() ):
			while ( $loop->have_posts() ) : $loop->the_post();
	?>
		<div class="press-wrapper expando-wrapper">
			<div class="press-header expando-trigger">
				<h3 class="press-title"><?php echo the_title(); ?></h3>
				<?php if( get_field('sub_title') ) { ?>
				<p class="press-subtitle"><?php echo the_field('sub_title'); ?></p>
				<?php } ?>
			</div>
			<div class="article expando">
				<div class="body">
					<?php if (the_content()) { the_content(); } ?>
					<?php if (get_field('main_image')) { ?>
						<img src="<?php echo the_field('main_image'); ?>" alt="<?php echo the_title(); ?>">
					<?php  } ?>
				</div>
				<div class="closer">^</div>
			</div>
		</div>
	<?php 			
			endwhile;
		endif;
	?>
</div>
