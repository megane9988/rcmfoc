<?php get_header(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
	the_archive_title( '<h1 class="page-title">', '</h1>' );
	$rcmfoc_archive_description = get_the_archive_description();
	if($rcmfoc_archive_description){
		the_archive_description( '<div class="taxonomy-description">', '</div>' );
	}
?>
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