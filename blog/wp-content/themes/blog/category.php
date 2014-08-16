<?php 
	get_header(); 
	get_sidebar(); 
?>
<p class="titrecontenu"><?php single_cat_title(); ?></p>
<div id="contenu" class="js-masonry" data-masonry-options='{ "columnWidth": 30, "itemSelector": ".item" }'>
 <?php get_template_part('loop'); ?>
</div>

<?php get_footer(); ?>
<?php //include 'pad.php'; ?>

