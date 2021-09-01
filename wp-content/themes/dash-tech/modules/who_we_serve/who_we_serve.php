<?php
$who_we_serve_title = get_sub_field('who_we_serve_title');
$who_we_serve_subtitle = get_sub_field('who_we_serve_subtitle');
$who_we_serve_image = get_sub_field('who_we_serve_image');

if ($who_we_serve_title || $who_we_serve_subtitle || $who_we_serve_image || have_rows('who_we_serve_content')) {
    wp_enqueue_style('who_we_serve_styles', get_template_directory_uri() . '/static/css/modules/who_we_serve/who_we_serve.css', '', '', 'all'); ?>
    <section class="who-we-serve">
        <div class="container">
            <?php if ($who_we_serve_title) { ?>
                <div class="title-holder">
                    <h2 class="custom-gold-gradient">
                        <?php echo $who_we_serve_title; ?>
                    </h2>

                    <?php if ($who_we_serve_subtitle) { ?>
                        <div class="subtitle">
                            <?php echo $who_we_serve_subtitle; ?>
                        </div>
                    <?php } ?>
                </div>
            <?php }
            if ($who_we_serve_image || have_rows('who_we_serve_content')) { ?>
                <div class="holder">
                    <?php if ($who_we_serve_image) { ?>
                        <div class="image">
                            <?php echo wp_get_attachment_image($who_we_serve_image, 'wp_sm'); ?>
                        </div>
                    <?php }
                    if (have_rows('who_we_serve_content')) { ?>
                        <div class="content">
                            <?php while (have_rows('who_we_serve_content')) : the_row();
                                $item = get_sub_field('item'); ?>
                                <div class="item">
                                    <?php echo $item; ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>