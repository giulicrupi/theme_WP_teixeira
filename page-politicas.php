<?php get_header(); ?>
<main>
	<?php echo do_shortcode('[rev_slider alias="Politicas"]'); ?>
</main>
<div class="traco-politica p-3">
	<div class="container">
		<?php the_field('texto'); ?>
	</div>
</div>
<?php get_footer(); ?>