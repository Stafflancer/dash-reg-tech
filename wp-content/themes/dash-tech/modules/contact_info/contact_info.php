<?php
if (!empty($args)) {
    if (!empty($args['contacts_block_title'])) {
        $contacts_block_title = $args['contacts_block_title'];
    }
    if (!empty($args['contacts_block_info_1'])) {
        $contacts_block_info_1 = $args['contacts_block_info_1'];
    }
    if (!empty($args['contacts_block_info_2'])) {
        $contacts_block_info_2 = $args['contacts_block_info_2'];
    }

    wp_enqueue_style('contact_info_styles', get_template_directory_uri() . '/static/css/modules/contact_info/contact_info.css', '', '', 'all'); ?>

    <section class="contact-info">
        <div class="container">
            <div class="holder">
                <?php if (isset($contacts_block_title)) { ?>
                    <div class="title-holder">
                        <h3 class="custom-gold-gradient">
                            <?php echo $contacts_block_title; ?>
                        </h3>
                    </div>
                <?php } ?>

                <div class="cols">
                    <?php if (isset($contacts_block_info_1)) { ?>
                        <div class="col">
                            <?php echo $contacts_block_info_1; ?>
                        </div>
                    <?php }
                    if (isset($contacts_block_info_2)) { ?>
                        <div class="col">
                            <?php echo $contacts_block_info_2; ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>