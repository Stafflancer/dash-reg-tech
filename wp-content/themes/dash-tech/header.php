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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/anim/animate1.css">
    <?php wp_head() ?>
    <style>
        #input_1_1:focus, #input_1_6:focus, #input_1_4:focus, #input_1_8:focus, #input_2_1:focus, 
        #input_3_2:focus, #input_3_3:focus, #input_3_5:focus, #input_3_6:focus, #input_3_7:focus, #input_3_9:focus, #input_3_10:focus,
        #input_4_2:focus:focus, #input_4_3:focus, #input_4_5:focus, #input_4_6:focus, #input_4_7:focus, #input_4_9:focus,
        #input_5_2:focus, #input_5_3:focus, #input_5_5:focus, #input_5_6:focus, #input_5_7:focus, #input_5_9:focus, #input_5_10:focus {
            border: 1px solid #ec3723 !important;
            outline: none !important;
        }

        #g_preloader {
            position: fixed;
            display: block;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100vh;
            background: #413e3d;
            opacity: 1;
            transition: .35s;
            z-index: 9999999;
        }
        #g_preloader.ok {
            opacity: 0;
            transition: .35s;
        }

        .three {
          width: 50px;
          height: 50px;
          margin: 280px auto;
          border-radius: 50%;
          border-top: 2px solid #ec3723;
          border-right: 2px solid transparent;
          animation: anim3 .7s linear infinite;
        }

        @keyframes anim3 {
          to {
            transform: rotate(360deg);
          }
        }
    </style>
</head>

<body <?php body_class() ?>>
<?php wp_body_open() ?>

<div id="g_preloader"><div class="three"></div></div>

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
