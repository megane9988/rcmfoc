<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail();
}?>
<?php echo esc_html(the_time('Y.n.j')); ?>
<div class="category"><?php the_category(' ,'); ?></div>
<div class="tags"><?php the_tags(''); ?></div>
<div class="entry-content"><?php the_content(); ?></div>

<?php wp_link_pages();

the_post_navigation( array(
	'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'rcmfoc' ) . '</span>' .
		'<span class="screen-reader-text">' . __( 'Next post:', 'rcmfoc' ) . '</span>' .
		'<span class="post-title">%title</span>',
	'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'rcmfoc' ) . '</span> ' .
		'<span class="screen-reader-text">' . __( 'Previous post:', 'rcmfoc' ) . '</span>' .
		'<span class="post-title">%title</span>',
) );

echo '<hr/>';