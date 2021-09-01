<?php get_header(); ?>

    <main class="main">
        <?php if (have_rows('modules')):
            while (have_rows('modules')) : the_row();
                if (get_row_layout() == 'hero') :
                    get_template_part('modules/hero/hero');
                elseif (get_row_layout() == 'video_block') :
                    get_template_part('modules/video_block/video_block'); ?>
                    <div class="grey-gradient-bg">
                <?php elseif (get_row_layout() == 'solution_cards') :
                    get_template_part('modules/solution_cards/solution_cards');
                elseif (get_row_layout() == 'why_choose_dash') :
                    get_template_part('modules/why_choose_dash/why_choose_dash');
                elseif (get_row_layout() == 'timeline') :
                    get_template_part('modules/timeline/timeline'); ?>
                    </div>
                    <div class="image-bg-wrapper">
                <?php elseif (get_row_layout() == 'who_we_serve') :
                    get_template_part('modules/who_we_serve/who_we_serve');
                elseif (get_row_layout() == 'client_testimonials') :
                    get_template_part('modules/client_testimonials/client_testimonials');
                elseif (get_row_layout() == '360_reg_insights') :
                    get_template_part('modules/360_reg_insights/360_reg_insights'); ?>
                    </div>
                <?php elseif (get_row_layout() == 'contact_section') :
                    get_template_part('modules/contact_section/contact_section');
                elseif (get_row_layout() == 'content_section') :
                    get_template_part('modules/content_section/content_section');
                elseif (get_row_layout() == 'parallax_image') :
                    get_template_part('modules/parallax_image/parallax_image');
                elseif (get_row_layout() == 'newsletter') :
                    get_template_part('modules/newsletter/newsletter');
                elseif ( get_row_layout() == 'why_customers_choose_us' ) :
                    get_template_part('modules/why_customers_choose_us/why_customers_choose_us');
                elseif (get_row_layout() == 'meet_the_team') :
                    get_template_part('modules/meet_the_team/meet_the_team');
                elseif (get_row_layout() == 'form_block') :
                    get_template_part('modules/form_block/form_block');
                endif;
            endwhile;
        endif; ?>
    </main>

<?php get_footer(); ?>