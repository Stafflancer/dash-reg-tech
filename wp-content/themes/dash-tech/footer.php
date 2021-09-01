<?php
/**
 * @package WordPress
 * @subpackage dash-tech
 */
?>

<footer class="footer">
    <div class="container">
        <?php if (have_rows('footer_socials', 'option') || have_rows('footer_socials', 'option')) { ?>
            <div class="top-holder">

                <?php if (has_nav_menu('footer_menu')) { ?>
                    <div class="menu-holder">
                        <?php wp_nav_menu(['theme_location' => 'footer_menu', 'container' => '']); ?>
                    </div>
                <?php } ?>
                <?php if (have_rows('footer_socials', 'option')) : ?>
                    <div class="socials">
                        <?php while (have_rows('footer_socials', 'option')) : the_row();
                            $icon = get_sub_field('icon');
                            $link = get_sub_field('link'); ?>
                            <a href="<?php echo $link; ?>">
                                <?php if ($icon) { ?>
                                    <div class="icon">
                                        <?php echo wp_get_attachment_image($icon, 'wp_sq_4'); ?>
                                    </div>
                                <?php } ?>
                            </a>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php } ?>
        <?php $footer_below_menu_text = get_field('footer_below_menu_text', 'option');
        if ($footer_below_menu_text) { ?>
            <div class="below-menu-text">
                <?php echo $footer_below_menu_text; ?>
            </div>
        <?php }
        $footer_logo = get_field('footer_logo', 'option');
        if ($footer_logo) { ?>
            <a href="<?php echo get_site_url(); ?>" class="logo">
                <?php echo wp_get_attachment_image($footer_logo, 'wp_logo'); ?>
            </a>
        <?php } ?>
        <?php
        $footer_below_logo_text = get_field('footer_below_logo_text', 'option');
        $footer_copyrights = get_field('footer_copyrights', 'option');
        if ($footer_below_logo_text || $footer_copyrights) { ?>
            <div class="bottom-block">
                <?php if ($footer_below_logo_text) { ?>
                    <div class="below-logo-text">
                        <?php echo $footer_below_logo_text; ?>
                    </div>
                <?php }
                if ($footer_copyrights) { ?>
                    <div class="footer-copyrights">
                        <?php echo $footer_copyrights; ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</footer>
<?php wp_footer() ?>
</div><!-- .wrapper -->
</body>
</html>
