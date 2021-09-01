<?php
$video_block_title = get_sub_field('video_block_title');
$video_block_description = get_sub_field('video_block_description');
$video_block_button = get_sub_field('video_block_button');
$video_block_video = get_sub_field('video_block_video');
$video_block_bgimage = get_sub_field('video_block_bgimage');

if ($video_block_title || $video_block_description || $video_block_button || $video_block_video || $video_block_bgimage) {
    wp_enqueue_style('video_block_styles', get_template_directory_uri() . '/static/css/modules/video_block/video_block.css', '', '', 'all');
    wp_enqueue_script('video_block_js', get_template_directory_uri() . '/static/js/modules/video_block/video_block.js', '', '', true); ?>
    <section class="video-block"
             <?php if ($video_block_bgimage) { ?>style="background-image: url('<?php echo $video_block_bgimage; ?>')"<?php } ?>>
        <div class="container">
            <div class="holder">
                <div class="text-col">
                    <?php if ($video_block_title) { ?>
                        <h2 class="custom-gold-gradient">
                            <?php echo $video_block_title; ?>
                        </h2>
                    <?php }
                    if ($video_block_description) { ?>
                        <div class="description">
                            <?php echo $video_block_description; ?>
                        </div>
                    <?php }
                    if ($video_block_button) { ?>
                        <a href="<?php echo $video_block_button['url']; ?>"
                           target="<?php echo !empty($video_block_button['target']) ? $video_block_button['target'] : '_self'; ?>" class="gold-border-btn">
                            <?php echo $video_block_button['title']; ?>
                        </a>
                    <?php } ?>
                </div>

                <?php if ($video_block_video) { ?>
                    <div class="video-col">
                        <button class="open-video-popup-btn">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve">
                        <path id="XMLID_308_" d="M37.728,328.12c2.266,1.256,4.77,1.88,7.272,1.88c2.763,0,5.522-0.763,7.95-2.28l240-149.999
                            c4.386-2.741,7.05-7.548,7.05-12.72c0-5.172-2.664-9.979-7.05-12.72L52.95,2.28c-4.625-2.891-10.453-3.043-15.222-0.4
                            C32.959,4.524,30,9.547,30,15v300C30,320.453,32.959,325.476,37.728,328.12z"/>
                        </svg>
                        </button>
                    </div>
                <?php } ?>
            </div>
        </div>

        <?php if ($video_block_video) { ?>
            <div class="video-popup">
                <div class="container">
                    <div class="popup-holder">
                        <button class="close-video-popup-btn">
                            <svg style="fill:white" enable-background="new 0 0 386.667 386.667" height="512"
                                 viewBox="0 0 386.667 386.667" width="512" xmlns="http://www.w3.org/2000/svg">
                                <path d="m386.667 45.564-45.564-45.564-147.77 147.769-147.769-147.769-45.564 45.564 147.769 147.769-147.769 147.77 45.564 45.564 147.769-147.769 147.769 147.769 45.564-45.564-147.768-147.77z"/>
                            </svg>
                        </button>

                        <?php echo $video_block_video; ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </section>
<?php } ?>