<?php
$blog_grid_content = get_sub_field('blog_grid_content');

wp_enqueue_style('blog_grid_styles', get_template_directory_uri() . '/static/css/modules/blog_grid/blog_grid.css', '', '', 'all'); ?>

<section class="blog-grid">
    <div class="container">
        <div class="holder">
            <div class="filter-holder">
                <?php if ($blog_grid_content) { ?>
                    <div class="blog-grid-content">
                        <?php echo $blog_grid_content; ?>
                    </div>
                <?php }
                echo do_shortcode('[searchandfilter id="273"]'); ?>
            </div>
            <?php echo do_shortcode('[searchandfilter id="273" show="results"]'); ?>
        </div>
    </div>
</section>
