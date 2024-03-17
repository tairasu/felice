<?php


class Piano_Menu_Walker extends Walker_Nav_Menu {
    // piano sequence
    private $keyboard_layout = ['w', 'b', 'w', 'b', 'w', 'w', 'b', 'w', 'b', 'w', 'b', 'w', 'b'];
    private $key_index = 0;

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        if ($depth === 0) { // only apply piano layout to top-level items
            // div container start
            $output .= '<div class="relative top-0">'; // Adjust the right margin as necessary
            // check if the next key in the layout is black and insert it if necessary
            if ($this->keyboard_layout[$this->key_index % count($this->keyboard_layout)] === 'b') {
                // black key
                $output .= '<div class="absolute w-10 h-28 rounded-lg z-10 bg-gray-700 shadow-sm -ml-6"></div>';
                $this->key_index++;
            }
    
            // white key
            $output .= sprintf('<li class="bg-white/75 border border-orange-900/20 rounded-lg h-48 w-20 shadow-xl hover:shadow-md p-2 hover:bg-orange-100 hover:scale-95 transition duration-200 ease-in-out"><a href="%s" class="flex font-bold h-full w-full items-end justify-center break-keep text-center">%s</a></li>',
                esc_url($item->url),
                esc_html($item->title)
            );
    
            // container div end
            $output .= '</div>';
    
            $this->key_index++;
        }
    }
}

class Mobile_Piano_Menu_Walker extends Walker_Nav_Menu {
    private $keyboard_layout = ['w', 'b', 'w', 'b', 'w', 'w', 'b', 'w', 'b', 'w', 'b', 'w', 'b'];
    private $key_index = 0;
    
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
    
        if ($depth === 0) {
            if ($this->keyboard_layout[$this->key_index % count($this->keyboard_layout)] === 'b') {
                $output .= '<div class="absolute w-20 h-8 rounded-lg z-10 -mt-4 bg-gray-700 -mr-4 shadow-sm right-0"></div>';
                $this->key_index++;
            }
    
            $output .= sprintf('<li class="pl-4 bg-white border border-orange-900/20 rounded-lg h-16 w-36 shadow-lg p-2 hover:bg-orange-100 hover:scale-95 transition duration-200 ease-in-out"><a href="%s" class="flex font-bold h-full w-full items-center justify-start break-keep text-center">%s</a></li>',
                esc_url($item->url),
                esc_html($item->title)
            );
    
            $this->key_index++;
        }
    }
}