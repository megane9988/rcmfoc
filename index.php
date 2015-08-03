<?php get_header(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php the_title(); ?>
  <?php the_category(); ?>
  <?php the_tags(); ?>;
  <?php the_post_thumbnail(); ?>
  <?php wp_link_pages(); ?>
  <?php posts_nav_link(); ?>
  <?php comment_form(); ?>
  <?php comments_template(); ?>
  <?php paginate_comments_links(); ?>
  <?php wp_list_comments(); ?>
</div>
<?php get_footer(); ?>