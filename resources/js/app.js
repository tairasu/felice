// Navigation toggle
window.addEventListener('load', function () {
      let main_navigation = document.querySelector('#primary-menu');
      document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
            e.preventDefault();
            main_navigation.classList.toggle('hidden');
            //toggle translation-x-48
            main_navigation.classList.toggle('translate-x-48');
      });
});

//make grecaptcha-badge invisible
window.addEventListener('load', function () {
      let grecaptcha_badge = document.querySelector('.grecaptcha-badge');
      grecaptcha_badge.classList.add('invisible');
});

//Shrink header
//select header-banner id
const $header = document.querySelector('#header-banner');
// const $logo = document.querySelector('#logo');
const $arrow = document.querySelector('#bounce-arrow');
const $headercontent = document.querySelector('#header-content');
const $bouncearrow = document.querySelector('#bounce-arrow');

window.addEventListener('scroll', () => {
	if (window.scrollY > 128) {
		$header.classList.add('-translate-y-12')
            // $logo.classList.add('scale-90')
            // $logo.classList.add('translate-y-2')
            $arrow.classList.remove('animate-bounce')
            $headercontent.classList.add('translate-y-2')
		return
	}
      $header.classList.remove('-translate-y-12')
      // $logo.classList.remove('scale-90')
      // $logo.classList.remove('translate-y-2')
      $arrow.classList.add('animate-bounce')
      $headercontent.classList.remove('translate-y-2')

});

//bounce arrow click causes scroll down smoothly using scrollIntoView. the object that is scrolled to is the main tag
$bouncearrow.addEventListener('click', () => {
      document.querySelector('main').scrollIntoView({ behavior: 'smooth' });
});

