//Shrink header
//select header-banner id
const $header = document.querySelector('#header-banner');
const $logo = document.querySelector('#logo');
const $arrow = document.querySelector('#bounce-arrow');
const $headercontent = document.querySelector('#header-content');

window.addEventListener('scroll', () => {
	if (window.scrollY > 128) {
		$header.classList.add('-translate-y-16')
            $logo.classList.add('scale-80')
            $arrow.classList.remove('animate-bounce')
            $headercontent.classList.add('translate-y-10')
		return
	}
      $header.classList.remove('-translate-y-16')
      $logo.classList.remove('scale-80')
      $arrow.classList.add('animate-bounce')
      $headercontent.classList.remove('translate-y-10')

});