<?php
$pagelist = get_pages('sort_column=menu_order&sort_order=asc');
$pages = array();
foreach ($pagelist as $page) {
   $pages[] += $page->ID;
}
$current = array_search(get_queried_object_id(), $pages);
//$prevID = $pages[$current-1];
$nextID = $pages[$current+1];
?>
<footer class="footer">
	<div class="footer-container container">
		<a href="<?php echo get_permalink($nextID); ?>" title="<?php echo $nextID; ?>">Explore More</a>
	</div>
	<?php wp_footer(); ?>
</footer>