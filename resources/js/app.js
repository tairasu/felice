const $header = document.querySelector('#header-banner');
const $logo = document.querySelector('#header-logo');
const $arrow = document.querySelector('#bounce-arrow');
const $headercontent = document.querySelector('#header-content');
const $mobile_nav_toggle = document.querySelector('#menu-toggle');
const $mobile_menu = document.querySelector('#mobile-menu');


//make grecaptcha-badge invisible
window.addEventListener('load', function () {
      let grecaptcha_badge = document.querySelector('.grecaptcha-badge');
      grecaptcha_badge.classList.add('invisible');
});





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
            // $headercontent.classList.add('-translate-y-2')
		return
	}
      $header.classList.remove('-translate-y-14');
      $logo.classList.remove('scale-75');
      $logo.classList.remove('translate-y-6');
      $logo.classList.remove('-translate-x-3');
      $mobile_nav_toggle.classList.remove('translate-y-6');
      if($arrow) {
            $arrow.classList.add('animate-bounce');
      }
      // $headercontent.classList.remove('-translate-y-2')

});


if ($arrow) {
      //bounce arrow click causes scroll down smoothly using scrollIntoView. the object that is scrolled to is the main tag
      $arrow.addEventListener('click', () => {
            document.querySelector('main').scrollIntoView({ behavior: 'smooth' });
      });
}

// Mobile Navigation toggle

// $mobile_nav_toggle.addEventListener('click',  () => {
//       // $mobile_menu.classList.toggle('hidden');
//       $mobile_menu.classList.toggle('translate-x-48');
// });

window.addEventListener('load', function () {
      let mobile_menu = document.querySelector('#mobile-menu');
      let overlay = document.createElement('div');
      overlay.classList.add('fixed', 'inset-0', 'bg-black/50', 'hidden');
      document.body.appendChild(overlay);
  
      document.querySelector('#menu-toggle').addEventListener('click', function (e) {
          e.preventDefault();
          mobile_menu.classList.toggle('translate-x-64');
          overlay.classList.toggle('hidden');
          overlay.style.zIndex = 35; // Ensure overlay is below the mobile menu
          mobile_menu.style.zIndex = 40; // Ensure mobile menu is above the overlay
      });
  
      overlay.addEventListener('click', function () {
          mobile_menu.classList.add('translate-x-64');
          overlay.classList.add('hidden');
      });
  });