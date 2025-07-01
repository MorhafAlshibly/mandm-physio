<div id="aboutus" data-aos="fade-right" class="scroll-mt-30 grid grid-cols-1 justify-items-start items-center gap-6">
    <div>
        <h2 class="text-2xl font-[700] text-center text-[#000000]">
            <?php esc_html_e('About Us', 'mandm-physio'); ?>
        </h2>
    </div>

    <div>
        <div class="max-w-[800px] mx-auto text-lg text-[#000000] grid grid-cols-1 gap-4">
            <?php
            $aboutus = get_posts([
                'post_type' => 'about_us_content',
                'posts_per_page' => -1,
            ]);
            foreach ($aboutus as $post) {
                $content = get_post_meta($post->ID, 'about_us_content', true);
                if ($content) {
                    echo '<p>' . nl2br(esc_html($content)) . '</p>';
                }
            }
            ?>
        </div>
    </div>

    <div>
        <?php get_template_part("template-parts/content/socials", "socials"); ?>
    </div>


</div>