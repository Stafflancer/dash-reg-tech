<?php
$form_block_form = get_sub_field('form_block_form');

if ($form_block_form) {
    wp_enqueue_style('form_block_styles', get_template_directory_uri() . '/static/css/modules/form_block/form_block.css', '', '', 'all'); ?>
    <section class="form-block">
        <div class="container">
            <?php echo do_shortcode($form_block_form); ?>
        </div>
    </section>
<?php } ?>