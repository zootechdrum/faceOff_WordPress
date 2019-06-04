<?php
get_header();
?>
<div class="container">
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
              <div class="col-lg-9  col-12">
                    <?php 
                       while(have_posts()) {
                        the_post();?>
                    <div class="blog-entries">
                        <div class="blog-media youtube-responsive-container">
                            <?php the_field('oembed');?>
                        </div>
                        <div class="blog-headline">
                            <h3 class="post-name"><a
                                    href="<?php the_permalink(); ?>"><strong><?php the_title(); ?></a></strong></h3>
                            <h6 class="post-meta"><?php the_time('F j, Y'); ?> in
                                <?php echo get_the_category_list(', ') ?>
                            </h6>
                            <!--THIS NEEDS TO BY DYNAMIC -->
                        </div>
                        <div class="blog-intro">
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                    <p><a class="readmore-button" href="<?php the_permalink(); ?>">Read More</a></p>
                <?php } ?>
            </div>
            <div class="side-bar col-lg-3">
                        <?php if(is_active_sidebar('sidebar')): ?>
                        <?php dynamic_sidebar('sidebar'); ?>
                        <?php endif; ?>
                        </div>
            </div>
        </div>
    </div>
    <div class="pagin text-center"><?php echo paginate_links();?></div>
</div>

<?php
get_footer();
?>