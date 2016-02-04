<?php 

	$heading = get_sub_field('heading');
	$subheading = get_sub_field('sub_heading');
	$copy = get_sub_field('copy');

	$imgObj = wp_get_attachment_image_src(get_sub_field('image'), 'full');
	$imgUrl = $imgObj[0];
	$imgW = $imgObj[1];
	$imgH = $imgObj[2];
	$divId = basename($imgUrl);
	$divId = preg_replace('/\\.[^.\\s]{3,4}$/', '', $divId);

/*
<section class="para" data-parallax="scroll" data-image-src="<?php echo $imgObj['url'] ?>" style="height:<?php echo $imgH; ?>px;">
	<div class="gray-overlay">
		<div class="container copy-container hideme">
			<div class="copy">
				 <?php if ($heading) { echo '<div class="heading">' . $heading . '</div>'; } ?>
				 <?php if ($subheading) { echo '<div class="sub-heading">' . $subheading . '</div>'; } ?>
				 <?php if ($copy) { echo '<div class="txt">' . $copy . '</div>'; } ?>
			</div>
		</div>
	</div>
</section>
*/
?>
<section id="<?php echo $divId; ?>" class="parallax" style="background-image: url('<?php echo $imgUrl; ?>');" title="<?php echo $divId; ?>">
	<div class="gray-overlay">
		<div class="container copy-container hideme">
			<div class="copy">
				 <?php if ($heading) { echo '<div class="heading">' . $heading . '</div>'; } ?>
				 <?php if ($subheading) { echo '<div class="sub-heading">' . $subheading . '</div>'; } ?>
				 <?php if ($copy) { echo '<div class="txt">' . $copy . '</div>'; } ?>
			</div>
		</div>
	</div>
</section>
<script>
	var h = <?php echo $imgH; ?>;
	var w = <?php echo $imgW; ?>;
	newH = window.innerWidth * ( h / w );
	document.getElementById('<?php echo $divId; ?>').style.height = newH+'px';
</script>