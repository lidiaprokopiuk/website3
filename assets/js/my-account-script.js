// 						  ACCOUNT NAVBAR
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


// 						      VALIDATION FORM
// ========================================================
// ========================================================
    
  function validation() {
    const forms = document.querySelectorAll('.needs-validation')
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
  }


  // 						      REMOVE ITEM
// ========================================================
// ========================================================
  
  function removeItem() {
    document.querySelectorAll('.removeButton').forEach((remBtn) => {
      remBtn.addEventListener('click', () => {
        if (confirm("Are you sure?")) {
          remBtn.parentNode.parentNode.remove();
          }
        
      })
    })
  }


  // 					CHECK DEFAULT ADDRESS
// ========================================================
// ========================================================
  var billingAddressAll = document.querySelectorAll('.billingAddress');
  billingAddressAll.forEach(billing => {
      billing.addEventListener('click', event => {   
      for(var i = 0; i < billingAddressAll.length; i++){
        if(event.currentTarget != billingAddressAll[i]){
          console.log(billingAddressAll[i]);
          billingAddressAll[i].classList.remove('text-primary');
          billingAddressAll[i].querySelector('.icon').classList.remove('fa-check');
        }
      }
      
    })
  })

  var shippingAddressAll = document.querySelectorAll('.shippingAddress');
  shippingAddressAll.forEach(billing => {
      billing.addEventListener('click', event => {   
      for(var i = 0; i < shippingAddressAll.length; i++){
        if(event.currentTarget != shippingAddressAll[i]){
          console.log(shippingAddressAll[i]);
          shippingAddressAll[i].classList.remove('text-primary');
          shippingAddressAll[i].querySelector('.icon').classList.remove('fa-check');
        }
      }
      
    })
  })

// 						      SWIPER AND ADD CARD
// ========================================================
// ========================================================

function enableSwiper() {

  //add new SLIDER 
  const addSwiper =  document.querySelector('.slider-cards');
  const sliderCardWrapper = document.querySelector('.slider-cards .slider-cards-wrapper');
  const addNewCreditCard = document.querySelectorAll('.btn-new-creditCard');
  
  var init = false;  
  if (window.innerWidth < 991.98) {
    if (!init) {     
      init = true;
      
      var sliderCards = new Swiper ('.slider-cards', {
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
        }
        
      });
    
    } else {
      init = false;
      sliderCards.destroy();      
    }  
  } else {
    sliderCardWrapper.setAttribute('style', '')
}


//add new card

addNewCreditCard.forEach((creditCard) => {
  creditCard.addEventListener('click', event => {

    

    event.preventDefault();
    

      const swiperSlide = document.createElement('div');
      swiperSlide.classList.add('swiper-slide', 'changeInformation', 'd-flex', 'flex-wrap', 'flex-lg-nowrap', 'mb-4', 'pb-lg-2', 'justify-content-center', 'justify-content-lg-start');      

      const compCard = document.querySelector('.addNewCreditCardForm .select-beast').value;
      const cardNumber = document.querySelector('.cardNumber').value;
      const cardholderName = document.querySelector('.cardholderName').value;
      const expDate = document.querySelector('.expDate').value;
      const inputs = document.querySelector('.addNewCreditCardForm .contentText');

      const swiperInner = swiperSlide.innerHTML = `
      
        <div class="payment-item credit-card credit-card-`+compCard+` position-relative overflow-hidden rounded-3 p-4 me-lg-4 d-inline-block flex-shrink-0">
          <div class="text-end mb-5 position-relative z-index_3">	
            <img src="assets/images/Pay-Logos/`+compCard+`.svg" alt="" height="20">
          </div>
          <div class="mb-5">
            <p class="text-xxs text-600 lh-1 text-uppercase mb-0">CARD NUMBER</p>
            <input type="text" name="Card Number" class="contentText p-0 border-0 bg-transparent text-white credit-card-number text-md text-md-up text-700 lh-1 w-auto" value="` + cardNumber + `" pattern="[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4}" placeholder="0000 0000 0000 0000" disabled>
            
          </div>					
          <div class="d-flex justify-content-between">	
            <div class="">
              <p class="text-xxs text-600 lh-1 text-uppercase mb-0">CARDHOLDER NAME</p>
              <input type="text" name="Cardholder Name" class="contentText p-0 border-0 bg-transparent text-white credit-card-name text-md text-md-up text-700 lh-1 text-uppercase" value="` + cardholderName + `" pattern="[a-zA-Z]+ [a-zA-Z]+" placeholder="Name Surname" disabled>
              
            </div>
            <div class="">
              <p class="text-xxs text-600 lh-1 text-uppercase mb-0">EXP DATE</p>
              <input type="text" name="EXP Date" class="contentText p-0 border-0 bg-transparent text-white credit-card-exp-date text-md text-md-up text-700 lh-1 text-uppercase w-100" value="` + expDate + `" pattern="[0-9]{2}/[0-9]{2}" placeholder="MM/YY" disabled>
              
            </div>
          </div>
        </div>													
        <div class="mt-4 mt-lg-0 btn-group d-flex d-lg-block">
          <button class="text-lg-start text-decoration-underline text-white text-600 text-xs lh-1 d-block mb-lg-4 btn-change-info btn-lg-link px-2 px-lg-0 me-2 me-lg-0">
            <span class="changeText">Edit</span> &nbsp;card <span class="d-none d-lg-inline">informations</span>
          </button>
          <button class="text-lg-start text-decoration-underline text-white text-600 text-xs lh-1 d-block removeButton btn-lg-link px-2 px-lg-0 ms-2 ms-lg-0">Remove <span class="d-none d-lg-inline">this</span> card</button>															
        </div>		
      
      `;     

      const cardNumberP = document.querySelector('.cardNumber').getAttribute('pattern');
      const expDateP = document.querySelector('.expDate').getAttribute('pattern');

      if(expDate = expDateP)

      if (!document.querySelector('.addNewCreditCardForm').checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
       
      } else {
        if (window.innerWidth < 991.98) {
          sliderCards.appendSlide(swiperSlide);  
        } else {
          sliderCardWrapper.append(swiperSlide);
        }
        var myModalAddress = document.getElementById('addNewCreditCard');
        var modal = bootstrap.Modal.getInstance(myModalAddress);
        modal.hide();
        changeInfo();           
        document.querySelector('.addNewCreditCardForm').reset();  
      }   
			
      removeItem();

    document.querySelector('.addNewCreditCardForm').classList.add('was-validated')
  }, false)
})

};

enableSwiper();
window.addEventListener("resize", enableSwiper);


// 			          	BUTTONS EDIT
// ========================================================
// ========================================================

const changeDetails = document.getElementById('v-user-details');
const changeBtns = changeDetails.querySelectorAll('.btn-change-content');
changeBtns.forEach((changeBtn) => {
  changeBtn.onclick = function(e){
    const getIdEl = changeBtn.getAttribute('for');
    const changeContent = document.getElementById(getIdEl);

    if (changeBtn.firstElementChild.textContent === "Change") {
      changeContent.removeAttribute("disabled");   
      document.body.classList.add('blackBackground'); 
      changeBtn.classList.add('activeContent');
      changeContent.classList.add('activeContent'); 
      changeBtn.firstElementChild.textContent ='Save new';  
      
    } else {

      if(changeContent.id === 'changeEmail') {
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        var invalid = "Invalid Email Address";
      } else if (changeContent.id === 'changePassword') {
        var reg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/
        var invalid = "Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters";
      } else {
        var reg =/^(.{1,})$/;
        var invalid = "Invalid";
      } 
      
      if(reg.test(changeContent.value) == false) {
          alert(invalid);
      } else {
        changeBtn.firstElementChild.textContent = 'Change';
        document.body.classList.remove('blackBackground'); 
        changeBtn.classList.remove('activeContent');
        changeContent.classList.remove('activeContent');  
        changeContent.setAttribute("disabled", "");
      } 
    }
    
    
  }
})

// 						      CHANGE INFO
// ========================================================
// ========================================================

function changeInfo() {
  document.querySelectorAll('.changeInformation').forEach((changeInfo) => {

  const changeInfoBtns = changeInfo.querySelectorAll('.btn-change-info');
  const changeElements = changeInfo.querySelectorAll('.contentText');
  const addressLabelChecked = changeInfo.querySelector('.address-label-checked')
  const changeBillingAddress  = changeInfo.querySelector('.billingAddress');
  const changeShippingAddress  = changeInfo.querySelector('.shippingAddress');

  changeInfoBtns.forEach((changeInfoBtn) => {
    changeInfoBtn.onclick = function(e){
    if (changeInfoBtn.firstElementChild.textContent === "Edit" || changeInfoBtn.firstElementChild.textContent === "") {
      changeInfoBtn.firstElementChild.textContent ='Save new';  

      changeInfoBtn.classList.add('activeContent');      
      changeElements.forEach((changeEl) => {
        changeEl.removeAttribute("disabled");       
        changeEl.classList.add('activeContent'); 
        
        if(changeEl.hasAttribute("contentEditable")) {
          changeEl.contentEditable = "true";  
        }
        if(addressLabelChecked) {
          addressLabelChecked.classList.add('activeContent');  
          addressLabelChecked.classList.remove('d-none'); 
          changeBillingAddress.onclick = function(e) {
            e.target.classList.toggle("text-primary");
            e.target.querySelector('.icon').classList.toggle('fa-check');
          }
          changeShippingAddress.onclick = function(e) {
            e.target.classList.toggle("text-primary");
            e.target.querySelector('.icon').classList.toggle('fa-check');
          }
        }
        
        
      });
      document.body.classList.add('blackBackground');
    } else {
      
      changeElements.forEach((changeEl) => {

        var inputName = changeEl.getAttribute('name');
        var inputValue = changeEl.getAttribute('value');
        var inputChangeContnt = changeEl.value;
        
        if(inputName === 'Phone number') {
          var reg = /^(\()?\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{4}$/;
          var invalid = "Invalid phone number. Correct format is 123-456-7890";
        } else if (inputName === 'birth') {
          var reg = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
          var invalid = "Invalid date. Correct format is DD/MM/YYYY";
        } else if (inputName === 'Card Number') {
          var reg = /\b(?:\d{4}[ -]?){3}(?=\d{4}\b)/gm;
          var invalid = "Invalid card number. Correct format is 0000 0000 0000 0000";
        } else if (inputName === 'EXP Date') {
          var reg = /^(0?[1-9]|1[012])[\/\-]\d{2}$/;
          var invalid = "Invalid date. Correct format is MM/YY";
        } else {
          var reg =/^(.{1,})$/;
          var invalid = "Invalid";
        } 


        if(reg.test(changeEl.value) == false) {
          alert(invalid);
          e.preventDefault
          document.body.classList.add('blackBackground'); 
        } 
        else {
          changeInfoBtn.firstElementChild.textContent = 'Edit';
          document.body.classList.remove('blackBackground'); 
          changeInfoBtn.classList.remove('activeContent');
          changeEl.classList.remove('activeContent');  
          if(changeEl.hasAttribute("contentEditable")) {
            changeEl.contentEditable = "false";  
          }
          if(addressLabelChecked) {
            addressLabelChecked.classList.remove('activeContent');  
            if (changeInfo.querySelector('.billingAddress .fa-check') == null &&  changeInfo.querySelector('.shippingAddress .fa-check') == null) {
              addressLabelChecked.classList.add('d-none');  
            }
          }
          
          //changeEl.setAttribute("disabled", "");

          // if (inputName === 'Card Number') {
          //   const subst = `**** **** **** `;
          //   // const cardValue = cardNumber.value;
          //   const encodeNumber = inputChangeContnt.replace(reg, subst);
          //   changeEl.setAttribute('value', encodeNumber);
          //   changeEl.letterSpacing = '5px';                       
          // } else {
          //   
          // }
          changeEl.setAttribute('value', inputChangeContnt);
        } 

      })     
    }    
  }
})

//input - width - fit content

changeElements.forEach((changeEl) => {
  let first;
  let hide = changeEl.previousElementSibling;  
  while (hide) {
    if (hide.classList.contains('hide')) {
      first = hide;      
      resize();
      changeEl.addEventListener("input", resize);
      function resize() {
        first.textContent = changeEl.value;
        changeEl.style.width = first.offsetWidth + "px";
      }
      break;      
    }   
    hide = hide.previousElementSibling;
    
  }
  
})
})
}

changeInfo();

// 						     ADD NEW ADDRESS
// ========================================================
// ========================================================
const addNewAddress= document.querySelectorAll('.btn-new-address');

addNewAddress.forEach((newAddress) => {
  newAddress.addEventListener('click', event => {

    const addressBook = document.getElementById('v-address-book');
    const inputAddressId = addressBook.getElementsByClassName('btn-check').length;    
  
      const inputAddress = document.createElement('input');
      inputAddress.classList.add('btn-check');      
      inputAddress.setAttribute('type', 'radio');
      inputAddress.setAttribute('name', 'address[]');
      inputAddress.setAttribute('name', 'address[]');
      inputAddress.setAttribute('id', 'address-'+ (inputAddressId + 1));
      
      const labelAddress = document.createElement('label');
      labelAddress.classList.add('label-check', 'address-label', 'd-block', 'd-lg-flex', 'flex-wrap', 'justify-content-between', 'border', 'border-2', 'rounded-3', 'border-light-gray', 'bg-black', 'bg-opacity-30', 'p-3', 'mb-6', 'changeInformation');
      labelAddress.setAttribute('for', 'address-'+ (inputAddressId + 1));

      const newName = document.querySelector('.newName').value;
      const newAddress = document.querySelector('.newAddress').value;

      labelAddress.innerHTML = `
      <span class="d-flex flex-column px-1 mb-3 mb-sm-4 mb-lg-0 pt-3 py-lg-3">	
        <span class="d-inline-block text-md text-md-up lh-1 text-800 mb-0 mb-lg-2 contentText" contenteditable="false" data-placeholder="Your Name" role="textbox">`+ newName + `</span>
        <span class="d-inline-block text-xs lh-1_1 mb-0 contentText" contenteditable="false" data-placeholder="Your Address" role="textbox">`+ newAddress + `</span>
      </span>
      <span class="text-lg-end d-flex flex-row-reverse flex-lg-column pb-3 py-lg-3 px-1 px-lg-3 justify-content-between align-items-center">
        <span class="removeButton cursor-pointer text-white text-end mb-auto d-none d-lg-inline-block">										
          <i class="icon-trash d-block text-xs mb-auto"></i>
        </span>
        <span class="removeButton cursor-pointer text-white text-xs text-decoration-underline text-end mb-auto d-inline-block d-lg-none">	
          Delete
        </span>
        <span class="text-xs cursor-pointer lh-1 text-600 text-white text-decoration-underline address-label-edit d-lg-none d-xl-inline-block btn-change-info">
          <span class="changeText">Edit</span>&nbsp;this address
        </span>
        <span class="text-xs cursor-pointer lh-1 text-600 text-white d-none d-lg-inline-block d-xl-none text-decoration-none btn-change-info">
          <span class="changeText d-none"></span>
          <i class="icon-edit-2"></i>
        </span>
      </span>
      <span class="mt-2 mt-lg-4 mb-3 px-1 address-label-checked w-100">	
        <span class="d-block  d-lg-inline-block text-xs lh-1_1 mb-3 mb-sm-4 mb-lg-0 me-lg-5 pe-lg-4 billingAddress">
          <i class="icon fal"></i>
          Default billing address
        </span>
        <span class="d-lg-inline-block text-xs lh-1_1 mb-0 shippingAddress">  
          <i class="icon fal"></i>        	
          Default shipping address
        </span>
      </span>
      `;
     
      const billingAddress = labelAddress.querySelector('.address-label-checked .billingAddress');
      const defaultBillingAddress = document.getElementById('defaultBillingAddress');
      if(defaultBillingAddress.checked) {
        billingAddress.classList.add("text-primary");
        billingAddress.querySelector('.icon').classList.add('fa-check');        
        for(var i = 0; i < billingAddressAll.length; i++){
          if(event.currentTarget != billingAddressAll[i]){
            console.log(billingAddressAll[i]);
            billingAddressAll[i].classList.remove('text-primary');
            billingAddressAll[i].querySelector('.icon').classList.remove('fa-check');
          }
        }
      }      

      const shippingAddress  = labelAddress.querySelector('.address-label-checked .shippingAddress');
      const defaultShippingAddress = document.getElementById('defaultShippingAddress');
      if(defaultShippingAddress.checked) {
        shippingAddress.classList.add("text-primary");
        shippingAddress.querySelector('.icon').classList.add('fa-check');      
        for(var i = 0; i < shippingAddressAll.length; i++){
          if(event.currentTarget != shippingAddressAll[i]){
            console.log(shippingAddressAll[i]);
            shippingAddressAll[i].classList.remove('text-primary');
            shippingAddressAll[i].querySelector('.icon').classList.remove('fa-check');
          }
        }  
      }

      if (!document.querySelector('.addNewAddresForm').checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      } else {
        addressBook.append(inputAddress);
        addressBook.append(labelAddress)
        var myModalAddress = document.getElementById('addNewAddress');
        var modal = bootstrap.Modal.getInstance(myModalAddress);
        modal.hide();
        changeInfo();           
        document.querySelector('.addNewAddresForm').reset();   
      }
      removeItem();
    document.querySelector('.addNewAddresForm').classList.add('was-validated')
  }, false)
})









