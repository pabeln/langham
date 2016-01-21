<?php 
	$bgColor = get_sub_field('background_color');
	$heading = get_sub_field('heading');
	$subheading = get_sub_field('sub_heading');
	$copy = get_sub_field('copy');
?>
<section class="<?php echo $bgColor; ?>">
	<div class="container copy-container hideme">
		<div class="copy">
			<?php if ($heading) { echo '<div class="heading">' . $heading . '</div>'; } ?>
			<?php if ($subheading) { echo '<div class="sub-heading">' . $subheading . '</div>'; } ?>
			<?php if ($copy) { echo '<div class="txt">' . $copy . '</div>'; } ?>
		</div>
	</div>
</section>
