<?php get_header(); ?>
<div class="main page">
  <?php get_sidebar(); ?>
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="post">
      <p class="titre2contenu">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </p>
      <div class="contenuinterieur">
        <?php the_content(); ?>
      </div>
    </div>

    <?php endwhile; ?>
  <?php endif; ?>
</div>
<?php get_footer(); ?>