<?php
$meet_the_team_title = get_sub_field('meet_the_team_title');
$meet_the_team_subtitle = get_sub_field('meet_the_team_subtitle');
$meet_the_team_logo = get_sub_field('meet_the_team_logo');
$meet_the_team_teammates = get_sub_field('meet_the_team_teammates');

if ($meet_the_team_title || $meet_the_team_subtitle || $meet_the_team_logo || !empty($meet_the_team_teammates)) {
    wp_enqueue_style('meet_the_team_styles', get_template_directory_uri() . '/static/css/modules/meet_the_team/meet_the_team.css', '', '', 'all'); ?>

    <section class="meet-the-team">
        <div class="container">
            <div class="holder">
                <?php if ($meet_the_team_title || $meet_the_team_subtitle) { ?>
                    <div class="title-holder">
                        <?php if ($meet_the_team_title) { ?>
                            <h3>
                                <?php echo $meet_the_team_title; ?>
                            </h3>
                        <?php }
                        if ($meet_the_team_subtitle) { ?>
                            <div class="subtitle">
                                <?php echo $meet_the_team_subtitle; ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php }
                if ($meet_the_team_logo) { ?>
                    <div class="logo-holder">
                        <?php echo wp_get_attachment_image($meet_the_team_logo, 'wp_lg'); ?>
                    </div>
                <?php }
                if (!empty($meet_the_team_teammates)) { ?>
                    <div class="teammates-holder">
                        <?php foreach ($meet_the_team_teammates as $item) {
                            $post_id = $item->ID;
                            $post_title = $item->post_title;
                            $teammate_subtitle = get_field('teammate_subtitle', $item); ?>
                            <div class="teammate">
                                <a class="holder" href="<?php echo get_the_permalink($post_id); ?>">

                                    <?php if (has_post_thumbnail($post_id)) { ?>
                                        <div class="thumbnail">
                                            <?php echo get_the_post_thumbnail($post_id, 'wp_sq_2'); ?>
                                        </div>
                                    <?php } ?>
                                    <div class="title">
                                        <h5><?php echo $post_title; ?></h5>
                                    </div>
                                    <?php if ($teammate_subtitle) { ?>
                                        <div class="subtitle">
                                            <?php echo $teammate_subtitle; ?>
                                        </div>
                                    <?php } ?>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>