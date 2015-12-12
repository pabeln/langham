<?php 
	$imgObj = wp_get_attachment_image_src(get_sub_field('image'), 'full');
	$imgUrl = $imgObj[0];
	$imgH = $imgObj[2];
	$heading = get_sub_field('heading');
	$subheading = get_sub_field('sub_heading');
?>
<section class="top" data-parallax="scroll" data-image-src="<?php echo $imgUrl; ?>" id="top-block" style="height:<?php echo $imgH; ?>px;">
	<div class="gray-trans">
		<div class="container copy-container">
			<div class="copy fadeIn">
				 <?php if ($heading) { echo '<div class="heading">' . $heading . '</div>'; } ?>
				 <?php if ($subheading) { echo '<div class="sub-heading">' . $subheading . '</div>'; } ?>
			</div>
		</div>
	</div>
</section>