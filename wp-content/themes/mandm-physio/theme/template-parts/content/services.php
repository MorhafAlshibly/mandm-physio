<?php
$services = [
    [
        'image' => '/2025/06/physiotherapy.jpg',
        'alt' => __('Physiotherapy services', 'mandm-physio'),
        'title' => __('Physiotherapy', 'mandm-physio'),
        'desc' => __('Our physiotherapy services are designed to help you recover from injuries, manage pain, and improve your overall physical health. We offer personalized treatment plans tailored to your specific needs.', 'mandm-physio'),
    ],
    [
        'image' => '/2025/06/massaging.jpg',
        'alt' => __('Massaging services', 'mandm-physio'),
        'title' => __('Massaging therapy', 'mandm-physio'),
        'desc' => __('Our physiotherapy services are designed to help you recover from injuries, manage pain, and improve your overall physical health. We offer personalized treatment plans tailored to your specific needs.', 'mandm-physio'),
    ],
    [
        'image' => '/2025/06/cupping.jpg',
        'alt' => __('Cupping services', 'mandm-physio'),
        'title' => __('Cupping therapy', 'mandm-physio'),
        'desc' => __('Our physiotherapy services are designed to help you recover from injuries, manage pain, and improve your overall physical health. We offer personalized treatment plans tailored to your specific needs.', 'mandm-physio'),
    ],
];
$baseurl = wp_upload_dir()['baseurl'];
?>

<div id="services" class="grid grid-cols-1 justify-items-center items-center py-30">
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-15 md:gap-8 w-full">
        <?php foreach ($services as $service): ?>
            <div class="grid col-span-1 grid-cols-1 gap-4">
                <div>
                    <img src="<?php echo esc_url($baseurl . $service['image']); ?>"
                        alt="<?php echo esc_attr($service['alt']); ?>" class="w-full h-auto rounded-lg" />
                </div>
                <div class="mt-2">
                    <h2 class="text-2xl font-[600] text-[#000000]">
                        <?php echo esc_html($service['title']); ?>
                    </h2>
                </div>
                <div class="text-lg text-[#999999]">
                    <p>
                        <?php echo esc_html($service['desc']); ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>