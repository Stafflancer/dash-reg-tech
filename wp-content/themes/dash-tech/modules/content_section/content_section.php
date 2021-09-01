<?php if (have_rows('content_section_blocks')) {
    wp_enqueue_style('content_section_styles', get_template_directory_uri() . '/static/css/modules/content_section/content_section.css', '', '', 'all'); ?>
    <section class="content-section">
        <div class="container">
            <div class="blocks">
                <?php while (have_rows('content_section_blocks')) : the_row(); ?>
                    <?php
                    $title = get_sub_field('title');
                    $left_col_content = get_sub_field('left_col_content');
                    $right_col_content = get_sub_field('right_col_content'); ?>

                    <div class="block">
                        <?php if ($title) { ?>
                            <h4 class="title">
                                <?php echo $title; ?>
                            </h4>
                        <?php }
                        if ($left_col_content || $right_col_content) { ?>
                            <div class="cols">
                                <?php if ($left_col_content) { ?>
                                    <div class="col">
                                        <?php echo $left_col_content; ?>
                                    </div>
                                <?php }
                                if ($right_col_content) { ?>
                                    <div class="col">
                                        <?php echo $right_col_content; ?>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php } ?>