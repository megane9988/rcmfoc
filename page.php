<?php get_header(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
	if ( have_posts() ) :

		while ( have_posts() ) : the_post();

			get_template_part('./page-templates/content','page');

		endwhile;

	else :
		get_template_part( 'content', 'none' );

	endif;
?>
<?php the_posts_pagination(); ?>
</div>
<?php get_footer(); ?>