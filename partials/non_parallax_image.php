<?php 

	$imgObj = wp_get_attachment_image_src(get_sub_field('image'), 'full');
	$imgUrl = $imgObj[0];
	$imgW = $imgObj[1];
	$imgH = $imgObj[2];
	$divId = basename($imgUrl);
	$divId = preg_replace('/\\.[^.\\s]{3,4}$/', '', $divId);
?>
<section id="<?php echo $divId; ?>" class="non-parallax" style="background-image: url('<?php echo $imgUrl; ?>');">
	<div class="para-inner" style="background-image: url('<?php echo $imgUrl; ?>');"></div>
</section> 
<script>
	var h = <?php echo $imgH; ?>;
	var w = <?php echo $imgW; ?>;
	//var newH = 2560 * ( h / w );
	newH = window.innerWidth * ( h / w );
	//console.log(newH);
	document.getElementById('<?php echo $divId; ?>').style.height = newH+'px';
</script>