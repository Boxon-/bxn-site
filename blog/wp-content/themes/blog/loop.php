<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
    <?php $categories = get_the_category(); ?>
        <div class="item post<?php foreach ($categories as $category){ echo ' '.$category->category_nicename;} ?>">
      <p class="titre2contenu">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </p>
    <div class="contenuinterieur">
        <?php the_content(); ?>
    </div>
      <p class="contenuinfos">
        &rarr; <?php echo get_the_date(); ?> — <?php the_category(', '); ?><?php the_tags('&thinsp;: ', ', '); ?>  <a href="<?php the_permalink(); ?>"><?php comments_number( '', '— 1 réponse', '— % réponses' ); ?></a> — <a href="<?php the_permalink(); ?>">Commenter</a>
      </p>
    </div>

   <?php endwhile; ?>
	<div class="pagination">
		<span class="precedent"><?php next_posts_link('&larr; précédent', 0); ?></span>
		<span class="suivant"><?php previous_posts_link('suivant &rarr;', 0); ?> </span>
 	</div>

<?php else : ?>
  <p class="nothing">
    Aucun résultat.
  </p>
<?php endif; ?>
