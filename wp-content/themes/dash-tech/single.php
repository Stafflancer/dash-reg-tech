<?php
/**
 * @package WordPress
 * @subpackage dash-tech
 */
get_header(); ?>

    <main class="main">
        <?php while (have_posts()) : the_post();
            get_template_part('modules/post_content/post_content');
        endwhile;

        get_template_part('modules/related_posts/related_posts');

        // NEWSLETTER
        $newsletter_title = get_field('newsletter_title', 'option');
        $newsletter_subtitle = get_field('newsletter_subtitle', 'option');
        $newsletter_form = get_field('newsletter_form', 'option');

        if ($newsletter_title || $newsletter_subtitle || $newsletter_form) {
            get_template_part('modules/newsletter/newsletter', '',
                array(
                    'title' => $newsletter_title,
                    'subtitle' => $newsletter_subtitle,
                    'form' => $newsletter_form)
            );
        } ?>
    </main>

<?php get_footer(); ?>