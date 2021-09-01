<?php
$contact_section_title = get_sub_field('contact_section_title');
$contact_section_description = get_sub_field('contact_section_description');
$contact_section_form_shortcode = get_sub_field('contact_section_form_shortcode');

if ($contact_section_title || $contact_section_description || $contact_section_form_shortcode) {
    wp_enqueue_style('contact_section_styles', get_template_directory_uri() . '/static/css/modules/contact_section/contact_section.css', '', '', 'all'); ?>

    <section class="contact-section">
        <div class="container">
            <div class="holder">
                <?php if ($contact_section_title || $contact_section_description) { ?>
                    <div class="left-block">
                        <?php if ($contact_section_title) { ?>
                            <h2 class="gold-gradient"><?php echo $contact_section_title; ?></h2>
                        <?php }
                        if ($contact_section_description) { ?>
                            <div class="description">
                                <?php echo $contact_section_description; ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php }
                if ($contact_section_form_shortcode) { ?>
                    <div class="form-block">
                        <?php echo do_shortcode($contact_section_form_shortcode); ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>