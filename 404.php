<?php get_header(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php get_template_part( './page-templates/content', 'none' ); ?>

</div>
<?php get_footer(); ?>