<?php 
	//$imgObj = get_sub_field('image');
	//$imgH = $imgObj['sizes']['large-height'];
	$imgObj = wp_get_attachment_image_src(get_sub_field('image'), 'full');
	$imgUrl = $imgObj[0];
	$imgW = $imgObj[1];
	$imgH = $imgObj[2];
	//(original height / original width) x new width = new height
	//$newH = 2560 * ( $imgH / $imgW );
	$divId = basename($imgUrl);
	$divId = preg_replace('/\\.[^.\\s]{3,4}$/', '', $divId);

/*
<section class="para" data-image="<?php echo $imgObj['url'] ?>" style="height:<?php echo ($imgH+300); ?>px;">
	<div class="para-inner" style="background-image: url('<?php echo $imgObj['url'] ?>');"></div>
</section> 
*/
?>
<section id="<?php echo $divId; ?>" class="parallax" style="background-image: url('<?php echo $imgUrl; ?>');" title="<?php echo $divId; ?>">
</section>
<script>
	var h = <?php echo $imgH; ?>;
	var w = <?php echo $imgW; ?>;
	//var newH = 2560 * ( h / w );
	newH = window.innerWidth * ( h / w );
	//console.log(newH);
	document.getElementById('<?php echo $divId; ?>').style.height = newH+'px';
</script>