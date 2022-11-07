// 						ACCOUNT NAVBAR
// ========================================================
// ========================================================

      window.onload = function() {
        if(window.location.hash) {
          let tabID = window.location.hash.replace(/#/g, '');
          let triggerEl = document.getElementById('v-'+ tabID + '-tab');
          let tabTrigger = new bootstrap.Tab(triggerEl);
          let openTab = bootstrap.Tab.getInstance(triggerEl).show();
    
          location.hash = "";
          history.replaceState("", "", location.pathname);
        }
      }
   
      const accountBtns = document.querySelectorAll(".btn-account");
      accountBtns.forEach((accountBtn) => {
        accountBtn.onclick = function(e) {      
          let triggerEl = document.getElementById('v-'+ e.target.id + '-tab');
          let tabTrigger = new bootstrap.Tab(triggerEl);
          let openTab = bootstrap.Tab.getInstance(triggerEl).show();

          let myOffCanvas = document.getElementById('offcanvasRight');
          let openedCanvas = bootstrap.Offcanvas.getInstance(myOffCanvas);
          openedCanvas.hide();

          window.scrollTo({
            top: 0,
            behavior: 'smooth'
          });

          location.hash = "";
          history.replaceState("", "", location.pathname);
        }
      })
    
// 						      SWIPER
// ========================================================
// ========================================================


window.addEventListener("load", onLoadSwiper);

	function onLoadSwiper(e){
		enableSwiper();
		window.addEventListener("resize", enableSwiper);
	}

const enableSwiper = function() {
  if (window.innerWidth < 991.98) {	
  
  mySwiper = new Swiper ('.slider-cards', {
    slidesPerView: 1,	  
    spaceBetween: 30,
    centeredSlides: true,
    breakpoints: {
        767: {
            slidesPerView: 1,
        }
    },
    keyboardControl: true,
    grabCursor: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
  });
  }
};
