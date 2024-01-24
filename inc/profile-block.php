<?php

/**
 * Template Name: Profile Block
 *
 * @package WordPress
 * @subpackage felice
 * @since Felice 1.0
 */


// Retrieve custom fields/meta for the profile.
$profile_photo_url = get_post_meta(get_the_ID(), 'profile_photo', true);
$full_name = get_post_meta(get_the_ID(), 'full_name', true);
$department_title = get_post_meta(get_the_ID(), 'department_title', true);
$about_sections = get_post_meta(get_the_ID(), 'about_sections', true); // Assume this returns an array of sections with title and content.

get_header();
?>

<div class="container mx-auto my-6 p-4">
    <h1 class="text-xl font-bold mb-4"><?php echo esc_html($department_title); ?></h1>
    <div class="flex flex-wrap md:flex-nowrap">
        <div class="w-full md:w-1/4">
            <img src="<?php echo esc_url($profile_photo_url); ?>" alt="Profile Photo" class="rounded-full w-32 h-32 object-cover">
        </div>
        <div class="w-full md:w-3/4 md:pl-4">
            <h2 class="text-lg font-semibold"><?php echo esc_html($full_name); ?></h2>
            <?php foreach ($about_sections as $section) : ?>
                <div class="my-2">
                    <h3 class="text-md font-semibold"><?php echo esc_html($section['title']); ?></h3>
                    <p><?php echo esc_html($section['content']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php
get_footer();
?>