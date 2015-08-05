<?php get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
	if ( have_posts() ) :

		while ( have_posts() ) : the_post();

			get_template_part('./page-templates/content' , 'single');

		endwhile;

	else :

		get_template_part( 'content', 'none' );

	endif;
?>

	<?php if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif; ?>
	<?php posts_nav_link(); ?>
</article>
<?php get_footer(); ?>