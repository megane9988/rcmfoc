<article class="entry-post">
	<h2 class="entry-title"><?php the_title(); ?></h2>
	<div class="entry-date"><?php echo esc_html(the_time('Y.n.j')); ?></div>
	<div class="entry-content"><?php the_content(); ?></div>
	<?php wp_link_pages(); ?>
</article>