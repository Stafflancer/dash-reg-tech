<?php
$hero_above_title_text = get_sub_field('hero_above_title_text');
$hero_title = get_sub_field('hero_title');
$hero_description = get_sub_field('hero_description');
$hero_image = get_sub_field('hero_image');

if ($hero_title || $hero_description || $hero_image) {
    wp_enqueue_style('hero_styles', get_template_directory_uri() . '/static/css/modules/hero/hero.css', '', '', 'all'); ?>
    <section class="hero">
        <div class="container">
            <div class="holder">
                <?php if ($hero_title || $hero_description) { ?>
                    <div class="text-col">
                        <?php if ($hero_above_title_text) { ?>
                            <div class="hero-above-title-text">
                                <?php echo $hero_above_title_text; ?>
                            </div>
                        <?php }
                        if ($hero_title) { ?>
                            <h1 class="custom-gold-gradient">
                                <?php echo $hero_title; ?>
                            </h1>
                        <?php }
                        if ($hero_description) { ?>
                            <div class="description">
                                <?php echo $hero_description; ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>

                <?php if ($hero_image) { ?>
                    <div class="image-col">
                        <?php echo wp_get_attachment_image($hero_image, 'wp_md'); ?>
                    </div>
                <?php } ?>
            </div>

            <?php
            $hero_bottom_block_icon = get_sub_field('hero_bottom_block_icon');
            $hero_bottom_block_text = get_sub_field('hero_bottom_block_text');
            if ($hero_bottom_block_icon || $hero_bottom_block_text) { ?>
                <div class="bottom-holder">
                    <div class="bottom-block gold-gradient-border">
                        <?php if ($hero_bottom_block_icon) { ?>
                            <div class="icon">
                                <?php echo wp_get_attachment_image($hero_bottom_block_icon, 'wp_icon_sm'); ?>
                            </div>
                        <?php } ?>

                        <?php if ($hero_bottom_block_text) { ?>
                            <div class="text">
                                <?php echo $hero_bottom_block_text; ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>