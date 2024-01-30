<?php

$profile_photo = !empty($attributes['profile_photo']) ? $attributes['profile_photo'] : null;
$full_name = !empty($attributes['profile_name']) ? esc_html($attributes['profile_name']) : '';
$department_title = !empty($attributes['profile_title']) ? esc_html($attributes['profile_title']) : '';
$about_sections = !empty($attributes['profile_section_text']) ? $attributes['profile_section_text'] : [];

?>

<div class="container mx-auto my-6 p-4 bg-white rounded-lg">
    <h1 class="text-xl font-bold mb-4"><?php echo $department_title; ?></h1>
    <div class="flex flex-wrap md:flex-nowrap">
        <?php if ($profile_photo): ?>
        <div class="w-full md:w-1/4">
            <img src="<?php echo esc_url($profile_photo['url']); ?>" alt="<?php echo esc_attr($profile_photo['alt']); ?>" class="rounded-full w-32 h-32 object-cover">
        </div>
        <?php endif; ?>
        <div class="w-full md:w-3/4 md:pl-4">
            <h2 class="text-lg font-semibold"><?php echo $full_name; ?></h2>
            <?php if(!empty($about_sections)): ?>
                <?php foreach ($about_sections as $section) : ?>
                    <?php if (is_array($section) && isset($section['title']) && isset($section['content'])): ?>
                    <div class="my-2">
                        <h3 class="text-md font-semibold"><?php echo esc_html($section['title']); ?></h3>
                        <p><?php echo wp_kses_post($section['content']); ?></p>
                    </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>