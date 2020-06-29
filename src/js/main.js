document.addEventListener("DOMContentLoaded", function() {
	/* Mobile Menu Toggle */
	const menuToggle = document.querySelector('.menu-toggle');
	menuToggle.addEventListener('click', e => {
		document.body.classList.toggle('nav-open');
	});

	/* Scroll to Top Functionality */
	const scrollToTop = () => {
	  const c = document.documentElement.scrollTop || document.body.scrollTop;

	  if (c > 0) {
		window.requestAnimationFrame(scrollToTop);
		window.scrollTo(0, c - c / 2);
	  }
	};
	var backTopButton = document.querySelector('.back-top-button');
	backTopButton.addEventListener('click', e => {
	  e.preventDefault();
	  scrollToTop();
	});

	/* Add nav class on scroll */

	// const scrollHandler = (event) => {
	// 	const scrollPosition = window.scrollY;

	// 	if (scrollPosition > 50 && document.documentElement.clientWidth > 768) {
	// 		document.body.classList.add('scrolled');
	// 		return;
	// 	}
	// 	document.body.classList.remove('scrolled');
	// }
	// window.addEventListener('scroll', _.throttle(scrollHandler, 100));

	/* Newsletter Toast Modal */
	// if(document.querySelector('.toast-modal')) {
	// 	const toastModal = document.querySelector('.toast-modal');
	// 	const closeModal = document.querySelector('.close-modal a');

	// 	setTimeout(function() { toastModal.classList.add('show'); }, 3500);

	// 	const closeModalAction = () => { toastModal.classList.remove('show'); }

	// 	closeModal.addEventListener('click', (e) => {
	// 		e.preventDefault();
	// 		closeModalAction();
	// 	});

	// 	document.addEventListener('keyup', (e) => {
	// 		if (e.key === 'Escape') {
	// 			closeModalAction();
	// 		}
	// 	});

	// 	document.addEventListener('click', (e) => {
	// 		if (e.target !== toastModal) {
	// 			closeModalAction();
	// 		}
	// 	});
	// }
});


