<!DOCTYPE html>
<html <?php language_attributes(); ?> class="">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<meta property="og:title" content="<?php bloginfo('name'); ?>">
	<meta property="og:description" content="<?php bloginfo('description'); ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo get_site_url(); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<script src="https://cdn.tailwindcss.com"></script>
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9NVC52WK93"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9NVC52WK93');
</script>
	<?php wp_head(); ?>
</head>

<?php
	echo '<div id="mobile-menu" class="fixed p-2 duration-300 translate-x-64 bg-gray-700 shadow-2xl rounded-xl h-fit lg:hidden -right-4 top-4">';
		wp_nav_menu(array(
			'theme_location' => 'primary',
			'walker' => new Mobile_Piano_Menu_Walker()
		));
	echo '</div>';
?>	

<body <?php body_class('bg-orange-50/25 text-gray-900 antialiased'); ?>>


	<?php do_action('felice_site_before'); ?>

	<!--Contact button-->
	<?php if(!is_page('contact')): ?>
		<a href="/contact" class="fixed z-30 p-6 font-bold text-yellow-800 transition duration-300 rounded-full shadow-lg lg:hidden bottom-6 right-6 bg-orange-50 hover:bg-white ring-1 ring-yellow-800 hover:text-yellow-700">
			お問い合わせ
		</a>
		<a href="/contact" class="fixed z-30 hidden p-6 font-bold text-yellow-800 transition duration-300 rounded-full shadow-lg bottom-12 right-12 bg-orange-50 hover:bg-white ring-1 ring-yellow-800 hover:text-yellow-700 lg:block">
			無料で体験レッスン
		</a>
	<?php endif; ?>


	<div id="page" class="flex flex-col min-h-screen">

			<?php do_action('felice_header'); ?>

			<?php if(is_front_page()): ?>
			<header class="z-30 w-screen h-screen bg-fixed bg-bottom bg-auto bg-header lg:bg-center lg:bg-cover">
			<?php else: ?>
			<header class="top-0 z-30 w-screen h-0 bg-fixed bg-bottom bg-auto lg:bg-center lg:bg-cover">
			<?php endif; ?>
			<div id="header-banner" class="fixed z-20 w-full duration-300 ease-in-out shadow-lg bg-orange-50/75 backdrop-blur lg:-mt-24">
						<div id="header-content" class="flex items-end py-6 transition duration-300 ease-in-out lg:justify-between lg:mx-16">
							<div class="flex items-center">

								<div id="header-logo" class="duration-200">
									<?php the_custom_logo(); ?>
								</div>

								<div class="absolute lg:hidden right-8">
									<svg viewBox="0 0 20 20" id="menu-toggle" class="w-6 h-6 cursor-pointer">
										<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
											<g id="icon-shape">
												<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z" id="Combined-Shape" fill="#a18160"></path>
											</g>
										</g>
									</svg>
								</div>
							</div>

							<?php

								echo '<div id="menu">';
									wp_nav_menu(array(
										'theme_location' => 'primary',
										'menu_class' => 'hidden lg:flex items-end justify-center',
										'walker' => new Piano_Menu_Walker()
									));
								echo '</div>';
							?>
						</div>
					</div>
				<div class="w-full h-full backdrop-blur-sm bg-yellow-700/25">


					<?php if(is_front_page()): ?>
					<div class="z-10 flex flex-col items-center justify-center h-full mx-auto text-center bg-orange-50/75">
						<div class="h-0 lg:h-24"></div>
						<div class="py-16 mt-24 text-3xl font-bold text-yellow-800 lg:text-7xl lg:p-20 drop-shadow-xl font-hannari">「憧れの楽器を日常に。」</div>
						<div>
							<h4 class="p-4 text-xl text-center lg:text-2xl drop-shadow-md">福岡県直方市の音楽教室「フェリーチェ音楽教室」のホームページにようこそ！</p>
							<h4 class="p-4 text-xl text-center lg:text-2xl drop-shadow-md">筑豊地区で数少ないピアノ、バイオリンとチェロの教室です。</p>
						</div>
						<svg id="bounce-arrow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 mt-24 cursor-pointer animate-bounce transform-cpu">
							<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
						</svg>
					</div>
					<?php endif; ?>

				
				</div>
			</header>

			<?php if(!is_front_page()): ?>
				<div class="h-36"></div>
			<?php else: ?>
				<div class="h-0"></div>
			</div>
			<?php endif; ?>
