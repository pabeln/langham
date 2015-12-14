<?php 
	$imgObj = get_sub_field('image');
	$imgH = $imgObj['sizes']['large-height'];
?>

<section class="para" data-image="<?php echo $imgObj['url'] ?>" style="height:<?php echo ($imgH+300); ?>px;">
	<div class="para-inner" style="background-image: url('<?php echo $imgObj['url'] ?>');"></div>
</section>