<?php

$profile_photo = !empty($attributes['profile_photo']) ? $attributes['profile_photo'] : null;
$full_name = !empty($attributes['profile_name']) ? esc_html($attributes['profile_name']) : '';
$profile_title = !empty($attributes['profile_title']) ? esc_html($attributes['profile_title']) : '';

echo '<div class="container mx-auto my-6 p-10 bg-orange-50 shadow-lg rounded-lg">';
  echo '<div class="flex flex-wrap md:flex-nowrap">';

  if ($profile_photo) {
      printf(
          '<div class="w-full md:w-1/4 flex justify-center">
              <img src="%s" alt="%s" class="rounded-b-md rounded-t-full w-48 lg:h-3/4 h-64 object-cover object-center ring-4 ring-yellow-700 shadow-sm hover:scale-105 duration-300 hover:shadow-lg">
          </div>',
          esc_url($profile_photo['url']),
          esc_attr($profile_photo['alt'])
      );
  }

  echo '<div class="w-full md:w-3/4 md:pl-8">';
  printf('<p class="text-4xl font-bold my-4">%s</p>', $profile_title);
  printf('<h2 class="font-semibold mb-2">%s</h2>', $full_name);

// Check if the repeater field exists and has values
if (!empty($attributes['repeater']) && is_array($attributes['repeater'])) {
    // Loop through each set of sub-fields in the repeater
    foreach ($attributes['repeater'] as $row) {

        $section_title = !empty($row['profile_section_title']) ? esc_html($row['profile_section_title']) : '';
        $section_text = !empty($row['profile_section_text']) ? esc_html($row['profile_section_text']) : '';

        // Output the section title and text if they exist
        if ($section_title || $section_text) {
            printf(
                '<hr class="my-2 border-gray-300">
                <div class="my-2">
                    <h3 class="text-md bg-4 shadow-inner w-fit p-2 my-2 justify-center rounded-lg font-semibold">%s</h3>
                    <p>%s</p>
                </div>',
                $section_title,
                $section_text
            );
        }
    }
}

    echo '</div>'; // Close .w-full.md:w-3/4.md:pl-4
  echo '</div>'; // Close .flex.flex-wrap.md:flex-nowrap
echo '</div>'; // Close .container.mx-auto.my-6.p-4.bg-orange-50.shadow-lg.rounded-lg

