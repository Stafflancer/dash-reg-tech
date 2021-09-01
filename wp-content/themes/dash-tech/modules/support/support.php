<?php
$support_page_text_above_title = get_field('support_page_text_above_title');
$support_page_title = get_field('support_page_title');
$support_page_text_under_title = get_field('support_page_text_under_title');

$support_page_form_title = get_field('support_page_form_title');
$support_page_form = get_field('support_page_form');

if ($support_page_title || $support_page_text_under_title || $support_page_form_title || $support_page_form || have_rows('support_page_icons_block')) {
    wp_enqueue_style('support_styles', get_template_directory_uri() . '/static/css/modules/support/support.css', '', '', 'all'); ?>
    <section class="support-section">
        <div class="container">
            <?php if ($support_page_text_above_title || $support_page_title || $support_page_text_under_title) { ?>
                <div class="title-holder">
                    <?php if ($support_page_text_above_title) { ?>
                        <div class="above-title-text"><?php echo $support_page_text_above_title; ?></div>
                    <?php }
                    if ($support_page_title) { ?>
                        <h2><?php echo $support_page_title; ?></h2>
                    <?php }
                    if ($support_page_text_under_title) { ?>
                        <div class="description">
                            <?php echo $support_page_text_under_title; ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>

            <?php if (have_rows('support_page_icons_block')) { ?>
                <div class="icons-holder">
                    <?php while (have_rows('support_page_icons_block')) : the_row(); ?>
                        <div class="item">
                            <div class="holder">
                                <?php
                                $icon = get_sub_field('icon');
                                $title = get_sub_field('title');
                                $description = get_sub_field('description'); ?>

                                <?php if ($icon) { ?>
                                    <div class="icon">
                                        <?php echo wp_get_attachment_image($icon, 'wp_sq_3'); ?>
                                    </div>
                                <?php }
                                if ($title) { ?>
                                    <h4><?php echo $title; ?></h4>
                                <?php }
                                if ($description) { ?>
                                    <div class="description">
                                        <?php echo $description; ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php } ?>

            <?php if ($support_page_form_title || $support_page_form) { ?>
                <div class="form-holder">
                    <?php if ($support_page_form_title) { ?>
                        <h3>
                            <?php echo $support_page_form_title; ?>
                        </h3>
                    <?php }
                    if ($support_page_form) { ?>
                        <div class="form-block">
                            <?php echo do_shortcode($support_page_form); ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>