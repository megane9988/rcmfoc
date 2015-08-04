<article class="entry-post">
	<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div class="entry-date"><?php echo esc_html(the_time('Y.n.j')); ?></div>
	<?php wp_link_pages(); ?>
</article>