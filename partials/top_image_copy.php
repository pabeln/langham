<?php 
	$imgObj = get_sub_field('image');
	$imgH = $imgObj['sizes']['large-height'];
	$heading = get_sub_field('heading');
	$subheading = get_sub_field('sub_heading');
?>

<section class="top" data-parallax="scroll" data-image-src="<?php echo $imgObj['url'] ?>" id="top-block" style="height:<?php echo $imgH; ?>px;">
	<div class="gray-trans">
		<div class="container copy-container">
			<div class="copy fadeIn">
				 <?php if ($heading) { echo '<div class="heading">' . $heading . '</div>'; } ?>
				 <?php if ($subheading) { echo '<div class="sub-heading">' . $subheading . '</div>'; } ?>
			</div>
		</div>
	</div>
</section>