<div class="side">
      <header id="presentation">
  <!-- Il faudrait réécrire le script pour que ça change au chargement de la page -->
  <p class="titre"><a href="javascript:;" onclick="mettreLeBoxon('BNfixes')"><span class="genererBoxon"><?php bloginfo('name'); ?></span></a></p>
        <p class="titre2"><?php bloginfo('description'); ?></p>
      </header>
<ul class="menu">
	<li class="categories">
		 <?php
		 $args = array(
			'show_option_all'    => '',
			'orderby'            => 'name',
			'order'              => 'ASC',
			'style'              => 'none',
			'show_count'         => 0,
			'hide_empty'         => 1,
			'use_desc_for_title' => 1,
			'child_of'           => 0,
			'feed'               => '',
			'feed_type'          => '',
			'feed_image'         => '',
			'exclude'            => '',
			'exclude_tree'       => '',
			'include'            => '',
			'hierarchical'       => 1,
			'title_li'           => __( 'Categories' ),
			'show_option_none'   => __('No categories'),
			'number'             => null,
			'echo'               => 1,
			'depth'              => 0,
			'current_category'   => 0,
			'pad_counts'         => 0,
			'taxonomy'           => 'category',
			'walker'             => null
		);
		wp_list_categories( $args );
		?>
	</li>
	<li class="contact">
		<a href="mailto:salut@boxon.tools">Contact</a>
  		<!-- Bouton RSS -->
	</li>
	<li class="rss">
	 	<a class="side_lien" href="<?php bloginfo('rss2_url'); ?>">RSS</a>
	</li>
</ul>


  <!-- Formulaire de recherche -->
  <?php get_search_form(); ?>


</div>
