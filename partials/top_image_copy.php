<?php 
	$imgObj = wp_get_attachment_image_src(get_sub_field('image'), 'full');
	$imgUrl = $imgObj[0];
	$imgW = $imgObj[1];
	$imgH = $imgObj[2];
	$heading = get_sub_field('heading');
	$subheading = get_sub_field('sub_heading');

	$divId = basename($imgUrl);
	$divId = preg_replace('/\\.[^.\\s]{3,4}$/', '', $divId);

/*
<section class="top" data-image="<?php echo $imgUrl; ?>" style="height:<?php echo ($imgH+300); ?>px;">
	<div class="top-inner" style="background-image: url('<?php echo $imgUrl; ?>');">
		<div class="gray-trans">
			<div class="container copy-container">
				<div class="copy fadeIn">
					 <?php if ($heading) { echo '<div class="heading">' . $heading . '</div>'; } ?>
					 <?php if ($subheading) { echo '<div class="sub-heading">' . $subheading . '</div>'; } ?>
				</div>
			</div>
		</div>
	</div>
</section>
*/
?>

<section id="<?php echo $divId; ?>" class="top parallax"  data-image="<?php echo $imgUrl; ?>">
	<div class="top-inner">
		<div class="gray-trans">
			<div class="container copy-container">
				<div class="copy fadeIn">
					 <?php if ($heading) { echo '<div class="heading">' . $heading . '</div>'; } ?>
					 <?php if ($subheading) { echo '<div class="sub-heading">' . $subheading . '</div>'; } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	var h = <?php echo $imgH; ?>;
	var w = <?php echo $imgW; ?>;
	//var newH = 2560 * ( h / w );
	newH = window.innerWidth * ( h / w );
	//console.log(newH);
	document.getElementById('<?php echo $divId; ?>').style.height = newH+'px';
</script>