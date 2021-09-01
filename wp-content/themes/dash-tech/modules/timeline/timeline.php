<?php
$timeline_title = get_sub_field('timeline_title');
$timeline_text_below = get_sub_field('timeline_text_below');

if ($timeline_title || have_rows('years')) {
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/static/css/slick.min.css', '', '', 'all');
    wp_enqueue_style('timeline_styles', get_template_directory_uri() . '/static/css/modules/timeline/timeline.css', '', '', 'all');

    wp_enqueue_script('slick-js', get_template_directory_uri() . '/static/js/slick.min.js', array('jquery'), '', true);
    wp_enqueue_script('timeline_js', get_template_directory_uri() . '/static/js/modules/timeline/timeline.js', array('slick-js'), '', true); ?>
    <section class="timeline-section">
        <div class="container">
            <div class="holder">
                <?php if ($timeline_title) { ?>
                    <div class="title-holder">
                        <h2 class="custom-gold-gradient">
                            <?php echo $timeline_title; ?>
                        </h2>
                    </div>
                <?php } ?>

                <?php if (have_rows('years')) { ?>
                    <div class="timeline-slider">
                        <?php while (have_rows('years')) : the_row(); ?>
                            <?php
                            $year = get_sub_field('year');
                            $content = get_sub_field('content'); ?>
                            <div class="item">
                                <?php if ($year) { ?>
                                    <div class="year">
                                        <?php echo $year; ?>
                                    </div>
                                <?php }
                                if ($content) { ?>
                                    <div class="content">
                                        <?php echo $content; ?>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php } ?>
            </div>

            <?php if ($timeline_text_below) { ?>
                <div class="timeline-text-below">
                    <?php echo $timeline_text_below; ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>