<div id="testimonials" class="scroll-mt-30 grid grid-cols-1 justify-items-center items-center gap-15">

    <div class="grid grid-cols-1 justify-items-center items-center">
        <div>
            <h2 class="text-3xl font-[700] text-center text-[#000000]">
                <?php esc_html_e('What clients say', 'mandm-physio'); ?>
            </h2>
        </div>

        <div>
            <h2 class="text-3xl font-[700] text-center text-[#999999]">
                <?php esc_html_e('Real stories and experiences.', 'mandm-physio'); ?>
            </h2>
        </div>


    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-15 sm:gap-8 w-full">
        <?php
        $testimonial_query = new WP_Query([
            'post_type' => 'testimonial',
            'posts_per_page' => -1,
        ]);
        if ($testimonial_query->have_posts()):
            while ($testimonial_query->have_posts()):
                $testimonial_query->the_post();
                $persons_name = get_post_meta(get_the_ID(), 'persons_name', true);
                $clinic_location = get_post_meta(get_the_ID(), 'clinic_location', true);
                $testimonial = get_post_meta(get_the_ID(), 'testimonial', true);
                ?>
                <div class="grid grid-cols-1">
                    <div class="bg-[#F5F5F5] p-6 rounded-lg aspect-square">
                        <div class="grid grid-rows-1 gap-4 justify-items-between h-full text-md font-medium ">
                            <div class="text-[#777777]">
                                <p><?php echo esc_html($testimonial); ?></p>
                            </div>
                            <div class="grid grid-cols-1">
                                <div>
                                    <h3 class="text-[#000000]">
                                        <?php echo esc_html($persons_name); ?>
                                    </h3>
                                </div>
                                <div>
                                    <h3 class="text-[#999999]">
                                        <?php echo esc_html($clinic_location); ?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</div>