const $header = document.querySelector('#header-banner');
const $logo = document.querySelector('#header-logo');
const $arrow = document.querySelector('#bounce-arrow');
const $headercontent = document.querySelector('#header-content');
const $mobile_nav_toggle = document.querySelector('#menu-toggle');
const $mobile_menu = document.querySelector('#mobile-menu');

window.addEventListener('scroll', () => {
	if (window.scrollY > 128) {
		$header.classList.add('-translate-y-14');
            $logo.classList.add('scale-75');
            $logo.classList.add('translate-y-6');
            $logo.classList.add('-translate-x-3');
            $mobile_nav_toggle.classList.add('translate-y-6');
            if($arrow) {
                  $arrow.classList.remove('animate-bounce');
            }
		return;
	}
      $header.classList.remove('-translate-y-14');
      $logo.classList.remove('scale-75');
      $logo.classList.remove('translate-y-6');
      $logo.classList.remove('-translate-x-3');
      $mobile_nav_toggle.classList.remove('translate-y-6');
      if($arrow) {
            $arrow.classList.add('animate-bounce');
      }

});


if ($arrow) {
      //bounce arrow click causes scroll down smoothly using scrollIntoView. the object that is scrolled to is the main tag
      $arrow.addEventListener('click', () => {
            document.querySelector('main').scrollIntoView({ behavior: 'smooth' });
      });
}

window.addEventListener('load', function () {
      let grecaptcha_badge = document.querySelector('.grecaptcha-badge');
      if (grecaptcha_badge) {
          grecaptcha_badge.classList.add('invisible');
      }
  
      let overlay = document.querySelector('.overlay');
      if (!overlay) {
          overlay = document.createElement('div');
          overlay.classList.add('overlay', 'fixed', 'inset-0', 'invisible', 'duration-300', 'bg-black', 'bg-opacity-0');
          document.body.appendChild(overlay);
      }
  
      $mobile_nav_toggle.addEventListener('click', function () {
          $mobile_menu.classList.toggle('translate-x-64');
          overlay.classList.toggle('invisible');
          overlay.style.zIndex = 35; // Ensure overlay is below the mobile menu
          $mobile_menu.style.zIndex = 40; // Ensure mobile menu is above the overlay
          overlay.classList.remove('bg-opacity-0');
          overlay.classList.add('bg-opacity-50',  "backdrop-blur");
      });
  
      overlay.addEventListener('click', function () {
          $mobile_menu.classList.add('translate-x-64');
          overlay.classList.remove('bg-opacity-50',  "backdrop-blur");
          overlay.classList.add('bg-opacity-0');
          overlay.classList.add('invisible');

      });
  });