<?php
/**
 * Search & Filter Pro
 *
 * Sample Results Template
 *
 * @package   Search_Filter
 * @author    Ross Morsali
 * @link      https://searchandfilter.com
 * @copyright 2018 Search & Filter
 *
 * Note: these templates are not full page templates, rather
 * just an encaspulation of the your results loop which should
 * be inserted in to other pages by using a shortcode - think
 * of it as a template part
 *
 * This template is an absolute base example showing you what
 * you can do, for more customisation see the WordPress docs
 * and using template tags -
 *
 * http://codex.wordpress.org/Template_Tags
 *
 */

// If this file is called directly, abort.
if (!defined('ABSPATH')) {
    exit;
}

if ($query->have_posts()) { ?>
    <div class="posts-holder">
        <?php while ($query->have_posts()) {
            $query->the_post(); ?>
            <a class="post-card" href="<?php the_permalink(); ?>">
                <div class="holder">
                    <?php if (has_post_thumbnail()) { ?>
                        <div class="thumbnail">
                            <?php echo the_post_thumbnail("wp_post_thumbnail"); ?>
                        </div>
                    <?php } ?>
                    <div class="content-holder">
                        <h6><?php the_title(); ?></h6>
                        <div class="excerpt">
                            <?php the_excerpt() ?>
                        </div>
                        <div class="button-holder">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1"
                                     x="0px" y="0px" viewBox="0 0 512 512"
                                     style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                <polygon
                                                        points="289.391,222.609 289.391,0 222.609,0 222.609,222.609 0,222.609 0,289.391 222.609,289.391 222.609,512     289.391,512 289.391,289.391 512,289.391 512,222.609   "/>
                                        </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </a>
            <?php
        } ?>
    </div>

    <div class="pagination-holder">
        <span>
            Viewing 1-<?php echo $query->post_count; ?> of <?php echo $query->found_posts; ?>
        </span>

        <div class="links">
            <?php previous_posts_link('Newer posts'); ?>
            <?php next_posts_link('Older posts', $query->max_num_pages); ?>
        </div>
    </div>
    <?php
} else {
    echo "No Results Found";
}
?>