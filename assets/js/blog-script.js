// button show more images

const oldestPosts = document.querySelector('.section-oldest-posts');
const oldestPost = document.querySelectorAll('.thumbnail-oldest-post');
const seeMorePosts = document.getElementById('see-more-posts');
const hiddenPost = [...oldestPosts.querySelectorAll('.hidden')];

// window.addEventListener("load", () => {
	
//         generateBanner();
// 		window.addEventListener("resize", generateBanner);
	
   
// });
if (window.innerWidth > 1400)  {
    for (var i = 8; i < oldestPost.length; i += 8) {
        // oldestPost[i].style.backgroundColor="green";
        oldestPost[i].insertAdjacentHTML('beforebegin', '<div class="col-12 mb-5 advertising-banner rounded-2 bg-primary py-5 px-5 position-relative overflow-hidden"></div>');
        
    }
    console.log('xxl')
} else if (window.innerWidth > 992 && window.innerWidth < 1399.98) {
    for (var i = 6; i < oldestPost.length; i += 6) {
        // oldestPost[i].style.backgroundColor="red";
        oldestPost[i].insertAdjacentHTML('beforebegin', '<div class="col-12 mb-5 advertising-banner rounded-2 bg-primary py-5 px-5 position-relative overflow-hidden"></div>');
      }
      console.log('lg-xl')
} else {
    hiddenPost.splice(0, 3).forEach(
        elem => elem.classList.remove('hidden')
    );

    seeMorePosts.addEventListener('click', function(e) {
        e.preventDefault();
        
        hiddenPost.splice(0, 3).forEach(
            elem => elem.classList.remove('hidden')
        )        
        if (hiddenPost.length == 0) {
            seeMorePosts.classList.add('hidden');
        }
    });
    console.log('sm')
}

const bannerAds = document.querySelectorAll('.advertising-banner');
bannerAds.forEach((banner) => {

    banner.innerHTML = 
    '<div class="row align-items-center justify-content-center justify-content-lg-between position-relative z-index_3 py-2">'
    + ' <div class="col-10 col-md-8 col-xl-7">'
    +   '<h2 class="headline-2 text-800 lh-1 text-uppercase mb-4 mb-lg-0 text-center text-lg-start">middle sale is on!</h2>'
    + '</div>'					
    + '<div class="col-8 col-lg-4"> '
    +    '<a href="#" class="btn btn-center btn-black w-100">'
    +        '<span class="btn-text">Check what we got for you</span> '
    +    '</a>'
    +'</div>'
    +'</div>'
    + '<img src="assets/images/Background/Trace.png" alt="trace" class="position-absolute start-50 top-50 opacity-25 w-50 z-index_0 newsletter-bg-img" style="transform: translate(7%,-30%) rotate(-23deg);">';
})
