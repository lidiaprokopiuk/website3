
//             INDICATORS IMAGE OUTSIDE CAROUSEL   
// ========================================================
// ========================================================

let myCarousel = document.getElementById('carouselProduct');
myCarousel.addEventListener('slide.bs.carousel', (event) => {
    let elementChildrens = document.querySelector("#indicators").children;
    elementChildrens.item(event.from).classList.remove("active");
    elementChildrens.item(event.to).classList.add("active");
});


//                      SAME HEIGHT
// ========================================================
// ========================================================

const x = document.querySelector('.product-thumbnails');
const y = document.querySelector('.product-summary');

window.addEventListener("load", () => {
    sameHeight();
    window.addEventListener("resize", sameHeight);
});

function sameHeight(e){
    if (window.innerWidth > 991.98) {    
        const xHeight = x.offsetHeight;
        y.style.height = xHeight + "px";    
    } else {
        y.style.height = "auto";
    }
}