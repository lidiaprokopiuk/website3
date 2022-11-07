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

	