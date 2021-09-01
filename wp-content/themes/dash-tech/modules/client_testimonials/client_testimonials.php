<?php
$client_testimonials_title = get_sub_field('client_testimonials_title');

if ($client_testimonials_title || have_rows('client_testimonials_testimonials')) {
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/static/css/slick.min.css', '', '', 'all');
    wp_enqueue_style('client_testimonials_styles', get_template_directory_uri() . '/static/css/modules/client_testimonials/client_testimonials.css', '', '', 'all');

    wp_enqueue_script('slick-js', get_template_directory_uri() . '/static/js/slick.min.js', array('jquery'), '', true);
    wp_enqueue_script('client_testimonials_js', get_template_directory_uri() . '/static/js/modules/client_testimonials/client_testimonials.js', array('slick-js'), '', true); ?>

    <section class="client-testimonials">
        <div class="container">
            <?php if ($client_testimonials_title) { ?>
                <div class="title-holder">
                    <h2 class="gold-gradient"><?php echo $client_testimonials_title; ?></h2>
                </div>
            <?php } ?>

            <?php if (have_rows('client_testimonials_testimonials')) : ?>
                <div class="client-testimonials-slider">
                    <?php while (have_rows('client_testimonials_testimonials')) : the_row();
                        $photo = get_sub_field('photo');
                        $text = get_sub_field('text');
                        $name = get_sub_field('name'); ?>
                        <div class="item">
                            <div class="holder">
                                <?php if ($photo) { ?>
                                    <div class="photo">
                                        <?php echo wp_get_attachment_image($photo, 'wp_sq_1'); ?>
                                    </div>
                                <?php } ?>
                                <div class="bg">
                                    <?php if ($text) { ?>
                                        <div class="text">
                                            <?php echo $text; ?>
                                        </div>
                                    <?php }
                                    if ($name) { ?>
                                        <div class="name">
                                            <?php echo $name; ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php } ?>