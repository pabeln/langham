<?php 
	//$slides = get_sub_field('slides');
	//var_dump($slides)
?>

<section class="slider">
	<div class="js-owlCarousel owlCarousel">
	<?php
		if( have_rows('slides') ) {
			while ( have_rows('slides') ) : the_row();
				$slideImg = get_sub_field('slide_image');
				//var_dump($slideImg);
	?>	
		<figure>
			<img src="<?php echo $slideImg['url']; ?>" alt="<?php echo the_sub_field('slide_heading'); ?>" class="owlCarousel-image" />
			<div class="trans-overlay"></div>
			<figcaption class="owlCarousel-caption">
				<div class="caption">
					<div class="heading"><?php echo the_sub_field('slide_heading'); ?></div>
					<div class="sub-heading"><?php echo the_sub_field('slide_subheading') ?></div>
					<div class="txt"><?php echo the_sub_field('slide_copy') ?></div>
				</div>
			</figcaption>
		</figure>
	<?php 
			endwhile;
		}
	?>
	</div>
</section>