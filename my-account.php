<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ORV HeadQuarters - My account</title>
	<meta name="description" content="ATV & SxS performance shop that offers customization, upgrades along with your everyday maintenance! 42 Union Street, Smiths Falls, ON, Canada K7A 5C4.">

	<meta name="format-detection" content="telephone=no">
	
	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.typekit.net/ymo0arc.css">
	<link rel="stylesheet" type="text/css" href="assets/font/proxima-nova.css">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">


	<!-- ICONSAX ICONS -->
	<link rel="stylesheet" type="text/css" href="assets/iconsax/style.css">
	<!-- FONTAWESOME ICONS -->
	<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/all.css">
	
	<!-- Bootstrap ICONS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

	<!-- Swiper CSS -->
	<link rel="stylesheet" href="assets/swiper/swiper-bundle.min.css">

	<!-- Tom Select CSS -->
	<link rel="stylesheet" href="assets/tom-select/tom-select.css">

	<!-- Bootstrap Plus CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-plus.css">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body class="account-page bg-noise bg-dark text-white">
	<header>
		<a href="index.php" class="mobile-navbar d-block d-lg-none bg-gradient-dark border-bottom border-1 border-white border-opacity-05 rounded-bottom text-primary text-md text-600 lh-sm text-center text-decoration-none p-4">
			<i class="bi bi-arrow-left me-2"></i>
			BACK TO MAIN
		</a>
		<?php include './src/navbar.php';?>		
	</header>

	<main>
        <section class="section-account mt-5 pt-lg-4 mb-5 mb-lg-0 pb-md-5 pb-lg-0 overflow-hidden">
    		<div class="container">
    			<div class="row justify-content-center justify-content-lg-between">
    				<div class="col-12">
    					 <h2 class="headline-2 text-800 lh-1 text-uppercase mb-4 d-none d-lg-block">My account</h2>
    				</div>
    				<div class="col-4 d-none d-lg-block">
    					<div class="d-flex align-items-start card-bg-dark rounded-3 p-4 mb-6 aside">
							<div class="nav text-start flex-column me-3 p-2" id="v-tab" role="tablist" aria-orientation="vertical">
								<button class="nav-link active account-tab p-0 text-xs text-start text-white text-500 mb-6" id="v-user-details-tab" data-bs-toggle="pill" data-bs-target="#v-user-details" type="button" role="tab" aria-controls="v-user-details" aria-selected="true">
									<i class="icon text-500 icon-profile-circle me-2"></i>
									User details
								</button>
								<button class="nav-link account-tab p-0 text-xs text-start text-white text-500 mb-6" id="v-address-book-tab" data-bs-toggle="pill" data-bs-target="#v-address-book" type="button" role="tab" aria-controls="v-address-book" aria-selected="false">
									<i class="icon text-500 icon-location me-2"></i>
									Address book
								</button>
								<button class="nav-link account-tab p-0 text-xs text-start text-white text-500 mb-6" id="v-payment-options-tab" data-bs-toggle="pill" data-bs-target="#v-payment-options" type="button" role="tab" aria-controls="v-payment-options" aria-selected="false">
									<i class="icon text-500 icon-card me-2"></i>
									Payment Options
								</button>
								<button class="nav-link account-tab p-0 text-xs text-start text-white text-500 mb-6" id="v-my-orders-tab" data-bs-toggle="pill" data-bs-target="#v-my-orders" type="button" role="tab" aria-controls="v-my-orders" aria-selected="false">
									<i class="icon text-500 icon-bag-2 me-2"></i>
									My orders
								</button>
								<button class="nav-link account-tab p-0 text-xs text-start text-white text-500 mb-6" id="v-my-newsletters-tab" data-bs-toggle="pill" data-bs-target="#v-my-newsletters" type="button" role="tab" aria-controls="v-my-newsletters" aria-selected="false">
									<i class="icon text-500 icon-tag-cross me-2"></i>
									My Newsletters
								</button>
								<button class="nav-link account-tab p-0 text-xs text-start text-white text-500 mb-6" id="v-account-settings-tab" data-bs-toggle="pill" data-bs-target="#v-account-settings" type="button" role="tab" aria-controls="v-account-settings" aria-selected="false">
									<i class="icon text-500 icon-setting-2 me-2"></i>
									Account Settings
								</button>
							</div>
						</div>
						<div class="px-3 py-4 rounded-3 aside bg-img-cover bg-primary bg-blend-burn bg-banner-ad">
							<h3 class="headline-3 lh-1 text-60 mb-6 text-center text-xl-start">
								Check out <span class="text-uppercase text-800">NEW EXHAUSTS</span> for your ride!			
							</h3>
							<div class="text-center mb-5">
								<img src="assets/images/Products/exhaust_atv.png" alt="" class="max-auto w-75">
							</div>
							<a href="#" class="btn btn-link btn-link-white lh-1 text-decoration-none">
								<span class="btn-text">SEE DETAILS</span>
							</a>
						</div> 
					</div>
					<div class="col-12 col-md-10 col-lg-8">
						<div class="tab-content" id="v-tabContent">
							<div class="tab-pane fade show active tab-user-details" id="v-user-details" role="tabpanel" aria-labelledby="v-user-details-tab" tabindex="0">
								<div class="mb-5 pb-lg-5">
									<h3 class="headline-3 text-800 text-uppercase lh-1 mb-4 mb-lg-5 pb-2 pb-lg-0 text-center text-lg-start">User details</h3>
									<p class="text-md text-md-up lh-1 text-800 mb-3 pb-3 pb-lg-0 text-center text-lg-start">Personal Informations</p>
									<p class="text-xs lh-1_1 mb-6 text-center text-lg-start">
										Lorem ipsum dolor sit amet, consectetur 
										<span class="d-inline d-lg-block">adipiscing elit, sed do eiusmod tempor.</span>
									</p>
									<div class="row mb-2 changeInformation">
										<div class="col-12 col-lg-6 mb-4">
											<div class="form-control form-control-sm">
												<span class="text-light-gray">Name:</span>
												<span class="hide position-absolute h-0 overflow-hidden"></span>
												<input type="text" name="Name"  id="changeName"  class="contentText p-0 border-0 bg-transparent text-white" value="John" pattern="[a-zA-Z]+" disabled>
											</div>
										</div>
										<div class="col-12 col-lg-6 mb-4">
											<div class="form-control form-control-sm">
												<span class="text-light-gray">Surname:</span>
												<span class="hide position-absolute h-0 overflow-hidden"></span>
												<input type="text" name="Surname"  id="changeSurname"  class="contentText p-0 border-0 bg-transparent text-white" value="Smith" pattern="[a-zA-Z]+" disabled>
											</div>
										</div>
										<div class="col-12 col-lg-7 col-xl-6 mb-4">
											<div class="form-control form-control-sm">
												<span class="text-light-gray">Phone number:</span>
												<span>
												<img src="assets/images/Flag/canada.png" alt="" class="img-fluids mx-2" width="26"> 
												<span class="hide position-absolute h-0 overflow-hidden"></span>
												<input type="tel" name="Phone number"  id="changePhone"  class="contentText p-0 border-0 bg-transparent text-white" value="613-566-3448" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890" disabled> 
												</span>
											</div>
										</div>
										<div class="col-12 col-lg-5 col-xl-6 mb-4">
											<div class="form-control form-control-sm">
												<span class="text-light-gray">Birth:</span>
												<span class="hide position-absolute h-0 overflow-hidden"></span>
												<input type="text" name="birth"  id="changeBirth"  class="contentText p-0 border-0 bg-transparent text-white" value="22/02/1989" pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" placeholder="DD/MM/YYYY" disabled>
											</div>
										</div> 
										<div class="col-12 text-white">
											<div data-for="changePersonalInfo" class="cursor-pointer btn-lg-link text-xs lh-1 text-600 text-primary text-decoration-underline d-inline-block d-lg-flex align-items-center h-100 w-100 btn-change-info">
												<span class="changeText">Edit </span>&nbsp;personal informations
											</div>
										</div>
									</div>
								</div>
								<div>
									<p class="text-md text-md-up lh-1 text-800 mb-3 pb-3 pb-lg-0 text-center text-lg-start">Login Informations</p>
									<p class="text-xs lh-1_1 mb-6 text-center text-lg-start">
										Lorem ipsum dolor sit amet, consectetur 
										<span class="d-inline d-lg-block">adipiscing elit, sed do eiusmod tempor.</span>
									</p>
									<div class="row mb-2">
										<div class="col-12 col-lg-7 col-xl-6 mb-4">
											<div class="form-control form-control-sm">
												<span class="text-light-gray">email:</span>
												<input type="email" name="Email" id="changeEmail" class="contentText p-0 border-0 bg-transparent text-white" value="JOHN.smith89@gmail.com" disabled>
											</div>
										</div>
										<div class="col-12 col-lg-5 col-xl-6 mb-4">
											<label for="changeEmail" class="cursor-pointer btn-lg-link text-xs lh-1 text-600 text-primary text-decoration-underline d-inline-block d-lg-flex align-items-center h-100 w-100 btn-change-content">
												<span class="changeText">Change</span>&nbsp;e-mial
											</label>
										</div>
										<div class="col-12 col-lg-7 col-xl-6 mb-4">
											<div class="form-control form-control-sm">
												<span class="text-light-gray">PASSWORD:</span>
												<input type="password" name="Password"  id="changePassword"  class="contentText p-0 border-0 bg-transparent text-white" value="WildRose2022" disabled>
											</div>
										</div>
										<div class="col-12 col-lg-5 col-xl-6 mb-md-4">
											<label for="changePassword" class="cursor-pointer btn-lg-link text-xs lh-1 text-600 text-primary text-decoration-underline d-inline-block d-lg-flex align-items-center h-100 w-100 btn-change-content">
												<span class="changeText">Change</span>&nbsp;password
											</label>
										</div>
									</div>
									
								</div>
							</div>
							<div class="tab-pane fade" id="v-address-book" role="tabpanel" aria-labelledby="v-address-book-tab" tabindex="0">
								<div class="d-flex justify-content-center justify-content-lg-start align-items-center mb-4 text-center text-lg-starts">
									<h3 class="headline-3 text-800 text-uppercase lh-1 mb-0 pb-lg-0">Address book</h3>
									<button class="btn-add-address boxSize-sm bg-stone bg-opacity-40 rounded-2 d-flex justify-content-center align-items-center ms-4" data-bs-toggle="modal" data-bs-target="#addNewAddress">
										<i class="icon-add text-white"></i>										
									</button>
								</div>								
								<p class="text-xs lh-1_1 mb-6 text-center text-lg-start">Add new or edit your existing addresses</p>

								<input type="radio" class="btn-check" name="address[]" id="address-1">
								<label class="label-check address-label d-block d-lg-flex flex-wrap justify-content-between border border-2 rounded-3 border-light-gray bg-black bg-opacity-30 p-3 mb-6 changeInformation" for="address-1">
									<span class="d-flex flex-column px-1 mb-3 mb-sm-4 mb-lg-0 pt-3 py-lg-3">	
										<span class="d-inline-block text-md text-md-up lh-1 text-800 mb-0 mb-lg-2 contentText" contenteditable='false' data-placeholder="Name Surname">Isabell Smith</span>
										<span class="d-inline-block text-xs lh-1_1 mb-0 contentText" contenteditable='false' data-placeholder="2542 Front St. Ottawa, ON K1Y 3T7, Canada">165-189 Hickory St. Ottawa, ON K1Y 3T7, Canada</span>
									</span>
									<span class="text-lg-end d-flex flex-row-reverse flex-lg-column pb-3 py-lg-3 px-1 px-lg-3 justify-content-between align-items-center">
										<span class="removeButton cursor-pointer text-white text-end mb-auto d-none d-lg-inline-block">										
											<i class="icon-trash d-block text-xs mb-auto"></i>
										</span>
										<span class="removeButton cursor-pointer text-white text-xs text-decoration-underline text-end mb-auto d-inline-block d-lg-none">	
											Delete
										</span>
										<span class="text-xs lh-1 cursor-pointer text-600 text-white text-decoration-underline address-label-edit d-lg-none d-xl-inline-block btn-change-info">
											<span class="changeText">Edit</span> this address
										</span>
										<span class="cursor-pointer text-xs lh-1 text-600 text-white d-none d-lg-inline-block d-xl-none text-decoration-none btn-change-info">
											<span class="changeText d-none"></span>
											<i class="icon-edit-2"></i>
										</span>
									</span>
									<span class="mt-2 mt-lg-4 mb-3 px-1 address-label-checked d-none w-100">	
										<span class="d-block d-lg-inline-block text-xs lh-1_1 mb-3 mb-sm-4 mb-lg-0 me-lg-5 pe-lg-4 billingAddress">
											<i class="icon fal"></i>	
											Default billing address
										</span>
										<span class="d-lg-inline-block text-xs lh-1_1 mb-0 shippingAddress">
											<i class="icon fal"></i>	
											Default shipping address
										</span>
									</span>	 
								</label>

								<input type="radio" class="btn-check" name="address[]" id="address-2" checked>
								<label class="label-check address-label d-block d-lg-flex flex-wrap justify-content-between address-label border border-2 rounded-3 border-light-gray bg-black bg-opacity-30 p-3 mb-6 changeInformation" for="address-2">
									<span class="d-flex flex-column px-1 mb-3 mb-sm-4 mb-lg-0 pt-3 py-lg-3">	
										<span class="d-inline-block text-md text-md-up lh-1 text-800 mb-0 mb-lg-2 contentText" contenteditable='false' data-placeholder="Name Surname">Isabell Smith</span>
										<span class="d-inline-block text-xs lh-1_1 mb-0 contentText" contenteditable='false' data-placeholder="2542 Front St. Ottawa, ON K1Y 3T7, Canada">165-189 Hickory St. Ottawa, ON K1Y 3T7, Canada</span>
									</span>
									<span class="text-lg-end d-flex flex-row-reverse flex-lg-column pb-3 py-lg-3 px-1 px-lg-3 justify-content-between align-items-center">
										<span class="removeButton cursor-pointer text-white text-end mb-auto d-none d-lg-inline-block">										
											<i class="icon-trash d-block text-xs mb-auto"></i>
										</span>
										<span class="removeButton cursor-pointer text-white text-xs text-decoration-underline text-end mb-auto d-inline-block d-lg-none">	
											Delete
										</span>
										<span class="text-xs lh-1 cursor-pointer text-600 text-white text-decoration-underline address-label-edit d-lg-none d-xl-inline-block btn-change-info">
											<span class="changeText">Edit</span> this address
										</span>
										<span class="text-xs cursor-pointer lh-1 text-600 text-white d-none d-lg-inline-block d-xl-none text-decoration-none btn-change-info">
											<span class="changeText d-none"></span>
											<i class="icon-edit-2"></i>
										</span>
									</span>
									<span class="mt-2 mt-lg-4 mb-3 px-1 address-label-checked d-none w-100">	
										<span class="d-block text-primary d-lg-inline-block text-xs lh-1_1 mb-3 mb-sm-4 mb-lg-0 me-lg-5 pe-lg-4 billingAddress">
											<i class="icon fal fa-check"></i>	
											Default billing address
										</span>
										<span class="d-lg-inline-block text-primary text-xs lh-1_1 mb-0 shippingAddress">
											<i class="icon fal fa-check"></i>	
											Default shipping address
										</span>
									</span>								
								</label>	
								
								<input type="radio" class="btn-check" name="address[]" id="address-3">
								<label class="label-check address-label d-block d-lg-flex flex-wrap justify-content-between border border-2 rounded-3 border-light-gray bg-black bg-opacity-30 p-3 mb-6 changeInformation" for="address-3">
									<span class="d-flex flex-column px-1 mb-3 mb-sm-4 mb-lg-0 pt-3 py-lg-3">	
										<span class="d-inline-block text-md text-md-up lh-1 text-800 mb-0 mb-lg-2 contentText" contenteditable='false' data-placeholder="Name Surname">Isabell Smith</span>
										<span class="d-inline-block text-xs lh-1_1 mb-0 contentText" contenteditable='false' data-placeholder="2542 Front St. Ottawa, ON K1Y 3T7, Canada">165-189 Hickory St. Ottawa, ON K1Y 3T7, Canada</span>
									</span>
									<span class="text-lg-end d-flex flex-row-reverse flex-lg-column pb-3 py-lg-3 px-1 px-lg-3 justify-content-between align-items-center">
										<span class="removeButton cursor-pointer text-white text-end mb-auto d-none d-lg-inline-block">										
											<i class="icon-trash d-block text-xs mb-auto"></i>
										</span>
										<span class="removeButton cursor-pointer text-white text-xs text-decoration-underline text-end mb-auto d-inline-block d-lg-none">	
											Delete
										</span>
										<span class="cursor-pointer text-xs lh-1 text-600 text-white text-decoration-underline address-label-edit d-lg-none d-xl-inline-block btn-change-info">
											<span class="changeText">Edit</span> this address
										</span>
										<span class="cursor-pointer text-xs lh-1 text-600 text-white d-none d-lg-inline-block d-xl-none text-decoration-none btn-change-info">
											<span class="changeText d-none"></span>
											<i class="icon-edit-2"></i>
										</span>
									</span>
									<span class="mt-2 mt-lg-4 mb-3 px-1 address-label-checked d-none w-100">	
										<span class="d-block  d-lg-inline-block text-xs lh-1_1 mb-3 mb-sm-4 mb-lg-0 me-lg-5 pe-lg-4 billingAddress">
											<i class="icon fal"></i>	
											Default billing address
										</span>
										<span class="d-lg-inline-block text-xs lh-1_1 mb-0 shippingAddress">
											<i class="icon fal"></i>	
											Default shipping address
										</span>
									</span>		
								</label>							
							</div>
							<div class="tab-pane fade payment-options" id="v-payment-options" role="tabpanel" aria-labelledby="v-payment-options" tabindex="0">
								<h3 class="headline-3 text-800 text-uppercase lh-1 mb-5 text-center text-lg-start">
									Payment 
									<span class="d-block d-lg-inline-block">Options</span>
								</h3>
								<div class="row justify-content-center justify-content-lg-start">
									<div class="col-sm-11 col-md-10 col-lg-12">
										<div class="payment-item mb-4 pb-2 text-center text-lg-start">	
											<h4 class="headline-4 headline-lg-4 text-800 lh-1 mb-3">Credit Cards</h4>
											<p class="text-xs lh-1_1 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
										</div>
									</div>
									<div class="col-sm-10 col-lg-12 mb-5">
										<div class="swiper slider-cards overflow-visible">
											<div class="swiper-wrapper slider-cards-wrapper flex-nowrap flex-lg-wrap">				
												<div class="swiper-slide changeInformation d-flex flex-wrap flex-lg-nowrap mb-4 pb-lg-2 justify-content-center justify-content-lg-start">
													<!-- <div class=""> -->
														<div class="payment-item credit-card credit-card-mastercard position-relative overflow-hidden rounded-3 p-4 me-lg-4 d-inline-block flex-shrink-0">
															<div class="text-end mb-5 position-relative z-index_3">	
																<img src="assets/images/Pay-Logos/mastercard.svg" alt="" height="20">
															</div>
															<div class="mb-5">
																<p class="text-xxs text-600 lh-1 text-uppercase mb-0">CARD NUMBER</p>
																<input type="text" name="Card Number" class="contentText p-0 border-0 bg-transparent text-white credit-card-number text-md text-md-up text-700 lh-1 w-auto" value="0000000000009821" pattern="[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4}" placeholder="0000 0000 0000 0000" disabled>
																
															</div>					
															<div class="d-flex justify-content-between">	
																<div class="">
																	<p class="text-xxs text-600 lh-1 text-uppercase mb-0">CARDHOLDER NAME</p>
																	<input type="text" name="Cardholder Name" class="contentText p-0 border-0 bg-transparent text-white credit-card-name text-md text-md-up text-700 lh-1 text-uppercase" value="John Smith" pattern="[a-zA-Z]+ [a-zA-Z]+" placeholder="Name Surname" disabled>
																	
																</div>
																<div class="">
																	<p class="text-xxs text-600 lh-1 text-uppercase mb-0">EXP DATE</p>
																	<input type="text" name="EXP Date" class="contentText p-0 border-0 bg-transparent text-white credit-card-exp-date text-md text-md-up text-700 lh-1 text-uppercase w-100" value="08/23" pattern="[0-9]{2}/[0-9]{2}" placeholder="MM/YY" disabled>
																	
																</div>
															</div>
														</div>													
														<div class="mt-4 mt-lg-0 btn-group d-lg-block">
															<button class="text-lg-start text-decoration-underline text-white text-600 text-xs lh-1 d-block mb-lg-4 btn-change-info btn-lg-link px-2 px-lg-0 me-2 me-lg-0">
																<span class="changeText">Edit</span>  card <span class="d-none d-lg-inline">informations</span>
															</button>
															<button class="text-lg-start text-decoration-underline text-white text-600 text-xs lh-1 d-block removeButton btn-lg-link px-2 px-lg-0 ms-2 ms-lg-0">Remove <span class="d-none d-lg-inline">this</span> card</button>															
														</div>	
													<!-- </div>									 -->
												</div>
												<div class="swiper-slide changeInformation d-flex flex-wrap flex-lg-nowrap mb-4 pb-lg-2 justify-content-center justify-content-lg-start">
													<!-- <div class="d-flex flex-wrap flex-lg-nowrap mb-4 pb-lg-2 justify-content-center justify-content-lg-start"> -->
														<div class="payment-item credit-card credit-card-visa position-relative overflow-hidden rounded-3 p-4 me-lg-4 d-inline-block flex-shrink-0">
															<div class="text-end mb-5 position-relative z-index_3">	
																<img src="assets/images/Pay-Logos/visa.svg" alt="" height="20">
															</div>
															<div class="mb-5">
																<p class="text-xxs text-600 lh-1 text-uppercase mb-0">CARD NUMBER</p>
																<input type="text" name="Card Number" class="contentText p-0 border-0 bg-transparent text-white credit-card-number text-md text-md-up text-700 lh-1 w-auto" value="2222000000009821" pattern="[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4}" placeholder="0000 0000 0000 0000" disabled>
																
															</div>					
															<div class="d-flex justify-content-between">	
																<div class="">
																	<p class="text-xxs text-600 lh-1 text-uppercase mb-0">CARDHOLDER NAME</p>
																	<input type="text" name="Cardholder Name" class="contentText p-0 border-0 bg-transparent text-white credit-card-name text-md text-md-up text-700 lh-1 text-uppercase" value="John Smith" pattern="[a-zA-Z]+ [a-zA-Z]+" placeholder="Name Surname" disabled>
																	
																</div>
																<div class="">
																	<p class="text-xxs text-600 lh-1 text-uppercase mb-0">EXP DATE</p>
																	<input type="text" name="EXP Date" class="contentText p-0 border-0 bg-transparent text-white credit-card-exp-date text-md text-md-up text-700 lh-1 text-uppercase w-100" value="08/23" pattern="[0-9]{2}/[0-9]{2}" placeholder="MM/YY" disabled>
																	
																</div>
															</div>
														</div>													
														<div class="mt-4 mt-lg-0 btn-group d-lg-block">
															<button class="text-lg-start text-decoration-underline text-white text-600 text-xs lh-1 d-block mb-lg-4 btn-change-info btn-lg-link px-2 px-lg-0 me-2 me-lg-0">
																<span class="changeText">Edit</span>  card <span class="d-none d-lg-inline">informations</span>
															</button>
															<button class="text-lg-start text-decoration-underline text-white text-600 text-xs lh-1 d-block removeButton btn-lg-link px-2 px-lg-0 ms-2 ms-lg-0">Remove <span class="d-none d-lg-inline">this</span> card</button>															
														</div>		
													<!-- </div>										 -->
												</div>
											</div>
											<div class="swiper-button-next boxSize-sm rounded-2 bg-dark bg-dark-opacity-80 text-white d-none d-sm-flex d-lg-none"></div>
											<div class="swiper-button-prev boxSize-sm rounded-2 bg-dark bg-dark-opacity-80 text-white d-none d-sm-flex d-lg-none"></div>
										</div>
										
										<div class="payment-item text-center mb-5 mb-lg-0 pb-sm-5 pb-lg-0">
											<button class="button-add-card text-white text-500 text-xs lh-1 d-none d-lg-flex w-100 justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#addNewCreditCard">
												<span class="boxSize-sm bg-dark bg-opacity-80 d-lg-flex justify-content-center align-items-center me-3 rounded-2">
													<i class="icon-add"></i>								
												</span>
												Add new card
											</button>
											<button class="button-add-card btn btn-center btn-primary d-flex d-lg-none w-100 justify-content-center align-items-center text-capitalize text-xs" data-bs-toggle="modal" data-bs-target="#addNewCreditCard">
												Add new
											</button>
										</div>
									</div>
									<div class="col-sm-11 col-md-10 col-lg-12 mb-5 text-center text-lg-start">
										<div class="payment-item mb-4 pb-2">	
											<h4 class="headline-4 headline-lg-4 text-800 lh-1 mb-3">PayPal</h4>
											<p class="text-xs lh-1_1 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
										</div>
										<button class="btn-paypal rounded-pill payment-item d-flex justify-content-center align-items-center p-3 text-600 text-xs lh-1">
											Connect
											<img src="assets/images/Pay-Logos/PayPal.svg" alt="" class="ps-3">
										</button>
									</div>
									<div class="col-sm-11 col-md-10 col-lg-12 mb-0 text-center text-lg-start">
										<div class="payment-item mb-4 pb-2">	
											<h4 class="headline-4 headline-lg-4 text-800 lh-1 mb-3">Klarna</h4>
											<p class="text-xs lh-1_1 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="v-my-orders" role="tabpanel" aria-labelledby="v-my-orders-tab" tabindex="0">
								<h3 class="headline-3 text-800 text-uppercase lh-1 mb-5 text-center text-lg-start">
									My orders
								</h3>
								<div class="row justify-content-center justify-content-lg-start">
									<div class="col-12 col-md-11 col-lg-10 col-xl-7 col-xxl-6">
										<div class="mb-4 text-center text-lg-start">	
											<h4 class="headline-4 headline-lg-4 text-800 lh-1 mb-3">Orders in progress</h4>
											<p class="text-xs lh-1_1 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
										</div>
									</div>
									<div class="col-12 col-md-11 col-lg-12 mb-5">
										<div class="accordion accordionPurchase" id="accordionInProgress">										
											<div class="accordion-item purchase-item  mb-4 rounded-3 background-card">
												<div class="accordion-header" id="progressHeadlineOne">
													<div class="accordion-button cursor-pointer collapsed  d-flex py-4 px-3 justify-content-between" role="button" data-bs-toggle="collapse" data-bs-target="#progressOne" aria-expanded="false" aria-controls="progressOne">
														<div class="d-flex justify-content-between align-items-center h-100 accordion-header-text order-details-headline">
															<span class="me-4 d-none d-sm-flex align-items-center order-details-imgs">
																<img src="assets/images/Products/wheel.png" class="img-fluid order-details-img w-100" alt="">
															</span>
															<table class="table text-white table-borderless mb-0">	
																<thead>
																	<tr >
																	  <th class="py-0 text-xxs text-500 opacity-60" scope="col">Order number</th>
																	  <th class="py-0 text-xxs text-500 opacity-60 d-none d-lg-table-cell" scope="col">Order date</th>
																	  <th class="py-0 text-xxs text-500 opacity-60 d-none d-lg-table-cell" scope="col">Quantity</th>
																	  <th class="py-0 text-xxs text-500 opacity-60" scope="col">Order Status</th>
																	  <th class="py-0 text-xxs text-500 opacity-60 d-none d-xxl-table-cell" scope="col">Price</th>
																	</tr>
																  </thead>
																  <tbody>
																	<tr>
																	  <td class="py-0 text-xs text-500">1233136889</td>
																	  <td class="py-0 text-xs text-500 d-none d-lg-table-cell">2022.05.23</td>
																	  <td class="py-0 text-xs text-500 d-none d-lg-table-cell">1</td>
																	  <td class="py-0 text-xs text-500 text-primary">In Progress</td>
																	  <td class="py-0 text-xs text-500 d-none d-xxl-table-cell">$2500.00</td>
																	</tr>
																  </tbody>
															</table>
														</div>
													</div>
												</div>
												<div id="progressOne" class="accordion-collapse collapse" aria-labelledby="progressHeadlineOne">
													<div class="accordion-body mb-2 mb-xl-0 p-4">
														<div class="row mb-4 mb-xl-5">
															<div class="col-12 col-xl-2 order-2 order-xl-1">
																<img src="assets/images/Products/wheel.png" class="me-4 img-fluid d-none d-xl-inline-block" alt="wheel">
																<div class="d-flex d-xl-none justify-content-between align-items-center border-bottom border-white border-opacity-50 py-3">
																	<div class="w-45 flex-shrink-0">
																		<img src="assets/images/Products/wheel.png" class="mx-2 pe-1 d-none d-sm-inline-block" width="51" alt="wheel">
																		<p class="text-xxs lh-1 mb-0 d-inline-block">Wheel</p>
																	</div>
																	<p class="text-xxs lh-1 text-700 opacity-60 mb-0 w-20 text-center">1 piece</p>
																	<p class="text-xxs lh-1 text-700 mb-0  w-30 text-end">$500.00</p>
																</div>
															</div>
															<div class="col-11 col-md-10 col-lg-11 col-xl-9 order-1 order-xl-2 order-details-headline">
																<div class="row justify-content-between">
																	<div class="col d-none d-lg-block order-1">
																		<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Product name</p>
																		<p class="text-xs lh-1 text-500 mb-0">Wheel</p>
																	</div>
																	<div class="col-6 d-block d-lg-none order-1 mb-4 pb-sm-2">
																		<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Order number</p>
																		<p class="text-xs lh-1 text-500 mb-0">1233136889</p>
																	</div>
																	<div class="col-6 col-lg order-3 mb-4">
																		<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Order date</p>
																		<p class="text-xs lh-1 text-500 mb-0">2022.02.23</p>
																	</div>
																	<div class="col-6 col-lg order-3 mb-4">
																		<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Items Ordered</p>
																		<p class="text-xs lh-1 text-500 mb-0">1</p>
																	</div>
																	<div class="col-6 col-lg order-2 order-xl-4 mb-4 pb-sm-2">
																		<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Order Status</p>
																		<p class="text-xs lh-1 text-500 mb-0 text-primary">In progress</p>
																	</div>
																</div>
																<div class="row d-none d-xl-flex">
																	<div class="col-12 position-relative pt-4 pb-5">
																		<div class="progress bg-transparent overflow-visible">
																			<div class="progress-bar bg-gray overflow-visible position-relative" role="progressbar" aria-label="Segment one" aria-valuenow="31.16" aria-valuemin="0" aria-valuemax="100">
																				<div class="progress-wrapper pe-2 position-absolute d-flex flex-column align-items-center">	
																					<div class="progress-point bg-gray rounded-circle d-flex position-relative justify-content-center align-items-center boxSize-sd">
																						<i class="fal fa-check"></i>
																					</div>
																					<div class="text-xxs lh-1 text-500 mt-3 position-absolute top-100">New</div>
																				</div>
																			</div>
																			<div class="progress-bar bg-gray overflow-visible position-relative" role="progressbar" aria-label="Segment two" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100">
																				<div class="progress-wrapper px-2 position-absolute end-0 d-flex flex-column align-items-center">	
																					<div class="progress-point bg-gray rounded-circle d-flex position-relative justify-content-center align-items-center boxSize-sd">
																						<i class="fal fa-check"></i>
																					</div>
																					<div class="text-xxs lh-1 text-500 mt-3 position-absolute top-100">In Progress</div>
																				</div>
																			</div>
																			<div class="progress-bar bg-gray overflow-visible position-relative" role="progressbar" aria-label="Segment three" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100">
																				<div class="progress-wrapper px-2 position-absolute end-0 d-flex flex-column align-items-center">	
																					<div class="progress-point bg-gray rounded-circle d-flex position-relative justify-content-center align-items-center boxSize-sd">
																						<i class="fal fa-check"></i>
																					</div>
																					<div class="text-xxs lh-1 text-500 mt-3 position-absolute top-100">Sent</div>
																				</div>														
																			</div>
																			<div class="progress-bar active overflow-visible position-relative" role="progressbar" aria-label="Segment four" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
																				<div class="progress-wrapper ps-2 position-absolute end-0 d-flex flex-column align-items-center">	
																					<div class="progress-point bg-gray rounded-circle d-flex position-relative justify-content-center align-items-center boxSize-sd">
																						<i class="fal fa-check"></i>
																					</div>
																					<div class="text-xxs lh-1 text-500 mt-3 position-absolute top-100">Recived By <br> Customer</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>												
															</div>
														</div>
														<div class="row g-0 justify-content-between  order-details-content">
															<div class="col-1 order-1 d-none d-xxl-block"></div>
															<div class="col-12 col-sm-6 col-xl-5 col-xxl-4 order-1 mb-4 mb-sm-0">
																<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Recipient details</p>
																<p class="text-xs lh-1 text-500 mb-0">John Smith</p>
																<p class="text-xs lh-1 text-500 mb-0">johnsmith12@gmail.com</p>
																<p class="text-xs lh-1 text-500 mb-0">+1 2331 2334 009</p>
																<p class="text-xs lh-1 text-500 mb-0">blue street 26, Ottawa</p>
															</div>
															<div class="col-12 col-xl-4 col-xxl-3 order-3 order-xl-2">
																<div class="row">											
																	<div class="col-sm-6 col-xl-12 mb-4 mb-sm-0 mb-xl-3">
																		<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Payment method</p>
																		<i class="icon-card mb-2"></i>
																		<p class="text-xxs lh-1 text-500 mb-0 d-inline-block">Card: **** **** **** 4515 </p>
																	</div>
																	<div class="col-sm-6 col-xl-12 mb-0">
																		<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Delivery</p>
																		<p class="text-xxxs lh-1 text-500 mb-0">
																			<img src="assets/images/Icon/DPD_logo(red)2015.png" class="img-fluid me-2" width="42" alt="DPD logo red">													
																			<a href="#" class="text-white">
																				Package tracking
																			</a>														 
																		</p>
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-6 col-xl-3 order-2 order-xl-3 mb-4 mb-xl-0">
																<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Costs</p>
																<p class="text-xxs lh-1 text-500 mb-3 d-flex justify-content-between">
																	<span>Cart value:</span>
																	<span>$500.00</span>
																</p>
																<p class="text-xxs lh-1 text-500 mb-3 d-flex justify-content-between">
																	<span>Shipping:</span>
																	<span>$25.00</span>
																</p>
																<p class="text-xxs lh-1 text-500 mb-3 d-flex justify-content-between">
																	<span>Payment:</span>
																	<span>$00.00</span>
																</p>
																<p class="text-xxs lh-1 text-500 mb-3 d-flex justify-content-between">
																	<span>Discounts:</span>
																	<span>- $25.00</span>
																</p>
																<p class="text-xxs lh-1 text-700 mb-0 d-flex justify-content-between">
																	<span>Total Price:</span>
																	<span>$500.00</span>
																</p>
															</div>
															<div class="col-1 d-none d-xxl-block order-4"></div>
															<div class="col-12 col-xxl-10 mt-4 mt-sm-5 mt-xl-4 order-4">
																<div class="d-lg-flex justify-content-between">
																	<p class="text-xxxs lh-1 text-500 pb-1 pb-lg-0 mb-3 mb-lg-0">
																		Need Help? 									
																		<a href="#" class="text-primary">
																			Contact Us
																		</a>														 
																	</p>
																	<p class="text-xxxs lh-1 text-500 mb-0">							
																		<a href="#" class="text-white d-flex align-items-center text-decoration-none">
																			<i class="icon-import text-xs me-2 d-none d-lg-inline"></i>
																			<span class="text-decoration-underline">Download invoice</span>															
																		</a>														 
																	</p>
																</div>
															</div>
														</div>										
													</div>
												</div>
											</div>
										</div>						
									</div>	

									<div class="col-12 col-md-11 col-lg-10 col-xl-7 col-xxl-6">
										<div class="mb-4 text-center text-lg-start">	
											<h4 class="headline-4 headline-lg-4 text-800 lh-1 mb-3">All orders</h4>
											<p class="text-xs lh-1_1 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
										</div>
									</div>



									<div class="col-12 col-md-11 col-lg-12">
										<ul class="nav nav-tabs d-flex justify-content-between w-50 mb-4 pb-lg-2 rounded-3" id="orders-tab" role="tablist">
											<li class="nav-item flex-fill" role="presentation">
												<button class="nav-link text-white text-opacity-50 text-xs text-60 lh-1 p-3 p-sm-4 p-lg-0 w-100 text-center text-lg-start" id="orders-all-tab" data-bs-toggle="pill" data-bs-target="#orders-all" type="button" role="tab" aria-controls="orders-all" aria-selected="true">All</button>
											</li>
											<li class="nav-item flex-fill" role="presentation">
												<button class="nav-link text-white text-opacity-50 text-xs text-60 lh-1 p-3 p-sm-4 p-lg-0 active w-100 text-center text-lg-start" id="orders-2022-tab" data-bs-toggle="pill" data-bs-target="#orders-2022" type="button" role="tab" aria-controls="orders-2022" aria-selected="false">2022</button>
											</li>
											<li class="nav-item flex-fill" role="presentation">
												<button class="nav-link text-white text-opacity-50 text-xs text-60 lh-1 p-3 p-sm-4 p-lg-0 w-100 text-center text-lg-start" id="orders-2021-tab" data-bs-toggle="pill" data-bs-target="#orders-2021" type="button" role="tab" aria-controls="orders-2021" aria-selected="false">2021</button>
											</li>
											<li class="nav-item flex-fill" role="presentation">
												<button class="nav-link text-white text-opacity-50 text-xs text-60 lh-1 p-3 p-sm-4 p-lg-0 w-100 text-center text-lg-start" id="orders-2020-tab" data-bs-toggle="pill" data-bs-target="#orders-2020" type="button" role="tab" aria-controls="orders-2020" aria-selected="false">2020</button>
											</li>
											<li class="nav-item flex-fill" role="presentation">
												<button class="nav-link text-white text-opacity-50 text-xs text-60 lh-1 p-3 p-sm-4 p-lg-0 w-100 text-center text-lg-start" id="orders-2019-tab" data-bs-toggle="pill" data-bs-target="#orders-2019" type="button" role="tab" aria-controls="orders-2019" aria-selected="false">2019</button>
											</li>
										</ul>
										<div class="tab-content" id="orders-tabContent">
											<div class="tab-pane fade" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab" tabindex="0"></div>
											<div class="tab-pane fade show active" id="orders-2022" role="tabpanel" aria-labelledby="orders-2022-tab" tabindex="0">
												<div class="accordion accordionPurchase" id="accordionAllOrders">										
													<div class="accordion-item purchase-item  mb-4 rounded-3 background-card">
														<div class="accordion-header" id="orderHeadlineOne">
															<div class="accordion-button collapsed  d-flex py-4 px-3 justify-content-between" role="button" data-bs-toggle="collapse" data-bs-target="#orderOne" aria-expanded="false" aria-controls="orderOne">
																<div class="d-flex justify-content-between align-items-center h-100 accordion-header-text order-details-headline">
																	<span class="me-4 d-none d-sm-flex align-items-center order-details-imgs">
																		<img src="assets/images/Products/wheel.png" class="img-fluid order-details-img w-100" alt="">
																	</span>
																	<table class="table text-white table-borderless mb-0">	
																		<thead>
																			<tr >
																			  <th class="py-0 text-xxs text-500 opacity-60" scope="col">Order number</th>
																			  <th class="py-0 text-xxs text-500 opacity-60 d-none d-lg-table-cell" scope="col">Order date</th>
																			  <th class="py-0 text-xxs text-500 opacity-60 d-none d-lg-table-cell" scope="col">Quantity</th>
																			  <th class="py-0 text-xxs text-500 opacity-60 d-table-cell" scope="col">Order Status</th>
																			  <th class="py-0 text-xxs text-500 opacity-60 d-none d-xxl-table-cell" scope="col">Price</th>
																			</tr>
																		  </thead>
																		  <tbody>
																			<tr>
																			  <td class="py-0 text-xs text-500">1233136889</td>
																			  <td class="py-0 text-xs text-500 d-none d-lg-table-cell">2022.05.23</td>
																			  <td class="py-0 text-xs text-500 d-none d-lg-table-cell">1</td>
																			  <td class="py-0 text-xs text-500 text-success  d-table-cell">Complete</td>
																			  <td class="py-0 text-xs text-500 d-none d-xxl-table-cell">$2500.00</td>
																			</tr>
																		  </tbody>
																	</table>
																</div>
															</div>
														</div>
														<div id="orderOne" class="accordion-collapse collapse" aria-labelledby="orderHeadlineOne">
															<div class="accordion-body mb-2 mb-lg-0 p-4">
																<div class="row mb-sm-5">
																	<div class="col-1 d-none d-xxl-block"></div>
																	<div class="col-11 col-xxl-10">
																		<div class="row justify-content-between">
																			<div class="col-6 col-lg mb-4 pb-2 order-1">
																				<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Order number</p>
																				<p class="text-xs lh-1 text-500 mb-0">7021136889</p>
																			</div>
																			<div class="col-6 col-lg mb-4 mb-sm-0 order-3">
																				<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Order date</p>
																				<p class="text-xs lh-1 text-500 mb-0">2022.06.03</p>
																			</div>
																			<div class="col-6 col-lg mb-4 mb-sm-0 order-3">
																				<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Items Ordered</p>
																				<p class="text-xs lh-1 text-500 mb-0">1</p>
																			</div>
																			<div class="col-6 col-lg mb-4 pb-2 order-2 order-lg-4">
																				<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Order Status</p>
																				<p class="text-xs lh-1 text-500 mb-0 text-success">Realized</p>
																			</div>
																		</div>
																		<div class="row d-none d-lg-flex">
																			<div class="col-12 position-relative pt-4 pb-5">
																				<div class="progress bg-transparent overflow-visible">
																					<div class="progress-bar bg-gray overflow-visible position-relative" role="progressbar" aria-label="Segment one"  aria-valuenow="31.16" aria-valuemin="0" aria-valuemax="100">
																						<div class="progress-wrapper pe-2 position-absolute d-flex flex-column align-items-center">	
																							<div class="progress-point bg-gray rounded-circle d-flex position-relative justify-content-center align-items-center boxSize-sd">
																								<i class="fal fa-check"></i>
																							</div>
																							<div class="text-xxs lh-1 text-500 mt-3 position-absolute top-100">New</div>
																						</div>
																					</div>
																					<div class="progress-bar bg-gray overflow-visible position-relative" role="progressbar" aria-label="Segment two" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100">
																						<div class="progress-wrapper px-2 position-absolute end-0 d-flex flex-column align-items-center">	
																							<div class="progress-point bg-gray rounded-circle d-flex position-relative justify-content-center align-items-center boxSize-sd">
																								<i class="fal fa-check"></i>
																							</div>
																							<div class="text-xxs lh-1 text-500 mt-3 position-absolute top-100">In Progress</div>
																						</div>
																					</div>
																					<div class="progress-bar bg-gray overflow-visible position-relative" role="progressbar" aria-label="Segment three" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100">
																						<div class="progress-wrapper px-2 position-absolute end-0 d-flex flex-column align-items-center">	
																							<div class="progress-point bg-gray rounded-circle d-flex position-relative justify-content-center align-items-center boxSize-sd">
																								<i class="fal fa-check"></i>
																							</div>
																							<div class="text-xxs lh-1 text-500 mt-3 position-absolute top-100">Sent</div>
																						</div>														
																					</div>
																					<div class="progress-bar active overflow-visible position-relative" role="progressbar" aria-label="Segment four" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
																						<div class="progress-wrapper ps-2 position-absolute end-0 d-flex flex-column align-items-center">	
																							<div class="progress-point bg-gray rounded-circle d-flex position-relative justify-content-center align-items-center boxSize-sd">
																								<i class="fal fa-check"></i>
																							</div>
																							<div class="text-xxs lh-1 text-500 mt-3 position-absolute top-100">Recived By <br> Customer</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>												
																	</div>
																</div>
																<div class="row g-0 justify-content-center  order-details-content">
																	<div class="col-12 col-xxl-10">
																		<div class="row">
																			<div class="col-12 col-sm-6 col-xl-4 mb-4 pb-sm-3 order-2 order-xl-1 mt-4 mt-xl-0">
																				<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Recipient details</p>
																				<p class="text-xs lh-1 text-500 mb-0">John Smith</p>
																				<p class="text-xs lh-1 text-500 mb-0">johnsmith12@gmail.com</p>
																				<p class="text-xs lh-1 text-500 mb-0">+1 2331 2334 009</p>
																				<p class="text-xs lh-1 text-500 mb-0">blue street 26, Ottawa</p>
																			</div>
																			<div class="col-12 col-xl-8 order-1 order-xl-2">
																				<p class="text-xxs lh-1 text-500 mb-3 opacity-60 d-none d-xl-block">Costs</p>
																				<div class="d-flex justify-content-between align-items-center border-bottom border-white border-opacity-50 py-3">
																					<div class="w-45 flex-shrink-0">
																						<img src="assets/images/Products/air_filter.png" class="mx-2 pe-1 d-none d-sm-inline-block" width="51" alt="air filer">
																						<p class="text-xxs lh-1 mb-0 d-inline-block">Air Engine Filter</p>
																					</div>
																					<p class="text-xxs lh-1 text-700 opacity-60 mb-0 w-20 text-center">1 piece</p>
																					<p class="text-xxs lh-1 text-700 mb-0  w-30 text-end">$500.00</p>
																				</div>
																				<div class="d-flex justify-content-between align-items-center border-bottom border-white border-opacity-50 py-3">
																					<div class="w-45 flex-shrink-0">
																						<img src="assets/images/Products/air_filter.png" class="mx-2 pe-1 d-none d-sm-inline-block" width="51" alt="air filer">
																						<p class="text-xxs lh-1 mb-0 d-inline-block">Air Engine Filter</p>
																					</div>
																					<p class="text-xxs lh-1 text-700 opacity-60 mb-0 w-20 text-center">1 piece</p>
																					<p class="text-xxs lh-1 text-700 mb-0  w-30 text-end">$500.00</p>
																				</div>
																			</div>
																			<div class="col-12 col-xl-4 order-4 order-xl-3 mt-4 mt-xl-0">
																				<div class="row">
																					<div class="col-12 col-sm-6 col-xl-12 mb-4 mb-sm-0 mb-xl-4 pb-xl-2">
																						<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Payment method</p>
																						<i class="icon-card mb-2"></i>
																						<p class="text-xxs lh-1 text-500 mb-0 d-inline-block">Card: **** **** **** 4515 </p>
																					</div>
																					<div class="col-12 col-sm-6 col-xl-12">
																						<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Delivery</p>
																						<p class="text-xxxs lh-1 text-500 mb-0">
																							<img src="assets/images/Icon/DPD_logo(red)2015.png" class="img-fluid me-2" width="42" alt="DPD logo red">													
																							<a href="#" class="text-white">
																								Package tracking
																							</a>														 
																						</p>
																					</div>
																				</div>														
																			</div>
																			<div class="col-4 d-none d-xl-block order-3"></div>
																			<div class="col-12 col-sm-6 col-xl-4 order-3 order-xl-4">
																				<div class="d-flex flex-column ms-0 mt-sm-4 pt-0 pt-xl-2">
																					<p class="text-xxs lh-1 text-500 mb-3 d-flex justify-content-between">
																						<span>Cart value:</span>
																						<span>$1000.00</span>
																					</p>
																					<p class="text-xxs lh-1 text-500 mb-3 d-flex justify-content-between">
																						<span>Shipping:</span>
																						<span>$25.00</span>
																					</p>
																					<p class="text-xxs lh-1 text-500 mb-3 d-flex justify-content-between">
																						<span>Payment:</span>
																						<span>$00.00</span>
																					</p>
																					<p class="text-xxs lh-1 text-500 mb-3 d-flex justify-content-between">
																						<span>Discounts:</span>
																						<span>- $25.00</span>
																					</p>
																					<p class="text-xxs lh-1 text-700 mb-0 d-flex justify-content-between">
																						<span>Total Price:</span>
																						<span>$1000.00</span>
																					</p>
																				</div>
																			</div>
																			<div class="col-12 mt-4 mt-sm-5 order-5">
																				<div class="d-lg-flex justify-content-between">
																					<p class="text-xxxs lh-1 text-500 mb-3 mb-xl-0 pb-1 pb-xl-0">
																						Need Help? 									
																						<a href="#" class="text-primary">
																							Contact Us
																						</a>														 
																					</p>
																					<p class="text-xxxs lh-1 text-500 mb-0">							
																						<a href="#" class="text-white d-flex align-items-center text-decoration-none">
																							<i class="icon-import text-xs me-2 d-none d-xl-inline"></i>
																							<span class="text-decoration-underline">Download invoice</span>															
																						</a>														 
																					</p>
																				</div>
																			</div>
																		</div>
																	</div>
																
																</div>
																
															</div>
														</div>
													</div>
													<div class="accordion-item purchase-item  mb-4 rounded-3 background-card">
														<div class="accordion-header" id="orderHeadlineTwo">
															<div class="accordion-button collapsed  d-flex py-4 px-3 justify-content-between" role="button" data-bs-toggle="collapse" data-bs-target="#orderTwo" aria-expanded="false" aria-controls="orderTwo">
																<div class="d-flex justify-content-between align-items-center h-100 accordion-header-text order-details-headline">
																	<span class="me-4 d-none d-sm-flex align-items-center order-details-imgs">
																		<img src="assets/images/Products/wheel.png" class="img-fluid order-details-img w-100" alt="">
																	</span>
																	<table class="table text-white table-borderless mb-0">	
																		<thead>
																			<tr >
																			  <th class="py-0 text-xxs text-500 opacity-60" scope="col">Order number</th>
																			  <th class="py-0 text-xxs text-500 opacity-60 d-none d-lg-table-cell" scope="col">Order date</th>
																			  <th class="py-0 text-xxs text-500 opacity-60 d-none d-lg-table-cell" scope="col">Quantity</th>
																			  <th class="py-0 text-xxs text-500 opacity-60 d-table-cell" scope="col">Order Status</th>
																			  <th class="py-0 text-xxs text-500 opacity-60 d-none d-xxl-table-cell" scope="col">Price</th>
																			</tr>
																		  </thead>
																		  <tbody>
																			<tr>
																			  <td class="py-0 text-xs text-500">1233136889</td>
																			  <td class="py-0 text-xs text-500 d-none d-lg-table-cell">2022.05.23</td>
																			  <td class="py-0 text-xs text-500 d-none d-lg-table-cell">1</td>
																			  <td class="py-0 text-xs text-500 text-success  d-table-cell">Complete</td>
																			  <td class="py-0 text-xs text-500 d-none d-xxl-table-cell">$2500.00</td>
																			</tr>
																		  </tbody>
																	</table>
																</div>
															</div>
														</div>
														<div id="orderTwo" class="accordion-collapse collapse" aria-labelledby="orderHeadlineTwo">
														<div class="accordion-body mb-2 mb-lg-0 p-4">
																<div class="row mb-sm-5">
																	<div class="col-1 d-none d-xxl-block"></div>
																	<div class="col-11 col-xxl-10">
																		<div class="row justify-content-between">
																			<div class="col-6 col-lg mb-4 pb-2 order-1">
																				<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Order number</p>
																				<p class="text-xs lh-1 text-500 mb-0">7021136889</p>
																			</div>
																			<div class="col-6 col-lg mb-4 mb-sm-0 order-3">
																				<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Order date</p>
																				<p class="text-xs lh-1 text-500 mb-0">2022.06.03</p>
																			</div>
																			<div class="col-6 col-lg mb-4 mb-sm-0 order-3">
																				<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Items Ordered</p>
																				<p class="text-xs lh-1 text-500 mb-0">1</p>
																			</div>
																			<div class="col-6 col-lg mb-4 pb-2 order-2 order-lg-4">
																				<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Order Status</p>
																				<p class="text-xs lh-1 text-500 mb-0 text-success">Realized</p>
																			</div>
																		</div>
																		<div class="row d-none d-lg-flex">
																			<div class="col-12 position-relative pt-4 pb-5">
																				<div class="progress bg-transparent overflow-visible">
																					<div class="progress-bar bg-gray overflow-visible position-relative" role="progressbar" aria-label="Segment one"  aria-valuenow="31.16" aria-valuemin="0" aria-valuemax="100">
																						<div class="progress-wrapper pe-2 position-absolute d-flex flex-column align-items-center">	
																							<div class="progress-point bg-gray rounded-circle d-flex position-relative justify-content-center align-items-center boxSize-sd">
																								<i class="fal fa-check"></i>
																							</div>
																							<div class="text-xxs lh-1 text-500 mt-3 position-absolute top-100">New</div>
																						</div>
																					</div>
																					<div class="progress-bar bg-gray overflow-visible position-relative" role="progressbar" aria-label="Segment two" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100">
																						<div class="progress-wrapper px-2 position-absolute end-0 d-flex flex-column align-items-center">	
																							<div class="progress-point bg-gray rounded-circle d-flex position-relative justify-content-center align-items-center boxSize-sd">
																								<i class="fal fa-check"></i>
																							</div>
																							<div class="text-xxs lh-1 text-500 mt-3 position-absolute top-100">In Progress</div>
																						</div>
																					</div>
																					<div class="progress-bar bg-gray overflow-visible position-relative" role="progressbar" aria-label="Segment three" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100">
																						<div class="progress-wrapper px-2 position-absolute end-0 d-flex flex-column align-items-center">	
																							<div class="progress-point bg-gray rounded-circle d-flex position-relative justify-content-center align-items-center boxSize-sd">
																								<i class="fal fa-check"></i>
																							</div>
																							<div class="text-xxs lh-1 text-500 mt-3 position-absolute top-100">Sent</div>
																						</div>														
																					</div>
																					<div class="progress-bar active overflow-visible position-relative" role="progressbar" aria-label="Segment four" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
																						<div class="progress-wrapper ps-2 position-absolute end-0 d-flex flex-column align-items-center">	
																							<div class="progress-point bg-gray rounded-circle d-flex position-relative justify-content-center align-items-center boxSize-sd">
																								<i class="fal fa-check"></i>
																							</div>
																							<div class="text-xxs lh-1 text-500 mt-3 position-absolute top-100">Recived By <br> Customer</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>												
																	</div>
																</div>
																<div class="row g-0 justify-content-center  order-details-content">
																	<div class="col-12 col-xxl-10">
																		<div class="row">
																			<div class="col-12 col-sm-6 col-xl-4 mb-4 pb-sm-3 order-2 order-xl-1 mt-4 mt-xl-0">
																				<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Recipient details</p>
																				<p class="text-xs lh-1 text-500 mb-0">John Smith</p>
																				<p class="text-xs lh-1 text-500 mb-0">johnsmith12@gmail.com</p>
																				<p class="text-xs lh-1 text-500 mb-0">+1 2331 2334 009</p>
																				<p class="text-xs lh-1 text-500 mb-0">blue street 26, Ottawa</p>
																			</div>
																			<div class="col-12 col-xl-8 order-1 order-xl-2">
																				<p class="text-xxs lh-1 text-500 mb-3 opacity-60 d-none d-xl-block">Costs</p>
																				<div class="d-flex justify-content-between align-items-center border-bottom border-white border-opacity-50 py-3">
																					<div class="w-45 flex-shrink-0">
																						<img src="assets/images/Products/air_filter.png" class="mx-2 pe-1 d-none d-sm-inline-block" width="51" alt="air filer">
																						<p class="text-xxs lh-1 mb-0 d-inline-block">Air Engine Filter</p>
																					</div>
																					<p class="text-xxs lh-1 text-700 opacity-60 mb-0 w-20 text-center">1 piece</p>
																					<p class="text-xxs lh-1 text-700 mb-0  w-30 text-end">$500.00</p>
																				</div>
																				<div class="d-flex justify-content-between align-items-center border-bottom border-white border-opacity-50 py-3">
																					<div class="w-45 flex-shrink-0">
																						<img src="assets/images/Products/air_filter.png" class="mx-2 pe-1 d-none d-sm-inline-block" width="51" alt="air filer">
																						<p class="text-xxs lh-1 mb-0 d-inline-block">Air Engine Filter</p>
																					</div>
																					<p class="text-xxs lh-1 text-700 opacity-60 mb-0 w-20 text-center">1 piece</p>
																					<p class="text-xxs lh-1 text-700 mb-0  w-30 text-end">$500.00</p>
																				</div>
																			</div>
																			<div class="col-12 col-xl-4 order-4 order-xl-3 mt-4 mt-xl-0">
																				<div class="row">
																					<div class="col-12 col-sm-6 col-xl-12 mb-4 mb-sm-0 mb-xl-4 pb-xl-2">
																						<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Payment method</p>
																						<i class="icon-card mb-2"></i>
																						<p class="text-xxs lh-1 text-500 mb-0 d-inline-block">Card: **** **** **** 4515 </p>
																					</div>
																					<div class="col-12 col-sm-6 col-xl-12">
																						<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Delivery</p>
																						<p class="text-xxxs lh-1 text-500 mb-0">
																							<img src="assets/images/Icon/DPD_logo(red)2015.png" class="img-fluid me-2" width="42" alt="DPD logo red">													
																							<a href="#" class="text-white">
																								Package tracking
																							</a>														 
																						</p>
																					</div>
																				</div>														
																			</div>
																			<div class="col-4 d-none d-xl-block order-3"></div>
																			<div class="col-12 col-sm-6 col-xl-4 order-3 order-xl-4">
																				<div class="d-flex flex-column ms-0 mt-sm-4 pt-0 pt-xl-2">
																					<p class="text-xxs lh-1 text-500 mb-3 d-flex justify-content-between">
																						<span>Cart value:</span>
																						<span>$1000.00</span>
																					</p>
																					<p class="text-xxs lh-1 text-500 mb-3 d-flex justify-content-between">
																						<span>Shipping:</span>
																						<span>$25.00</span>
																					</p>
																					<p class="text-xxs lh-1 text-500 mb-3 d-flex justify-content-between">
																						<span>Payment:</span>
																						<span>$00.00</span>
																					</p>
																					<p class="text-xxs lh-1 text-500 mb-3 d-flex justify-content-between">
																						<span>Discounts:</span>
																						<span>- $25.00</span>
																					</p>
																					<p class="text-xxs lh-1 text-700 mb-0 d-flex justify-content-between">
																						<span>Total Price:</span>
																						<span>$1000.00</span>
																					</p>
																				</div>
																			</div>
																			<div class="col-12 mt-4 mt-sm-5 order-5">
																				<div class="d-lg-flex justify-content-between">
																					<p class="text-xxxs lh-1 text-500 mb-3 mb-xl-0 pb-1 pb-xl-0">
																						Need Help? 									
																						<a href="#" class="text-primary">
																							Contact Us
																						</a>														 
																					</p>
																					<p class="text-xxxs lh-1 text-500 mb-0">							
																						<a href="#" class="text-white d-flex align-items-center text-decoration-none">
																							<i class="icon-import text-xs me-2 d-none d-xl-inline"></i>
																							<span class="text-decoration-underline">Download invoice</span>															
																						</a>														 
																					</p>
																				</div>
																			</div>
																		</div>
																	</div>
																
																</div>
																
															</div>
														</div>
													</div>
													<div class="accordion-item purchase-item  mb-4 rounded-3 background-card">
														<div class="accordion-header" id="orderHeadlineThree">
															<div class="accordion-button collapsed  d-flex py-4 px-3 justify-content-between" role="button" data-bs-toggle="collapse" data-bs-target="#orderThree" aria-expanded="false" aria-controls="orderThree">
																<div class="d-flex justify-content-between align-items-center h-100 accordion-header-text order-details-headline">
																	<span class="me-4 d-none d-sm-flex align-items-center order-details-imgs">
																		<img src="assets/images/Products/wheel.png" class="img-fluid order-details-img w-100" alt="">
																	</span>
																	<table class="table text-white table-borderless mb-0">	
																		<thead>
																			<tr >
																			  <th class="py-0 text-xxs text-500 opacity-60" scope="col">Order number</th>
																			  <th class="py-0 text-xxs text-500 opacity-60 d-none d-lg-table-cell" scope="col">Order date</th>
																			  <th class="py-0 text-xxs text-500 opacity-60 d-none d-lg-table-cell" scope="col">Quantity</th>
																			  <th class="py-0 text-xxs text-500 opacity-60 d-table-cell" scope="col">Order Status</th>
																			  <th class="py-0 text-xxs text-500 opacity-60 d-none d-xxl-table-cell" scope="col">Price</th>
																			</tr>
																		  </thead>
																		  <tbody>
																			<tr>
																			  <td class="py-0 text-xs text-500">1233136889</td>
																			  <td class="py-0 text-xs text-500 d-none d-lg-table-cell">2022.05.23</td>
																			  <td class="py-0 text-xs text-500 d-none d-lg-table-cell">1</td>
																			  <td class="py-0 text-xs text-500 text-success  d-table-cell">Complete</td>
																			  <td class="py-0 text-xs text-500 d-none d-xxl-table-cell">$2500.00</td>
																			</tr>
																		  </tbody>
																	</table>
																</div>
															</div>
														</div>
														<div id="orderThree" class="accordion-collapse collapse" aria-labelledby="orderHeadlineThree">
														<div class="accordion-body mb-2 mb-lg-0 p-4">
																<div class="row mb-sm-5">
																	<div class="col-1 d-none d-xxl-block"></div>
																	<div class="col-11 col-xxl-10">
																		<div class="row justify-content-between">
																			<div class="col-6 col-lg mb-4 pb-2 order-1">
																				<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Order number</p>
																				<p class="text-xs lh-1 text-500 mb-0">7021136889</p>
																			</div>
																			<div class="col-6 col-lg mb-4 mb-sm-0 order-3">
																				<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Order date</p>
																				<p class="text-xs lh-1 text-500 mb-0">2022.06.03</p>
																			</div>
																			<div class="col-6 col-lg mb-4 mb-sm-0 order-3">
																				<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Items Ordered</p>
																				<p class="text-xs lh-1 text-500 mb-0">1</p>
																			</div>
																			<div class="col-6 col-lg mb-4 pb-2 order-2 order-lg-4">
																				<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Order Status</p>
																				<p class="text-xs lh-1 text-500 mb-0 text-success">Realized</p>
																			</div>
																		</div>
																		<div class="row d-none d-lg-flex">
																			<div class="col-12 position-relative pt-4 pb-5">
																				<div class="progress bg-transparent overflow-visible">
																					<div class="progress-bar bg-gray overflow-visible position-relative" role="progressbar" aria-label="Segment one"  aria-valuenow="31.16" aria-valuemin="0" aria-valuemax="100">
																						<div class="progress-wrapper pe-2 position-absolute d-flex flex-column align-items-center">	
																							<div class="progress-point bg-gray rounded-circle d-flex position-relative justify-content-center align-items-center boxSize-sd">
																								<i class="fal fa-check"></i>
																							</div>
																							<div class="text-xxs lh-1 text-500 mt-3 position-absolute top-100">New</div>
																						</div>
																					</div>
																					<div class="progress-bar bg-gray overflow-visible position-relative" role="progressbar" aria-label="Segment two" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100">
																						<div class="progress-wrapper px-2 position-absolute end-0 d-flex flex-column align-items-center">	
																							<div class="progress-point bg-gray rounded-circle d-flex position-relative justify-content-center align-items-center boxSize-sd">
																								<i class="fal fa-check"></i>
																							</div>
																							<div class="text-xxs lh-1 text-500 mt-3 position-absolute top-100">In Progress</div>
																						</div>
																					</div>
																					<div class="progress-bar bg-gray overflow-visible position-relative" role="progressbar" aria-label="Segment three" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100">
																						<div class="progress-wrapper px-2 position-absolute end-0 d-flex flex-column align-items-center">	
																							<div class="progress-point bg-gray rounded-circle d-flex position-relative justify-content-center align-items-center boxSize-sd">
																								<i class="fal fa-check"></i>
																							</div>
																							<div class="text-xxs lh-1 text-500 mt-3 position-absolute top-100">Sent</div>
																						</div>														
																					</div>
																					<div class="progress-bar active overflow-visible position-relative" role="progressbar" aria-label="Segment four" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
																						<div class="progress-wrapper ps-2 position-absolute end-0 d-flex flex-column align-items-center">	
																							<div class="progress-point bg-gray rounded-circle d-flex position-relative justify-content-center align-items-center boxSize-sd">
																								<i class="fal fa-check"></i>
																							</div>
																							<div class="text-xxs lh-1 text-500 mt-3 position-absolute top-100">Recived By <br> Customer</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>												
																	</div>
																</div>
																<div class="row g-0 justify-content-center  order-details-content">
																	<div class="col-12 col-xxl-10">
																		<div class="row">
																			<div class="col-12 col-sm-6 col-xl-4 mb-4 pb-sm-3 order-2 order-xl-1 mt-4 mt-xl-0">
																				<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Recipient details</p>
																				<p class="text-xs lh-1 text-500 mb-0">John Smith</p>
																				<p class="text-xs lh-1 text-500 mb-0">johnsmith12@gmail.com</p>
																				<p class="text-xs lh-1 text-500 mb-0">+1 2331 2334 009</p>
																				<p class="text-xs lh-1 text-500 mb-0">blue street 26, Ottawa</p>
																			</div>
																			<div class="col-12 col-xl-8 order-1 order-xl-2">
																				<p class="text-xxs lh-1 text-500 mb-3 opacity-60 d-none d-xl-block">Costs</p>
																				<div class="d-flex justify-content-between align-items-center border-bottom border-white border-opacity-50 py-3">
																					<div class="w-45 flex-shrink-0">
																						<img src="assets/images/Products/air_filter.png" class="mx-2 pe-1 d-none d-sm-inline-block" width="51" alt="air filer">
																						<p class="text-xxs lh-1 mb-0 d-inline-block">Air Engine Filter</p>
																					</div>
																					<p class="text-xxs lh-1 text-700 opacity-60 mb-0 w-20 text-center">1 piece</p>
																					<p class="text-xxs lh-1 text-700 mb-0  w-30 text-end">$500.00</p>
																				</div>
																				<div class="d-flex justify-content-between align-items-center border-bottom border-white border-opacity-50 py-3">
																					<div class="w-45 flex-shrink-0">
																						<img src="assets/images/Products/air_filter.png" class="mx-2 pe-1 d-none d-sm-inline-block" width="51" alt="air filer">
																						<p class="text-xxs lh-1 mb-0 d-inline-block">Air Engine Filter</p>
																					</div>
																					<p class="text-xxs lh-1 text-700 opacity-60 mb-0 w-20 text-center">1 piece</p>
																					<p class="text-xxs lh-1 text-700 mb-0  w-30 text-end">$500.00</p>
																				</div>
																			</div>
																			<div class="col-12 col-xl-4 order-4 order-xl-3 mt-4 mt-xl-0">
																				<div class="row">
																					<div class="col-12 col-sm-6 col-xl-12 mb-4 mb-sm-0 mb-xl-4 pb-xl-2">
																						<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Payment method</p>
																						<i class="icon-card mb-2"></i>
																						<p class="text-xxs lh-1 text-500 mb-0 d-inline-block">Card: **** **** **** 4515 </p>
																					</div>
																					<div class="col-12 col-sm-6 col-xl-12">
																						<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Delivery</p>
																						<p class="text-xxxs lh-1 text-500 mb-0">
																							<img src="assets/images/Icon/DPD_logo(red)2015.png" class="img-fluid me-2" width="42" alt="DPD logo red">													
																							<a href="#" class="text-white">
																								Package tracking
																							</a>														 
																						</p>
																					</div>
																				</div>														
																			</div>
																			<div class="col-4 d-none d-xl-block order-3"></div>
																			<div class="col-12 col-sm-6 col-xl-4 order-3 order-xl-4">
																				<div class="d-flex flex-column ms-0 mt-sm-4 pt-0 pt-xl-2">
																					<p class="text-xxs lh-1 text-500 mb-3 d-flex justify-content-between">
																						<span>Cart value:</span>
																						<span>$1000.00</span>
																					</p>
																					<p class="text-xxs lh-1 text-500 mb-3 d-flex justify-content-between">
																						<span>Shipping:</span>
																						<span>$25.00</span>
																					</p>
																					<p class="text-xxs lh-1 text-500 mb-3 d-flex justify-content-between">
																						<span>Payment:</span>
																						<span>$00.00</span>
																					</p>
																					<p class="text-xxs lh-1 text-500 mb-3 d-flex justify-content-between">
																						<span>Discounts:</span>
																						<span>- $25.00</span>
																					</p>
																					<p class="text-xxs lh-1 text-700 mb-0 d-flex justify-content-between">
																						<span>Total Price:</span>
																						<span>$1000.00</span>
																					</p>
																				</div>
																			</div>
																			<div class="col-12 mt-4 mt-sm-5 order-5">
																				<div class="d-lg-flex justify-content-between">
																					<p class="text-xxxs lh-1 text-500 mb-3 mb-xl-0 pb-1 pb-xl-0">
																						Need Help? 									
																						<a href="#" class="text-primary">
																							Contact Us
																						</a>														 
																					</p>
																					<p class="text-xxxs lh-1 text-500 mb-0">							
																						<a href="#" class="text-white d-flex align-items-center text-decoration-none">
																							<i class="icon-import text-xs me-2 d-none d-xl-inline"></i>
																							<span class="text-decoration-underline">Download invoice</span>															
																						</a>														 
																					</p>
																				</div>
																			</div>
																		</div>
																	</div>
																
																</div>
																
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="orders-2021" role="tabpanel" aria-labelledby="orders-2021-tab" tabindex="0">Orders 2021</div>
											<div class="tab-pane fade" id="orders-2020" role="tabpanel" aria-labelledby="orders-2020-tab" tabindex="0">Orders 2020</div>
											<div class="tab-pane fade" id="orders-2019" role="tabpanel" aria-labelledby="orders-2019-tab" tabindex="0">Orders 2019</div>

										  </div>

										
									</div>
								</div>							
							</div>
							<div class="tab-pane fade" id="v-my-newsletters" role="tabpanel" aria-labelledby="v-my-newsletters-tab" tabindex="0">
								<h3 class="headline text-800 text-uppercase lh-1 mb-5">My Newsletters</h3>
								
							</div>	
							<div class="tab-pane fade" id="v-account-settings" role="tabpanel" aria-labelledby="v-account-settings-tab" tabindex="0">
								<h3 class="headline text-800 text-uppercase lh-1 mb-5">Account Settings</h3>								
							</div>		
						</div>
    				</div>   				
    			</div>
    		</div>
        </section>
		<section class="section-contact bg-primary py-5 position-relative overflow-hidden mt-5 d-none">
			<div class="container pt-lg-1 pb-lg-2 pb-xl-3">
				<div class="row justify-content-center position-relative z-index_3">
					<div class="col-12 mb-4 mb-lg-5 text-center">
						<h2 class="headline-2 text-800 lh-1 text-uppercase mb-1">PROBLEM WITH ORDER?</h2>
					</div>
					<div class="col-10 col-sm-8 col-lg-4 mb-4 mb-lg-0">
						<a href="tel:+1000000000" class="btn btn-outline-black w-100 btn-center">
							<span class="btn-text">CALL US +1 000 000 000</span> 
						</a>
					</div>
					<div class="col-10 col-sm-8 col-lg-4">
						<a href="mailto:info@gmail.com" class="btn btn-black btn-center w-100">
							<span class="btn-text">WRITE A MESSAGE</span> 
						</a>
					</div>
				</div>
				<img src="assets/images/Background/Zasob-1.png" alt="gears" class="position-absolute start-50 top-50 translate-middle opacity-10 w-75 z-index_0">
			</div>
		</section> 
    </main>	
	
    
	<?php include './src/footer.php';?>	

	<?php include './src/navbar-offcanvas-chat.php';?>
    <?php include './src/navbar-offcanvas-cart.php';?>
    <?php include './src/navbar-offcanvas-user-panel.php';?>
    <?php include './src/navbar-modal.php';?>


	
	<!-- _________________________________ modal New Address _______________________________________ -->
	<div class="modal z-index_1200 fade addNewAddress" id="addNewAddress" tabindex="-1" aria-labelledby="addNewAddress" aria-hidden="true">
        <button type="button" class="btn-close m-0 p-0 opacity-100 text-white bg-img-none position-absolute top-0 start-0 p-3" data-bs-dismiss="modal" aria-label="Close">
            <i class="icon-arrow-left"></i>
        </button>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg modal-fullscreen-lg-down">
			<div class="modal-content bg-dark rounded-3">
				<div class="modal-body scroll-dark p-0 h-100">						
					<div class="card border-white border-opacity-05 rounded-3 card-bg-dark min-h-100">
						<div class="card-body p-4 p-sm-5 position-relative d-flex flex-column">
							<button type="button" class="btn-close p-4 p-sm-5 opacity-100 text-white d-inline-block d-lg-none w-auto text-end position-absolute top-0 end-0 bg-img-none h-auto" data-bs-dismiss="modal" aria-label="Close">
								<i class="icon-close-circle text-md"></i>
							</button>
							<div class="">
								<div class="row h-100 justify-content-center align-content-center">
									<div class="col-12 mb-4 pb-2 mt-5 mt-lg-0  text-center text-lg-start">
										<h3 class="headline-3 lh-1 text-800 text-uppercase mb-4 pb-2">ADD NEW Address</h3>
										<!-- <p class="text-xs lh-xl mb-0">Specify your vehicle type and add more info about your machine</p> -->
									</div>
									<form class="mb-2 addNewAddresForm needs-validation" novalidate>
										<div class="row">
											<div class="col-12 mb-4 pb-2">
												<input class="form-control form-control-sm form-control-gray rounded-1 form-control-fs-up newName" type="text" placeholder="Your name*" name="Name" required>
											</div>
											<div class="col-12 mb-4 pb-2 d-flex align-items-center">
												<input class="form-control form-control-sm form-control-gray rounded-1 form-control-fs-up newAddress" type="text" placeholder="Your Address*" name="Address" required>
											</div>	
											<div class="col-12 mb-4 pb-2">														
												<input type="checkbox" class="form-check-input rounded-0 flex-shrink-0 border border-1 border-light-gray rounded-2 bg-black bg-opacity-30 text-lg mt-0"  value="" name="Default_billing_address" id="defaultBillingAddress">
												<label class="labels-check-input text-xs ms-3 align-text-top" for="defaultBillingAddress">
													Default billing address
												</label>												
											</div>
											<div class="col-12 mb-4 pb-2 d-flex align-items-center">
												<input type="checkbox" class="form-check-input rounded-0 flex-shrink-0 border border-1 border-light-gray rounded-2 bg-black bg-opacity-30 text-lg mt-0"  value="" name="Default_shipping_address" id="defaultShippingAddress">
												<label class="labels-check-input text-xs ms-3 align-text-top" for="defaultShippingAddress">
													Default shipping address
												</label>
												
											</div>
																					
										</div>
									</form>
									<div class="col-12 mt-auto">
										<div class="row justify-content-center justify-content-lg-between">
											<div class="col-sm-8 col-lg-4 order-2 order-lg-1">
												<button class="btn btn-center btn-gray w-100" data-bs-dismiss="modal" aria-label="Close">
													<span class="btn-text">cancel</span> 
												</button>
											</div>
											<div class="col-sm-8 col-lg-4 order-1 order-lg-2 mb-3 mb-lg-0">
												<button class="btn btn-primary btn-center btn-new-address w-100">
													Save	
											</button>
											</div>														
										</div>
									</div>
								</div>
							</div>													
						</div>
					</div>
				</div>								
			</div>
		</div>
    </div>

	<!-- _________________________________ modal New Address _______________________________________ -->
	<div class="modal z-index_1200 fade addNewCreditCard" id="addNewCreditCard" tabindex="-1" aria-labelledby="addNewCreditCard" aria-hidden="true">
        <button type="button" class="btn-close m-0 p-0 opacity-100 text-white bg-img-none position-absolute top-0 start-0 p-3" data-bs-dismiss="modal" aria-label="Close">
            <i class="icon-arrow-left"></i>
        </button>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg modal-fullscreen-lg-down">
			<div class="modal-content bg-dark rounded-3">
				<div class="modal-body scroll-dark p-0 h-100">						
					<div class="card border-white border-opacity-05 rounded-3 card-bg-dark min-h-100">
						<div class="card-body p-4 p-sm-5 position-relative d-flex flex-column">
							<button type="button" class="btn-close p-4 p-sm-5 opacity-100 text-white d-inline-block d-lg-none w-auto text-end position-absolute top-0 end-0 bg-img-none h-auto" data-bs-dismiss="modal" aria-label="Close">
								<i class="icon-close-circle text-md"></i>
							</button>
							<div class="">
								<div class="row h-100 justify-content-center align-content-center">
									<div class="col-12 mb-4 pb-2 mt-5 mt-lg-0  text-center text-lg-start">
										<h3 class="headline-3 lh-1 text-800 text-uppercase mb-4 pb-2">ADD NEW Credit Card</h3>
										<!-- <p class="text-xs lh-xl mb-0">Specify your vehicle type and add more info about your machine</p> -->
									</div>
									<form class="mb-2 addNewCreditCardForm needs-validation" novalidate>
										<div class="row">
											<div class="col-12 mb-4 pb-2">
												<p class="text-xs text-500 lh-1 text-uppercase mb-2 opacity-60">Credit card companies</p>
												<select class="select-beast select-beast-lg-fs-up">
													<option value="mastercard">Mastercard</option>
													<option value="visa">Vise</option>												
												</select>
											</div>
											<div class="col-12 mb-4 pb-2">
												<p class="text-xs text-500 lh-1 text-uppercase mb-2 opacity-60">Card Number</p>
												<input class="form-control form-control-sm form-control-gray rounded-1 form-control-fs-up cardNumber" type="text" placeholder="0000 0000 0000 0000*" name="Card_Number" required>
											</div>	
											<div class="col-12 mb-4 pb-2">
												<p class="text-xs text-500 lh-1 text-uppercase mb-2 opacity-60">Cardholder Name</p>
												<input class="form-control form-control-sm form-control-gray rounded-1 form-control-fs-up cardholderName" type="text" placeholder="Name Surname*" name="Cardholder_Name" required>
											</div>	
											<div class="col-12 mb-4 pb-2">
												<p class="text-xs text-500 lh-1 text-uppercase mb-2 opacity-60">Expiration Date Card</p>
												<input class="form-control form-control-sm form-control-gray rounded-1 form-control-fs-up expDate" type="text" placeholder="MM/YY*" name="Expiration_Date_Card" required>
											</div>							
																					
										</div>
									</form>
									<div class="col-12 mt-auto">
										<div class="row justify-content-center justify-content-lg-between">
											<div class="col-sm-8 col-lg-4 order-2 order-lg-1">
												<button class="btn btn-center btn-gray w-100" data-bs-dismiss="modal" aria-label="Close">
													<span class="btn-text">cancel</span> 
												</button>
											</div>
											<div class="col-sm-8 col-lg-4 order-1 order-lg-2 mb-3 mb-lg-0">
												<button class="btn btn-primary btn-center btn-new-creditCard w-100">
													Save	
											</button>
											</div>														
										</div>
									</div>
								</div>
							</div>													
						</div>
					</div>
				</div>								
			</div>
		</div>
    </div>



	<!-- Bootstrap JS -->	
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.bundle.min.js" async></script>	
	<script type="text/javascript" src="assets/js/my-account-script.js" async></script>	

	<!-- Tom Select JS -->
	<script src="https://cdn.jsdelivr.net/npm/tom-select@2.1.0/dist/js/tom-select.complete.min.js"></script>

	<!-- Swiper JS -->
	<script src="assets/swiper/swiper-bundle.min.js" defer></script>

	<!-- JS -->
	<script type="text/javascript" src="assets/js/calender.js" defer></script>
	
	<script type="text/javascript" src="assets/js/script.js" defer></script>
</body>
</html>
