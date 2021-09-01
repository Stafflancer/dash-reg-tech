<?php
$contact_title = get_field('contact_title');
$contact_subtitle = get_field('contact_subtitle');
$contact_form = get_field('contact_form');

if ($contact_title || $contact_subtitle || $contact_form) {
    wp_enqueue_style('contact_styles', get_template_directory_uri() . '/static/css/modules/contact/contact.css', '', '', 'all'); ?>

    <section class="contact-page-section">
        <div class="container">
            <div class="breadcrumbs">
                <span>
                    <?php the_title(); ?>
                </span>
            </div>
            <?php if ($contact_title || $contact_subtitle) { ?>
                <div class="title-holder">
                    <?php if ($contact_title) { ?>
                        <h2><?php echo $contact_title; ?></h2>
                    <?php }
                    if ($contact_subtitle) { ?>
                        <div class="subtitle">
                            <?php echo $contact_subtitle; ?>
                        </div>
                    <?php } ?>
                </div>
            <?php }
            if ($contact_form) { ?>
                <div class="form-block">
                    <?php echo do_shortcode($contact_form); ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>