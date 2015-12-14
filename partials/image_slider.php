<?php 
	//$slides = get_sub_field('slides');
	//var_dump($slides)
?>

<section class="slider" style="min-height:800px;">
	<div class="js-owlCarousel owlCarousel owlCarousel--hero col-xs-12">
	<?php
		if( have_rows('slides') ) {
			while ( have_rows('slides') ) : the_row();
				$slideImg = get_sub_field('slide_image');
				//var_dump($slideImg);
	?>	
		<div>
			<figure>
				<img src="<?php echo $slideImg['url']; ?>" alt="<?php echo the_sub_field('slide_heading'); ?>" class="owlCarousel-image" />
				<figcaption class="owlCarousel-caption">
					<?php echo the_sub_field('slide_heading'); ?>
					<?php echo the_sub_field('slide_copy') ?>
				</figcaption>
			</figure>
		</div>
	<?php 
			endwhile;
		}
	?>
	</div>
</section>