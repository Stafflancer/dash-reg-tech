<?php
$why_customers_choose_us_title = get_sub_field('why_customers_choose_us_title');

if ($why_customers_choose_us_title || have_rows('why_customers_choose_us_blocks')) {
    wp_enqueue_style('why_customers_choose_us_styles', get_template_directory_uri() . '/static/css/modules/why_customers_choose_us/why_customers_choose_us.css', '', '', 'all'); ?>

    <section class="why-customers-choose-us">
        <div class="container">
            <div class="holder">
                <?php if ($why_customers_choose_us_title) { ?>
                    <div class="title-holder">
                        <h3>
                            <?php echo $why_customers_choose_us_title; ?>
                        </h3>
                    </div>
                <?php }
                if (have_rows('why_customers_choose_us_blocks')) { ?>
                    <div class="blocks-holder">
                        <?php while (have_rows('why_customers_choose_us_blocks')) {
                            the_row(); ?>
                            <div class="block">
                                <?php
                                $title = get_sub_field('title');
                                $description = get_sub_field('description'); ?>

                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/static/img/check-icon.png"
                                         alt="">
                                </div>
                                <h5><?php echo $title; ?></h5>
                                <?php if ($description) { ?>
                                    <div class="description">
                                        <?php echo $description; ?>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>