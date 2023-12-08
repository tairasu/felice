<?php

class Piano_Menu_Walker extends Walker_Nav_Menu {
    // piano sequence
    private $keyboard_layout = ['w', 'b', 'w', 'b', 'w', 'w', 'b', 'w', 'b', 'w', 'b', 'w', 'b'];
    private $key_index = 0;

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        if ($depth === 0) { // only apply piano layout to top-level items
            // div container start
            $output .= '<div class="relative inline-block">'; // Adjust the right margin as necessary
    
            // check if the next key in the layout is black and insert it if necessary
            if ($this->keyboard_layout[$this->key_index % count($this->keyboard_layout)] === 'b') {
                // black key
                $output .= '<div class="absolute w-10 h-28 rounded-lg z-10 bg-gray-700 shadow-sm -ml-6 top-0"></div>';
                $this->key_index++;
            }
    
            // white key
            $output .= sprintf('<li class="pb-4 bg-orange-50 rounded-lg h-52 w-20 shadow-lg p-2 hover:bg-orange-100 hover:scale-95 transition duration-200 ease-in-out"><a href="%s" class="flex font-bold h-full w-full items-end justify-center break-keep text-center">%s</a></li>',
                esc_url($item->url),
                esc_html($item->title)
            );
    
            // container div end
            $output .= '</div>';
    
            $this->key_index++;
        }
    }
}