<?php get_header(); ?>
<div class="contenu2">
  <?php get_sidebar(); ?>
  <p class="titrecontenu"><?php single_cat_title(); ?></p>
  <?php get_template_part('loop'); ?>
</div>
<?php get_footer(); ?>
<?php include 'pad.php'; ?>
