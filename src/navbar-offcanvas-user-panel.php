<!-- OFFCANVAS USER PANEL __________________________________________________________________________ -->	
<div class="offcanvas offcanvas-end bg-black-pearl p-2" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRight">		
    <!-- <div class="position-absolute py-4 px-5 end-0 d-block d-sm-none">
        <button type="button" class="btn-close opacity-100 w-100 h-100 d-inline-block text-end bg-img-none" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="icon-close-circle text-white text-lg"></i>
        </button>        
    </div>	 -->
    <div class="offcanvas-body position-relative p-4 p-sm-5">
        <button type="button" class="btn-close p-4 p-sm-5 opacity-100 text-white d-inline-block d-lg-none w-auto text-end position-absolute top-0 end-0 bg-img-none h-auto" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="icon-close-circle text-lg"></i>
        </button>	
        <div class="mb-5 pb-3">
            <h4 class="headline-4 text-800 lh-1 mb-2">John Smith</h4>
            <p class="text-xxs text-500 lh-1">johnny.smith1989@gmail.com</p>
        </div>
        <h5 class="headline-5 text-700 lh-1 mb-2 pb-1">Currently selected vehicle</h5>
        <div id="userCar" class="carousel slide mb-5 pb-3" data-bs-ride="false">
            <div class="carousel-inner overflow-visible">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="rounded-3 card-bg-dark p-3 d-flex justify-content-around align-items-center border-light-gray-opacity-20">
                            <img src="assets/images/buggy.png" class="" height="70" alt="">
                            <h5 class="headline-5 text-700 lh-1 text-uppercase mb-0">MY ATV XXXC 2013</h5>
                        </div>																										
                    </div>
                    <div class="carousel-item">
                        <div class="rounded-3 card-bg-dark p-3 d-flex justify-content-around align-items-center border-light-gray-opacity-20">
                            <img src="assets/images/buggy.png" class="" height="70" alt="">
                            <h5 class="headline-5 text-700 lh-1 text-uppercase mb-0">Custom search</h5>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev bg-dark-opacity-60 opacity-100 rounded-1 boxSize-sm mt-neg-xs start-auto end-0 me-5" type="button" data-bs-target="#userCar" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon carousel-control-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next bg-dark-opacity-60 opacity-100 rounded-1 boxSize-sm mt-neg-xs" type="button" data-bs-target="#userCar" data-bs-slide="next">
                    <span class="carousel-control-next-icon carousel-control-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button> 
            </div>
        </div>				
        <a href="my-account.php#user-details" class="btn-account d-flex align-items-center text-xs text-500 lh-1 text-white text-decoration-none mb-4 pb-3" id="user-details">
            <img src="assets/images/Icon/User_cicrle_light.svg" class="me-3" alt="icon">
            User details
        </a>
        <a href="my-account.php#address-book" class="btn-account d-flex align-items-center text-xs text-500 lh-1 text-white text-decoration-none mb-4 pb-3" id="address-book">
            <img src="assets/images/Icon/Pin_light.svg" class="me-3" alt="icon">
            Address book
        </a>
        <a href="my-account.php#payment-options" class="btn-account d-flex align-items-center text-xs text-500 lh-1 text-white text-decoration-none mb-4 pb-3" id="payment-options">
            <img src="assets/images/Icon/Credit-card_light.svg" class="me-3" alt="icon">
            Payment options
        </a>
        <a href="my-account.php#my-orders" class="btn-account d-flex align-items-center text-xs text-500 lh-1 text-white text-decoration-none mb-4 pb-3" id="my-orders">
            <img src="assets/images/Icon/Bag_alt_light.svg" class="me-3" alt="icon">
            My orders
        </a>
        <a href="my-account.php#my-newsletters" class="btn-account d-flex align-items-center text-xs text-500 lh-1 text-white text-decoration-none mb-4 pb-3" id="my-newsletters">
            <img src="assets/images/Icon/Lable_light.svg" class="me-3" alt="icon">
            My newsletters
        </a>
        <a href="my-account.php#account-settings" class="btn-account d-flex align-items-center text-xs text-500 lh-1 text-white text-decoration-none mb-4 pb-3" id="account-settings">
            <img src="assets/images/Icon/Setting_line_light.svg" class="me-3" alt="icon">
            Account settings
        </a>
        <hr class="mb-4 pt-3 mt-0">
        <a href="my-account.php#user" class="btn-account d-flex align-items-center text-xs text-500 lh-1 text-white text-decoration-none mb-4 pb-3">
            <img src="assets/images/Icon/message-question.svg" class="me-3" alt="icon">
            Need help?
        </a>
        <button class="btn-account d-flex align-items-center px-0 text-xs text-500 lh-1 text-white text-decoration-none mb-4 pb-3">
            <img src="assets/images/Icon/Message_light.svg" class="me-3" alt="icon">
            Contact us
        </button>
        <hr class="mb-4 pt-3 mt-0">
        <button class="d-flex align-items-center text-xs text-500 px-0 lh-1 text-white text-decoration-none">
            <img src="assets/images/Icon/Sign_out_squre_light.svg" class="me-3" alt="icon">
            Log out
        </button>
    </div>
</div>