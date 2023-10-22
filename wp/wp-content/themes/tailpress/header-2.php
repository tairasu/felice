<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-4 text-gray-900 antialiased'); ?>>

	<?php do_action('tailpress_site_before'); ?>

	<a href="/contact">
		<button class="lg:hidden fixed bottom-6 right-6 bg-1 text-4 hover:bg-3 hover:text-1 font-bold transition duration-300 p-6 shadow-lg rounded-full z-30">
			お問い合わせ
		</button>
	</a>
	<a href="/contact">
	<button class="fixed bottom-12 right-12 bg-1 text-4 hover:bg-3 hover:text-1 font-bold p-6 rounded-full z-30 shadow-lg transition duration-300 hidden lg:block">
		無料で体験レッスン
	</button>
	</a>

	<div id="page" class="min-h-screen flex flex-col">

    <?php do_action('tailpress_header'); ?>

<header class="bg-header lg:bg-center bg-bottom bg-fixed lg:bg-cover bg-auto w-screen h-screen z-30">
    <div class="backdrop-blur-sm bg-4/50 w-full h-full">
        <div id="header-banner" class="bg-4 bg-opacity-75 shadow-lg backdrop-blur fixed w-full transform transition duration-300 ease-in-out z-50">
            <div class="mx-auto container">
                <div id="header-content" class="lg:flex lg:justify-between justify-center lg:items-center py-6 transition duration-300 ease-in-out">
                    <div class="flex items-center right-0 justify-between">
                        <div>
                            <?php if (has_custom_logo()) { ?>
                                <?php the_custom_logo(); ?>
                            <?php } else { ?>
                                <a href="<?php echo get_bloginfo('url'); ?>" class="font-extrabold text-lg uppercase">
                                    <img id="logo" src="http://felice.school/wp-content/uploads/2023/10/logo-1.png" alt="logo" class="h-24 drop-shadow-lg transition duration-300 ease-in-out">
                                </a>
                            <?php } ?>
                        </div>

                        <div class="lg:hidden">
                            <a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
                                <svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                                        <g id="icon-shape">
                                            <path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z" id="Combined-Shape" fill="#a18160"></path>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <?php
                    wp_nav_menu(
                        array(
                            'container_id'    => 'primary-menu',
                            'container_class' => 'hidden bg-4/50 rounded-lg mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block z-50',
                            'menu_class'      => 'lg:flex items-center justify-center',
                            'menu_item'	      => 'flex flex-col justify-center',
                            'theme_location'  => 'primary',
                            'li_class_0'	  => 'flex flex-col justify-center items-center',
                            'li_class_1'	  => 'flex flex-col justify-center items-center',
                            'link_before'     => '<button class="lg:mx-4 lg:relative lg:group lg:my-0 my-1 bg-1 text-4 drop-shadow-md antialiased rounded-lg lg:w-32 w-48 min-w-32 shadow-lg p-4 hover:bg-3/50 hover:backdrop-blur hover:text-1 transition duration-200">',
                            'link_after'      => '</button>',
                            'submenu_class'   => 'lg:hidden lg:w-48 lg:max-w-xl block mx-auto',
                            'fallback_cb'     => false,
                        )
                    );
                    ?>
                </div>
            </div>
        </div>
                <div class="h-40"></div>

			</div>
		</header>

		<script src="wp-content/themes/tailpress/resources/js/app.js"></script>

