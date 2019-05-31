<!-- Grabs the content of all Blog posts -->
<!-- Must live in single.php for wordpress to reconize as individual content -->
<?php 
 get_header();
  ?>
<div class="container">
    <div class="blog-content">
        <div class="section-title text-center">
            <h2>BLOG</h2>
            <div class="seperator size-small">
                <span></span>
            </div>
            <h4 class="subtitle">Stay up to date with our latest content</h4>
        </div>
        <div class="main-content">
            <div class="blog-content">
                <div class="row">
                    <div class="col-lg-8  col-12">
                        <?php 
                while(have_posts()) {
                 the_post();?>
                        <div class="blog-entries">
                            <div class="blog-media youtube-responsive-container">
                                <?php the_field('oembed');?>
                            </div>
                            <div class="blog-headline">
                                <h3 class="post-name">
                                    <strong><?php the_title(); ?></strong></h3>
                                <h6 class="post-meta"><?php the_time('F j, Y'); ?> in
                                    <?php echo get_the_category_list(', ') ?>
                                </h6>
                                <!--THIS NEEDS TO BY DYNAMIC -->
                            </div>
                            <div class="blog-intro">
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-lg-4">
                      <div class="side-bar">
                        <?php if(is_active_sidebar('sidebar')): ?>
                        <?php dynamic_sidebar('sidebar'); ?>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
  get_footer();
?>