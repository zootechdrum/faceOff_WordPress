<!-- Grabs the content of pages -->
<!-- Must live in page.php for wordpress to reconize as individual pages-->
<?php 
    get_header();
  while(have_posts()) {
    the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
  <?php }
  get_footer();
?>