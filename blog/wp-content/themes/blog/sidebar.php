<div class="side">
      <header id="presentation">
  <p class="titre">
    <a href="index.php">
      <span class="genererBoxon">BOXON<span>
    </a>
    </p>
  <p class="titre2"><?php bloginfo('description'); ?></p>
      </header>
<ul class="menu">
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
    $allCategories = get_categories( $args );
	foreach($allCategories as $theCategory){
      	/* TO DO : $theCategory->url mène vers la racine, à corriger ---alex---> fait */
      		$url = get_site_url().'/?cat='.$theCategory->cat_ID;
      		echo "<div class='" .$theCategory->category_nicename. "'><li class='categories'><a href='" .$url. "'>" .$theCategory->name. "</a></li></div>";
	}
		?>
	<div>
    <li class="contact">
  		<a href="mailto:salut@boxon.tools">Contact</a>
  	</li>
  </div>
  <div>
  	<li class="rss">
  	 	<a class="side_lien" href="<?php bloginfo('rss2_url'); ?>">RSS</a>
  	</li>
  </div>
</ul>


  <!-- Formulaire de recherche -->
  <?php get_search_form(); ?>


</div>
