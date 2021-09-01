<?php
/**
 * @package WordPress
 * @subpackage dash-tech
 */
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta content="" name="description"/>
    <meta content="" name="keywords"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <title>
        <?php
        global $page, $paged;
        wp_title('|', true, 'right');
        bloginfo('name');
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page()))
            echo " | $site_description";
        if ($paged >= 2 || $page >= 2)
            echo ' | ' . sprintf(__('Page %s', 'dash-tech'), max($paged, $page));
        ?>
    </title>
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
<?php wp_body_open() ?>

<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="holder">
                <?php $header_logo = get_field('header_logo', 'option');
                if ($header_logo) { ?>
                    <a href="<?php echo get_site_url(); ?>" class="logo">
                        <?php echo wp_get_attachment_image($header_logo, 'wp_logo'); ?>
                    </a>
                <?php } ?>

                <button class="burger-btn">
                    <svg height="384pt" viewBox="0 -53 384 384" width="384pt" xmlns="http://www.w3.org/2000/svg">
                        <path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/>
                        <path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/>
                        <path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/>
                    </svg>
                </button>

                <?php if (has_nav_menu('header_menu') || have_rows('header_buttons', 'option')) { ?>
                    <div class="mobile-menu-holder">
                        <?php if (has_nav_menu('header_menu')) { ?>
                            <div class="menu-holder">
                                <?php wp_nav_menu(['theme_location' => 'header_menu', 'container' => '']); ?>
                            </div>
                        <?php } ?>

                        <?php if (have_rows('header_buttons', 'option')) { ?>
                            <div class="buttons-holder">
                                <?php while (have_rows('header_buttons', 'option')) {
                                    the_row();
                                    $button = get_sub_field('button');
                                    if ($button) { ?>
                                        <a href="<?php echo $button['url']; ?>"
                                           target="<?php echo !empty($button['target']) ? $button['target'] : '_self'; ?>"><?php echo $button['title']; ?></a>
                                    <?php }
                                } ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>

            </div>
        </div>
    </header>
