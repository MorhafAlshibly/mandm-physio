<div class="grid grid-cols-1 justify-items-center items-center py-15">
    <div class="grid grid-cols-1 gap-2">
        <div>
            <h1 class="text-4xl font-[700] text-center text-[#000000]">
                <?php echo esc_html(get_bloginfo('description')); ?>
            </h1>
        </div>
        <div>
            <h1 class="text-4xl font-[700] text-center text-[#999999]">
                <?php esc_html_e('Physiotherapy in Leicester & Yeovil.', 'mandm-physio'); ?>
            </h1>
        </div>
    </div>
    <div class="grid grid-cols-1 mt-17">
        <div>
            <img src="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2025/06/hero.jpg'); ?>"
                alt="<?php esc_attr_e('Hero Image', 'mandm-physio'); ?>" class="w-full h-auto rounded-lg" />
        </div>
    </div>

</div>