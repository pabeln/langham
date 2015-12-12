<?php 
	$imgObj = get_sub_field('image');
	$imgH = $imgObj['sizes']['large-height'];
	$heading = get_sub_field('heading');
	$subheading = get_sub_field('sub_heading');
?>

<section class="map" style="background-image: url(<?php echo $imgObj['url'] ?>);">
	<div class="container copy-container">
		<div class="copy">
			 <?php if ($heading) { echo '<div class="heading">' . $heading . '</div>'; } ?>
			 <?php if ($subheading) { echo '<div class="sub-heading">' . $subheading . '</div>'; } ?>
		</div>
	</div>	
</section>