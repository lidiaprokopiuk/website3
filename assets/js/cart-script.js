const triggerTabList = document.querySelectorAll('#pills-tab button');
const triggerTabs = document.querySelectorAll('.tab-pane');

triggerTabs.forEach(triggerEl => {
    
    if(triggerEl.querySelector('.btn-next-tab')) {
     triggerEl.querySelectorAll('.btn-next-tab').forEach((nextTab) => {
      nextTab.onclick = function(e) {
      
      const activeTab = document.querySelector('#pills-tab button.active');
      const clickNextTab = activeTab.parentNode.nextElementSibling.children;
      for (const child of clickNextTab) {
        child.click()
      }
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    }
  })
  }


    if(triggerEl.querySelector('.btn-prev-tab')) {
      triggerEl.querySelectorAll('.btn-prev-tab').forEach((prevTab) => {
        prevTab.onclick = function(e) {
          const activeTab = document.querySelector('#pills-tab button.active');
          const clickPrevTab = activeTab.parentNode.previousElementSibling.children;
          for (const prevChild of clickPrevTab) {
            prevChild.click()
          }
          window.scrollTo({
            top: 0,
            behavior: 'smooth'
          });
        }
      })
    }


  

});


// 			          	BUTTON EDIT CART
// ========================================================
// ========================================================
const btnEdit = document.querySelector('.btn-edit');


btnEdit.onclick = function(e){
  if (e.target.innerHTML === "Edit") {
    e.target.innerHTML='Save Changes'
  } else {
    e.target.innerHTML='Edit'
  }
  document.querySelectorAll('#pills-cart .productItem').forEach((cartItem) => {
    cartItem.querySelector('.removeButton.btn-link').classList.toggle('removeItem');

    cartItem.querySelector('.removeButton.btn-link').onclick = function() {
      const howManyProducts = document.querySelectorAll('#pills-cart .productItem').length;
      if(howManyProducts > 1) {
        document.querySelector("#pills-cart .productsNumber").innerHTML = howManyProducts + ' items';
      } else if(howManyProducts === 0) {
        document.querySelector("#pills-cart .productsNumber").innerHTML = howManyProducts + ' item';
        btnEdit.classList.add('d-none');
        btnEdit.classList.remove('d-inline-flex')
      } else {
        document.querySelector("#pills-cart .productsNumber").innerHTML = howManyProducts + ' item';
      }

    }
  })
}