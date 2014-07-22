<?php
	get_header();
?>

<div class="contenu">
	<?php
		get_template_part('loop');
	?>
</div>
<?php
	get_sidebar();
	get_footer();
?>