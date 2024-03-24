<?php


// Check if the 'faq' repeater is not empty and is an array
if (!empty($attributes['faq']) && is_array($attributes['faq'])) {
    echo '<div class="bg-white/50 rounded-lg shadow-lg mb-12 mt-6 ring-1 ring-yellow-700">';
        echo '<div class="mx-auto max-w-7xl px-6 py-12 sm:py-16 lg:px-4 lg:py-20">';
            echo '<div class="mx-auto max-w-4xl divide-y divide-gray-900/10">';
                echo '<h1 class="text-2xl font-bold leading-10 tracking-tight text-gray-900">よくある質問</h1>';
                echo '<dl class="mt-10 space-y-6 divide-y divide-gray-900/10">';

                // Initialize a counter for unique aria-controls and id attributes
                $counter = 0;

                // Loop through each item in the 'faq' repeater
                foreach ($attributes['faq'] as $item) {
                    // Extract the 'question' and 'answer' from the current item
                    $question = !empty($item['question']) ? $item['question'] : null;
                    $answer = !empty($item['answer']) ? $item['answer'] : null;

                    echo '<div class="pt-6">';
                        echo '<dt>';
                            echo '<div class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-' . $counter . '" aria-expanded="false">';
                                echo '<h3 class="text-base font-semibold leading-7">' . $question . '</h3>';

                            echo '</div>';
                        echo '</dt>';
                        echo '<dd class="mt-2" id="faq-' . $counter . '">';
                            echo '<p class="text-base text-justify leading-7 text-gray-700">' . $answer . '</p>';
                        echo '</dd>';
                    echo '</div>';

                    // Increment the counter for the next item
                    $counter++;
                }
                // End of questions loop
                echo '</dl>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
}
