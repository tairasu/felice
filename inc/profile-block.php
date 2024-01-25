<?php

/**
 * Template Name: Profile Block
 *
 * @package felice
 */

// Retrieve custom fields/meta for the profile using ACF functions.
$profile_photo = get_field('profile_photo');
$full_name = get_field('profile_name');
$department_title = get_field('profile_title');
$about_sections = get_field('profile_section_text'); // Assume this returns an array of sections with title and content.

get_header();
?>

<div class="container mx-auto my-6 p-4">
    <h1 class="text-xl font-bold mb-4"><?php echo esc_html($department_title); ?></h1>
    <div class="flex flex-wrap md:flex-nowrap">
        <div class="w-full md:w-1/4">
            <img src="<?php echo esc_url($profile_photo['url']); ?>" alt="<?php echo esc_attr($profile_photo['alt']); ?>" class="rounded-full w-32 h-32 object-cover">
        </div>
        <div class="w-full md:w-3/4 md:pl-4">
            <h2 class="text-lg font-semibold"><?php echo esc_html($full_name); ?></h2>
            <?php if($about_sections): ?>
                <?php foreach ($about_sections as $section) : ?>
                    <div class="my-2">
                        <h3 class="text-md font-semibold"><?php echo esc_html($section['title']); ?></h3>
                        <p><?php echo wp_kses_post($section['content']); ?></p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
get_footer();
?>