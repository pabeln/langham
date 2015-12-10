<?php the_post(); ?>
<!-- 
<div class="container">
	<section class="article row">
		<article class="userFormatted col-sm-8">
			<h1 class="userFormatted-title"><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</article>
		<?php try_get_sidebar(); ?>
	</section>
</div> -->

<?php
	// check if the flexible content field has rows of data
	if( have_rows('sections') ):
		$ctr = 0;
		// loop through the rows of data
		while ( have_rows('sections') ) : the_row();
			$sectionType = get_row_layout();
			//get_template_part( 'partials/' . $sectionType );
			try_get_template_part('partials', $sectionType, true, array('ctr' => $ctr) );
			//try_get_template_part('partials', 'related-posts', true, array('type' => 'Articles') );
			$ctr++;
		endwhile;

	endif;

?>