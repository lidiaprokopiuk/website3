// 						SWIPERS
// ========================================================
// ========================================================

//in navbar.php
var swiper1 = new Swiper('.swiper.dropdownSwiper', {
	slidesPerView: 1.15,	
	spaceBetween: 24,		
	breakpoints: {	
		576: {
			slidesPerView: 1.47,
			spaceBetween: 24,
		},
		768: {
			slidesPerView: 2,
			spaceBetween: 24,
		},
		992: {
			slidesPerView: 3,
			spaceBetween: 12,
		},
	},
});


//index.php
const mySwiper = document.querySelector(".mySwiper");
if (mySwiper) {
	var swiper2 = new Swiper('.swiper.mySwiper', {
		slidesPerView: 1.15,
		spaceBetween: 24,
		grabCursor: true,
		breakpoints: {
			576: {
				slidesPerView: 1.33,
				spaceBetween: 24,
			},
			768: {
				slidesPerView: 1.71,
				spaceBetween: 24,
			},
			992: {
				slidesPerView: 3,
				spaceBetween: 24,
			},
			1200: {
				slidesPerView: 2.3,
				spaceBetween: 24,
			},
			1400: {
				slidesPerView: 2.66,
				spaceBetween: 24,
			},
		},
		
	});
}

//my-garage.php
const myFavoritesSwiper = document.querySelector(".myFavorites");
if (myFavoritesSwiper) {
	var swiper3 = new Swiper('.swiper.myFavorites', {
		slidesPerView: 1.15,
		spaceBetween: 24,
		grabCursor: true,	
		breakpoints: {	
			576: {
				slidesPerView: 1.33,
			},
			768: {
				slidesPerView: 1.71,
			},
			992: {
				slidesPerView: 3,				
			},
			1200: {
				slidesPerView: 2.875,
			},
			1400: {
				slidesPerView: 3.33,
			},
		},
	});
	console.log(myFavoritesSwiper)
}



//thankyou.php
const cartSwiper = document.querySelector(".cartSwiper");
if (cartSwiper) {
	var swiper4 = new Swiper('.swiper.cartSwiper', {
		slidesPerView: 1.15,
		spaceBetween: 24,
		breakpoints: {
			576: {
				slidesPerView: 1.33,
			},
			768: {
				slidesPerView: 1.71,
			},
			992: {
				slidesPerView: 2.905,				
			},
			1200: {
				slidesPerView: 3.45,
			},
			1400: {
				slidesPerView: 4,
			},
		},
	});

}
// 					COUNTDOWN TIMER
// ========================================================
// ========================================================	


const countdownTimer = document.getElementById('countdownTimer');

if (countdownTimer) {	

	const counterdown = setInterval(function() {

		const today = new Date()
		const tomorrow = new Date(today)
		tomorrow.setDate(tomorrow.getDate() + 1);

		const endOffer = tomorrow.setHours(0,0,0,0) - today;

		const hours = Math.floor((endOffer % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		const minutes = Math.floor((endOffer % (1000 * 60 * 60)) / (1000 * 60));
		const seconds = Math.floor((endOffer % (1000 * 60)) / 1000);

		document.getElementById("countdownTimer-hours").innerHTML = hours;
		document.getElementById("countdownTimer-minutes").innerHTML = minutes;
		document.getElementById("countdownTimer-seconds").innerHTML = seconds;
		
		if (endOffer < 0) {
			clearInterval(counterdown);
			document.getElementById("countdownTimer-wrapper").innerHTML = "EXPIRED";
		}
	}, 1000);
}

// 							ACTIVE BUTTONS
// ========================================================
// ========================================================

const buttonActive = document.querySelector('.buttonActive');
if(buttonActive) {
	buttonActive.addEventListener('click', (event) => {
		if (!event.target.classList.contains('bi-check2-circle')) {
			event.target.parentNode.parentNode.classList.add('active');
			event.target.classList.add('bi-check2-circle', 'text-primary');		
			event.target.classList.remove('bi-circle', 'text-gray');
		} else {
			event.target.parentNode.parentNode.classList.remove('active');
			event.target.classList.add('bi-circle', 'text-gray');
			event.target.classList.remove('bi-check2-circle', 'text-primary');
		} 
		console.log('user clicked: ', event.target.parentNode.parentNode);

	});
}



const chooseMachine = document.querySelector('.chooseMachine');

if (chooseMachine) {

const passValueBox = document.querySelector('.passValueBox');
const checkBoxes = chooseMachine.querySelectorAll('.btn-check');

	document.getElementById('swichMachineModal').addEventListener('click', (e) =>  {
		e.stopPropagation();
		let searchDropdown = new bootstrap.Dropdown("#searchDropdown");			
		searchDropdown.show();
	})

	checkBoxes.forEach((checkBox) => {
		checkBox.addEventListener('click', (e) => {		
		if (checkBox.checked == true){
			const vehilceName = e.target.nextElementSibling.textContent;			
			passValueBox.addEventListener('click', (e) =>  {
				e.stopPropagation();
				document.querySelector('.switchVehicleItem-title').innerHTML = vehilceName;				
			})
		  }
		})

	 })
}



// 							CART 
// ========================================================
// ========================================================

const cartContainers = document.querySelectorAll('.cart-container');

if (cartContainers) {
	cartContainers.forEach((cartContainer) => {

		const productItems = cartContainer.querySelectorAll('.productItem');
		const howManyProducts = productItems.length;
		const dispalyNumber = cartContainer.querySelector(".productsNumber");
		
		if(howManyProducts > 1) {
			cartContainer.querySelector(".productsNumber").innerHTML = productItems.length + ' items';
		} else {
			cartContainer.querySelector(".productsNumber").innerHTML = productItems.length + ' item';
		}

		if(cartContainer.querySelector('.productNumber')) {
	
			cartContainer.querySelectorAll('.productItem').forEach((productItem) => {
				
				const unitPrice = productItem.querySelector('.unitPrice').innerHTML;
				const productNumber = productItem.querySelector('.productNumber').innerHTML;


				productItem.querySelector('.counterCardUp').addEventListener("click", () => {
					const counter = productItem.querySelector('.productNumber').innerHTML++;
					productItem.querySelector('.totalCost').innerHTML = (counter+1) * unitPrice;
				});

				productItem.querySelector('.counterCardDown').addEventListener("click", () => {
					const counter = productItem.querySelector('.productNumber').innerHTML--;
					if (counter <= 0) {
						productItem.querySelector('.productNumber').innerHTML = 0
					} else {
						productItem.querySelector('.totalCost').innerHTML = (counter-1) * unitPrice;

					}

				});
			});
		}
			

	});

}

// 					NAVBAR
// ========================================================
// ========================================================

window.addEventListener("load", () => {
	if(document.querySelector('.navbar')) {
		dropdownMenu();
		window.addEventListener("resize", dropdownMenu);
	}   
});

function dropdownMenu() {
	const mainNavbar = document.querySelector('.navbar');
	window.addEventListener('scroll', function() {
		if (window.innerWidth > 992) {
			if (window.scrollY > 200) {
				mainNavbar.classList.add('fixed-top');
				navbar_height = mainNavbar.offsetHeight;
			} else {
				mainNavbar.classList.remove('fixed-top');
			}
		}
	});
	if (window.innerWidth < 991.98) {
		document.body.style.paddingTop = '0';		
			mainNavbar.classList.remove('fixed-top');
			const searchDropdown = document.getElementById('searchDropdown');
			searchDropdown.setAttribute("data-bs-auto-close", "false");
			const fixedBottomMenu = document.getElementById('fixed-bottom-menu');
			const closeDropdown = document.querySelector('.closeDropdown');
			
			searchDropdown.addEventListener('click', (e) => {	

				if (e.target.classList.contains("show")) {					
					e.target.parentNode.parentNode.classList.add('dropdownAnimation');
				} 
				else {
					e.target.classList.add("show");
					e.target.nextElementSibling.classList.add('show');
					e.target.nextElementSibling.setAttribute("data-bs-popper", "static");
				}
			});
			closeDropdown.addEventListener('click', (e) => {
				fixedBottomMenu.classList.remove('dropdownAnimation');
				searchDropdown.nextElementSibling.classList.remove("show");
				searchDropdown.classList.remove("show");
			});
		} else {
			document.body.style.paddingTop = null;
		}

	document.querySelectorAll('.mobile-navbar').forEach((mobileNav) => {

if(mobileNav) {
   var lastScrollTop = 0;
   window.addEventListener("scroll", function(){ 
	if (window.innerWidth < 991.98) {
      var st = window.pageYOffset || document.documentElement.scrollTop; 
      if (st > lastScrollTop || st < 5){
         mobileNav.classList.remove('fixed-top')
         document.body.style.paddingTop = '0';
		 if(document.querySelector('.cart-page')) {
			mobileNav.classList.add('position-absolute');
		 }
      }
      else {
         mobileNav.classList.add('fixed-top');		 
         navbar_height = mobileNav.offsetHeight;
         document.body.style.paddingTop = navbar_height + 'px';
		 mobileNav.classList.remove('position-absolute');
	
         
      }

      lastScrollTop = st <= 0 ? 0 : st;
	} 
   }, false);
   
}
});
		
	
}

// // 					SHOW CONTENT		
// // ========================================================
// // ========================================================


const sideMenu = document.querySelector('.content-item');

window.addEventListener("load", () => {
	if (sideMenu) {
		showContent();
		window.addEventListener("resize", showContent);
	}
   
});

function showContent() {
	if (window.innerWidth < 991.98) {
		const buttonShowContent = document.querySelector('.buttonShowContent');
		const buttonCloseContent = document.querySelectorAll('.buttonCloseContent');

		buttonShowContent.addEventListener('click', () => {
			sideMenu.classList.add('active');
		});
		buttonCloseContent.forEach((closeEl) => {
			closeEl.addEventListener('click', () => {
				sideMenu.classList.remove('active');
			});
		})
		
	}
}



// 							SELECT BOX
// ========================================================
// ========================================================

if (document.querySelector(".select-beast")) {

	document.querySelectorAll('.select-beast').forEach((el)=>{
		if (el.classList.contains('select-flag')) {
			var settings = {
				render: {
			 		option: function (data, escape) {
						return `<div class="text-center px-0"><img class="me-2 text-center" src="${data.src}" width="26">${data.text}</div>`;
					},
					item: function (item, escape) {
						return `<div><img class="me-3" src="${item.src}" width="26">${item.text}</div>`;
					}
				},
				plugins: ['dropdown_input'],
				onDropdownOpen:function(){
					const dropOpen = el.nextSibling;
					if (window.innerHeight - dropOpen.getBoundingClientRect().bottom < dropOpen.scrollHeight){
						dropOpen.querySelector('.ts-dropdown').style.bottom = '100%';
						dropOpen.querySelector('.ts-dropdown').style.top = 'auto';
					} 
				}
			}
		} 
		else if (el.classList.contains('select-category')) {
			var settings = {
				render: {
			 		option: function(data, escape) {
						return `<div>${data.text}<span class="align-text-top text-xxxs lh-1 text-primary d-inline-block">${data.category}</span></div>` 
					},
					item: function (item, escape) {
						return `<div class="text-md lh-base text-uppercase"><span class="text-gray">SELECTED:&nbsp;</span> ${item.text}&nbsp;<span class="text-xxxs lh-base text-primary d-flx align-self-start">${item.category}</span></div>`;
					}
				},
				plugins: ['dropdown_input'],
				onDropdownOpen:function(){
					const dropOpen = el.nextSibling;
					if (window.innerHeight - dropOpen.getBoundingClientRect().bottom < dropOpen.scrollHeight){
						dropOpen.querySelector('.ts-dropdown').style.bottom = '100%';
						dropOpen.querySelector('.ts-dropdown').style.top = 'auto';
					} 
				}
			}
		} 
		else if (el.classList.contains('select-sort')) {
			var settings = {
				render: {
			 		option: function(data, escape) {
						return `<div class="text-md lh-1 text-uppercase">${data.text}</div>` 
					},
					item: function (item, escape) {
						return `<div class="text-md lh-1 text-uppercase"><span class="text-gray">${item.sort}:&nbsp;</span> ${item.text}</div>`;
					}
				},
				plugins: ['dropdown_input'],
				onDropdownOpen:function(){
					const dropOpen = el.nextSibling;
					if (window.innerHeight - dropOpen.getBoundingClientRect().bottom < dropOpen.scrollHeight){
						dropOpen.querySelector('.ts-dropdown').style.bottom = '100%';
						dropOpen.querySelector('.ts-dropdown').style.top = 'auto';
					} 
				}
			}
		} 
		else {
			var settings = {
				// create: true,
				plugins: ['dropdown_input'],
				onDropdownOpen:function(){
					const dropOpen = el.nextSibling;
					if (window.innerHeight - dropOpen.getBoundingClientRect().bottom < dropOpen.scrollHeight){
						dropOpen.querySelector('.ts-dropdown').style.bottom = '100%';
						dropOpen.querySelector('.ts-dropdown').style.top = 'auto';
					} 
				}
			}
		}
				
	 	const selectInput = new TomSelect(el, settings);
	 	selectInput

	});		
}


// 						LIKED ICON
// ========================================================
// ========================================================

const likeIcons = document.querySelectorAll('.like-symbol');
if(likeIcons) {
	likeIcons.forEach((likeIcon) => {
		likeIcon.onclick = function(e){
			if(e.target.classList.contains('icon-heart')) {
				e.target.classList.remove('icon-heart');
				e.target.classList.add('icon-heart1');
			} else {
				e.target.classList.remove('icon-heart1');
				e.target.classList.add('icon-heart');
			}
			
		}; 
	})
}
const btnsLike = document.querySelectorAll('.btn-like');


if(btnsLike) {
	btnsLike.forEach((btnLike) => {
		let count = 100;
		const likeIcon1 = btnLike.querySelector('.icon-like-1');
		const countLikes = btnLike.querySelector('.count-likes');
		countLikes.textContent = count;

		btnLike.onclick = function(e){
			if(likeIcon1.classList.contains('icon-like-1')) {
				likeIcon1.classList.remove('icon-like-1');
				likeIcon1.classList.add('icon-like-11');
				countLikes.textContent = ++count;

			} else {
				likeIcon1.classList.remove('icon-like-11');
				likeIcon1.classList.add('icon-like-1');
				countLikes.textContent = --count;
			}
			
		}; 
	})
}

//				MESSAGE DIALOG HEIGHT
// ========================================================
// ========================================================


function contentheight() {
	const messageDialog = document.querySelector('.message-dialog');
	const messageHeader = document.querySelector('#offcanvasMessage .offcanvas-header');
	
	const messageTextbox = document.querySelector('#offcanvasMessage .bg-black');
	messageDialog.style.height = window.innerHeight - messageHeader.offsetHeight - messageTextbox.offsetHeight + 'px';
	messageTextbox.addEventListener('keypress', () => {
		messageDialog.style.height = window.innerHeight - messageHeader.offsetHeight - messageTextbox.offsetHeight + 'px';
	 })

	 messageDialog.scrollTo(0, document.body.scrollHeight)

}
contentheight();


// 							FILES
// ========================================================
// ========================================================

const inputFile = document.getElementById('chooseFile');
const preview = document.querySelector('.preview');
inputFile.addEventListener('change', updateFiles);

function updateFiles() {  
	const curFiles = inputFile.files;
		for (const file of curFiles) {
			const listItem = document.createElement('li');
			listItem.classList.add('mb-0', 'lh-1', 'text-gray', 'd-flex', 'align-items-center');	
			listItem.textContent = `${file.name}`;
			const removeFile = document.createElement('button');
			removeFile.classList.add('removeButton', 'text-xxs', 'ms-1', 'text-gray');
			listItem.appendChild(removeFile);
			const removeIcon = document.createElement('i');
			removeIcon.classList.add('icon-close-circle');	
			removeFile.appendChild(removeIcon);
			preview.appendChild(listItem);

			removeFile.addEventListener('click', () => {
				if (confirm("Are you sure?")) {
					removeFile.parentNode.remove();
				}				
			})
		}
	}


	
// 							REMOVE BUTTONS
// ========================================================
// ========================================================

const removeButton = document.querySelectorAll('.removeButton');

if (removeButton) {

	function removeItem() {
		removeButton.forEach((remBtn) => {
			remBtn.addEventListener('click', () => {
				if (confirm("Are you sure?")) {
					remBtn.parentNode.parentNode.remove();
				  }
				
			})
			
		});
	}
	
	
}
removeItem();

