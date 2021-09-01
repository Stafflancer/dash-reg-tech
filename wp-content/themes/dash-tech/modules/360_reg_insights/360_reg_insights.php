<?php
$reg_insights_title_360 = get_sub_field('360_reg_insights_title');

if ($reg_insights_title_360) {
    wp_enqueue_style('reg_insights_360_styles', get_template_directory_uri() . '/static/css/modules/360_reg_insights/360_reg_insights.css', '', '', 'all'); ?>

    <section class="reg_insights_360">
        <div class="container">
            <?php if ($reg_insights_title_360) { ?>
                <div class="title-holder">
                    <h2 class="gold-gradient"><?php echo $reg_insights_title_360; ?></h2>
                </div>
            <?php }

            $reg_insights_posts = get_sub_field('360_reg_insights_posts');
            if ($reg_insights_posts) { ?>
                <div class="posts-holder">
                    <?php foreach ($reg_insights_posts as $post_id) {
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
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
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
            <?php }
            $reg_insights_button = get_sub_field('360_reg_insights_button');
            if ($reg_insights_button) { ?>
                <div class="bottom-button-holder">
                    <a href="<?php echo $reg_insights_button['url']; ?>" class="gold-border-btn"
                       target="<?php echo $reg_insights_button['target']; ?>"><?php echo $reg_insights_button['title']; ?></a>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>