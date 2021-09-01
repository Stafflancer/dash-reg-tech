<?php
$solution_cards_title = get_sub_field('solution_cards_title');
$solution_cards_description = get_sub_field('solution_cards_description');

if ($solution_cards_title || $solution_cards_description || have_rows('solution_cards_cards')) {
    wp_enqueue_style('solution_cards_styles', get_template_directory_uri() . '/static/css/modules/solution_cards/solution_cards.css', '', '', 'all'); ?>
    <section class="solution-cards">
        <div class="container">
            <div class="holder">
                <div class="text-holder">
                    <?php if ($solution_cards_title) { ?>
                        <h2 class="custom-gold-gradient">
                            <?php echo $solution_cards_title; ?>
                        </h2>
                    <?php }
                    if ($solution_cards_description) { ?>
                        <div class="description">
                            <?php echo $solution_cards_description; ?>
                        </div>
                    <?php } ?>
                </div>

                <?php if (have_rows('solution_cards_cards')) : ?>
                    <div class="cards-holder">
                        <?php while (have_rows('solution_cards_cards')) : the_row(); ?>
                            <?php
                            $title = get_sub_field('title');
                            $content = get_sub_field('content');
                            $button = get_sub_field('button');
                            $grey_card = get_sub_field('grey_card'); ?>

                            <div class="card-holder">
                                <div class="card <?php echo $grey_card ? 'grey' : ''; ?>">
                                    <?php if ($title) { ?>
                                        <div class="title-holder">
                                            <h4 class="gold-gradient"><?php echo $title; ?></h4>
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 492.004 492.004"
                                                 style="enable-background:new 0 0 492.004 492.004;"
                                                 xml:space="preserve">
                                                    <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12
                                                        c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028
                                                        c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265
                                                        c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"/>
                                            </svg>
                                        </div>
                                    <?php }
                                    if ($content) { ?>
                                        <div class="content">
                                            <?php echo $content; ?>
                                        </div>
                                    <?php }
                                    if ($button) { ?>
                                        <div class="button-holder">
                                            <a href="<?php echo $button['url']; ?>" class="gold-border-btn"
                                               target="<?php echo !empty($button['target']) ? $button['target'] : '_self'; ?>"><?php echo $button['title']; ?></a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php } ?>