<div class="scroll-mt-30 grid grid-cols-1 justify-items-center items-center">
    <div class="grid grid-cols-1 gap-2">
        <div data-aos="fade-right">
            <h1 class="text-4xl font-[700] text-center text-[#000000]">
                <?php echo esc_html(get_bloginfo('description')); ?>
            </h1>
        </div>
        <div data-aos="fade-left">
            <h1 class="text-4xl font-[700] text-center text-[#999999]">
                <?php esc_html_e('Physiotherapy in Leicester & Yeovil.', 'mandm-physio'); ?>
            </h1>
        </div>
    </div>



    <?php
    $hero_query = new WP_Query([
        'post_type' => 'hero_image',
        'posts_per_page' => -1,
    ]);
    if ($hero_query->have_posts()):
        while ($hero_query->have_posts()):
            $hero_query->the_post();
            $hero_image_id = get_post_meta(get_the_ID(), 'hero_image', true);
            $hero_image_url = $hero_image_id ? wp_get_attachment_url($hero_image_id) : '';
            ?>

            <div data-aos="zoom-out" class="grid grid-cols-1 mt-20">
                <div>
                    <?php if ($hero_image_url): ?>
                        <img src="<?php echo esc_url($hero_image_url); ?>" alt="<?php echo esc_attr("Hero image"); ?>"
                            class="w-full h-auto rounded-lg" />
                    <?php endif; ?>
                </div>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
    endif;
    ?>


</div>