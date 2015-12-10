<?php 
	$imgObj = get_sub_field('image');
	$imgH = $imgObj['sizes']['large-height'];
?>

<section class="img" data-parallax="scroll" data-image-src="<?php echo $imgObj['url'] ?>" style="height:<?php echo $imgH; ?>px;">	
</section>