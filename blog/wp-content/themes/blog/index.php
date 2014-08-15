<?php
	get_header();
	get_sidebar();
?>
<div id="contenu" class="js-masonry" data-masonry-options='{ "columnWidth": 30, "itemSelector": ".item" }'>
	<?php
		get_template_part('loop');
	?>
</div>
<?php
	get_footer();
?>
