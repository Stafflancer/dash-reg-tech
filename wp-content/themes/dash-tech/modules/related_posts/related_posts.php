<?php $args = array(
    'post_type' => 'post',
    'posts_per_page' => 3
);
$posts = new WP_Query($args);
if ($posts->have_posts()) {
    wp_enqueue_style('related_posts_styles', get_template_directory_uri() . '/static/css/modules/related_posts/related_posts.css', '', '', 'all'); ?>

    <div class="related-posts">
        <div class="container">
            <div class="title-holder">
                <h3>
                    <?php _e('Related Insights', 'dash-tech'); ?>
                </h3>
            </div>
            <div class="posts-holder">
                <?php foreach ($posts->posts as $post) {
                    $post_id = $post->ID;
                    $thumbnail = get_the_post_thumbnail($post_id, 'wp_post_thumbnail');
                    $excerpt = get_the_excerpt($post_id); ?>

                    <a class="post-card" href="<?php the_permalink($post_id); ?>">
                        <div class="holder">
                            <?php if ($thumbnail) { ?>
                                <div class="thumbnail">
                                    <?php echo $thumbnail; ?>
                                </div>
                            <?php } ?>
                            <div class="content-holder">
                                <h6><?php echo get_the_title($post_id); ?></h6>
                                <?php if ($excerpt) { ?>
                                    <div class="excerpt">
                                        <?php echo $excerpt; ?>
                                    </div>
                                <?php } ?>
                                <div class="button-holder">
                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1"
                                             x="0px" y="0px" viewBox="0 0 512 512"
                                             style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                <polygon
                                                        points="289.391,222.609 289.391,0 222.609,0 222.609,222.609 0,222.609 0,289.391 222.609,289.391 222.609,512     289.391,512 289.391,289.391 512,289.391 512,222.609   "/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
<?php }
wp_reset_postdata(); ?>