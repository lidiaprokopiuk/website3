<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ORV HeadQuarters - Products page</title>
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
<body class="products-page bg-dark bg-noise text-white">
	<header>
		<div class="bg-chat border-bottom border-white border-1 border-opacity-05 d-flex d-lg-none justify-content-between w-100">
			<a href="index.php" class="text-decoration-none text-white border-end border-white border-1 border-opacity-05 bg-black-opacity-30 d-flex justify-content-center align-items-center" style="width: 70px;">
				<i class="icon-arrow-left-2 text-md"></i>
			</a>
			<img src="assets/images/Logo/ORV-HeadQuarters.svg" alt="" width="117">
			<button class="buttonShowContent border-start border-white border-1 border-opacity-05 bg-primary-gradient d-flex justify-content-center align-items-center" style="width: 70px;">
				<!-- <img src="assets/images/Icon/filter-white.svg" alt="icon settings" class=""> -->
				<i class="icon-setting-5 text-md text-white text-500"></i>
			</button>
		</div>
		<?php include './src/navbar.php'; ?>
	</header>
	<main>
		<section class="section-products overflow-hidden pb-5 mb-5 pb-lg-0 mb-lg-0 mt-neg-xxs">
			<div class="container-fluid h-100">
				<div class="row position-relative justify-content-center justify-content-lg-start px-xl-4 px-xxl-5 h-100 pb-xxl-5">     
					<div class="col-11 col-xl-2 d-none d-lg-block d-xl-flex h-100 align-items-center product-category">
						<div class="row justify-content-between justify-content-xl-start bg-noise position-relative z-index_3">
							<div class="col-3 col-xl-12 order-2 order-xl-1 d-lg-flex d-xl-block align-items-center justify-content-end">
								<h4 class="headline-4 lh-1 text-700 mb-0 mb-xl-2 me-3">Sort by:</h4>
								<select class="select-beast select-beast-sm mb-0 mb-xl-5 flex-grow-1">
									<option value="1">26</option>
									<option value="2">Lorem</option>
									<option value="3">Ipsum</option>
									<option value="4">Dolor</option>
								</select>
							</div>
							<div class="col-5 col-xl-12 order-1 order-xl-2 d-lg-flex d-xl-block align-items-center">
								<h4 class="headline-4 lh-1 text-700 mb-0 mb-xl-4 me-3 me-xl-0">Category</h4>
								<div class="category-body scroll-white overflow-auto flex-fill" style="height: 260px;">
									<select class="select-beast select-beast-sm select-category mb-0 d-block d-xl-none flex-grow-1">
										<option value="Tires" data-category="210">Tires</option>
										<option value="wheels" data-category="120">wheels</option>
										<option value="tire chains" data-category="21">tire chains</option>
										<option value="tire balances" data-category="3">tire balances</option>
										<option value="lug nuts" data-category="5">lug nuts</option>
										<option value="wheel support" data-category="10">wheel support</option>
										<option value="wheel spacers" data-category="5">wheel spacers</option>
										<option value="wheel cover" data-category="1">Tires</option>							
									</select>
									<div class="d-none d-xl-block">
										<a href="#" class="d-block category-link text-xxs text-600 lh-1 text-uppercase text-decoration-none text-white mb-4 pb-2">
			 								Tires
			 								<div class="align-text-top text-xxxs lh-1 text-primary d-inline-block">210</div>
			 							</a>
			 							<a href="#" class="d-block category-link text-xxs text-600 lh-1 text-uppercase text-decoration-none text-white mb-4 pb-2">
			 								wheels
			 								<div class="align-text-top text-xxxs lh-1 text-primary d-inline-block">120</div>
			 							</a>
			 							<a href="#" class="d-block category-link text-xxs text-600 lh-1 text-uppercase text-decoration-none text-white mb-4 pb-2">
			 								tire chains
			 								<div class="align-text-top text-xxxs lh-1 text-primary d-inline-block">21</div>
			 							</a>
			 							<a href="#" class="d-block category-link text-xxs text-600 lh-1 text-uppercase text-decoration-none text-white mb-4 pb-2">
			 								tire balances
			 								<div class="align-text-top text-xxxs lh-1 text-primary d-inline-block">3</div>
			 							</a>
			 							<a href="#" class="d-block category-link text-xxs text-600 lh-1 text-uppercase text-decoration-none text-white mb-4 pb-2">
			 								lug nuts
			 								<div class="align-text-top text-xxxs lh-1 text-primary d-inline-block">5</div>
			 							</a>
			 							<a href="#" class="d-block category-link text-xxs text-600 lh-1 text-uppercase text-decoration-none text-white mb-4 pb-2">
			 								wheel support
			 								<div class="align-text-top text-xxxs lh-1 text-primary d-inline-block">10</div>
			 							</a>
			 							<a href="#" class="d-block category-link text-xxs text-600 lh-1 text-uppercase text-decoration-none text-white mb-4 pb-2">
			 								wheel spacers
			 								<div class="align-text-top text-xxxs lh-1 text-primary d-inline-block">4</div>
			 							</a>
			 							<a href="#" class="d-block category-link text-xxs text-600 lh-1 text-uppercase text-decoration-none text-white mb-4 pb-2">
			 								wheel cover
			 								<div class="align-text-top text-xxxs lh-1 text-primary d-inline-block">1</div>
			 							</a>
			 						</div>
								</div>
							</div>
						</div>						
					</div>
					<div class="col-12 col-lg-11 col-xl-9 h-100 product-items">		
						<h3 class="text-lg lh-1 text-700 text-center d-block d-lg-none py-4 bg-noise position-relative z-index_3">
							<span class="text-primary">132</span>							
							Results for searching
						</h3>				
						<div class="swiper-container productsSwiper w-100 pb-6 pb-lg-0 h-100">
							<div class="swiper-wrapper flex-column flex-md-row align-items-center align-items-md-start row w-auto pb-7 h-100">
								<div class="swiper-slide slide-box col-12 col-sm-8 col-md-6 mt-5 mt-lg-0 d-flex align-items-center justify-content-center">
									<div class="pt-5 pt-lg-4 pt-xl-5 mt-xl-4 w-100">
										<div class="card searchCard card-product rounded-3 border-0 position-relative card-bg-dark mt-5 pt-5 mx-auto">
											<img src="assets/images/Products/Helm_2.png" class="position-absolute top-0 start-50 translate-middle card-img mx-90  object-fit-contain" alt="" height="180">
											<div class="card-body  mt-5 mt-lg-0 mt-xl-5 pt-5 pb-4 px-4">
												<h4 class="card-title headline-4 text-700 lh-1 mb-4 mb-lg-0  mb-xl-4 mt-4">Can-Am X2 Helment</h4>								
												<div class="d-flex justify-content-between align-items-center mb-3 mb-lg-2 pt-2">
													<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
													<p class="mb-0" role="button">
														<i class="icon-heart like-symbol text-xxxs d-inline-block align-middle"></i>
													</p>
													
												</div>
												<div class="d-flex justify-content-between align-items-end mb-2 mb-lg-0">
													<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>	
													<a href="#" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white mb-0  d-flex align-items-center">
														details 
														<i class="icon-arrow-right-3 text-4xs ms-1"></i>											
													</a>
												</div>									
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide slide-box col-12 col-sm-8 col-md-6 mt-5 mt-lg-0 d-flex align-items-center justify-content-center">
									<div class="pt-5 pt-lg-4 pt-xl-5 mt-xl-4 w-100">
										<div class="card searchCard card-product rounded-3 border-0 position-relative card-bg-dark mt-5 pt-5 mx-auto">
											<img src="assets/images/Products/wheel.png" class="position-absolute top-0 start-50 translate-middle card-img mx-90  object-fit-contain" alt="" height="180">
											<div class="card-body  mt-5 mt-lg-0 mt-xl-5 pt-5 pb-4 px-4">
												<h4 class="card-title headline-4 text-700 lh-1 mb-4 mb-lg-0  mb-xl-4 mt-4">23’ Cross Wheels 1221</h4>								
												<div class="d-flex justify-content-between align-items-center mb-3 mb-lg-2 pt-2">
													<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
													<p class="mb-0" role="button">
														<i class="icon-heart like-symbol text-xxxs d-inline-block align-middle"></i>
													</p>
													
												</div>
												<div class="d-flex justify-content-between align-items-end mb-2 mb-lg-0">
													<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>	
													<a href="#" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white mb-0  d-flex align-items-center">
														details 
														<i class="icon-arrow-right-3 text-4xs ms-1"></i>											
													</a>
												</div>									
											</div>
										</div>
									</div>
								</div>	
								<div class="swiper-slide slide-box col-12 col-sm-8 col-md-6 mt-5 mt-lg-0 d-flex align-items-center justify-content-center">
									<div class="pt-5 pt-lg-4 pt-xl-5 mt-xl-4 w-100">
										<div class="card searchCard card-product rounded-3 border-0 position-relative card-bg-dark mt-5 pt-5 mx-auto">
											<img src="assets/images/Products/air_filter.png" class="position-absolute top-0 start-50 translate-middle card-img mx-90  object-fit-contain" alt="" height="180">
											<div class="card-body  mt-5 mt-lg-0 mt-xl-5 pt-5 pb-4 px-4">
												<h4 class="card-title headline-4 text-700 lh-1 mb-4 mb-lg-0  mb-xl-4 mt-4">Air Filter</h4>								
												<div class="d-flex justify-content-between align-items-center mb-3 mb-lg-2 pt-2">
													<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
													<p class="mb-0" role="button">
														<i class="icon-heart like-symbol text-xxxs d-inline-block align-middle"></i>
													</p>
													
												</div>
												<div class="d-flex justify-content-between align-items-end">
													<p class="text-bebas text-xl lh-1 mb-0">$250.00</p>
													<a href="#" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white mb-0  d-flex align-items-center d-flex align-items-center">
														details 
														<i class="icon-arrow-right-3 text-4xs ms-1"></i>
													</a>
												</div>
											</div>									
										</div>
									</div>
								</div>
								<div class="swiper-slide slide-box col-12 col-sm-8 col-md-6 mt-5 mt-lg-0 d-flex align-items-center justify-content-center">
									<div class="pt-5 pt-lg-4 pt-xl-5 mt-xl-4 w-100">
										<div class="card searchCard card-product rounded-3 border-0 position-relative card-bg-dark mt-5 pt-5 mx-auto">
											<img src="assets/images/Products/belt_engine.png" class="position-absolute top-0 start-50 translate-middle card-img mx-90  object-fit-contain" alt="" height="180">
											<div class="card-body  mt-5 mt-lg-0 mt-xl-5 pt-5 pb-4 px-4">
												<h4 class="card-title headline-4 text-700 lh-1 mb-4 mb-lg-0  mb-xl-4 mt-4">Belt Engine</h4>								
												<div class="d-flex justify-content-between align-items-center mb-3 mb-lg-2 pt-2">
													<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
													<p class="mb-0" role="button">
														<i class="icon-heart like-symbol text-xxxs d-inline-block align-middle"></i>
													</p>
													
												</div>
												<div class="d-flex justify-content-between align-items-end mb-2 mb-lg-0">
													<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>	
													<a href="#" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white mb-0  d-flex align-items-center d-flex align-items-center">
														details 
														<i class="icon-arrow-right-3 text-4xs ms-1"></i>											
													</a>
												</div>
											</div>									
										</div>
									</div>
								</div>
								<div class="swiper-slide slide-box col-12 col-sm-8 col-md-6 mt-5 mt-lg-0 d-flex align-items-center justify-content-center">
									<div class="pt-5 pt-lg-4 pt-xl-5 mt-xl-4 w-100">
										<div class="card searchCard card-product rounded-3 border-0 position-relative card-bg-dark mt-5 pt-5 mx-auto">
											<img src="assets/images/Products/Helm_1.png" class="position-absolute top-0 start-50 translate-middle card-img mx-90  object-fit-contain" alt="" height="180">
											<div class="card-body  mt-5 mt-lg-0 mt-xl-5 pt-5 pb-4 px-4">
												<h4 class="card-title headline-4 text-700 lh-1 mb-4 mb-lg-0  mb-xl-4 mt-4">Can-Am X1 Helment</h4>								
												<div class="d-flex justify-content-between align-items-center mb-3 mb-lg-2 pt-2">
													<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
													<p class="mb-0" role="button">
														<i class="icon-heart like-symbol text-xxxs d-inline-block align-middle"></i>
													</p>											
												</div>
												<div class="d-flex justify-content-between align-items-end mb-2 mb-lg-0">
													<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>	
													<a href="#" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white mb-0  d-flex align-items-center d-flex align-items-center">
														details 
														<i class="icon-arrow-right-3 text-4xs ms-1"></i>
													</a>
												</div>
											</div>									
										</div>
									</div>
								</div>
								<div class="swiper-slide slide-box col-12 col-sm-8 col-md-6 mt-5 mt-lg-0 d-flex align-items-center justify-content-center">
									<div class="pt-5 pt-lg-4 pt-xl-5 mt-xl-4 w-100">
										<div class="card searchCard card-product rounded-3 border-0 position-relative card-bg-dark mt-5 pt-5 mx-auto">
											<img src="assets/images/Products/Helm_2.png" class="position-absolute top-0 start-50 translate-middle card-img mx-90  object-fit-contain" alt="" height="180">
											<div class="card-body  mt-5 mt-lg-0 mt-xl-5 pt-5 pb-4 px-4">
												<h4 class="card-title headline-4 text-700 lh-1 mb-4 mb-lg-0  mb-xl-4 mt-4">Can-Am X2 Helment</h4>		
												<div class="d-flex justify-content-between align-items-center mb-3 mb-lg-2 pt-2">
													<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
													<p class="mb-0" role="button">
														<i class="icon-heart like-symbol text-xxxs d-inline-block align-middle"></i>
													</p>											
												</div>
												<div class="d-flex justify-content-between align-items-end mb-2 mb-lg-0">
													<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>	
													<a href="#" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white mb-0  d-flex align-items-center">
														details 
														<i class="icon-arrow-right-3 text-4xs ms-1"></i>				
													</a>
												</div>									
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide slide-box col-12 col-sm-8 col-md-6 mt-5 mt-lg-0 d-flex align-items-center justify-content-center">
									<div class="pt-5 pt-lg-4 pt-xl-5 mt-xl-4 w-100">
										<div class="card searchCard card-product rounded-3 border-0 position-relative card-bg-dark mt-5 pt-5 mx-auto">
											<img src="assets/images/Products/wheel.png" class="position-absolute top-0 start-50 translate-middle card-img mx-90  object-fit-contain" alt="" height="180">
											<div class="card-body  mt-5 mt-lg-0 mt-xl-5 pt-5 pb-4 px-4">
												<h4 class="card-title headline-4 text-700 lh-1 mb-4 mb-lg-0  mb-xl-4 mt-4">23’ Cross Wheels 1221</h4>		
												<div class="d-flex justify-content-between align-items-center mb-3 mb-lg-2 pt-2">
													<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
													<p class="mb-0" role="button">
														<i class="icon-heart like-symbol text-xxxs d-inline-block align-middle"></i>
													</p>										
												</div>
												<div class="d-flex justify-content-between align-items-end mb-2 mb-lg-0">
													<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>	
													<a href="#" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white mb-0  d-flex align-items-center">
														details 
														<i class="icon-arrow-right-3 text-4xs ms-1"></i>			
													</a>
												</div>									
											</div>
										</div>
									</div>
								</div>
							
								<div class="swiper-slide slide-box col-12 col-sm-8 col-md-6 mt-5 mt-lg-0 d-flex align-items-center justify-content-center">
									<div class="pt-5 pt-lg-4 pt-xl-5 mt-xl-4 w-100">
										<div class="card searchCard card-product rounded-3 border-0 position-relative card-bg-dark mt-5 pt-5 mx-auto">
											<img src="assets/images/Products/Helm_2.png" class="position-absolute top-0 start-50 translate-middle card-img mx-90  object-fit-contain" alt="" height="180">
											<div class="card-body  mt-5 mt-lg-0 mt-xl-5 pt-5 pb-4 px-4">
												<h4 class="card-title headline-4 text-700 lh-1 mb-4 mb-lg-0  mb-xl-4 mt-4">Can-Am X2 Helment</h4>								
												<div class="d-flex justify-content-between align-items-center mb-3 mb-lg-2 pt-2">
													<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
													<p class="mb-0" role="button">
														<i class="icon-heart like-symbol text-xxxs d-inline-block align-middle"></i>
													</p>
													
												</div>
												<div class="d-flex justify-content-between align-items-end mb-2 mb-lg-0">
													<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>	
													<a href="#" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white mb-0  d-flex align-items-center">
														details 
														<i class="icon-arrow-right-3 text-4xs ms-1"></i>											
													</a>
												</div>									
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide slide-box col-12 col-sm-8 col-md-6 mt-5 mt-lg-0 d-flex align-items-center justify-content-center">
									<div class="pt-5 pt-lg-4 pt-xl-5 mt-xl-4 w-100">
										<div class="card searchCard card-product rounded-3 border-0 position-relative card-bg-dark mt-5 pt-5 mx-auto">
											<img src="assets/images/Products/wheel.png" class="position-absolute top-0 start-50 translate-middle card-img mx-90  object-fit-contain" alt="" height="180">
											<div class="card-body  mt-5 mt-lg-0 mt-xl-5 pt-5 pb-4 px-4">
												<h4 class="card-title headline-4 text-700 lh-1 mb-4 mb-lg-0  mb-xl-4 mt-4">23’ Cross Wheels 1221</h4>								
												<div class="d-flex justify-content-between align-items-center mb-3 mb-lg-2 pt-2">
													<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
													<p class="mb-0" role="button">
														<i class="icon-heart like-symbol text-xxxs d-inline-block align-middle"></i>
													</p>
													
												</div>
												<div class="d-flex justify-content-between align-items-end mb-2 mb-lg-0">
													<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>	
													<a href="#" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white mb-0  d-flex align-items-center">
														details 
														<i class="icon-arrow-right-3 text-4xs ms-1"></i>											
													</a>
												</div>									
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide slide-box col-12 col-sm-8 col-md-6 mt-5 mt-lg-0 d-flex align-items-center justify-content-center">
									<div class="pt-5 pt-lg-4 pt-xl-5 mt-xl-4 w-100">
										<div class="card searchCard card-product rounded-3 border-0 position-relative card-bg-dark mt-5 pt-5 mx-auto">
											<img src="assets/images/Products/wheel.png" class="position-absolute top-0 start-50 translate-middle card-img mx-90  object-fit-contain" alt="" height="180">
											<div class="card-body  mt-5 mt-lg-0 mt-xl-5 pt-5 pb-4 px-4">
												<h4 class="card-title headline-4 text-700 lh-1 mb-4 mb-lg-0  mb-xl-4 mt-4">23’ Cross Wheels 1221</h4>		
												<div class="d-flex justify-content-between align-items-center mb-3 mb-lg-2 pt-2">
													<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
													<p class="mb-0" role="button">
														<i class="icon-heart like-symbol text-xxxs d-inline-block align-middle"></i>
													</p>										
												</div>
												<div class="d-flex justify-content-between align-items-end mb-2 mb-lg-0">
													<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>	
													<a href="#" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white mb-0  d-flex align-items-center">
														details 
														<i class="icon-arrow-right-3 text-4xs ms-1"></i>			
													</a>
												</div>									
											</div>
										</div>
									</div>
								</div>
							
								<div class="swiper-slide slide-box col-12 col-sm-8 col-md-6 mt-5 mt-lg-0 d-flex align-items-center justify-content-center">
									<div class="pt-5 pt-lg-4 pt-xl-5 mt-xl-4 w-100">
										<div class="card searchCard card-product rounded-3 border-0 position-relative card-bg-dark mt-5 pt-5 mx-auto">
											<img src="assets/images/Products/Helm_2.png" class="position-absolute top-0 start-50 translate-middle card-img mx-90  object-fit-contain" alt="" height="180">
											<div class="card-body  mt-5 mt-lg-0 mt-xl-5 pt-5 pb-4 px-4">
												<h4 class="card-title headline-4 text-700 lh-1 mb-4 mb-lg-0  mb-xl-4 mt-4">Can-Am X2 Helment</h4>								
												<div class="d-flex justify-content-between align-items-center mb-3 mb-lg-2 pt-2">
													<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
													<p class="mb-0" role="button">
														<i class="icon-heart like-symbol text-xxxs d-inline-block align-middle"></i>
													</p>
													
												</div>
												<div class="d-flex justify-content-between align-items-end mb-2 mb-lg-0">
													<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>	
													<a href="#" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white mb-0  d-flex align-items-center">
														details 
														<i class="icon-arrow-right-3 text-4xs ms-1"></i>											
													</a>
												</div>									
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide slide-box col-12 col-sm-8 col-md-6 mt-5 mt-lg-0 d-flex align-items-center justify-content-center">
									<div class="pt-5 pt-lg-4 pt-xl-5 mt-xl-4 w-100">
										<div class="card searchCard card-product rounded-3 border-0 position-relative card-bg-dark mt-5 pt-5 mx-auto">
											<img src="assets/images/Products/wheel.png" class="position-absolute top-0 start-50 translate-middle card-img mx-90  object-fit-contain" alt="" height="180">
											<div class="card-body  mt-5 mt-lg-0 mt-xl-5 pt-5 pb-4 px-4">
												<h4 class="card-title headline-4 text-700 lh-1 mb-4 mb-lg-0  mb-xl-4 mt-4">23’ Cross Wheels 1221</h4>								
												<div class="d-flex justify-content-between align-items-center mb-3 mb-lg-2 pt-2">
													<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
													<p class="mb-0" role="button">
														<i class="icon-heart like-symbol text-xxxs d-inline-block align-middle"></i>
													</p>
													
												</div>
												<div class="d-flex justify-content-between align-items-end mb-2 mb-lg-0">
													<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>	
													<a href="#" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white mb-0  d-flex align-items-center">
														details 
														<i class="icon-arrow-right-3 text-4xs ms-1"></i>											
													</a>
												</div>									
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide slide-box col-12 col-sm-8 col-md-6 mt-5 mt-lg-0 d-flex align-items-center justify-content-center">
									<div class="pt-5 pt-lg-4 pt-xl-5 mt-xl-4 w-100">
										<div class="card searchCard card-product rounded-3 border-0 position-relative card-bg-dark mt-5 pt-5 mx-auto">
											<img src="assets/images/Products/Helm_2.png" class="position-absolute top-0 start-50 translate-middle card-img mx-90  object-fit-contain" alt="" height="180">
											<div class="card-body  mt-5 mt-lg-0 mt-xl-5 pt-5 pb-4 px-4">
												<h4 class="card-title headline-4 text-700 lh-1 mb-4 mb-lg-0  mb-xl-4 mt-4">Can-Am X2 Helment</h4>		
												<div class="d-flex justify-content-between align-items-center mb-3 mb-lg-2 pt-2">
													<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
													<p class="mb-0" role="button">
														<i class="icon-heart like-symbol text-xxxs d-inline-block align-middle"></i>
													</p>											
												</div>
												<div class="d-flex justify-content-between align-items-end mb-2 mb-lg-0">
													<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>	
													<a href="#" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white mb-0  d-flex align-items-center">
														details 
														<i class="icon-arrow-right-3 text-4xs ms-1"></i>				
													</a>
												</div>									
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide slide-box col-12 col-sm-8 col-md-6 mt-5 mt-lg-0 d-flex align-items-center justify-content-center">
									<div class="pt-5 pt-lg-4 pt-xl-5 mt-xl-4 w-100">
										<div class="card searchCard card-product rounded-3 border-0 position-relative card-bg-dark mt-5 pt-5 mx-auto">
											<img src="assets/images/Products/Helm_2.png" class="position-absolute top-0 start-50 translate-middle card-img mx-90  object-fit-contain" alt="" height="180">
											<div class="card-body  mt-5 mt-lg-0 mt-xl-5 pt-5 pb-4 px-4">
												<h4 class="card-title headline-4 text-700 lh-1 mb-4 mb-lg-0  mb-xl-4 mt-4">Can-Am X2 Helment</h4>		
												<div class="d-flex justify-content-between align-items-center mb-3 mb-lg-2 pt-2">
													<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
													<p class="mb-0" role="button">
														<i class="icon-heart like-symbol text-xxxs d-inline-block align-middle"></i>
													</p>											
												</div>
												<div class="d-flex justify-content-between align-items-end mb-2 mb-lg-0">
													<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>	
													<a href="#" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white mb-0  d-flex align-items-center">
														details 
														<i class="icon-arrow-right-3 text-4xs ms-1"></i>				
													</a>
												</div>									
											</div>
										</div>
									</div>
								</div>
							</div>	
							
						</div>	
					</div>
					<div class="col-1 position-relative d-none d-lg-block">
						<div class="swiper-btn-nav swiper-button-next text-primary start-0 end-0 mx-auto text-xxs text-900 w-50 h-0" style="transform: rotate(90deg); top: 80%"></div>
						<div class="swiper-btn-nav swiper-button-prev text-primary start-0 end-0 mx-auto text-xxs text-900 w-50 h-0" style="transform: rotate(90deg); top: 20%"></div>
						<div class="swiper-pagination d-flex align-items-center flex-column start-0 end-0"></div>						
					</div>				
				</div>
			</div>
		</section>
		<section class="section-filtr fixed-bottom bg-gradient-dark content-item">
			<button class="more-options bg-primary rounded-circle top-0 start-50 translate-middle border border-white border-opacity-25 position-absolute justify-content-center align-items-center d-none d-lg-flex" style="width: 50px; height: 50px">
				<i class="icon-arrow-up-2 text-md text-white text-500 more-option-arrow"></i>	
			</button>
			<div class="bg-gray-gradient d-flex d-lg-none justify-content-between w-100">
				<div class="d-flex justify-content-center align-items-center" style="width: 70px;">
					<!-- <img src="assets/images/Icon/filter-white.svg" alt="icon settings" class=""> -->
					<i class="icon-setting-5 text-md text-white text-500"></i>
				</div>
				<h4 class="filtr-headline text-lg lh-1 text-700 my-3 py-2 py-sm-1">Filters & Sorting</h4>

				<div class="buttonCloseContent border-start border-white border-1 border-opacity-05 bg-primary-gradient d-flex justify-content-center align-items-center" style="width: 70px;" role="button">
					<button type="button" class="btn-close opacity-100 btn-close-white" disabled aria-label="Close"></button>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row justify-content-center px-4 px-sm-5 px-lg-0">
					<div class="col-12 d-block d-lg-none my-5">
						<h4 class="text-lg lh-1 text-700 mb-4">Sort by:</h4>
						<select class="select-beast select-beast-lg select-sort">
							<option value="from cheapest" data-sort="price">from cheapest</option>
							<option value="most expensive" data-sort="price">most expensive</option>						
							<option value="A-Z name" data-sort="name">A-Z name</option>	
							<option value="Z-A name" data-sort="name">Z-A name</option>	
						</select>
					</div>
					<div class="col-12 col-lg-3 border border-white border-opacity-05 p-lg-5 see-more-options">
						<h4 class="text-lg lh-1 text-700 mb-4 d-block d-lg-none">Filter by:</h4>
						<p class="text-xs text-500 lh-1 text-uppercase mb-2 opacity-60 d-block d-lg-none">PRICE RANGE</p>
						<div class="wrapper">
							<div class="values border border-1 border-light-gray rounded-1 text-center text-md text-md-up lh-1 text-bebas form-control-xl d-flex justify-content-evenly">
								<div>$ <span id="range1">0</span></div>
								<span>&dash;</span>
								<div>$ <span id="range2">100</span></div>
							</div>
							<div class="position-relative mx-2" style="margin-top: -6px;">
								<div class="slider-track w-100 position-absolute m-auto top-0 bottom-0" style="height: 1px;"></div>
								<input type="range" min="0" max="2000" step="250" value="500" id="slider-1" oninput="slideOne()" name="range" class="w-100 position-absolute m-auto top-0 bottom-0 bg-transparent" list="tickmarks">
								<input type="range" min="0" max="2000" step="250" value="1500" id="slider-2" oninput="slideTwo()" name="range" class="w-100 position-absolute m-auto top-0 bottom-0 bg-transparent" list="tickmarks">
								<div class="progress bg-transparent rounded-0 tickmarks" style="height: 11px">
									<div class="progress-bar bg-transparent border-end border-1 border-light-gray" role="progressbar" aria-label="Segment one" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar bg-transparent border-end border-1 border-light-gray" role="progressbar" aria-label="Segment two" style="width: 12.5%" aria-valuenow="12.5" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar bg-transparent border-end border-1 border-light-gray" role="progressbar" aria-label="Segment three" style="width: 12.5%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar bg-transparent border-end border-1 border-light-gray" role="progressbar" aria-label="Segment one" style="width: 12.5%" aria-valuenow="37.5" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar bg-transparent border-end border-1 border-light-gray" role="progressbar" aria-label="Segment two" style="width: 12.5%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar bg-transparent border-end border-1 border-light-gray" role="progressbar" aria-label="Segment three" style="width: 12.5%" aria-valuenow="62.5" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar bg-transparent border-end border-1 border-light-gray" role="progressbar" aria-label="Segment one" style="width: 12.5%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar bg-transparent border-end border-1 border-light-gray" role="progressbar" aria-label="Segment two" style="width: 12.5%" aria-valuenow="87.5" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar bg-transparent border-end border-1 border-light-gray" role="progressbar" aria-label="Segment three" style="width: 12.5%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								
								</div>
							</div>
						</div>
						<div class="see-more-item">					
							<select class="select-beast select-beast select-beast-lg select-beast-text-gray">
								<option value="manufacture">manufacture</option>
								<option value="manufacture1">manufacture1</option>
								<option value="manufacture2">manufacture2</option>
								<option value="manufacture3">manufacture3</option>
							</select>
							<!-- <select class=" form-select-lg mb-3" aria-label=".form-select-lg example">
								<option selected>Open this select menu</option>
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
							</select> -->
						</div>
					</div>
					<div class="col-12 col-lg-9 p-lg-5 border border-white border-opacity-05 border-start-0 mb-5 mb-lg-0">
						<div class="d-flex justify-content-between align-items-center w-100">
							<div class="row gx-0 gx-lg-4 row-cols-1 row-cols-lg-3 row-cols-xl-4 w-75 see-more-options">
								<div class="col see-more-item">
									<p class="text-xs text-500 lh-1 text-uppercase mb-2 opacity-60">size</p>
									<select class="select-beast select-beast-sm">
										<option value="26X9R12">26X9R12</option>
										<option value="26X9R14">26X9R14</option>
										<option value="30X9R12">30X9R12</option>
										<option value="26X25R12">26X25R12</option>
									</select>
								</div>
								<div class="col see-more-item">
									<p class="text-xs text-500 lh-1 text-uppercase mb-2 opacity-60">width</p>
									<select class="select-beast select-beast-sm">
										<option value="11">11</option>
										<option value="20">20</option>
										<option value="30">30</option>
										<option value="40">40</option>
									</select>
								</div>
								<div class="col see-more-item">
									<p class="text-xs text-500 lh-1 text-uppercase mb-2 opacity-60">height</p>
									<select class="select-beast select-beast-sm">
										<option value="26">26</option>
										<option value="30">30</option>
										<option value="35">35</option>
										<option value="50">50</option>
									</select>
								</div>
								<div class="col see-more-item">
									<p class="text-xs text-500 lh-1 text-uppercase mb-2 opacity-60">position</p>
									<select class="select-beast select-beast-sm">
										<option value="front">front</option>
										<option value="left">left</option>
										<option value="right">right</option>
										<option value="back">back</option>
									</select>
								</div>
								<div class="col see-more-item">
									<p class="text-xs text-500 lh-1 text-uppercase mb-2 opacity-60">OPTION 6</p>
									<select class="select-beast select-beast-sm">
										<option value="abc">abc</option>
										<option value="def">def</option>
										<option value="ghi">ghi</option>
										<option value="jkl">jkl</option>
									</select>
								</div>
								<div class="col see-more-item">
									<p class="text-xs text-500 lh-1 text-uppercase mb-2 opacity-60">OPTION 7</p>
									<select class="select-beast select-beast-sm">
										<option value="qwe">qwe</option>
										<option value="rty">rty</option>
										<option value="uio">uio</option>
										<option value="pas">pas</option>
									</select>
								</div>
								<div class="col see-more-item">
									<p class="text-xs text-500 lh-1 text-uppercase mb-2 opacity-60">OPTION 8</p>
									<select class="select-beast select-beast-sm">
										<option value="zxc">zxc</option>
										<option value="vbn">vbn</option>
										<option value="mlk">mlk</option>
										<option value="jhg">jhg</option>
									</select>
								</div>
								<div class="col see-more-item">
									<p class="text-xs text-500 lh-1 text-uppercase mb-2 opacity-60">OPTION 9</p>
									<select class="select-beast select-beast-sm">
										<option value="123">123</option>
										<option value="234">234</option>
										<option value="345">345</option>
										<option value="456">456</option>
									</select>
								</div>
							</div>
							<div class="row w-25 align-items-end d-none d-lg-flex">
								<div class="col">
									<a href="#" class="btn btn-primary">
										<span class="btn-text">FILTER</span> 
									</a>
								</div>
							</div>
						</div>
					</div>					
				</div>
			</div>	
			<div class="bg-black-opacity-80 rounded-top-5 d-flex d-lg-none p-4 sticky-bottom w-100 bottom-0 start-0 bg-blur">
				<a class="btn btn-primary btn-center w-100 text-camelcase">
					<span class="btn-text">Apply 5 filters</span> 
				</a>
			</div>		
		</section>
	</main>



	<?php 
		include './src/navbar-offcanvas-chat.php';
		include './src/navbar-offcanvas-cart.php';
		include './src/navbar-offcanvas-user-panel.php';
		include './src/navbar-modal.php';
	?>

	<!-- Bootstrap JS -->	
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.bundle.min.js" async></script>	

	<script type="text/javascript" src="assets/js/products-script.js" async></script>
	<!-- <script type="text/javascript" src="assets/bootstrap/bootstrap.min.js" async></script> -->

	<!-- Tom Select JS -->
	<script src="https://cdn.jsdelivr.net/npm/tom-select@2.1.0/dist/js/tom-select.complete.min.js"></script>

	<!-- Swiper JS -->
	<script src="assets/swiper/swiper-bundle.min.js" defer></script>

	<!-- JS -->
	<script type="text/javascript" src="assets/js/calender.js" defer></script>	
	
	<script type="text/javascript" src="assets/js/script.js" defer></script>
</body>
</html>