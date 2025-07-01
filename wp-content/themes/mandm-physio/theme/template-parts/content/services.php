<div id="services" class="scroll-mt-30 grid grid-cols-1 justify-items-center items-center gap-15">
    <div data-aos="fade-in" class="bg-[#EEEEEE] h-0.5 w-full"></div>

    <div data-aos="fade-up">
        <h2 class="text-3xl font-[700] text-center text-[#000000]">
            <?php esc_html_e('Our Services', 'mandm-physio'); ?>
        </h2>
    </div>


    <div class="grid grid-cols-1 sm:grid-cols-3 gap-15 md:gap-8 w-full">

        <?php
        $service_query = new WP_Query([
            'post_type' => 'service',
            'posts_per_page' => -1,
        ]);
        if ($service_query->have_posts()):
            while ($service_query->have_posts()):
                $service_query->the_post();
                $service_name = get_post_meta(get_the_ID(), 'service_name', true);
                $service_image_id = get_post_meta(get_the_ID(), 'service_image', true);
                $service_image_url = $service_image_id ? wp_get_attachment_url($service_image_id) : '';
                $service_desc = get_post_meta(get_the_ID(), 'service_description', true);
                ?>
                <div data-aos="fade-up" class="grid col-span-1 grid-cols-1 gap-4">
                    <div>
                        <?php if ($service_image_url): ?>
                            <img src="<?php echo esc_url($service_image_url); ?>" alt="<?php echo esc_attr($service_name); ?>"
                                class="w-full h-auto rounded-lg" />
                        <?php endif; ?>
                    </div>
                    <div class="mt-2">
                        <h2 class="text-2xl font-[600] text-[#000000]">
                            <?php echo esc_html($service_name); ?>
                        </h2>
                    </div>
                    <div class="text-lg text-[#999999]">
                        <p>
                            <?php echo esc_html($service_desc); ?>
                        </p>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</div>