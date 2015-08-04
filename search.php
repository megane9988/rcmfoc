
<?php get_header(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'rcmfoc' ), get_search_query() ); ?></h1>
<?php
	if ( have_posts() ) :

		while ( have_posts() ) : the_post();

			get_template_part('./page-templates/content');

		endwhile;

	else :

		get_template_part( 'content', 'none' );

	endif;
?>
<?php the_posts_pagination(); ?>
</div>
<?php get_footer(); ?>