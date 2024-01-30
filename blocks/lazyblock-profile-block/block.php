<?php

$profile_photo = !empty($attributes['profile_photo']) ? $attributes['profile_photo'] : null;
$full_name = !empty($attributes['profile_name']) ? esc_html($attributes['profile_name']) : '';
$profile_title = !empty($attributes['profile_title']) ? esc_html($attributes['profile_title']) : '';
$section_title = !empty($attributes['profile_section_title']) ? esc_html($attributes['profile_section_title']) : '';
$section_text = !empty($attributes['profile_section_text']) ? esc_html($attributes['profile_section_text']) : '';

echo '<div class="container mx-auto my-6 p-4 bg-orange-50 shadow-lg rounded-lg">';
  echo '<div class="flex flex-wrap md:flex-nowrap">';

  if ($profile_photo) {
      printf(
          '<div class="w-full md:w-1/4">
              <img src="%s" alt="%s" class="rounded-full w-32 h-32 object-cover">
          </div>',
          esc_url($profile_photo['url']),
          esc_attr($profile_photo['alt'])
      );
  }

  echo '<div class="w-full md:w-3/4 md:pl-4">';
    printf('<h1 class="text-xl font-bold mb-4">%s</h1>', $profile_title);
    printf('<h2 class="text-lg font-semibold mb-2">%s</h2>', $full_name);

    if ($section_title || $section_text) {
        printf(
            '<div class="my-2">
                <h3 class="text-md font-semibold">%s</h3>
                <p>%s</p>
            </div>',
            $section_title,
            $section_text
        );
    }

    echo '</div>'; // Close .w-full.md:w-3/4.md:pl-4
  echo '</div>'; // Close .flex.flex-wrap.md:flex-nowrap
echo '</div>'; // Close .container.mx-auto.my-6.p-4.bg-orange-50.shadow-lg.rounded-lg

