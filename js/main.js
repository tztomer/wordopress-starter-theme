const $ = jQuery;

$(document).ready(function () {
	const menuBtn = document.querySelector('.menu-btn');
	const links = document.querySelector('.links');
	let menuOpen = false;
	menuBtn.addEventListener('click', () => {
		if (!menuOpen) {
			menuBtn.classList.add('open');
			links.classList.add('show-menu');
			menuOpen = true;
		} else {
			menuBtn.classList.remove('open');
			links.classList.remove('show-menu');
			menuOpen = false;
		}
	});

	var swiper = new Swiper('.mySwiper', {
		navigation: {
			nextEl: '.next',
			prevEl: '.prev',
		},
	});
	const nav = document.querySelector('.main-nav');
	const header = document.querySelector('.header');
	const menu = document.querySelector('.links');
	const stickyNav = function (entries) {
		const [entry] = entries;
		console.log('entry', entry);
		console.log('entries', entries);
		if (!entry.isIntersecting) {
			nav.classList.add('sticky');
			menu.classList.remove('show-menu');
		} else {
			nav.classList.remove('sticky');
			menu.classList.remove('show-menu');
		}
	};

	const headerObserver = new IntersectionObserver(stickyNav, {
		root: null,
		threshold: 1,
	});

	headerObserver.observe(header);
});
