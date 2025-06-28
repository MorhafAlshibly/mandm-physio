<div class="grid grid-flow-col gap-8 justify-items-center">

    <?php
    $social_query = new WP_Query([
        'post_type' => 'social',
        'posts_per_page' => -1,
    ]);
    if ($social_query->have_posts()):
        while ($social_query->have_posts()):
            $social_query->the_post();
            $social_name = get_post_meta(get_the_ID(), 'social_name', true);
            $social_icon = get_post_meta(get_the_ID(), 'social_icon', true);
            $social_link = get_post_meta(get_the_ID(), 'social_link', true);
            ?>
            <div>
                <a href="<?php echo esc_url($social_link); ?>" target="_blank" rel="noopener noreferrer"
                    class="text-[#999999] hover:text-black transition"
                    aria-label="<?php esc_attr_e($social_name, 'mandm-physio'); ?>">
                    <?php echo do_shortcode('[icon name="' . esc_attr($social_icon) . '" prefix="fa-brands"]'); ?>
                </a>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
    endif;
    ?>
</div>