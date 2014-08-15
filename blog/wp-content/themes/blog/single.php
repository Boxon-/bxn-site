<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="contenu">
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	    <div class="post">
		      <p class="titre2contenu">
		        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		      </p>
		    <div class="contenuinterieur">
		        <?php the_content(); ?>
		    </div>
		      <p class="contenuinfos">
		        &rarr; <?php echo get_the_date(); ?> — <?php the_category(', '); ?>
		      </p>
	        <div class="post-comments">
	          <?php comments_template(); ?>
	        </div>
	    </div>
	  <?php endwhile; ?>
	<?php else : ?>
	  <p class="nothing">
	    Aucun résultat.
	  </p>
	<?php endif; ?>

</div>

<?php get_footer(); ?>
