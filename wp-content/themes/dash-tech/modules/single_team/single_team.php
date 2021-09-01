<?php wp_enqueue_style('single_team_styles', get_template_directory_uri() . '/static/css/modules/single_team/single_team.css', '', '', 'all'); ?>

<section class="single-team-section">
    <div class="container">
        <?php $about_page_id = get_page_by_title('About');
        if ($about_page_id) { ?>
            <div class="breadcrumbs">
                <a href="<?php echo get_permalink($about_page_id); ?>">About</a>
            </div>
        <?php } ?>

        <div class="cols">
            <?php if (has_post_thumbnail()) { ?>
                <div class="left-col">
                    <div class="thumbnail">
                        <?php the_post_thumbnail('wp_sq_2'); ?>
                    </div>
                    <?php $teammate_linkedin_link = get_field('teammate_linkedin_link');
                    if($teammate_linkedin_link) { ?>
                        <a class="linkedin" href="<?php echo $teammate_linkedin_link; ?>">
                            <svg viewBox="-28 0 512 512.00098" xmlns="http://www.w3.org/2000/svg"><path d="m401.046875 189.761719c-20.632813-17.222657-46.851563-26.433594-73.832031-25.933594-16.75.308594-33.117188 4.347656-47.949219 11.660156v-7.101562c0-9.242188-7.519531-16.757813-16.757813-16.757813h-87.882812c-9.242188 0-16.757812 7.515625-16.757812 16.757813v326.855469c0 9.242187 7.519531 16.757812 16.757812 16.757812h89.621094c8.292968 0 15.019531-6.726562 15.019531-15.019531v-195.53125c0-16.90625 13.753906-30.65625 30.65625-30.65625 16.90625 0 30.65625 13.75 30.65625 30.65625v195.527343c0 8.296876 6.726563 15.023438 15.023437 15.023438h85.496094c8.296875 0 15.023438-6.726562 15.023438-15.023438v-189.570312c0-45.546875-20.074219-88.429688-55.074219-117.644531zm0 0"/><path d="m104.359375 151.625h-86.3125c-9.675781 0-17.546875 7.871094-17.546875 17.546875v325.285156c0 9.671875 7.871094 17.542969 17.546875 17.542969h86.3125c9.671875 0 17.542969-7.871094 17.542969-17.542969v-325.285156c0-9.675781-7.871094-17.546875-17.542969-17.546875zm0 0"/><path d="m61.203125 0c-33.75 0-61.203125 27.453125-61.203125 61.199219 0 33.75 27.453125 61.203125 61.203125 61.203125 33.742187 0 61.199219-27.453125 61.199219-61.203125 0-33.746094-27.453125-61.199219-61.199219-61.199219zm0 0"/></svg>
                        </a>
                    <?php } ?>
                </div>
            <?php } ?>
            <div class="content-holder">
                <div class="title">
                    <h2 class="gold-gradient">
                        <?php the_title(); ?>
                    </h2>
                </div>
                <?php $teammate_subtitle = get_field('teammate_subtitle');
                if ($teammate_subtitle) { ?>
                    <div class="subtitle">
                        <?php echo $teammate_subtitle; ?>
                    </div>
                <?php } ?>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>

    </div>
</section>