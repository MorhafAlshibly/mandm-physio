<div id="testimonials" class="grid grid-cols-1 justify-items-center items-center py-30 gap-15">

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

    <?php
    // Define testimonials as an array of objects
    $testimonials = [
        (object) [
            'text' => __('I had a fantastic experience with M&M Physio. The team was professional, attentive, and really helped me recover from my injury.', 'mandm-physio'),
            'author' => __('John Doe', 'mandm-physio'),
            'location' => __('Leicester', 'mandm-physio'),

        ],
        (object) [
            'text' => __('The staff at M&M Physio are knowledgeable and caring. My recovery was much faster than I expected.', 'mandm-physio'),
            'author' => __('Jane Smith', 'mandm-physio'),
            'location' => __('Yeovil', 'mandm-physio'),
        ],
        (object) [
            'text' => __('Highly recommend M&M Physio! They provided excellent care and support throughout my treatment.', 'mandm-physio'),
            'author' => __('Emily Johnson', 'mandm-physio'),
            'location' => __('Yeovil', 'mandm-physio'),
        ],
        (object) [
            'text' => __('Great experience from start to finish. Friendly staff and effective treatment.', 'mandm-physio'),
            'author' => __('Michael Brown', 'mandm-physio'),
            'location' => __('Leicester', 'mandm-physio'),
        ],
    ];
    ?>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-15 sm:gap-8 w-full">
        <?php foreach ($testimonials as $testimonial): ?>
            <div class="grid grid-cols-1">
                <div class="bg-[#F5F5F5] p-6 rounded-lg aspect-square">
                    <div class="grid grid-rows-1 gap-4 justify-items-between h-full text-md font-medium ">
                        <div class="text-[#777777]">
                            <p><?php echo esc_html($testimonial->text); ?></p>
                        </div>
                        <div class="grid grid-cols-1">
                            <div>
                                <h3 class="text-[#000000]">
                                    <?php echo esc_html($testimonial->author); ?>
                                </h3>
                            </div>
                            <div>
                                <h3 class="text-[#999999]">
                                    <?php echo esc_html($testimonial->location); ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</div>