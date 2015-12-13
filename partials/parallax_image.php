<?php 
	$imgObj = get_sub_field('image');
	$imgH = $imgObj['sizes']['large-height'];
?>

<section class="para" data-image="<?php echo $imgObj['url'] ?>" style="background-image: url('<?php echo $imgObj['url'] ?>');height:<?php echo ($imgH+300); ?>px;">
</section>