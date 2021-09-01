<?php
/**
 * @package WordPress
 * @subpackage dash-tech
 */
get_header();
$page_id = get_queried_object_id(); ?>

    <main class="main">
        <?php if (have_rows('modules', $page_id)) :
            while (have_rows('modules', $page_id)) : the_row();
                if (get_row_layout() == 'hero') :
                    get_template_part('modules/hero/hero');
                elseif (get_row_layout() == 'blog_grid') :
                    get_template_part('modules/blog_grid/blog_grid');
                elseif (get_row_layout() == 'newsletter') :
                    get_template_part('modules/newsletter/newsletter');
                endif;
            endwhile;
        endif; ?>
    </main>

<?php get_footer(); ?>