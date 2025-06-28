<div id="locations" class="grid grid-cols-1 justify-items-start items-center py-30 gap-6">
    <div>
        <h2 class="text-2xl font-[700] text-center text-[#000000]">
            <?php esc_html_e('Our Locations', 'mandm-physio'); ?>
        </h2>
    </div>

    <div>
        <div class="max-w-[800px] mx-auto text-lg text-[#000000] grid grid-cols-1 gap-4">
            <?php
            $locations = get_posts([
                'post_type' => 'location_content',
                'posts_per_page' => -1,
            ]);
            foreach ($locations as $post) {
                $content = get_post_meta($post->ID, 'location_content', true);
                if ($content) {
                    echo '<p>' . nl2br(esc_html($content)) . '</p>';
                }
            }
            ?>
        </div>
    </div>


</div>