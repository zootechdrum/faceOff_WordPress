<!-- Grabs the content of all Blog posts -->
<!-- Must live in single.php for wordpress to reconize as individual content -->
<?php 
 get_header();
  while(have_posts()) {
    the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
  <?php }
  get_footer();
?>