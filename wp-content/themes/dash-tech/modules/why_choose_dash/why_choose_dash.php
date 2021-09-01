<?php
$why_choose_dash_title = get_sub_field('why_choose_dash_title');

if ($why_choose_dash_title || have_rows('blocks')) {
    wp_enqueue_style('why_choose_dash_styles', get_template_directory_uri() . '/static/css/modules/why_choose_dash/why_choose_dash.css', '', '', 'all'); ?>
    <section class="why-choose-dash">
        <div class="container">
            <?php if ($why_choose_dash_title) { ?>
                <div class="title-holder">
                    <h2 class="custom-gold-gradient">
                        <?php echo $why_choose_dash_title; ?>
                    </h2>
                </div>
            <?php } ?>

            <?php if (have_rows('blocks')) { ?>
                <div class="blocks-holder">
                    <?php while (have_rows('blocks')) {
                        the_row(); ?>
                        <div class="block">
                            <?php
                            $icon = get_sub_field('icon');
                            $title = get_sub_field('title');
                            $description = get_sub_field('description');

                            if ($icon) { ?>
                                <div class="icon-holder">
                                    <?php echo wp_get_attachment_image($icon, 'full'); ?>
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
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>