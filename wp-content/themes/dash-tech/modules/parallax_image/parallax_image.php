<?php
$parallax_image_title = get_sub_field('parallax_image_title');
$parallax_image_content = get_sub_field('parallax_image_content');
$parallax_image_bg_image = get_sub_field('parallax_image_bg_image');

if ($parallax_image_title || $parallax_image_content) {
    wp_enqueue_style('parallax_image_styles', get_template_directory_uri() . '/static/css/modules/parallax_image/parallax_image.css', '', '', 'all');

    wp_enqueue_script('parallax-js', get_template_directory_uri() . '/static/js/parallax.min.js', array('jquery'), '', true); ?>
    <section class="parallax-image" <?php if($parallax_image_bg_image) { ?> data-parallax="scroll" data-image-src="<?php echo $parallax_image_bg_image; ?>" <?php } ?>>
        <div class="container">
            <div class="holder">
                <?php if ($parallax_image_title) { ?>
                    <div class="title-holder">
                        <h2 class="custom-gold-gradient">
                            <?php echo $parallax_image_title; ?>
                        </h2>
                    </div>
                <?php }
                if ($parallax_image_content) { ?>
                    <div class="content">
                        <?php echo $parallax_image_content; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>