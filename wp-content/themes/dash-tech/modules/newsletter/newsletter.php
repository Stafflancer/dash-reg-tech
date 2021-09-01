<?php
if (!empty($args)) {
    if (!empty($args['title'])) {
        $newsletter_title = $args['title'];
    }
    if (!empty($args['subtitle'])) {
        $newsletter_subtitle = $args['subtitle'];
    }
    if (!empty($args['form'])) {
        $newsletter_form = $args['form'];
    }
} else {
    $newsletter_title = get_sub_field('newsletter_title');
    $newsletter_subtitle = get_sub_field('newsletter_subtitle');
    $newsletter_form = get_sub_field('newsletter_form');
}

wp_enqueue_style('newsletter_styles', get_template_directory_uri() . '/static/css/modules/newsletter/newsletter.css', '', '', 'all'); ?>

<section class="newsletter-section">
    <div class="container">
        <div class="holder">
            <?php if ($newsletter_title || $newsletter_subtitle) { ?>
                <div class="title-holder">
                    <?php if ($newsletter_title) { ?>
                        <h2 class="custom-gold-gradient">
                            <?php echo $newsletter_title; ?>
                        </h2>
                    <?php }
                    if ($newsletter_subtitle) { ?>
                        <div class="subtitle">
                            <?php echo $newsletter_subtitle; ?>
                        </div>
                    <?php } ?>
                </div>
            <?php }
            if ($newsletter_form) { ?>
                <div class="form-block">
                    <?php echo do_shortcode($newsletter_form); ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
