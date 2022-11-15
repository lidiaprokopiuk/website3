<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ORV HeadQuarters</title>
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
<body class="bg-dark text-white bg-noise">
	<header class="home-navabr">
		<a href="index.php" class="navbar-brand mx-auto d-block d-lg-none text-center mb-5">
            <img src="assets/images/Logo/ORV-HeadQuarters.svg" alt="">
        </a>
		<?php include './src/navbar.php';?>	

		<div class="header-hero position-relative">
			<div class="container">
				<div class="row align-content-center header-hero-text">
					<div class="col-12 col-lg-6 col-xl-5 text-center text-lg-start">
						<h5 class="headline-5 text-700 lh-1 text-uppercase text-primary mb-4 pb-2">best atv's bikes</h5>
						<h1 class="headline-2 text-800 lh-1 text-uppercase mb-5 mb-lg-4">upgrade<br>your beast</h1>
					</div>
					<div class="row justify-content-center justify-content-lg-start mx-auto mx-sm-0">
						<div class="col-10 col-sm-8 col-md-6 col-lg-4 col-xl-3 px-0">
							<a href="#" class="btn btn-primary w-100">
								<span class="btn-text">view specials</span> 
							</a>
						</div>
					</div>
				</div>
			</div>
			<img src="assets/images/home-page-header.png" class="hero-bg-img position-absolute bottom-0 end-0 z-index_-1 img-fluid" alt="">
			<div class="bg-stone bg-opacity-50 py-4 py-lg-5">
				<div class="container pt-2 pb-4">
					<div class="row align-items-end justify-content-center">
						<div class="col-12 col-md-10 col-lg-5 mb-5 mb-lg-0">
							<label class="text-xs text-500 lh-1 text-uppercase mb-2 opacity-60">search</label>
							<input class="form-control form-control-sm" type="text" placeholder="type a part name" aria-label="Search">
						</div>
						<div class="col-12 col-md-10 col-lg-4 mb-5 mb-lg-0">							
							<label class="text-xs text-500 lh-1 text-uppercase mb-2 opacity-60">part category</label>
							<select class="select-beast">
								<option value="Wheels" selected>Wheels</option>
								<option value="lorem">Lorem</option>
								<option value="Ipsum">Ipsum</option>
								<option value="Dolor">Dolor</option>
							</select>
						</div>
						<div class="col-10 col-sm-8 col-md-6 col-lg-3 d-flex justify-content-end">
							<button type="button" class="btn btn-primary btn-xl w-75" data-bs-toggle="modal" data-bs-target="#searchModal">
								<span class="btn-text">search</span> 
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<main>	
		<section class="section-featured mb-xl-5 pb-5 pt-5 overflow-hidden position-relative">
			<div class="container pb-md-3 pb-xl-2">
				<div class="d-none d-xl-inline-block position-absolute w-25 bg-dark h-100 position-absolute w-25 bg-noise h-100 start-0 top-0 z-index_3"></div>
				<div class="row align-items-end justify-content-center justify-content-lg-start pt-4 pt-lg-0 pt-xl-3">
					<div class="col-11 col-md-10 col-lg-12 col-xl-4 pt-xl-5 pb-lg-3 pb-xl-0 bg-dark bg-noise position-relative z-index_3 text-center text-xl-start">

						<h2 class="headline-2 text-800 lh-1 text-uppercase mb-4 pt-xl-5 mt-4">FEATURED PRODUCTS</h2>
						<p class="text-xs text-400 lh-md mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<a href="products-page.php" class="btn btn-primary w-75 d-none d-xl-flex">
							<span class="btn-text">browse more</span> 
						</a>
					</div>
					<div class="col-12 col-xl-8 mb-5 mb-xl-0 pb-4 pb-lg-0">
						<div class="swiper mySwiper overflow-visible">
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
											<div class="d-flex justify-content-between align-items-end  mb-2 mb-lg-0">
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
											<div class="d-flex justify-content-between align-items-end  mb-2 mb-lg-0">
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
											<div class="d-flex justify-content-between align-items-end  mb-2 mb-lg-0">
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
											<div class="d-flex justify-content-between align-items-end  mb-2 mb-lg-0">
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
											<div class="d-flex justify-content-between align-items-end  mb-2 mb-lg-0">
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
				</div>	
				<div class="row justify-content-center">
					<div class="col-10 col-sm-8 col-md-6 col-lg-4">
						<a href="products-page.php" class="btn btn-primary d-xl-none d-flex">
							<span class="btn-text">browse more</span> 
						</a>
					</div>
				</div>
			</div>
		</section>
		<section class="section-offers pt-5 pb-5 mb-4 mb-xxl-5">
			<div class="container pb-lg-2 pb-xl-3">
				<div class="row justify-content-center">
					<div class="col-12 col-md-10 col-lg-6 mb-5 mb-lg-0">
						<a href="#" class="card-top-offer card card-bg-dark border-primary border-7 rounded-3 p-3 p-sm-4 text-decoration-none text-white card-animation">
							<div class="d-flex flex-wrap flex-sm-nowrap justify-content-end justify-content-lg-between px-xl-2 pt-xl-2">
								<h3 class="headline-3 text-800 text-uppercase lh-1 w-100 mb-0 order-2 order-sm-1 text-center text-sm-start">today's <br> hot offer!</h3>
								<div class="badge bg-white bg-opacity-60 px-4 px-xl-5 py-2 d-flex flex-wrap flex-column justify-content-center align-content-center order-1 order-sm-2 mb-4">
									<p class="text-md text-700 text-uppercase lh-1 mb-0">save</p>
									<p class="text-xl text-800 lh-1 mb-0">$100</p>
								</div>
							</div>
							<div class="d-flex justify-content-center my-5 py-3 py-xl-4 px-xl-2">
								<img src="assets/images/Products/air_filter.png" class="img-fluid card-top-offer-img" alt="" width="362">	
							</div>
							<div class="text-center mb-5 px-xl-2">
								<p class="text-xl text-500 lh-1">Engine Air Filter Bosh <span class="d-inline-block">554 /11</span></p>
								<p class="text-xl text-500 lh-1 opacity-50 text-decoration-line-through">$540</p>
								<p class="text-xxl text-800 lh-1 text-primary">$440</p>
							</div>
							<div class="d-sm-flex justify-content-between px-xl-2 pb-xl-2" id="countdownTimer">
								<p class="text-xs lh-1 mb-0 flex-shrink-0">Offer ends in:</p>
								<p class="text-xs lh-1 mb-0 text-sm-end" id="countdownTimer-wrapper">
									<span class="text-700" id="countdownTimer-hours">00</span> hours
									<span class="text-700" id="countdownTimer-minutes">00</span> minutes
									<span class="text-700" id="countdownTimer-seconds">00</span> seconds
								</p>
							</div>
						</a>
					</div>
					<div class="col-12 col-md-10 col-lg-6">
						<a href="#" class="card-offer card-animation text-decoration-none text-white overflow-hidden rounded-3 d-block w-100 mb-5 mb-lg-4 h-31">
							<div class="card border-0 rounded-3 p-4 bg-img-cover h-100" style="background-image: linear-gradient(101.55deg, rgba(0, 0, 0, 0.71) 31.56%, rgba(0, 0, 0, 0) 60.58%), url(assets/images/Offers/car-mechanic-changing-wheels-car.png);">
								<div class="card-body d-flex align-items-center p-0">
									<h3 class="headline-3 text-800 lh-1 p-2 w-75 mb-0">
										<span class="text-uppercase">free </span>
										assembly with purchase
									</h3>
								</div>						
							</div>
						</a>
						<a href="#" class="card-offer card-animation text-decoration-none text-white overflow-hidden rounded-3 d-block w-100 mb-5 mb-lg-4 h-31">
							<div class="card border-0 rounded-3 p-4 bg-img-cover bg-primary bg-blend-burn h-100 bg-banner-ad">
								<div class="card-body d-flex flex-column align-items-start p-0">
									<h3 class="headline-3 text-800 lh-1 p-2 mb-3">							
										Buy 1, Get 1 for
										<span class="text-uppercase">free </span>
									</h3>
									<img src="assets/images/Offers/bulbs2.png" alt= "bulbs" class="mx-auto img-fluid">
								</div>
							</div>
						</a>
						<a href="#" class="card-offer card-animation text-decoration-none text-white overflow-hidden rounded-3 d-block w-100 h-31">
							<div class="card border-0 rounded-3 p-4 bg-img-cover h-100" style="background-image: linear-gradient(100.06deg, rgba(0, 0, 0, 0.85) 34.55%, rgba(0, 0, 0, 0) 62.83%), url(assets/images/Offers/shock-absorber-atv-car-close-up.jpg);">
								<div class="card-body d-flex align-items-center p-0">							
									<h3 class="headline-3 text-800 lh-1 p-2 mb-0">
										<span class="text-uppercase d-block mb-3">midseason sale!</span>
										<span class="text-primary">Even to -70%</span>
									</h3>							
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>			
		</section>
		<section class="section-search pt-5 pb-5 mb-xl-5 d-none d-lg-block">
			<div class="container">
				<div class="row mb-5">
					<div class="col-12 text-center">
						<h2 class="headline-2 text-800 lh-1 text-uppercase mb-0">search what you need</h2>						
					</div>
				</div>
				<div class="row align-items-end mb-5 pb-xl-4">
					<div class="col-3">
						<p class="text-xs text-500 lh-1 text-uppercase mb-2 opacity-60">search</p>
						<input class="form-control form-control-gray form-control-xs rounded-1 px-3" type="text" aria-label="Search" placeholder="type a part name">
					</div>
					<div class="col-2">							
						<p class="text-xs text-500 lh-1 text-uppercase mb-2 opacity-60">year</p>
						<select class="select-beast select-beast-sm">
							<option value="1">2013</option>
							<option value="2">2014</option>
							<option value="3">2015</option>
							<option value="4">2016</option>
						</select>
					</div>
					<div class="col-2">							
						<p class="text-xs text-500 lh-1 text-uppercase mb-2 opacity-60">made</p>
						<select class="select-beast select-beast-sm">
							<option value="1">CAN-AM</option>
							<option value="2">Lorem</option>
							<option value="3">Ipsum</option>
							<option value="4">Dolor</option>
						</select>
					</div>
					<div class="col-2">							
						<p class="text-xs text-500 lh-1 text-uppercase mb-2 opacity-60">model</p>
						<select class="select-beast select-beast-sm">
							<option value="1">RENEGADE</option>
							<option value="2">Lorem</option>
							<option value="3">Ipsum</option>
							<option value="4">Dolor</option>
						</select>
					</div>
					<div class="col-3 d-flex justify-content-end">
						<a href="#" class="btn btn-primary w-75" data-bs-toggle="modal" data-bs-target="#searchModal">
							<span class="btn-text">search</span> 
						</a>
					</div>
				</div>
				<div class="row mb-5 searchCards">
					<div class="col-4 col-xxl-3 pt-5 mt-5 mb-4 d-flex">
						<div class="card card-product searchCard rounded-3 border-0 position-relative card-bg-dark pt-5 w-100">
							<img src="assets/images/Products/Helm_1.png" class="position-absolute top-0 start-50 translate-middle card-img mx-90  object-fit-contain" alt="" height="180">
							<div class="card-body mt-5 pt-md-5 pb-4 px-4">
								<h4 class="card-title headline-4 text-700 lh-1 mb-4 mt-4">Can-Am X1 Helment</h4>								
								<div class="d-flex justify-content-between align-items-center mb-3 mb-lg-2 pt-2">
									<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
									<p class="mb-0" role="button">
										<i class="icon-heart1 like-symbol text-xxxs d-inline-block align-middle"></i>
									</p>
								</div>
								<div class="d-flex justify-content-between align-items-end  mb-2 mb-lg-0">
									<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>
									<a href="single-product.php" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white  d-flex align-items-center">
										details 
										<i class="icon-arrow-right-3 ms-2 text-4xs"></i>
									</a>
								</div>									
							</div>
						</div>
					</div>
					<div class="col-4 col-xxl-3 pt-5 mt-5 mb-4 d-flex">
						<div class="card card-product searchCard rounded-3 border-0 position-relative card-bg-dark pt-5 w-100">
							<img src="assets/images/Products/Helm_1.png" class="position-absolute top-0 start-50 translate-middle card-img mx-90  object-fit-contain" alt="" height="180">
							<div class="card-body mt-5 pt-md-5 pb-4 px-4">
								<h4 class="card-title headline-4 text-700 lh-1 mb-4 mt-4">Can-Am X1 Helment</h4>								
								<div class="d-flex justify-content-between align-items-center mb-3 mb-lg-2 pt-2">
									<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
									<p class="mb-0" role="button">
										<i class="icon-heart1 like-symbol text-xxxs d-inline-block align-middle"></i>
									</p>
								</div>
								<div class="d-flex justify-content-between align-items-end  mb-2 mb-lg-0">
									<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>
									<a href="single-product.php" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white  d-flex align-items-center">
										details 
										<i class="icon-arrow-right-3 ms-2 text-4xs"></i>
									</a>
								</div>									
							</div>
						</div>
					</div>
					<div class="col-4 col-xxl-3 pt-5 mt-5 mb-4 d-flex">
						<div class="card card-product searchCard rounded-3 border-0 position-relative card-bg-dark pt-5 w-100">
							<img src="assets/images/Products/Helm_1.png" class="position-absolute top-0 start-50 translate-middle card-img mx-90  object-fit-contain" alt="" height="180">
							<div class="card-body mt-5 pt-md-5 pb-4 px-4">
								<h4 class="card-title headline-4 text-700 lh-1 mb-4 mt-4">Can-Am X1 Helment</h4>								
								<div class="d-flex justify-content-between align-items-center mb-3 mb-lg-2 pt-2">
									<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
									<p class="mb-0" role="button">
										<i class="icon-heart1 like-symbol text-xxxs d-inline-block align-middle"></i>
									</p>
								</div>
								<div class="d-flex justify-content-between align-items-end  mb-2 mb-lg-0">
									<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>
									<a href="single-product.php" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white  d-flex align-items-center">
										details 
										<i class="icon-arrow-right-3 ms-2 text-4xs"></i>
									</a>
								</div>									
							</div>
						</div>
					</div>
					<div class="col-4 col-xxl-3 pt-5 mt-5 mb-4 d-none d-xxl-flex">
						<div class="card card-product searchCard rounded-3 border-0 position-relative card-bg-dark pt-5 w-100">
							<img src="assets/images/Products/Helm_1.png" class="position-absolute top-0 start-50 translate-middle card-img mx-90  object-fit-contain" alt="" height="180">
							<div class="card-body mt-5 pt-md-5 pb-4 px-4">
								<h4 class="card-title headline-4 text-700 lh-1 mb-4 mt-4">Can-Am X1 Helment</h4>								
								<div class="d-flex justify-content-between align-items-center mb-3 mb-lg-2 pt-2">
									<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
									<p class="mb-0" role="button">
										<i class="icon-heart1 like-symbol text-xxxs d-inline-block align-middle"></i>
									</p>
								</div>
								<div class="d-flex justify-content-between align-items-end  mb-2 mb-lg-0">
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
				<div class="row justify-content-center">
					<div class="col-5 col-xxl-4">
						<a href="products-page.php" class="btn btn-primary btn-center w-100">
							<span class="flex-shrink-0">See all</span>
							&nbsp;<span class="" id="counterItem">132</span>&nbsp;results
						</a>
					</div>
				</div>				
			</div>
		</section>
		<section class="section-featured-category pt-xl-5 pb-5 mb-lg-5">
			<div class="container pt-3 py-lg-3">
				<div class="row justify-content-center justify-content-lg-start"> 
					<div class="col-12 col-md-8 col-lg-12 mb-5 pb-lg-2">
						<h2 class="headline-2 text-800 lh-1 text-uppercase mb-0 text-center text-xl-start">featured categories</h2>
					</div>
					<div class="col-12 col-md-10 col-lg-12 col-xl-6 mb-5 mb-lg-4">
						<div class="card featured-category-card border-0 rounded-3 h-100">
							<div class="row position-relative h-100">
								<div class="col-8 bg-45-right position-relative overflow-hidden h-100">
									<div class="bg-primary rounded-start p-4_5 h-100 d-flex align-items-start flex-column">
										<h5 class="headline-5 text-700 lh-1 text-uppercase">best atv's bikes</h5>
										<h3 class="headline-3 text-800 lh-1 text-uppercase w-75 mb-auto">front bumpers</h3>
										<a href="#" class="btn btn-black btn-xs col-10 col-md-8 col-lg-5 col-xl-7">
											<span class="btn-text">
												shop
												<span class="d-none d-sm-inline">now</span>												
											</span> 
										</a>
									</div>	
								</div>
								<div class="category-image col-6 position-absolute top-50 end-0 translate-middle-y me-4 me-md-5 me-xl-4 me-xxl-5 text-end">
									<img src="assets/images/Products/atv_bumper.png" class="flip-image-h img-fluid" alt="">
								</div>
							</div>																								
						</div>
					</div>
					<div class="col-12 col-md-10 col-lg-12 col-xl-6 mb-5 mb-lg-4">
						<div class="card featured-category-card border-0 rounded-3 h-100">
							<div class="row position-relative h-100">
								<div class="col-8 bg-45-right position-relative overflow-hidden h-100">
									<div class="bg-primary rounded-start p-4_5 h-100 d-flex align-items-start flex-column">
										<h5 class="headline-5 text-700 lh-1 text-uppercase">best atv's bikes</h5>
										<h3 class="headline-3 text-800 lh-1 text-uppercase w-75 mb-auto">lights</h3>
										<a href="#" class="btn btn-black btn-xs col-10 col-md-8 col-lg-5 col-xl-7">
											<span class="btn-text">
												shop
												<span class="d-none d-sm-inline">now</span>												
											</span>
										</a>
									</div>	
								</div>
								<div class="category-image col-6 position-absolute top-50 end-0 translate-middle-y me-4 me-md-5 me-xl-4 me-xxl-5 text-end">
									<img src="assets/images/Products/atv_lights.png" class="img-fluid" alt="">
								</div>
							</div>																								
						</div>
					</div>
					<div class="col-12 col-md-10 col-lg-12 col-xl-6 mb-5 mb-lg-4">
						<div class="card featured-category-card border-0 rounded-3 h-100">
							<div class="row position-relative h-100">
								<div class="col-8 bg-45-right position-relative overflow-hidden h-100">
									<div class=" bg-primary rounded-start p-4_5 h-100 d-flex align-items-start flex-column">
										<h5 class="headline-5 text-700 lh-1 text-uppercase">best atv's bikes</h5>
										<h3 class="headline-3 text-800 lh-1 text-uppercase mb-auto">mechanical parts</h3>
										<a href="#" class="btn btn-black btn-xs col-10 col-md-8 col-lg-5 col-xl-7">
											<span class="btn-text">
												shop
												<span class="d-none d-sm-inline">now</span>												
											</span>
										</a>
									</div>	
								</div>
								<div class="category-image col-6 position-absolute top-50 end-0 translate-middle-y me-4 me-md-5 me-xl-4 me-xxl-5 text-end">
									<img src="assets/images/Products/mechanical_parts.png" class="img-fluid" alt="">
								</div>
							</div>																								
						</div>
					</div>
					<div class="col-12 col-md-10 col-lg-12 col-xl-6 mb-5 mb-lg-4">
						<div class="card featured-category-card border-0 rounded-3 h-100">
							<div class="row position-relative h-100">
								<div class="col-8 bg-45-right position-relative overflow-hidden h-100">
									<div class=" bg-primary rounded-start p-4_5 h-100 d-flex align-items-start flex-column">
										<h5 class="headline-5 text-700 lh-1 text-uppercase">best atv's bikes</h5>
										<h3 class="headline-3 text-800 lh-1 text-uppercase w-75 mb-auto">front bumpers</h3>
										<a href="#" class="btn btn-black btn-xs col-10 col-md-8 col-lg-5 col-xl-7">
											<span class="btn-text">
												shop
												<span class="d-none d-sm-inline">now</span>												
											</span> 
										</a>
									</div>	
								</div>
								<div class="category-image col-6 position-absolute top-50 end-0 translate-middle-y me-4 me-md-5 me-xl-4 me-xxl-5 text-end">
									<img src="assets/images/Products/atv_bumper.png" class="flip-image-h img-fluid" alt="">
								</div>
							</div>																								
						</div>
					</div>
					<div class="col-6 col-xl-3 mb-4 mb-xl-0 d-none d-lg-block">
						<div class="card featured-category-card border-0 rounded-3 text-center h-100">
							<a href="#" class="text-decoration-none card-animation">
								<div class="card-img-top bg-primary d-flex justify-content-center align-items-center py-4_5">
									<img src="assets/images/Products/wheel.png" class="object-fit-contain w-75" height="138" alt="">
								</div>							
								<div class="card-body">									
									<h3 class="card-title headline-3 text-800 lh-1 text-uppercase text-dark">tires</h3>
									<h5 class="headline-5 text-700 lh-1 text-uppercase text-primary">
										shop now &#62;								
									</h5>									
								</div>
							</a>
						</div>
					</div>
					<div class="col-6 col-xl-3 mb-4 mb-xl-0 d-none d-lg-block">
						<div class="card border-0 rounded-3 text-center h-100">
							<a href="#" class="text-decoration-none card-animation">
								<div class="card-img-top bg-primary d-flex justify-content-center align-items-center py-4_5">
									<img src="assets/images/Products/exhaust_atv.png" class="object-fit-contain w-75" height="138" alt="">
								</div>							
								<div class="card-body">									
									<h3 class="card-title headline-3 text-800 lh-1 text-uppercase text-dark">exhausts</h3>
									<h5 class="headline-5 text-700 lh-1 text-uppercase text-primary">	
										shop now &#62;								
									</h5>									
								</div>
							</a>
						</div>
					</div>
					<div class="col-6 col-xl-3 d-none d-lg-block">
						<div class="card border-0 rounded-3 text-center h-100">
							<a href="#" class="text-decoration-none card-animation">
								<div class="card-img-top bg-primary d-flex justify-content-center align-items-center py-4_5">
									<img src="assets/images/Products/atv_audio.png" class="object-fit-contain w-75" height="138" alt="">
								</div>							
								<div class="card-body">									
									<h3 class="card-title headline-3 text-800 lh-1 text-uppercase text-dark">audio</h3>
									<h5 class="headline-5 text-700 lh-1 text-uppercase text-primary">	
										shop now &#62;								
									</h5>									
								</div>
							</a>
						</div>
					</div>
					<div class="col-6 col-xl-3 d-none d-lg-block">
						<div class="card border-0 rounded-3 text-center h-100">
							<a href="#" class="text-decoration-none card-animation">
								<div class="card-img-top bg-primary d-flex justify-content-center align-items-center py-4_5">
									<img src="assets/images/Logo/ORV-HeadQuarters.svg" class="object-fit-contain w-75" height="138" alt="">
								</div>							
								<div class="card-body">									
									<h3 class="card-title headline-3 text-800 lh-1 text-uppercase text-dark">view all</h3>
									<h5 class="headline-5 text-700 lh-1 text-uppercase text-primary">	
										shop now &#62;								
									</h5>									
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="row justify-content-center d-flex d-lg-none">
					<div class="col-10 col-sm-8 col-md-6">
						<a href="#" class="btn btn-primary btn-lg w-100">
							<span class="btn-text">view specials</span> 
						</a>
					</div>
				</div>
			</div>
		</section>
		<section class="section-post pt-5 pb-5 mb-md-5 mb-lg-4">
			<div class="container pb-xl-3">
				<div class="row justify-content-center justify-content-lg-start">
					<div class="col-12 mb-5 pb-lg-2">
						<h2 class="headline-2 text-800 lh-1 text-uppercase mb-0 text-center text-lg-start">newest posts</h2>
					</div>
				</div>
				<div class="row pb-lg-4 mb-md-2 justify-content-center">
					<div class="col-12 col-md-10 col-lg-6 col-xl-4 mb-5 mb-lg-0">
						<div class="card border-0 rounded-3 card-bg-dark ">							
							<img src="assets/images/Blog-images/post-1.png" class="card-img-top object-fit-cover border-bottom border-2 border-dark" height="324" alt="">							
							<div class="card-body p-4 p-sm-5 p-lg-4 my-lg-2">
								<h4 class="headline-4 text-700 lh-1 mb-4 mt-xxl-3">Trip to forest with new ATV</h4>
								<p class="text-xs mb-4 text-truncate_line-3 lh-1_1">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
								<a href="post.php" class="btn btn-link btn-link-primary btn-center w-100">
									<span class="btn-text">read more</span> 
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-10 col-lg-6 col-xl-4">
						<div class="card border-0 rounded-3 card-bg-dark">							
							<img src="assets/images/Blog-images/post-2.png" class="card-img-top object-fit-cover border-bottom border-2 border-dark" height="324" alt="">							
							<div class="card-body p-4 p-sm-5 p-lg-4 my-lg-2">
								<h4 class="headline-4 text-700 lh-1 mb-4 mt-xxl-3">Trip to forest with new ATV</h4>
								<p class="text-xs mb-4 text-truncate_line-3 lh-1_1">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
								<a href="post.php" class="btn btn-link btn-link-primary btn-center w-100">
									<span class="btn-text">read more</span> 
								</a>
							</div>
						</div>
					</div>
					<div class="col-4 d-none d-xl-block">
						<div class="card border-0 rounded-3 card-bg-dark">							
					 		<img src="assets/images/Blog-images/post-3.png" class="card-img-top object-fit-cover border-bottom border-2 border-dark" height="324" alt="">
							 <div class="card-body p-4 p-sm-5 p-lg-4 my-lg-2">
								<h4 class="headline-4 text-700 lh-1 mb-4 mt-xxl-3">Trip to forest with new ATV</h4>
								<p class="text-xs mb-4 text-truncate_line-3 lh-1_1">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
								<a href="post.php" class="btn btn-link btn-link-primary btn-center w-100">
									<span class="btn-text">read more</span> 
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center mb-xl-3 mb-xxl-0 d-none d-lg-flex">
					<div class="col-4 col-xl-3">
						<a href="blog.php" class="btn btn-black btn-xl w-100">
							<span class="btn-text">see more</span> 
						</a>
					</div>
				</div>
			</div>
		</section>
		<section class="section-newsletter bg-primary py-5">
			<div class="container pt-lg-1 pb-lg-2 pb-xl-3">
				<div class="row align-items-center justify-content-center justify-content-sm-start text-center text-sm-start">
					<div class="col-12 mb-4 mb-md-3 mb-xl-5">
						<h2 class="headline-2 text-800 lh-1 text-uppercase mb-0">get - 5% <span class="d-lg-none d-inline-block">discount</span> <span class="d-none d-lg-inline">on your first order!</span></h2>
					</div>
					<div class="col-12 col-lg-5 col-xxl-6">
						<p class="text-xl text-xl-down text-700 lh-1 pb-2 pb-lg-0 mb-4 mb-lg-3">Sing up to our newsletter and get a discount code on your first order!</p>
					</div>
					<div class="col-10 col-sm-7 col-lg-4 mb-4 mb-sm-0">
						<input type="email" class="form-control form-control-lg" placeholder="enter your email...">
					</div>
					<div class="col-10 col-sm-5 col-lg-3 col-xxl-2">
						<a href="#" class="btn btn-black w-100">
							<span class="btn-text">get a code</span> 
						</a>
					</div>
				</div>
			</div>
		</section>		
	</main>

	<?php include './src/footer.php';?>	
	<?php include './src/navbar-offcanvas-chat.php';?>
    <?php include './src/navbar-offcanvas-cart.php';?>
    <?php include './src/navbar-offcanvas-user-panel.php';?>
    <?php include './src/navbar-modal.php';?>
    <?php include './src/modal-search.php';?>

	<!-- Bootstrap JS -->	
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.bundle.min.js" async></script>	
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
