<?php wp_enqueue_style('post_content_styles', get_template_directory_uri() . '/static/css/modules/post_content/post_content.css', '', '', 'all'); ?>

<section class="post-content">
    <div class="container">
        <div class="breadcrumbs">
            <?php $blog_page_link = get_post_type_archive_link('post'); ?>
            <a href="<?php echo $blog_page_link; ?>">
                <?php _e('360° Reg Insights'); ?>
            </a>
            /
            <span><?php the_title(); ?></span>
        </div>

        <div class="post-title">
            <h1>
                <?php the_title(); ?>
            </h1>
        </div>

        <div class="post-date">
            <?php echo get_the_date(); ?>
        </div>

        <?php if (has_post_thumbnail()) { ?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
        <?php }
        if (get_the_content()) { ?>
            <div class="content-holder">
                <?php the_content(); ?>
            </div>
        <?php } ?>
    </div>
</section>