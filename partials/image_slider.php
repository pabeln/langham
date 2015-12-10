<?php 
	//$slides = get_sub_field('slides');
	//var_dump($slides)
?>

<section class="slider">
<?php
	if( have_rows('slides') ) {
		while ( have_rows('slides') ) : the_row();
			$slideImg = get_sub_field('slide_image');
			//var_dump($slideImg);
?>	
	<div class="slide"><img src="<?php echo $slideImg['url']; ?>" alt="" /></div>
	<?php echo the_sub_field('slide_heading'); ?>
	<?php echo the_sub_field('slide_copy') ?>
<?php 
		endwhile;
	}
?>	
</section>