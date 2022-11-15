<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ORV HeadQuarters - Thank you!</title>
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


	<!-- Isonax ICONS -->
	<link rel="stylesheet" href="assets/iconsax/style.css">
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
<body class="bg-dark bg-noise text-white">
	<header>
		<a href="index.php" class="mobile-navbar d-block d-lg-none bg-gradient-dark border-bottom border-1 border-white border-opacity-05 rounded-bottom text-primary text-md text-600 lh-sm text-center text-decoration-none p-4">
			<i class="bi bi-arrow-left me-2"></i>
			BACK TO MAIN PAGE
		</a>
		<?php include './src/navbar.php' ?>
	</header>
	<main>
		<section class="section-hero pb-5 mb-5 mb-lg-4">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-xl-10 d-lg-flex align-items-center mt-5 mt-lg-0 mb-5 mb-lg-4 pb-lg-2">
						<h1 class="headline-2 text text-800 lh-1 text-uppercase me-lg-4 mb-0 d-lg-inline-block text-center text-lg-start">my vehicles</h1>
						<button class="rounded-1 bg-stone bg-opacity-40 boxSize-md d-none d-lg-inline-block" data-bs-toggle="modal" data-bs-target="#addNewVechicle">
							<span class="text-white">+</span>
						</button>
					</div>					
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div id="myGarage" class="carousel slide">
							<div class="carousel-inner">
								<div class="row justify-content-center">
									<div class="col-12 col-xl-10">
										<div class="carousel-item active rounded-3 bg-stone bg-opacity-40 py-5 px-4 p-lg-4 vehicle-info">
											<div class="row g-0 p-lg-2">
												<div class="col-12 col-lg-6 text-center mb-4 mb-sm-5 mb-lg-0">
													<h3 class="headline-3 lh-1 text-800 text-uppercase mb-5 mb-lg-3">MY ATV XXXC 2013</h3>
													<img src="assets/images/buggy.png" class="img-fluid" alt="buggy">
												</div>
												<div class="col-12 col-lg-6 d-flex flex-column">
													<div class="row">
														<div class="col-6 col-md-4 mb-4 pb-2">
															<p class="text-xs text-500 lh-1 text-uppercase opacity-60 mb-2 mb-sm-3 pb-sm-1">type</p>
															<p class="text-lg text-bebas lh-1 text-uppercase mb-0">atv</p>
														</div>
														<div class="col-6 col-md-4 mb-4 pb-2">
															<p class="text-xs text-500 lh-1 text-uppercase opacity-60 mb-2 mb-sm-3 pb-sm-1">brand</p>
															<p class="text-lg text-bebas lh-1 text-uppercase mb-0">renegade</p>
														</div>
														<div class="col-6 col-md-4 mb-4 pb-2">
															<p class="text-xs text-500 lh-1 text-uppercase opacity-60 mb-2 mb-sm-3 pb-sm-1">model</p>
															<p class="text-lg text-bebas lh-1 text-uppercase mb-0">xxc 1000</p>
														</div>
														<div class="col-6 col-md-4 mb-4 pb-2 mb-md-0 pb-md-0">
															<p class="text-xs text-500 lh-1 text-uppercase opacity-60 mb-2 mb-sm-3 pb-sm-1">engine cap.</p>
															<p class="text-lg text-bebas lh-1 text-uppercase mb-0">1000 cm <sup>3</sup></p>
														</div>
														<div class="col-6 col-md-4">
															<p class="text-xs text-500 lh-1 text-uppercase opacity-60 mb-2 mb-sm-3 pb-sm-1">year</p>
															<p class="text-lg text-bebas lh-1 text-uppercase mb-0">2013</p>
														</div>
														<div class="col-6 col-md-4">
															<p class="text-xs text-500 lh-1 text-uppercase opacity-60 mb-2 mb-sm-3 pb-sm-1">engine type</p>
															<p class="text-lg text-bebas lh-1 text-uppercase mb-0">four-stroke</p>
														</div>
													</div>
													<div class="row justify-content-center justify-content-lg-end pb-sm-2 pb-lg-0 mb-sm-4 mb-lg-0 mt-5 mt-lg-auto">
														<div class="col-9 col-sm-6">
															<a href="my-vehicle.php" class="btn btn-primary w-100">
																<span class="btn-text">filter</span> 
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="carousel-item rounded-3 bg-stone bg-opacity-40 p-4 vehicle-info">
										<div class="row g-0 p-lg-2">
												<div class="col-12 col-lg-6 text-center mb-4 mb-sm-5 mb-lg-0">
													<h3 class="headline-3 lh-1 text-800 text-uppercase mb-5 mb-lg-3">CUSTOM</h3>
													<img src="assets/images/buggy.png" class="img-fluid" alt="buggy">
												</div>
												<div class="col-12 col-lg-6 d-flex flex-column">
													<div class="row">
														<div class="col-6 col-md-4 mb-4 pb-2">
															<p class="text-xs text-500 lh-1 text-uppercase opacity-60 mb-2 mb-sm-3 pb-sm-1">type</p>
															<p class="text-lg text-bebas lh-1 text-uppercase mb-0">atv</p>
														</div>
														<div class="col-6 col-md-4 mb-4 pb-2">
															<p class="text-xs text-500 lh-1 text-uppercase opacity-60 mb-2 mb-sm-3 pb-sm-1">brand</p>
															<p class="text-lg text-bebas lh-1 text-uppercase mb-0">renegade</p>
														</div>
														<div class="col-6 col-md-4 mb-4 pb-2">
															<p class="text-xs text-500 lh-1 text-uppercase opacity-60 mb-2 mb-sm-3 pb-sm-1">model</p>
															<p class="text-lg text-bebas lh-1 text-uppercase mb-0">xxc 1000</p>
														</div>
														<div class="col-6 col-md-4 mb-4 pb-2 mb-md-0 pb-md-0">
															<p class="text-xs text-500 lh-1 text-uppercase opacity-60 mb-2 mb-sm-3 pb-sm-1">engine cap.</p>
															<p class="text-lg text-bebas lh-1 text-uppercase mb-0">1000 cm <sup>3</sup></p>
														</div>
														<div class="col-6 col-md-4">
															<p class="text-xs text-500 lh-1 text-uppercase opacity-60 mb-2 mb-sm-3 pb-sm-1">year</p>
															<p class="text-lg text-bebas lh-1 text-uppercase mb-0">2013</p>
														</div>
														<div class="col-6 col-md-4">
															<p class="text-xs text-500 lh-1 text-uppercase opacity-60 mb-2 mb-sm-3 pb-sm-1">engine type</p>
															<p class="text-lg text-bebas lh-1 text-uppercase mb-0">four-stroke</p>
														</div>
													</div>
													<div class="row justify-content-center justify-content-lg-end pb-sm-2 pb-lg-0 mb-sm-4 mb-lg-0 mt-5 mt-lg-auto">
														<div class="col-9 col-sm-6">
															<a href="my-vehicle.php" class="btn btn-primary w-100">
																<span class="btn-text">filter</span> 
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>								
							</div>
							<div class="d-flex justify-content-between mt-4 mt-lg-0">
								<button class="carousel-control carousel-control-prev bg-stone bg-opacity-50 opacity-100 rounded-1 top-50 bottom-50 my-xl-auto boxSize-md ms-xl-4 flex-shrink-0" type="button" data-bs-target="#myGarage" data-bs-slide="prev">
									<span class="carousel-control-prev-icon carousel-control-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="btn btn-black-gradient btn-xl btn-center mx-3 mx-sm-4 d-inline-block d-lg-none w-100 px-2" data-bs-toggle="modal" data-bs-target="#addNewVechicle">
									Add New Vehicle +
								</button>
								<button class="carousel-control carousel-control-next bg-stone bg-opacity-50 opacity-100 rounded-1 top-50 bottom-50 my-xl-auto boxSize-md me-xl-4 flex-shrink-0" type="button" data-bs-target="#myGarage" data-bs-slide="next">
									<span class="carousel-control-next-icon carousel-control-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Next</span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section-my-favorites mb-6 mb-lg-5 pb-lg-5 overflow-hidden">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-xl-10 mb-5 mb-lg-0">
						<h2 class="headline-2 text-800 lh-1 text-uppercase mb-4 text-center text-lg-start">my parts</h2>
						<div class="d-flex justify-content-center justify-content-lg-between">
							<p class="favorites-subtitle headline-4 text-700 lh-1 mb-0 text-center text-lg-start">Liked parts</p>
							<a href="my-liked-parts.php" class="text-xs text-500 lh-1 text-white text-end d-none d-lg-inline-block text-decoration-none">View All</a>
						</div>						
					</div>			
					<div class="col-12 col-xl-10">
						<div class="swiper myFavorites overflow-visible">
							<div class="swiper-wrapper pt-5">
							<div class="swiper-slide pt-5 mt-5">
									<div class="card card-product rounded-3 border-0 position-relative card-bg-dark pt-5">
										<img src="assets/images/Products/Helm_1.png" class="position-absolute top-0 start-50 translate-middle card-img mx-90  object-fit-contain" alt="" height="180">
										<div class="card-body mt-5 pt-md-5 pb-4 px-4">
											<h4 class="card-title headline-4 text-700 lh-1 mb-4 mt-5 mt-lg-4 pt-sm-3 pt-lg-0">Can-Am X1 Helment</h4>								
											<div class="d-flex justify-content-between align-items-center mb-3 mb-lg-2 pt-2">
												<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
												<p class="mb-0" role="button">
													<i class="icon-heart like-symbol text-xxxs d-inline-block align-middle"></i>
												</p>
											</div>
											<div class="d-flex justify-content-between align-items-end mb-2 mb-lg-0">
												<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>
												<a href="single-product.php" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white  d-flex align-items-center">
													details 
													<i class="icon-arrow-right-3 ms-2 text-4xs"></i>
												</a>
											</div>										
										</div>
									</div>
								</div>
								<div class="swiper-slide pt-5 mt-5">
									<div class="card card-product rounded-3 border-0 position-relative card-bg-dark pt-5">
										<img src="assets/images/Products/Helm_1.png" class="position-absolute top-0 start-50 translate-middle card-img mx-90  object-fit-contain" alt="" height="180">
										<div class="card-body mt-5 pt-md-5 pb-4 px-4">
											<h4 class="card-title headline-4 text-700 lh-1 mb-4 mt-5 mt-lg-4 pt-sm-3 pt-lg-0">Can-Am X1 Helment</h4>								
											<div class="d-flex justify-content-between align-items-center mb-3 mb-lg-2 pt-2">
												<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
												<p class="mb-0" role="button">
													<i class="icon-heart like-symbol text-xxxs d-inline-block align-middle"></i>
												</p>
											</div>
											<div class="d-flex justify-content-between align-items-end mb-2 mb-lg-0">
												<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>
												<a href="single-product.php" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white  d-flex align-items-center">
													details 
													<i class="icon-arrow-right-3 ms-2 text-4xs"></i>
												</a>
											</div>										
										</div>
									</div>
								</div>
								<div class="swiper-slide pt-5 mt-5">
									<div class="card card-product rounded-3 border-0 position-relative card-bg-dark pt-5">
										<img src="assets/images/Products/Helm_1.png" class="position-absolute top-0 start-50 translate-middle card-img mx-90  object-fit-contain" alt="" height="180">
										<div class="card-body mt-5 pt-md-5 pb-4 px-4">
											<h4 class="card-title headline-4 text-700 lh-1 mb-4 mt-5 mt-lg-4 pt-sm-3 pt-lg-0">Can-Am X1 Helment</h4>								
											<div class="d-flex justify-content-between align-items-center mb-3 mb-lg-2 pt-2">
												<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
												<p class="mb-0" role="button">
													<i class="icon-heart like-symbol text-xxxs d-inline-block align-middle"></i>
												</p>
											</div>
											<div class="d-flex justify-content-between align-items-end mb-2 mb-lg-0">
												<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>
												<a href="single-product.php" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white  d-flex align-items-center">
													details 
													<i class="icon-arrow-right-3 ms-2 text-4xs"></i>
												</a>
											</div>										
										</div>
									</div>
								</div>
								<div class="swiper-slide pt-5 mt-5">
									<div class="card card-product rounded-3 border-0 position-relative card-bg-dark pt-5">
										<img src="assets/images/Products/Helm_1.png" class="position-absolute top-0 start-50 translate-middle card-img mx-90  object-fit-contain" alt="" height="180">
										<div class="card-body mt-5 pt-md-5 pb-4 px-4">
											<h4 class="card-title headline-4 text-700 lh-1 mb-4 mt-5 mt-lg-4 pt-sm-3 pt-lg-0">Can-Am X1 Helment</h4>								
											<div class="d-flex justify-content-between align-items-center mb-3 mb-lg-2 pt-2">
												<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
												<p class="mb-0" role="button">
													<i class="icon-heart like-symbol text-xxxs d-inline-block align-middle"></i>
												</p>
											</div>
											<div class="d-flex justify-content-between align-items-end mb-2 mb-lg-0">
												<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>
												<a href="single-product.php" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white  d-flex align-items-center">
													details 
													<i class="icon-arrow-right-3 ms-2 text-4xs"></i>
												</a>
											</div>										
										</div>
									</div>
								</div>
								<div class="swiper-slide pt-5 mt-5">
									<div class="card card-product rounded-3 border-0 position-relative card-bg-dark pt-5">
										<img src="assets/images/Products/Helm_1.png" class="position-absolute top-0 start-50 translate-middle card-img mx-90  object-fit-contain" alt="" height="180">
										<div class="card-body mt-5 pt-md-5 pb-4 px-4">
											<h4 class="card-title headline-4 text-700 lh-1 mb-4 mt-5 mt-lg-4 pt-sm-3 pt-lg-0">Can-Am X1 Helment</h4>								
											<div class="d-flex justify-content-between align-items-center mb-3 mb-lg-2 pt-2">
												<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
												<p class="mb-0" role="button">
													<i class="icon-heart like-symbol text-xxxs d-inline-block align-middle"></i>
												</p>
											</div>
											<div class="d-flex justify-content-between align-items-end mb-2 mb-lg-0">
												<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>
												<a href="single-product.php" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white  d-flex align-items-center">
													details 
													<i class="icon-arrow-right-3 ms-2 text-4xs"></i>
												</a>
											</div>										
										</div>
									</div>
								</div>
							</div>
						</div>						
					</div>	
					<div class="col-10 col-sm-8 col-md-6 mt-5 pt-3 d-flex d-lg-none">
						<a href="my-liked-parts.php" class="btn btn-primary btn-center w-100 text-capitalize">View All</a>
					</div>
				</div>
			</div>
		</section>
		<div class="section-purchase mb-lg-5">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-xl-10">
						<p class="purchase-subtitle headline-4 headline-lg-4 text-700 lh-1 mb-5 pb-1 pb-md-3 pb-lg-0 pt-3 mt-lg-0 text-center text-lg-start">All Purchases</p>
					</div>
					<div class="col-12 col-xl-10 mb-4 mb-lg-5 pb-lg-5">
						<div class="accordion accordionPurchase" id="accordionPurchase">
							
							<!-- ONE/ ONE ELEMENT --> 
							<div class="accordion-item purchase-item  mb-4 rounded-3 background-card">
								<div class="accordion-header" id="headingOne">
									<div class="accordion-button collapsed  d-flex p-3 p-sm-4 justify-content-between" role="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										<div class="d-flex justify-content-between align-items-center w-100 h-100 accordion-header-text order-details-headline">
											<span class="me-4 d-none d-sm-flex align-items-center order-details-imgs">
												<img src="assets/images/Products/wheel.png" class="img-fluid order-details-img w-100" alt="wheel">
											</span>
											<table class="table text-white table-borderless mb-0">	
												<thead>
													<tr>
														<th class="py-0 text-xxs text-500 opacity-60" scope="col">Order number</th>
														<th class="py-0 text-xxs text-500 opacity-60 d-none d-lg-table-cell" scope="col">Order date</th>
														<th class="py-0 text-xxs text-500 opacity-60 d-none d-lg-table-cell" scope="col">Items Ordered</th>
														<th class="py-0 text-xxs text-500 opacity-60" scope="col">Order Status</th>
														<th class="py-0 text-xxs text-500 opacity-60 d-none d-lg-table-cell" scope="col">Price</th>
													</tr>
													</thead>
													<tbody>
													<tr>
														<td class="py-0 text-xs text-500">1233136889</td>
														<td class="py-0 text-xs text-500 d-none d-lg-table-cell">2022.05.23</td>
														<td class="py-0 text-xs text-500 d-none d-lg-table-cell">1</td>
														<td class="py-0 text-xs text-500 text-primary">In Progress</td>
														<td class="py-0 text-xs text-500 d-none d-lg-table-cell">$2500.00</td>
													</tr>
													</tbody>
											</table>
										</div>	
									</div>									
								</div>
								<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne">
									<div class="accordion-body mb-2 mb-lg-0 p-4">
										<div class="row mb-sm-5">
											<div class="col-1 d-none d-lg-block"></div>
											<div class="col-11 col-lg-10">
												<div class="row justify-content-between">
													<div class="col-6 col-lg mb-4 pb-2 order-1">
														<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Order number</p>
														<p class="text-xs lh-1 text-500 mb-0">7021136889</p>
													</div>
													<div class="col-6 col-lg mb-4 mb-sm-0 order-3">
														<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Order date</p>
														<p class="text-xs lh-1 text-500 mb-0 d-none d-lg-inline-block">2022 June 03</p>
														<p class="text-xs lh-1 text-500 mb-0 d-inline-block d-lg-none">2022.06.03</p>
													</div>
													<div class="col-6 col-lg mb-4 mb-sm-0 order-3">
														<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Items Ordered</p>
														<p class="text-xs lh-1 text-500 mb-0">1</p>
													</div>
													<div class="col-6 col-lg mb-4 pb-2 order-2 order-lg-4">
														<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Order Status</p>
														<p class="text-xs lh-1 text-500 mb-0 text-primary">In progress</p>
													</div>
												</div>
												<div class="row d-none d-lg-flex">
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
										<div class="row g-0 justify-content-center order-details-content">
											<div class="col-12 col-lg-10">
												<div class="row">
													<div class="col-12 col-sm-6 col-lg-4 mb-4 pb-sm-3 order-2 order-lg-1 mt-4 mt-lg-0">
														<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Recipient details</p>
														<p class="text-xs lh-1 text-500 mb-0">John Smith</p>
														<p class="text-xs lh-1 text-500 mb-0">johnsmith12@gmail.com</p>
														<p class="text-xs lh-1 text-500 mb-0">+1 2331 2334 009</p>
														<p class="text-xs lh-1 text-500 mb-0">blue street 26, Ottawa</p>
													</div>
													<div class="col-12 col-lg-8 order-1 order-lg-2">
														<p class="text-xxs lh-1 text-500 mb-3 opacity-60 d-none d-lg-block">Costs</p>
														<div class="d-flex justify-content-between align-items-center border-bottom border-white border-opacity-50 py-3">
															<div class="w-45 flex-shrink-0">
																<img src="assets/images/Products/wheel.png" class="mx-2 pe-1 d-none d-sm-inline-block boxSize-md h-auto" alt="air filer">
																<p class="text-xxs lh-1 mb-0 d-inline-block">Wheel</p>
															</div>
															<p class="text-xxs lh-1 text-700 opacity-60 mb-0 w-20 text-center">1 piece</p>
															<p class="text-xxs lh-1 text-700 mb-0  w-30 text-end">$500.00</p>
														</div>														
													</div>
													<div class="col-12 col-lg-4 order-4 order-lg-3 mt-4 mt-lg-0">
														<div class="row">
															<div class="col-12 col-sm-6 col-lg-12 mb-4 mb-sm-0 mb-lg-4 pb-lg-2">
																<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Payment method</p>
																<i class="icon-card mb-2"></i>
																<p class="text-xxs lh-1 text-500 mb-0 d-inline-block">Card: **** **** **** 4515 </p>
															</div>
															<div class="col-12 col-sm-6 col-lg-12">
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
													<div class="col-4 d-none d-lg-block order-3"></div>
													<div class="col-12 col-sm-6 col-lg-4 order-3 order-lg-4">
														<div class="d-flex flex-column ms-0 mt-sm-4 pt-0 pt-lg-2">
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
															<p class="text-xxxs lh-1 text-500 mb-3 mb-lg-0 pb-1 pb-lg-0">
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

							<!-- TWO/ TWO ELEMENS --> 
							<div class="accordion-item purchase-item  mb-4 rounded-3 background-card">
								<div class="accordion-header" id="headingTwo">
									<div class="accordion-button collapsed  d-flex p-3 p-sm-4 justify-content-between" role="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										<div class="d-flex justify-content-between align-items-center w-100 h-100 accordion-header-text order-details-headline">
											<span class="me-4 d-none d-sm-flex align-items-center order-details-imgs">
												<img src="assets/images/Products/belt_engine.png" class="img-fluid order-details-img mb-auto w-75" alt="belt engine">
												<img src="assets/images/Products/air_filter.png" class="img-fluid order-details-img mt-auto w-75 ms-neg-xs" alt="air filer">
											</span>
											<table class="table text-white table-borderless mb-0">	
												<thead>
													<tr>
														<th class="py-0 text-xxs text-500 opacity-60" scope="col">Order number</th>
														<th class="py-0 text-xxs text-500 opacity-60 d-none d-lg-table-cell" scope="col">Order date</th>
														<th class="py-0 text-xxs text-500 opacity-60 d-none d-lg-table-cell" scope="col">Items Ordered</th>
														<th class="py-0 text-xxs text-500 opacity-60" scope="col">Order Status</th>
														<th class="py-0 text-xxs text-500 opacity-60 d-none d-lg-table-cell" scope="col">Price</th>
													</tr>
													</thead>
													<tbody>
													<tr>
														<td class="py-0 text-xs text-500">1233136889</td>
														<td class="py-0 text-xs text-500 d-none d-lg-table-cell">2022.05.23</td>
														<td class="py-0 text-xs text-500 d-none d-lg-table-cell">1</td>
														<td class="py-0 text-xs text-500 text-success">Realized</td>
														<td class="py-0 text-xs text-500 d-none d-lg-table-cell">$2500.00</td>
													</tr>
													</tbody>
											</table>
										</div>
									</div>
								</div>
								<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
									<div class="accordion-body mb-2 mb-lg-0 p-4">
										<div class="row mb-sm-5">
											<div class="col-1 d-none d-lg-block"></div>
											<div class="col-11 col-lg-10">
												<div class="row justify-content-between">
													<div class="col-6 col-lg mb-4 pb-2 order-1">
														<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Order number</p>
														<p class="text-xs lh-1 text-500 mb-0">7021136889</p>
													</div>
													<div class="col-6 col-lg mb-4 mb-sm-0 order-3">
														<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Order date</p>
														<p class="text-xs lh-1 text-500 mb-0 d-none d-lg-inline-block">2022 June 03</p>
														<p class="text-xs lh-1 text-500 mb-0 d-inline-block d-lg-none">2022.06.03</p>
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
										<div class="row g-0 justify-content-center  order-details-content">
											<div class="col-12 col-lg-10">
												<div class="row">
													<div class="col-12 col-sm-6 col-lg-4 mb-4 pb-sm-3 order-2 order-lg-1 mt-4 mt-lg-0">
														<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Recipient details</p>
														<p class="text-xs lh-1 text-500 mb-0">John Smith</p>
														<p class="text-xs lh-1 text-500 mb-0">johnsmith12@gmail.com</p>
														<p class="text-xs lh-1 text-500 mb-0">+1 2331 2334 009</p>
														<p class="text-xs lh-1 text-500 mb-0">blue street 26, Ottawa</p>
													</div>
													<div class="col-12 col-lg-8 order-1 order-lg-2">
														<p class="text-xxs lh-1 text-500 mb-3 opacity-60 d-none d-lg-block">Costs</p>
														<div class="d-flex justify-content-between align-items-center border-bottom border-white border-opacity-50 py-3">
															<div class="w-45 flex-shrink-0">
																<img src="assets/images/Products/air_filter.png" class="mx-2 pe-1 d-none d-sm-inline-block boxSize-md h-auto" alt="air filer">
																<p class="text-xxs lh-1 mb-0 d-inline-block">Air Engine Filter</p>
															</div>
															<p class="text-xxs lh-1 text-700 opacity-60 mb-0 w-20 text-center">1 piece</p>
															<p class="text-xxs lh-1 text-700 mb-0  w-30 text-end">$500.00</p>
														</div>
														<div class="d-flex justify-content-between align-items-center border-bottom border-white border-opacity-50 py-3">
															<div class="w-45 flex-shrink-0">
																<img src="assets/images/Products/belt_engine.png" class="mx-2 pe-1 d-none d-sm-inline-block boxSize-md h-auto" alt="belt engine">
																<p class="text-xxs lh-1 mb-0 d-inline-block">Belt Engine</p>
															</div>
															<p class="text-xxs lh-1 text-700 opacity-60 mb-0 w-20 text-center">1 piece</p>
															<p class="text-xxs lh-1 text-700 mb-0  w-30 text-end">$500.00</p>
														</div>
													</div>
													<div class="col-12 col-lg-4 order-4 order-lg-3 mt-4 mt-lg-0">
														<div class="row">
															<div class="col-12 col-sm-6 col-lg-12 mb-4 mb-sm-0 mb-lg-4 pb-lg-2">
																<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Payment method</p>
																<i class="icon-card mb-2"></i>
																<p class="text-xxs lh-1 text-500 mb-0 d-inline-block">Card: **** **** **** 4515 </p>
															</div>
															<div class="col-12 col-sm-6 col-lg-12">
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
													<div class="col-4 d-none d-lg-block order-3"></div>
													<div class="col-12 col-sm-6 col-lg-4 order-3 order-lg-4">
														<div class="d-flex flex-column ms-0 mt-sm-4 pt-0 pt-lg-2">
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
															<p class="text-xxxs lh-1 text-500 mb-3 mb-lg-0 pb-1 pb-lg-0">
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

							<!-- THREE / THREE  ELEMENS --> 
							<div class="accordion-item purchase-item  mb-4 rounded-3 background-card">
								<div class="accordion-header" id="headingThree">
									<div class="accordion-button collapsed  d-flex p-3 p-sm-4 justify-content-between" role="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										<div class="d-flex justify-content-between align-items-center w-100 h-100 accordion-header-text order-details-headline">
											<span class="me-4 d-none d-sm-flex align-items-center order-details-imgs">
												<img src="assets/images/Products/belt_engine.png" class="img-fluid order-details-img mb-auto w-75" alt="belt engine">
												<img src="assets/images/Products/Helm_1.png" alt="helmet" class="img-fluid order-details-img mt-auto w-75 ms-neg-xs">
											</span>
											<table class="table text-white table-borderless mb-0">	
												<thead>
													<tr>
														<th class="py-0 text-xxs text-500 opacity-60" scope="col">Order number</th>
														<th class="py-0 text-xxs text-500 opacity-60 d-none d-lg-table-cell" scope="col">Order date</th>
														<th class="py-0 text-xxs text-500 opacity-60 d-none d-lg-table-cell" scope="col">Items Ordered</th>
														<th class="py-0 text-xxs text-500 opacity-60" scope="col">Order Status</th>
														<th class="py-0 text-xxs text-500 opacity-60 d-none d-lg-table-cell" scope="col">Price</th>
													</tr>
													</thead>
													<tbody>
													<tr>
														<td class="py-0 text-xs text-500">1233136889</td>
														<td class="py-0 text-xs text-500 d-none d-lg-table-cell">2022.05.23</td>
														<td class="py-0 text-xs text-500 d-none d-lg-table-cell">1</td>
														<td class="py-0 text-xs text-500 text-success">Realized</td>
														<td class="py-0 text-xs text-500 d-none d-lg-table-cell">$2500.00</td>
													</tr>
													</tbody>
											</table>
										</div>									
									</div>
								</div>
								<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
									<div class="accordion-body mb-2 mb-lg-0 p-4">
										<div class="row mb-5">
											<div class="col-1 d-none d-lg-block"></div>
											<div class="col-11 col-lg-10">
												<div class="row justify-content-between">
													<div class="col-6 col-lg mb-4 pb-2 order-1">
														<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Order number</p>
														<p class="text-xs lh-1 text-500 mb-0">7021136889</p>
													</div>
													<div class="col-6 col-lg mb-4 mb-sm-0 order-3">
														<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Order date</p>
														<p class="text-xs lh-1 text-500 mb-0 d-none d-lg-inline-block">2022 June 03</p>
														<p class="text-xs lh-1 text-500 mb-0 d-inline-block d-lg-none">2022.06.03</p>
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
										<div class="row g-0 justify-content-center order-details-content">
											<div class="col-12 col-lg-10">
											<div class="row">
													<div class="col-12 col-sm-6 col-lg-4 mb-4 pb-sm-3 order-2 order-lg-1 mt-4 mt-lg-0">
														<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Recipient details</p>
														<p class="text-xs lh-1 text-500 mb-0">John Smith</p>
														<p class="text-xs lh-1 text-500 mb-0">johnsmith12@gmail.com</p>
														<p class="text-xs lh-1 text-500 mb-0">+1 2331 2334 009</p>
														<p class="text-xs lh-1 text-500 mb-0">blue street 26, Ottawa</p>
													</div>
													<div class="col-12 col-lg-8 order-1 order-lg-2">
														<p class="text-xxs lh-1 text-500 mb-3 opacity-60 d-none d-lg-block">Costs</p>
														<div class="d-flex justify-content-between align-items-center border-bottom border-white border-opacity-50 py-3">
															<div class="w-45 flex-shrink-0">
																<img src="assets/images/Products/air_filter.png" class="mx-2 pe-1 d-none d-sm-inline-block boxSize-md h-auto" alt="air filer">
																<p class="text-xxs lh-1 mb-0 d-inline-block">Air Engine Filter</p>
															</div>
															<p class="text-xxs lh-1 text-700 opacity-60 mb-0 w-20 text-center">1 piece</p>
															<p class="text-xxs lh-1 text-700 mb-0  w-30 text-end">$500.00</p>
														</div>
														<div class="d-flex justify-content-between align-items-center border-bottom border-white border-opacity-50 py-3">
															<div class="w-45 flex-shrink-0">
																<img src="assets/images/Products/belt_engine.png" class="mx-2 pe-1 d-none d-sm-inline-block boxSize-md h-auto" alt="belt engine">
																<p class="text-xxs lh-1 mb-0 d-inline-block">Belt Engine</p>
															</div>
															<p class="text-xxs lh-1 text-700 opacity-60 mb-0 w-20 text-center">1 piece</p>
															<p class="text-xxs lh-1 text-700 mb-0  w-30 text-end">$500.00</p>
														</div>
													</div>
													<div class="col-12 col-lg-4 order-4 order-lg-3 mt-4 mt-lg-0">
														<div class="row">
															<div class="col-12 col-sm-6 col-lg-12 mb-4 mb-sm-0 mb-lg-4 pb-lg-2">
																<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Payment method</p>
																<i class="icon-card mb-2"></i>
																<p class="text-xxs lh-1 text-500 mb-0 d-inline-block">Card: **** **** **** 4515 </p>
															</div>
															<div class="col-12 col-sm-6 col-lg-12">
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
													<div class="col-4 d-none d-lg-block order-3"></div>
													<div class="col-12 col-sm-6 col-lg-4 order-3 order-lg-4">
														<div class="d-flex flex-column ms-0 mt-sm-4 pt-0 pt-lg-2">
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
															<p class="text-xxxs lh-1 text-500 mb-3 mb-lg-0 pb-1 pb-lg-0">
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
							
							<!-- FOUR/ ONE ELEMENT --> 
							<div class="accordion-item purchase-item  mb-4 rounded-3 background-card">
								<div class="accordion-header" id="headingFour">
									<div class="accordion-button collapsed  d-flex p-3 p-sm-4 justify-content-between" role="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
										<div class="d-flex justify-content-between align-items-center w-100 h-100 accordion-header-text order-details-headline">
											<span class="me-4 d-none d-sm-flex align-items-center order-details-imgs">
												<img src="assets/images/Products/belt_engine.png" class="img-fluid order-details-img w-100" alt="wheel">
											</span>
											<table class="table text-white table-borderless mb-0">	
												<thead>
													<tr>
														<th class="py-0 text-xxs text-500 opacity-60" scope="col">Order number</th>
														<th class="py-0 text-xxs text-500 opacity-60 d-none d-lg-table-cell" scope="col">Order date</th>
														<th class="py-0 text-xxs text-500 opacity-60 d-none d-lg-table-cell" scope="col">Items Ordered</th>
														<th class="py-0 text-xxs text-500 opacity-60" scope="col">Order Status</th>
														<th class="py-0 text-xxs text-500 opacity-60 d-none d-lg-table-cell" scope="col">Price</th>
													</tr>
													</thead>
													<tbody>
													<tr>
														<td class="py-0 text-xs text-500 opacity-40">1233136889</td>
														<td class="py-0 text-xs text-500 opacity-40 d-none d-lg-table-cell">2022.05.23</td>
														<td class="py-0 text-xs text-500 opacity-40 d-none d-lg-table-cell">1</td>
														<td class="py-0 text-xs text-500 text-danger">Canceled</td>
														<td class="py-0 text-xs text-500 opacity-40 d-none d-lg-table-cell">$2500.00</td>
													</tr>
													</tbody>
											</table>
										</div>
									</div>
								</div>
								<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour">
									<div class="accordion-body mb-2 mb-lg-0 p-4">
										<div class="row mb-sm-5">
											<div class="col-1 d-none d-lg-block"></div>
											<div class="col-11 col-lg-10">
												<div class="row justify-content-between">
													<div class="col-6 col-lg mb-4 pb-2 order-1">
														<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Order number</p>
														<p class="text-xs lh-1 text-500 mb-0">7021136889</p>
													</div>
													<div class="col-6 col-lg mb-4 mb-sm-0 order-3">
														<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Order date</p>
														<p class="text-xs lh-1 text-500 mb-0 d-none d-lg-inline-block">2022 June 03</p>
														<p class="text-xs lh-1 text-500 mb-0 d-inline-block d-lg-none">2022.06.03</p>
													</div>
													<div class="col-6 col-lg mb-4 mb-sm-0 order-3">
														<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Items Ordered</p>
														<p class="text-xs lh-1 text-500 mb-0">1</p>
													</div>
													<div class="col-6 col-lg mb-4 pb-2 order-2 order-lg-4">
														<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Order Status</p>
														<p class="text-xs lh-1 text-500 mb-0 text-danger">Canceled</p>
													</div>
												</div>
												<div class="row d-none d-lg-flex">
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
										<div class="row g-0 justify-content-center  order-details-content">
											<div class="col-12 col-lg-10">
												<div class="row">
													<div class="col-12 col-sm-6 col-lg-4 mb-4 pb-sm-3 order-2 order-lg-1 mt-4 mt-lg-0">
														<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Recipient details</p>
														<p class="text-xs lh-1 text-500 mb-0">John Smith</p>
														<p class="text-xs lh-1 text-500 mb-0">johnsmith12@gmail.com</p>
														<p class="text-xs lh-1 text-500 mb-0">+1 2331 2334 009</p>
														<p class="text-xs lh-1 text-500 mb-0">blue street 26, Ottawa</p>
													</div>
													<div class="col-12 col-lg-8 order-1 order-lg-2">
														<p class="text-xxs lh-1 text-500 mb-3 opacity-60 d-none d-lg-block">Costs</p>
														<div class="d-flex justify-content-between align-items-center border-bottom border-white border-opacity-50 py-3">
															<div class="w-45 flex-shrink-0">
																<img src="assets/images/Products/belt_engine.png" class="mx-2 pe-1 d-none d-sm-inline-block boxSize-md h-auto" alt="air filer">
																<p class="text-xxs lh-1 mb-0 d-inline-block">Belt Engine</p>
															</div>
															<p class="text-xxs lh-1 text-700 opacity-60 mb-0 w-20 text-center">1 piece</p>
															<p class="text-xxs lh-1 text-700 mb-0  w-30 text-end">$500.00</p>
														</div>														
													</div>
													<div class="col-12 col-lg-4 order-4 order-lg-3 mt-4 mt-lg-0">
														<div class="row">
															<div class="col-12 col-sm-6 col-lg-12 mb-4 mb-sm-0 mb-lg-4 pb-lg-2">
																<p class="text-xxs lh-1 text-500 mb-2 opacity-60">Payment method</p>
																<i class="icon-card mb-2"></i>
																<p class="text-xxs lh-1 text-500 mb-0 d-inline-block">Card: **** **** **** 4515 </p>
															</div>
															<div class="col-12 col-sm-6 col-lg-12">
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
													<div class="col-4 d-none d-lg-block order-3"></div>
													<div class="col-12 col-sm-6 col-lg-4 order-3 order-lg-4">
														<div class="d-flex flex-column ms-0 mt-sm-4 pt-0 pt-lg-2">
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
															<p class="text-xxxs lh-1 text-500 mb-3 mb-lg-0 pb-1 pb-lg-0">
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
						</div>						
					</div>
				</div>
			</div>				
		</div>

		<?php include './src/section-banner.php' ?>
	</main>
	
	<?php include './src/footer.php' ?>

						<!-- MODALS -->
	<!-- __________________________________________________________________________________________________________ -->
	<!-- __________________________________________________________________________________________________________ -->
	<!-- __________________________________________________________________________________________________________ -->

		<!-- MODAL addNewVechicle  -->
		<div class="modal z-index_1200 fade addNewVechicle" id="addNewVechicle" tabindex="-1" aria-labelledby="addNewVechicle" aria-hidden="true">
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
											<h3 class="headline-3 lh-1 text-800 text-uppercase mb-4 pb-2">ADD NEW VECHICLE</h3>
											<p class="text-xs lh-xl mb-0">Specify your vehicle type and add more info about your machine</p>
										</div>
										<form class="mb-2">
											<div class="row">
												<div class="col-12 col-lg-6 mb-4 pb-2">
													<input class="form-control form-control-sm form-control-gray rounded-1 form-control-fs-up" type="text" placeholder="type*" name="Type">
												</div>
												<div class="col-12 col-lg-6 mb-4 pb-2">
													<input class="form-control form-control-sm form-control-gray rounded-1 form-control-fs-up" type="text" placeholder="BRAND*" name="Brand">
												</div>
												<div class="col-12 col-lg-6 mb-4 pb-2">
													<input class="form-control form-control-sm form-control-gray rounded-1 form-control-fs-up" type="text" placeholder="MODEL*" name="Model">
												</div>
												<div class="col-12 col-lg-6 mb-4 pb-2">
													<input class="form-control form-control-sm form-control-gray rounded-1 form-control-fs-up" type="text" placeholder="MODEL*" name="Model">
												</div>
												<div class="col-sm-6 col-lg-3 mb-4 pb-2">
													<input class="form-control form-control-sm form-control-gray rounded-1 form-control-fs-up" type="text" placeholder="ENGINE CAP." name="Engine Cap.">
												</div>
												<div class="col-sm-6 col-lg-3 mb-4 pb-2">
													<input class="form-control form-control-sm form-control-gray rounded-1 form-control-fs-up" type="text" placeholder="ENGINE TYPE" name="Engine Type">
												</div>
												<div class="col-sm-6 col-lg-3 mb-4 pb-2">
													<input class="form-control form-control-sm form-control-gray rounded-1 form-control-fs-up" type="text" placeholder="TIRE SIZE" name="Tire size">
												</div>
												<div class="col-sm-6 col-lg-3 mb-4 pb-2">
													<input class="form-control form-control-sm form-control-gray rounded-1 form-control-fs-up" type="text" placeholder="TIRE TYPE" name="Tire type">
												</div>
											</div>
										</form>
										<div class="col-12">
											<p class="text-xs lh-xl mb-4">* this fields are required</p>
										</div>
										<div class="col-12 mt-auto">
											<div class="row justify-content-center justify-content-lg-between">
												<div class="col-sm-8 col-lg-4 order-2 order-lg-1">
													<button class="btn btn-center btn-gray w-100" data-bs-dismiss="modal" aria-label="Close">
														<span class="btn-text">cancel</span> 
													</button>
												</div>
												<div class="col-sm-8 col-lg-4 order-1 order-lg-2 mb-3 mb-lg-0">
													<button class="btn btn-primary w-100 btn-next justify-content-center justify-content-lg-start" data-bs-toggle="modal" data-bs-target="#selectAvatar">
													<span class="btn-text me-0 me-lg-auto">Next</span> 
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


		<!-- MODAL selectAvatar -->
		<div class="modal z-index_1200 fade selectAvatar" id="selectAvatar" tabindex="-1" aria-labelledby="selectAvatar" aria-hidden="true">
			<button type="button" class="btn-close m-0 p-0 opacity-100 text-white bg-img-none position-absolute top-0 start-0 p-3" data-bs-dismiss="modal" aria-label="Close">
				<i class="icon-arrow-left"></i>
			</button>
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg modal-fullscreen-lg-down">
				<div class="modal-content bg-dark rounded-3">
					<div class="modal-body p-0 h-100 scroll-dark">
						<div class="card border-white border-opacity-05 rounded-3 card-bg-dark min-h-100">
							<div class="card-body p-4 p-sm-5 position-relative">
								<button type="button" class="btn-close p-4 p-sm-5 opacity-100 text-white d-inline-block d-lg-none w-auto text-end position-absolute top-0 end-0 bg-img-none h-auto" data-bs-dismiss="modal" aria-label="Close">
									<i class="icon-close-circle text-md"></i>
								</button>
								<div class="">	
									<div class="row h-100 justify-content-center align-content-center">
										<div class="col-12 mb-4 pb-2 mt-5 mt-lg-0 text-center text-lg-start">
											<h3 class="headline-3 lh-1 text-800 text-uppercase">SELECT A NAME</h3>
										</div>
										<div class="col-12 mb-4 pb-2">
											<input class="form-control form-control-sm form-control-gray rounded-1" type="text" placeholder="YOUR VEHICLE NAME" name="vehicleName">
										</div>
										<div class="col-12 col-lg-6 mb-4 pb-2 pb-lg-3">
											<img src="assets/images/buggy.png" class="img-fluid" alt="buggy">
										</div>
										<div class="col-12 col-lg-6 mb-5 mb-lg-0 pb-3 pb-lg-0">
											<div id="changeColorVehicle" class="carousel slide mb-6" data-bs-ride="false">
												<div class="carousel-inner">
													<div class="carousel-item active">
														<div class="row justify-content-center">
															<div class="col-8">
																<div class="carousel-item-box rounded-1 card-bg-dark p-3 d-flex align-items-center border-light-gray">
																	<h4 class="text-bebas headline-4 lh-1 text-uppercase mb-0 text-light-gray">
																		<span class="text-gray">Color:</span>
																		LIGHT GREY
																	</h4>
																</div>
															</div>
														</div>
													</div>
													<div class="carousel-item">
														<div class="row justify-content-center">
															<div class="col-8">
																<div class="carousel-item-box rounded-1 card-bg-dark p-3 d-flex align-items-center border-light-gray">
																	<h4 class="text-bebas headline-4 lh-1 text-uppercase mb-0 text-light-gray">
																		<span class="text-gray">Color:</span>
																		pink
																	</h4>
																</div>
															</div>
														</div>
													</div>
													<div class="carousel-item">
														<div class="row justify-content-center">
															<div class="col-8">
																<div class="carousel-item-box rounded-1 card-bg-dark p-3 d-flex align-items-center border-light-gray">
																	<h4 class="text-bebas headline-4 lh-1 text-uppercase mb-0 text-light-gray">
																		<span class="text-gray">Color:</span>
																		yellow
																	</h4>
																</div>
															</div>
														</div>
													</div>
												</div>
												<button class="carousel-control-prev bg-stone bg-opacity-50 opacity-100 rounded-1 top-50 bottom-50 my-auto boxSize-md" type="button" data-bs-target="#changeColorVehicle" data-bs-slide="prev">
													<span class="carousel-control-prev-icon carousel-control-icon" aria-hidden="true"></span>
													<span class="visually-hidden">Previous</span>
												</button>
												<button class="carousel-control-next bg-stone bg-opacity-50 opacity-100 rounded-1 top-50 bottom-50 my-auto boxSize-md" type="button" data-bs-target="#changeColorVehicle" data-bs-slide="next">
													<span class="carousel-control-next-icon carousel-control-icon" aria-hidden="true"></span>
													<span class="visually-hidden">Next</span>
												</button>
											</div>
											<div id="changeModelVehicle" class="carousel slide" data-bs-ride="false">
												<div class="carousel-inner">
													<div class="carousel-item active">
														<div class="row justify-content-center">
															<div class="col-8">
																<div class="carousel-item-box rounded-1 card-bg-dark p-3 d-flex align-items-center border-light-gray">
																	<h4 class="text-bebas headline-4 lh-1 text-uppercase mb-0 text-light-gray">
																		<span class="text-gray">Model:</span>
																		#1
																	</h4>
																</div>
															</div>
														</div>
													</div>
													<div class="carousel-item">
														<div class="row justify-content-center">
															<div class="col-8">
																<div class="carousel-item-box rounded-1 card-bg-dark p-3 d-flex align-items-center border-light-gray">
																	<h4 class="text-bebas headline-4 lh-1 text-uppercase mb-0 text-light-gray">
																		<span class="text-gray">Model:</span>
																		#2
																	</h4>
																</div>
															</div>
														</div>
													</div>
													<div class="carousel-item">
														<div class="row justify-content-center">
															<div class="col-8">
																<div class="carousel-item-box rounded-1 card-bg-dark p-3 d-flex align-items-center border-light-gray">
																	<h4 class="text-bebas headline-4 lh-1 text-uppercase mb-0 text-light-gray">
																		<span class="text-gray">Model:</span>
																		#3
																	</h4>
																</div>
															</div>
														</div>
													</div>
												</div>
												<button class="carousel-control-prev bg-stone bg-opacity-50 opacity-100 rounded-1 top-50 bottom-50 my-auto boxSize-md" type="button" data-bs-target="#changeModelVehicle" data-bs-slide="prev">
													<span class="carousel-control-prev-icon carousel-control-icon" aria-hidden="true"></span>
													<span class="visually-hidden">Previous</span>
												</button>
												<button class="carousel-control-next bg-stone bg-opacity-50 opacity-100 rounded-1 top-50 bottom-50 my-auto boxSize-md" type="button" data-bs-target="#changeModelVehicle" data-bs-slide="next">
													<span class="carousel-control-next-icon carousel-control-icon" aria-hidden="true"></span>
													<span class="visually-hidden">Next</span>
												</button>
											</div>
										</div>												
										<div class="col-12 mt-auto">
											<div class="row justify-content-center justify-content-lg-between">
												<div class="col-sm-8 col-lg-4 order-2 order-lg-1">
													<button class="btn btn-center btn-gray w-100" data-bs-toggle="modal" data-bs-target="#addNewVechicle">
														<span class="btn-text">BACK TO DETAILS</span> 
													</button>
												</div>
												<div class="col-sm-8 col-lg-4 order-1 order-lg-2 mb-3 mb-lg-0">
													<button class="btn btn-primary btn-center w-100">
														<span class="btn-text">ADD TO GARAGE</span> 
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

		<?php 
			include './src/navbar-modal.php';
			include './src/modal-search.php'
		?>
		
		<?php 
			include './src/navbar-offcanvas-chat.php';
			include './src/navbar-offcanvas-cart.php';
			include './src/navbar-offcanvas-user-panel.php';
		?>

							


	<!-- Bootstrap JS -->	
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.bundle.min.js" async></script>	

	<!-- Tom Select JS -->
	<script src="https://cdn.jsdelivr.net/npm/tom-select@2.1.0/dist/js/tom-select.complete.min.js"></script>

	<!-- Swiper JS -->
	<script src="assets/swiper/swiper-bundle.min.js" defer></script>

	<!-- JS -->
	<script type="text/javascript" src="assets/js/calender.js" defer></script>
	<script type="text/javascript" src="assets/js/script.js" defer></script>
</body>
</html>