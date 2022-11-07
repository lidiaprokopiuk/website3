<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ORV HeadQuarters - My Liked Parts</title>
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
<body class="bg-dark bg-noise text-white">
	<header>
		<a href="my-garage.php" class="mobile-navbar d-block d-lg-none bg-gradient-dark border-bottom border-1 border-white border-opacity-05 rounded-bottom text-primary text-md text-600 lh-sm text-center text-decoration-none p-4">
			<i class="icon-arrow-left-2 me-2"></i>
			BACK TO MY GARAGE
		</a>
		<?php include './src/navbar.php' ?>
	</header>
	<main>
		<section class="my-favorites mt-4 mt-lg-0 mb-5 pb-3 pb-xl-5">
			<div class="container pb-xl-5 mb-xl-3">
				<div class="row justify-content-center">
					<div class="col-12 col-xl-10 mb-4 pb-2">
						<a href="my-garage.php" class="text-xs text-700 lh-1 text-uppercase text-primary text-decoration-none d-none d-lg-flex align-items-center">
							<i class="icon-arrow-left-2 me-2"></i>	
							BACK TO MY GARAGE
						</a>
					</div>
					
					<div class="col-12 col-xl-10 mb-5">
						<h2 class="headline-2 text-800 lh-1 text-uppercase mb-4 text-center text-sm-start">my parts</h2>
						<div class="d-sm-flex justify-content-between">
							<p class="favorites-subtitle headline-4 headline-lg-4 text-700 lh-1 mb-0 text-center text-sm-start">All liked parts</p>
							<div class="d-flex align-items-center justify-content-center justify-content-sm-end mt-4 mt-sm-0">
								<i class="icon-filter me-2"></i>
								<p class="text-xxxs text-700 lh-1 text-uppercase mb-0 sort-list_text">
									SORT BY: 
									<!-- <span class="text-600">RECENTLY ADDED</span> -->
								</p>
								<select class="select-beast liked-sort text-uppercase text-600 ms-2">
									<option value="from cheapest" data-sort="price">from cheapest</option>
									<option value="most expensive" data-sort="price">most expensive</option>						
									<option value="A-Z name" data-sort="name">A-Z name</option>	
									<option value="Z-A name" data-sort="name">Z-A name</option>	
								</select>
							</div>
						</div>	
					</div>
					<div class="col-12 col-xl-10">
						<div class="row row-cols-3 mb-xl-5 justify-content-center justify-content-md-start custom-grid">
							<div class="col-12 col-sm-9 col-md-6 col-lg-4 custom-col pt-5 mt-5 mb-5 d-flex d-sm-block d-xxl-flex justify-content-center">
								<div class="card card-product searchCard rounded-3 border-0 position-relative card-bg-dark pt-5">
									<img src="assets/images/Products/air_filter.png" class="position-absolute top-0 start-50 translate-middle card-img mx-75 object-fit-contain" alt="" height="180">
									<div class="card-body mt-5 pt-5 pb-4 px-4">
										<h4 class="card-title headline-4 text-700 lh-1 mb-4 mt-4">Air Filter</h4>								
										<div class="d-flex justify-content-between mb-1 pt-2">
											<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
											<p class="mb-0" role="button">
												<i class="icon-heart1 like-symbol text-xxxs"></i>
											</p>
											
										</div>
										<div class="d-flex justify-content-between align-items-end  mb-2 mb-lg-0">
											<p class="text-bebas text-xl lh-1 mb-0">$250.00</p>
											<a href="single-product.php" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white mb-0 d-flex align-items-center">
												details 
												<i class="icon-arrow-right-3 text-4xs ms-1"></i>
											</a>
										</div>									
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-9 col-md-6 col-lg-4 custom-col pt-5 mt-5 mb-5 d-flex d-sm-block d-xxl-flex justify-content-center">
								<div class="card card-product searchCard rounded-3 border-0 position-relative card-bg-dark pt-5">
									<img src="assets/images/Products/belt_engine.png" class="position-absolute top-0 start-50 translate-middle card-img mx-75 object-fit-contain" alt="" height="180">
									<div class="card-body mt-5 pt-5 pb-4 px-4">
										<h4 class="card-title headline-4 text-700 lh-1 mb-4 mt-4">Belt Engine</h4>				
										<div class="d-flex justify-content-between mb-1 pt-2">
											<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
											<p class="mb-0" role="button">
												<i class="icon-heart1 like-symbol text-xxxs"></i>
											</p>											
										</div>
										<div class="d-flex justify-content-between align-items-end  mb-2 mb-lg-0">
											<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>
											<a href="single-product.php" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white mb-0 d-flex align-items-center">
												details 
												<i class="icon-arrow-right-3 text-4xs ms-1"></i>
											</a>
										</div>									
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-9 col-md-6 col-lg-4 custom-col pt-5 mt-5 mb-5 d-flex d-sm-block d-xxl-flex justify-content-center">
								<div class="card card-product searchCard rounded-3 border-0 position-relative card-bg-dark pt-5">
									<img src="assets/images/Products/Helm_1.png" class="position-absolute top-0 start-50 translate-middle card-img mx-75 object-fit-contain" alt="" height="180">
									<div class="card-body mt-5 pt-5 pb-4 px-4">
										<h4 class="card-title headline-4 text-700 lh-1 mb-4 mt-4">Can-Am X1 Helment</h4>								
										<div class="d-flex justify-content-between mb-1 pt-2">
											<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
											<p class="mb-0" role="button">
												<i class="icon-heart1 like-symbol text-xxxs"></i>
											</p>
											
										</div>
										<div class="d-flex justify-content-between align-items-end  mb-2 mb-lg-0">
											<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>
											<a href="single-product.php" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white mb-0 d-flex align-items-center">
												details 
												<i class="icon-arrow-right-3 text-4xs ms-1"></i>	
											</a>
										</div>									
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-9 col-md-6 col-lg-4 custom-col pt-5 mt-5 mb-5 d-flex d-sm-block d-xxl-flex justify-content-center">
								<div class="card card-product searchCard rounded-3 border-0 position-relative card-bg-dark pt-5">
									<img src="assets/images/Products/Helm_2.png" class="position-absolute top-0 start-50 translate-middle card-img mx-75 object-fit-contain" alt="" height="180">
									<div class="card-body mt-5 pt-5 pb-4 px-4">
										<h4 class="card-title headline-4 text-700 lh-1 mb-4 mt-4">Can-Am X2 Helment</h4>								
										<div class="d-flex justify-content-between mb-1 pt-2">
											<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
											<p class="mb-0" role="button">
												<i class="icon-heart1 like-symbol text-xxxs"></i>
											</p>
											
										</div>
										<div class="d-flex justify-content-between align-items-end  mb-2 mb-lg-0">
											<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>
											<a href="single-product.php" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white mb-0">
												details 
												<i class="icon-arrow-right-3 text-4xs ms-1"></i>										
											</a>
										</div>									
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-9 col-md-6 col-lg-4 custom-col pt-5 mt-5 mb-5 d-flex d-sm-block d-xxl-flex justify-content-center">
								<div class="card card-product searchCard rounded-3 border-0 position-relative card-bg-dark pt-5">
									<img src="assets/images/Products/wheel.png" class="position-absolute top-0 start-50 translate-middle card-img mx-75 object-fit-contain" alt="" height="180">
									<div class="card-body mt-5 pt-5 pb-4 px-4">
										<h4 class="card-title headline-4 text-700 lh-1 mb-4 mt-4">23’ Cross Wheels 1221</h4>								
										<div class="d-flex justify-content-between mb-1 pt-2">
											<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
											<p class="mb-0" role="button">
												<i class="icon-heart1 like-symbol text-xxxs"></i>
											</p>
											
										</div>
										<div class="d-flex justify-content-between align-items-end  mb-2 mb-lg-0">
											<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>
											<a href="single-product.php" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white mb-0">
												details 
												<i class="icon-arrow-right-3 text-4xs ms-1"></i>										
											</a>
										</div>									
									</div>
								</div>
							</div>	
							<div class="col-12 col-sm-9 col-md-6 col-lg-4 custom-col pt-5 mt-5 mb-5 d-flex d-sm-block d-xxl-flex justify-content-center">
								<div class="card card-product searchCard rounded-3 border-0 position-relative card-bg-dark pt-5">
									<img src="assets/images/Products/air_filter.png" class="position-absolute top-0 start-50 translate-middle card-img mx-75 object-fit-contain" alt="" height="180">
									<div class="card-body mt-5 pt-5 pb-4 px-4">
										<h4 class="card-title headline-4 text-700 lh-1 mb-4 mt-4">Air Filter</h4>								
										<div class="d-flex justify-content-between mb-1 pt-2">
											<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
											<p class="mb-0" role="button">
												<i class="icon-heart1 like-symbol text-xxxs"></i>
											</p>
											
										</div>
										<div class="d-flex justify-content-between align-items-end  mb-2 mb-lg-0">
											<p class="text-bebas text-xl lh-1 mb-0">$250.00</p>
											<a href="single-product.php" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white mb-0 d-flex align-items-center">
												details 
												<i class="icon-arrow-right-3 text-4xs ms-1"></i>
											</a>
										</div>									
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-9 col-md-6 col-lg-4 custom-col pt-5 mt-5 mb-5 d-flex d-sm-block d-xxl-flex justify-content-center">
								<div class="card card-product searchCard rounded-3 border-0 position-relative card-bg-dark pt-5">
									<img src="assets/images/Products/belt_engine.png" class="position-absolute top-0 start-50 translate-middle card-img mx-75 object-fit-contain" alt="" height="180">
									<div class="card-body mt-5 pt-5 pb-4 px-4">
										<h4 class="card-title headline-4 text-700 lh-1 mb-4 mt-4">Belt Engine</h4>								
										<div class="d-flex justify-content-between mb-1 pt-2">
											<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
											<p class="mb-0" role="button">
												<i class="icon-heart1 like-symbol text-xxxs"></i>
											</p>
											
										</div>
										<div class="d-flex justify-content-between align-items-end  mb-2 mb-lg-0">
											<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>
											<a href="single-product.php" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white mb-0 d-flex align-items-center">
												details 
												<i class="icon-arrow-right-3 text-4xs ms-1"></i>											
											</a>
										</div>									
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-9 col-md-6 col-lg-4 custom-col pt-5 mt-5 mb-5 d-flex d-sm-block d-xxl-flex justify-content-center">
								<div class="card card-product searchCard rounded-3 border-0 position-relative card-bg-dark pt-5">
									<img src="assets/images/Products/Helm_1.png" class="position-absolute top-0 start-50 translate-middle card-img mx-75 object-fit-contain" alt="" height="180">
									<div class="card-body mt-5 pt-5 pb-4 px-4">
										<h4 class="card-title headline-4 text-700 lh-1 mb-4 mt-4">Can-Am X1 Helment</h4>								
										<div class="d-flex justify-content-between mb-1 pt-2">
											<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
											<p class="mb-0" role="button">
												<i class="icon-heart1 like-symbol text-xxxs"></i>
											</p>											
										</div>
										<div class="d-flex justify-content-between align-items-end  mb-2 mb-lg-0">
											<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>
											<a href="single-product.php" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white mb-0 d-flex align-items-center">
												details 
												<i class="icon-arrow-right-3 text-4xs ms-1"></i>
											</a>
										</div>									
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-9 col-md-6 col-lg-4 custom-col pt-5 mt-5 mb-5 d-flex d-sm-block d-xxl-flex justify-content-center">
								<div class="card card-product searchCard rounded-3 border-0 position-relative card-bg-dark pt-5">
									<img src="assets/images/Products/Helm_2.png" class="position-absolute top-0 start-50 translate-middle card-img mx-75 object-fit-contain" alt="" height="180">
									<div class="card-body mt-5 pt-5 pb-4 px-4">
										<h4 class="card-title headline-4 text-700 lh-1 mb-4 mt-4">Can-Am X2 Helment</h4>		
										<div class="d-flex justify-content-between mb-1 pt-2">
											<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
											<p class="mb-0" role="button">
												<i class="icon-heart1 like-symbol text-xxxs"></i>
											</p>											
										</div>
										<div class="d-flex justify-content-between align-items-end  mb-2 mb-lg-0">
											<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>
											<a href="single-product.php" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white mb-0">
												details 
												<i class="icon-arrow-right-3 text-4xs ms-1"></i>			
											</a>
										</div>									
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-9 col-md-6 col-lg-4 custom-col pt-5 mt-5 mb-5 d-flex d-sm-block d-xxl-flex justify-content-center">
								<div class="card card-product searchCard rounded-3 border-0 position-relative card-bg-dark pt-5">
									<img src="assets/images/Products/wheel.png" class="position-absolute top-0 start-50 translate-middle card-img mx-75 object-fit-contain" alt="" height="180">
									<div class="card-body mt-5 pt-5 pb-4 px-4">
										<h4 class="card-title headline-4 text-700 lh-1 mb-4 mt-4">23’ Cross Wheels 1221</h4>		
										<div class="d-flex justify-content-between mb-1 pt-2">
											<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
											<p class="mb-0" role="button">
												<i class="icon-heart1 like-symbol text-xxxs"></i>
											</p>										
										</div>
										<div class="d-flex justify-content-between align-items-end  mb-2 mb-lg-0">
											<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>
											<a href="single-product.php" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white mb-0">
												details 
												<i class="icon-arrow-right-3 text-4xs ms-1"></i>		
											</a>
										</div>									
									</div>
								</div>
							</div>	
							<div class="col-12 col-sm-9 col-md-6 col-lg-4 custom-col pt-5 mt-5 mb-5 d-flex d-sm-block d-xxl-flex justify-content-center">
								<div class="card card-product searchCard rounded-3 border-0 position-relative card-bg-dark pt-5">
									<img src="assets/images/Products/wheel.png" class="position-absolute top-0 start-50 translate-middle card-img mx-75 object-fit-contain" alt="" height="180">
									<div class="card-body mt-5 pt-5 pb-4 px-4">
										<h4 class="card-title headline-4 text-700 lh-1 mb-4 mt-4">23’ Cross Wheels 1221</h4>		
										<div class="d-flex justify-content-between mb-1 pt-2">
											<p class="text-xxs lh-1 text-700 text-uppercase text-primary mb-0">fix price</p>
											<p class="mb-0" role="button">
												<i class="icon-heart1 like-symbol text-xxxs"></i>
											</p>										
										</div>
										<div class="d-flex justify-content-between align-items-end  mb-2 mb-lg-0">
											<p class="text-bebas text-xl lh-1 mb-0">$500.00</p>
											<a href="single-product.php" class="btn-link text-xxs lh-1 text-500 text-uppercase text-decoration-none text-white mb-0">
												details 
												<i class="icon-arrow-right-3 text-4xs ms-1"></i>		
											</a>
										</div>									
									</div>
								</div>
							</div>			 
						</div>
					</div>
					<div class="col-11 col-sm-9 col-md-6 col-lg-4 col-xl-3 pt-xl-4">
						<a href="my-garage.php" class="btn btn-primary btn-center w-100">BACK TO MY GARAGE</a>
					</div>
				</div>				
			</div>
		</section>
		
		<?php include './src/section-banner.php' ?>
			
	</main>

	<?php include './src/footer.php' ?>
	<?php include './src/navbar-offcanvas-chat.php' ?>
	<?php include './src/navbar-offcanvas-cart.php' ?>
	<?php include './src/navbar-offcanvas-user-panel.php' ?>
	<?php include './src/navbar-modal.php' ?>
	

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
