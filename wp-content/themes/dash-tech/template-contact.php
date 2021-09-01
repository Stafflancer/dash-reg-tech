<?php /* Template Name: Contact */
get_header(); ?>

    <main class="main">
        <?php
        get_template_part('modules/contact/contact');

        $contacts_block_title = get_field('contacts_block_title');
        $contacts_block_info_1 = get_field('contacts_block_info_1');
        $contacts_block_info_2 = get_field('contacts_block_info_2');

        if($contacts_block_title || $contacts_block_info_1 || $contacts_block_info_2) {
            get_template_part('modules/contact_info/contact_info', '', array(
                'contacts_block_title' => $contacts_block_title,
                'contacts_block_info_1' => $contacts_block_info_1,
                'contacts_block_info_2' => $contacts_block_info_2
            ));
        } ?>
    </main>

<?php get_footer(); ?>