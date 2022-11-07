

// 				 SWIPER PRODUCTS - VERTICAL	
// ========================================================
// ========================================================
window.addEventListener("load", onLoadDisableSwiper);

	function onLoadDisableSwiper(e){
		// keep an eye on viewport size changes
		window.addEventListener("resize", breakpointChecker);
		// kickstart
		breakpointChecker();
	}

const breakpoint = window.matchMedia('(max-width: 900px)');
let productsSwiper;

const breakpointChecker = function() {
	if (window.innerWidth < 991.98) {
	   document.querySelectorAll('.slide-box').forEach((item) => {
		item.classList.remove('swiper-slide');
		});
	   // clean up old instances and inline styles when available
	   if ( productsSwiper !== undefined ) {
			productsSwiper.destroy( true, true );
	   }
	   // or/and do nothing
	   return;
	} else {
	   document.querySelectorAll('.slide-box').forEach((item) => {
			item.classList.add('swiper-slide');
		})
	   return enableSwiper();
	}
 };

const enableSwiper = function() {
	productsSwiper = new Swiper ('.productsSwiper', {
		direction: "vertical",
		cssMode: true,		
		mousewheel: true,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
			renderBullet: function (index, className) {
				return '<span class="'
				+ 'text-bebas text-md lh-base lh-1 text-white text-opacity-50 mx-2 d-block '
				+ className + '">' + ('0' + (index + 1)).slice(-2) + "</span>";
			},
		},		
		
		// spaceBetween: 20,
		slidesPerView: 1,
		
		grid: {
		rows: 1,
		},
		breakpoints: {
			767:{
				grid: {	
					rows: 2,
				},
				slidesPerView: 1.15,
				height: 400,

			},
			992: {
				grid: {	
					rows: 3,
				},
				slidesPerView: 1,
				// spaceBetween: 20,
				height: 370,
			},
			1200: {
				height: 560,
				grid: {	
					rows: 3,
				},
				slidesPerView: 1.25,
				// spaceBetween: 20,
			},
			1600: {
				height: 600,
				// spaceBetween: 20,
				grid: {	
					rows: 4,
				},
			}
		}
	});
 };


// 						RANGE PRICE			
// ========================================================
// ========================================================

window.onload = function() {
	slideOne();
	slideTwo();
}

let sliderOne = document.getElementById('slider-1');
let sliderTwo = document.getElementById('slider-2');
let displayValOne = document.getElementById('range1');
let displayValTwo = document.getElementById('range2');
let minGap = 0;
let sliderTrack = document.querySelector('.slider-track');
let sliderMaxValue = sliderOne.max;

function slideOne() {
	if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
		sliderOne.value = parseInt(sliderTwo.value) - minGap;
	}
	displayValOne.textContent = sliderOne.value;
	fillColor();
}
function slideTwo() {
	if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
		sliderTwo.value = parseInt(sliderOne.value) + minGap;
	}
	displayValTwo.textContent = sliderTwo.value;
	fillColor();
}
function fillColor() {
	percent1 = ((sliderOne.value / sliderMaxValue) * 100);
	percent2 = ((sliderTwo.value / sliderMaxValue) * 100);
	sliderTrack.style.background = `linear-gradient(to right, #8c8c8c ${percent1}% , #FF7109 ${percent1}% , #FF7109 ${percent2}%, #8c8c8c ${percent2}%)`;

}

// 				BOTTOM BAR - SEE MORE OPTION		
// ========================================================
// ========================================================

const moreOptions = document.querySelector('.more-options');
const moreOptionsImg = moreOptions.querySelector('.more-option-arrow')

moreOptions.addEventListener('click', () => {
	document.querySelectorAll('.see-more-options .see-more-item').forEach((moreOption) => {
		if(moreOption.classList.contains('seeAll')) {
			moreOption.classList.remove('seeAll');
			moreOptionsImg.style.transform = "rotate(0deg)";
		} else {
			moreOption.classList.add('seeAll');
			moreOptionsImg.style.transform = "rotate(180deg)";
			moreOptionsImg.style.transition = "all 0.5s linear"
		}
	});
	
})

