<!DOCTYPE html>
<html <?php language_attributes(); ?> class="">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-4 text-gray-900 antialiased'); ?>>

	<?php do_action('felice_site_before'); ?>

	<!--Contact button-->
	<?php if(!is_page('contact')): ?>
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
	<?php endif; ?>


	<div id="page" class="min-h-screen flex flex-col">

			<?php do_action('felice_header'); ?>

			<?php if(is_front_page()): ?>
			<header class="bg-header lg:bg-center bg-bottom bg-fixed sticky top-0 lg:bg-cover bg-auto w-screen h-screen z-30">
			<?php else: ?>
			<header class="lg:bg-center bg-bottom bg-fixed top-0 lg:bg-cover bg-auto w-screen h-0 z-30">
			<?php endif; ?>
				<div class="backdrop-blur-sm bg-4/50 w-full h-full">
					<div id="header-banner" class="bg-4 bg-opacity-75 top-0 shadow-lg backdrop-blur fixed w-full transform transition duration-300 ease-in-out z-40">
						<div class="mx-auto container">
							<div id="header-content" class="lg:flex lg:justify-between justify-center lg:items-center py-6 transition duration-300 ease-in-out">
								<div class="flex items-center right-0 justify-between">
									<div>
										<?php if (has_custom_logo()) { ?>
											<?php the_custom_logo(); ?>
										<?php } else { ?>
											<a href="<?php echo get_bloginfo('url'); ?>" class="font-extrabold text-lg uppercase">
												<img id="logo" src="/wp-content/uploads/2023/10/logo-1.png" alt="logo" class="h-24 drop-shadow-lg transition duration-300 ease-in-out">
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
					
					<?php if(is_front_page()): ?>
					<div class="flex items-center justify-center h-full text-center flex-col mx-auto bg-4/75 z-20">
						<div class="lg:h-24 h-0"></div>
						<h1 class="lg:text-7xl text-3xl text-1 lg:p-20 lg:mb-0 mb-6 py-16 lg:mt-0 mt-16 drop-shadow-xl font-hannari">「憧れの楽器を日常に。」</h1>
						<div>
							<p class="p-4 lg:text-2xl text-xl drop-shadow-md">福岡県直方市の音楽教室「フェリーチェ音楽教室」のホームページにようこそ！</p>
							<p class="p-4 lg:text-2xl text-xl drop-shadow-md">筑豊地区で数少ないピアノ、バイオリンとチェロの教室です。</p>
						</div>
						<svg id="bounce-arrow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="animate-bounce transform-cpu mt-24 w-8 h-8">
							<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
						</svg>
					</div>
					<?php endif; ?>

				
				</div>
			</header>

			<?php if(!is_front_page()): ?>
				<div class="h-40"></div>
			<?php else: ?>
				<div class="h-0"></div>
			</div>
			<?php endif; ?>
		<script src="wp-content/themes/felice/resources/js/custom.js"></script>

