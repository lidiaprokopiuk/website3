<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ORV HeadQuarters - Cart Page</title>
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
<body class="cart-page bg-dark bg-noise text-white">
	<header>
		
		<?php include './src/navbar.php';?>			
	</header>

	<main>
        <section class="section-cart-tabs">
    		<div class="container">
    			<div class="row">
    				<ul class="nav nav-pills nav-justified mb-5 card-bg-dark rounded-3 pe-0 d-none d-lg-flex" id="pills-tab" role="tablist">
    					<li class="nav-item text-xxs lh-1 text-center" role="presentation">
    						<button class="nav-link p-4 text-white text-uppercase text-opacity-80 active" id="pills-cart-tab" data-bs-toggle="pill" data-bs-target="#pills-cart" type="button" role="tab" aria-controls="pills-cart" aria-selected="true">Cart</button>
    					</li>
    					<li class="nav-item text-xxs lh-1 text-center tab-disabled" role="presentation">
    						<button class="nav-link p-4 text-white text-uppercase text-opacity-80" id="pills-user-details-tab" data-bs-toggle="pill" data-bs-target="#pills-user-details" type="button" role="tab" aria-controls="pills-user-details" aria-selected="false">USER DETAILS</button>
    					</li>
    					<li class="nav-item text-xxs lh-1 text-center tab-disabled" role="presentation">
    						<button class="nav-link p-4 text-white text-uppercase text-opacity-80" id="pills-shipping-tab" data-bs-toggle="pill" data-bs-target="#pills-shipping" type="button" role="tab" aria-controls="pills-shipping" aria-selected="false">shipping</button>
    					</li>
    					<li class="nav-item text-xxs lh-1 text-center tab-disabled" role="presentation">
    						<button class="nav-link p-4 text-white text-uppercase text-opacity-80" id="pills-payment-tab" data-bs-toggle="pill" data-bs-target="#pills-payment" type="button" role="tab" aria-controls="pills-payment" aria-selected="false">PAYMENT</button>
    					</li>
    					<li class="nav-item text-xxs lh-1 text-center tab-disabled" role="presentation">
    						<button class="nav-link p-4 text-white text-uppercase text-opacity-80" id="pills-summary-tab" data-bs-toggle="pill" data-bs-target="#pills-summary" type="button" role="tab" aria-controls="pills-summary" aria-selected="false">SUMMARY & PAY</button>
    					</li>
    				</ul>

    				
    				<div class="tab-content mb-5 pb-5 pb-lg-1" id="pills-tabContent">
    					<div class="tab-pane fade show active cart-container" id="pills-cart" role="tabpanel" aria-labelledby="pills-cart-tab" tabindex="0">
    						<div class="row justify-content-center pb-5 pb-lg-0 mb-5 mb-lg-0">
    							<div class="col-12 col-md-10 col-lg-8">
    								<a href="products-page.php" class="text-uppercase d-none d-lg-block text-primary text-xxs text-600 lh-sm text-decoration-none mb-4 pb-1">
    									<i class="icon-arrow-left me-2"></i>
    									CONTINUE SHOPPING
    								</a>
									<a href="products-page.php" class="mobile-navbar text-uppercase position-absolute top-0 start-0 w-100 d-block d-lg-none bg-gradient-dark border-bottom border-1 border-white border-opacity-05 rounded-bottom text-primary text-md text-600 lh-sm text-center text-decoration-none p-4">
										<i class="bi bi-arrow-left me-2"></i>
										CONTINUE SHOPPING
									</a>
    								<h2 class="headline-2 lh-1 text-uppercase text-800 mb-4 mb-lg-5 text-center text-lg-start pt-5 pt-lg-0 mt-5 mt-lg-0">YOUR CART</h2>

    								<div class="text-md lh-sm d-flex justify-content-between d-lg-none w-100 mb-5 border-bottom border-white">
    									<div class="text-start text-400 d-inline-flex text-capitalize">
    										<span class="productsNumber">Items</span>
    									</div>
    									<button class="btn-line text-end text-400 d-inline-flex btn-edit text-white">Edit</button>
    								</div>

    								<table class="d-block d-lg-table table text-white mb-0">
    									<thead>
    										<tr class="text-uppercase text-xxs lh-1 d-none d-lg-table-row">
												
												<th scope="col" class="d-none"></th>
    											<th scope="col" class="text-start text-400 pb-4">item</th>
    											<th scope="col" class="text-center text-400 pb-4">unit price</th>	
    											<th scope="col" class="text-center text-400 pb-4">quantity</th>
    											<th scope="col" class="text-center text-400 pb-4">final price</th>
    											<th scope="col" class="text-center text-400 pb-4">remove</th>
    										</tr>										
    									</thead>
    									<tbody class="text-xs text-700 lh-1 align-middle">
    										<tr class="productItem position-relative mb-5 mb-lg-0 d-block d-lg-table-row px-3 px-sm-0">
    											
    											<td class="d-none d-sm-flex align-items-center d-lg-none cell-img ms-4 me-4 me-md-5 p-0">
    												<img src="assets/images/Products/air_filter.png" alt="" class="d-inline-flex d-lg-none img-fluid">
    											</td>
    											
    											<td class="text-start mb-4 mb-sm-2 mb-lg-0 pt-4 pb-0 py-lg-3 d-inline-block d-lg-table-cell cell-item">
    												<img src="assets/images/Products/air_filter.png" alt="" class="me-2 d-inline d-sm-none d-xl-inline boxSize-md h-auto">
    												<span class=""></span>Air Engine Filter
    											</td>
    											<td class="text-lg-center mb-4 mb-lg-0 py-0 py-lg-3 d-inline-block d-lg-table-cell cell-price">
    												<span class="text-white text-400 text-opacity-80 d-inline d-lg-none text-uppercase">UNIT PRICE </span>
    												<span> $</span>
													<span class="unitPrice">500.00</span>
    											</td>
    											<td class="text-end text-lg-center me-4 me-sm-0 mb-4 mb-lg-0 py-0 py-lg-3 d-inline-flex d-lg-table-cell cell-quantity  justify-content-end align-items-center">												
    												<button class="text-white px-0 text-center counterCardDown d-flex d-lg-inline-block boxSize-xs rounded-1 justify-content-center align-items-center me-3 me-lg-0">
														<i class="icon-arrow-left-2 text-4xs d-lg-none d-inline"></i>
    													<i class="icon-minus d-none d-lg-inline"></i>
    												</button>
    												<p class="text-md text-700 mb-0 productNumber text-center d-inline-block mx-md-2">1</p>
    												<button class="text-white px-0 text-center counterCardUp d-flex d-lg-inline-block boxSize-xs rounded-1 justify-content-center align-items-center ms-3 ms-lg-0">
														<i class="icon-arrow-right-3 text-4xs d-lg-none d-inline"></i>
    													<i class="icon-add d-none d-lg-inline"></i>
    												</button>
    											</td>
    											<td class="text-lg-center mt-sm-3 mt-lg-0 pb-4 pt-0 py-lg-3 d-inline-flex align-items-center d-lg-table-cell cell-final-price">
    												<span class="text-white text-400 d-inline d-lg-none text-uppercase me-auto me-sm-4">FINAL PRICE </span>
    												$<span class="totalCost">500.00</span>
    											</td>
    											<td class="text-center py-lg-3">
    												<button class="text-white removeButton d-none d-lg-flex">
    													<i class="icon-slash"></i>
    												</button>	
													<button class="btn-link text-white text-decoration-none removeButton  position-absolute w-100 h-100 top-0 start-0 bg-black bg-opacity-80 d-lg-none d-flex justify-content-center align-items-center">														
														<i class="icon-trash"></i>
														Delete
													</button>											
    											</td>
    										</tr>

    										<tr class="productItem position-relative mb-5 mb-lg-0 d-block d-lg-table-row px-3 px-sm-0">

    											<td class="d-none d-sm-flex align-items-center d-lg-none cell-img ms-4 me-4 me-md-5 p-0">
    												<img src="assets/images/Products/belt_engine.png" alt="" class="d-inline-flex  d-lg-none img-fluid">
    											</td>

    											<td class="text-start mb-4 mb-sm-2 mb-lg-0 pt-4 pb-0 py-lg-3 d-inline-block d-lg-table-cell cell-item">
    												<img src="assets/images/Products/belt_engine.png" alt="" class="me-2 d-inline d-sm-none d-xl-inline boxSize-md h-auto">
    												Engine Belt
    											</td>
    											<td class="text-lg-center mb-4 mb-lg-0 py-0 py-lg-3 d-inline-block d-lg-table-cell cell-price">
    												<span class="text-white text-400 text-opacity-80 d-inline d-lg-none text-uppercase">UNIT PRICE </span>
    												<span> $</span>
													<span class="unitPrice">500.00</span>
    											</td>
    											<td class="text-end text-lg-center me-4 me-sm-0 mb-4 mb-lg-0 py-0 py-lg-3 d-inline-flex d-lg-table-cell cell-quantity  justify-content-end align-items-center">												
    												<button class="text-white px-0 text-center counterCardDown d-flex d-lg-inline-block boxSize-xs rounded-1 justify-content-center align-items-center me-3 me-lg-0">
														<i class="icon-arrow-left-2 text-4xs d-lg-none d-inline"></i>
    													<i class="icon-minus d-none d-lg-inline"></i>
    												</button>
    												<p class="text-md text-700 mb-0 productNumber text-center d-inline-block mx-md-2">1</p>
    												<button class="text-white px-0 text-center counterCardUp d-flex d-lg-inline-block boxSize-xs rounded-1 justify-content-center align-items-center ms-3 ms-lg-0">
														<i class="icon-arrow-right-3 text-4xs d-lg-none d-inline"></i>
    													<i class="icon-add d-none d-lg-inline"></i>
    												</button>
    											</td>
    											<td class="text-lg-center mt-sm-3 mt-lg-0 pb-4 pt-0 py-lg-3 d-inline-flex align-items-center d-lg-table-cell cell-final-price">
    												<span class="text-white text-400 d-inline d-lg-none text-uppercase me-4">FINAL PRICE </span>
    												$<span class="totalCost">100.00</span>
    											</td>
    											<td class="text-center py-lg-3">
    												<button class="text-white removeButton d-none d-lg-flex">
    													<i class="icon-slash"></i>
    												</button>	
													<button class="btn-link text-white text-decoration-none removeButton  position-absolute w-100 h-100 top-0 start-0 bg-black bg-opacity-80 d-lg-none d-flex justify-content-center align-items-center">														
														<i class="icon-trash"></i>
														Delete
													</button>											
    											</td>
    										</tr>
    										<tr class="productItem position-relative mb-5 mb-lg-0 d-block d-lg-table-row px-3 px-sm-0">

    											<td class="d-none d-sm-flex align-items-center d-lg-none cell-img ms-4 me-4 me-md-5 p-0">
    												<img src="assets/images/Products/badge.jpg" alt="" class="d-inline-flex  d-lg-none img-fluid">
    											</td>

    											<td class="text-start mb-4 mb-sm-2 mb-lg-0 pt-4 pb-0 py-lg-3 d-inline-block d-lg-table-cell cell-item">
    												<img src="assets/images/Products/badge.jpg" alt="" class="me-2 d-inline d-sm-none d-xl-inline boxSize-md h-auto">
    												ORV Club Badge
    											</td>
    											<td class="text-lg-center mb-4 mb-lg-0 py-0 py-lg-3 d-inline-block d-lg-table-cell cell-price">
    												<span class="text-white text-400 text-opacity-80 d-inline d-lg-none text-uppercase">UNIT PRICE </span>
    												<span> $</span>
													<span class="unitPrice">500.00</span>
    											</td>
    											<td class="text-end text-lg-center me-4 me-sm-0 mb-4 mb-lg-0 py-0 py-lg-3 d-inline-flex d-lg-table-cell cell-quantity  justify-content-end align-items-center">												
    												<button class="btn-disabled text-white px-0 text-center counterCardDown d-flex d-lg-inline-block boxSize-xs rounded-1 justify-content-center align-items-center me-3 me-lg-0">
														<i class="icon-arrow-left-2 text-4xs d-lg-none d-inline"></i>
    													<i class="icon-minus d-none d-lg-inline"></i>
    												</button>
    												<p class="text-md text-700 mb-0 productNumber text-center d-inline-block mx-md-2">1</p>
    												<button class="btn-disabled text-white px-0 text-center counterCardUp d-flex d-lg-inline-block boxSize-xs rounded-1 justify-content-center align-items-center ms-3 ms-lg-0">
														<i class="icon-arrow-right-3 text-4xs d-lg-none d-inline"></i>
    													<i class="icon-add d-none d-lg-inline"></i>
    												</button>
    											</td>
    											<td class="text-lg-center mt-sm-3 mt-lg-0 pb-4 pt-0 py-lg-3 d-inline-flex align-items-center d-lg-table-cell cell-final-price">
    												<span class="text-white text-400 d-inline d-lg-none text-uppercase me-4">FINAL PRICE </span>
    												<span class="totalCost">FREE</span>
    											</td>
    											<td class="text-center py-lg-3">
    												<button class="text-white removeButton d-none d-lg-flex">
    													<i class="icon-slash"></i>
    												</button>	
													<button class="btn-link text-white text-decoration-none removeButton  position-absolute w-100 h-100 top-0 start-0 bg-black bg-opacity-80 d-lg-none d-flex justify-content-center align-items-center">														
														<i class="icon-trash"></i>
														Delete
													</button>											
    											</td>
    										</tr>
    										<tr class="productItem position-relative mb-5 mb-lg-0 d-block d-lg-table-row px-3 px-sm-0">

    											<td class="d-none d-sm-flex align-items-center d-lg-none cell-img ms-4 me-4 me-md-5 p-0">
    												<img src="assets/images/Products/badge.jpg" alt="" class="d-inline-flex  d-lg-none img-fluid">
    											</td>

    											<td class="text-start mb-4 mb-sm-2 mb-lg-0 pt-4 pb-0 py-lg-3 d-inline-block d-lg-table-cell cell-item">
    												<img src="assets/images/Products/badge.jpg" alt="" class="me-2 d-inline d-sm-none d-xl-inline boxSize-md h-auto">
    												ORV Club Badge
    											</td>
    											<td class="text-lg-center mb-4 mb-lg-0 py-0 py-lg-3 d-inline-block d-lg-table-cell cell-price">
    												<span class="text-white text-400 text-opacity-80 d-inline d-lg-none text-uppercase">UNIT PRICE </span>
    												<span> $</span>
													<span class="unitPrice">500.00</span>
    											</td>
    											<td class="text-end text-lg-center me-4 me-sm-0 mb-4 mb-lg-0 py-0 py-lg-3 d-inline-flex d-lg-table-cell cell-quantity  justify-content-end align-items-center">												
    												<button class="btn-disabled text-white px-0 text-center counterCardDown d-flex d-lg-inline-block boxSize-xs rounded-1 justify-content-center align-items-center me-3 me-lg-0">
														<i class="icon-arrow-left-2 text-4xs d-lg-none d-inline"></i>
    													<i class="icon-minus d-none d-lg-inline"></i>
    												</button>
    												<p class="text-md text-700 mb-0 productNumber text-center d-inline-block mx-md-2">1</p>
    												<button class="btn-disabled text-white px-0 text-center counterCardUp d-flex d-lg-inline-block boxSize-xs rounded-1 justify-content-center align-items-center ms-3 ms-lg-0">
														<i class="icon-arrow-right-3 text-4xs d-lg-none d-inline"></i>
    													<i class="icon-add d-none d-lg-inline"></i>
    												</button>
    											</td>
    											<td class="text-lg-center mt-sm-3 mt-lg-0 pb-4 pt-0 py-lg-3 d-inline-flex align-items-center d-lg-table-cell cell-final-price">
    												<span class="text-white text-400 d-inline d-lg-none text-uppercase me-4">FINAL PRICE </span>
    												<span class="totalCost">FREE</span>
    											</td>
    											<td class="text-center py-lg-3">
    												<button class="text-white removeButton d-none d-lg-flex">
    													<i class="icon-slash"></i>
    												</button>	
													<button class="btn-link text-white text-decoration-none removeButton  position-absolute w-100 h-100 top-0 start-0 bg-black bg-opacity-80 d-lg-none d-flex justify-content-center align-items-center">														
														<i class="icon-trash"></i>
														Delete
													</button>											
    											</td>
    										</tr>
    									</tbody>
    								</table>

    							</div>
    							<div class="col-12 col-md-10 col-lg-4">
    								<div class="background-card rounded-3 border border-white border-opacity-10 p-4 summary-cart">
    									<h4 class="headline-4 lh-1 mb-5 mb-lg-4 mb-xl-5 pb-1 pb-lg-0 pb-xl-1 text-uppercase text-800 text-summary headline-lg-4">summary</h4>
    									<div class="d-flex d-lg-block d-xl-flex justify-content-between mb-4">
    										<p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase mb-2 mb-xl-0">SUBTOTAL</p>
    										<p class="text-xs lh-1 text-700 text-xl-end mb-0">$800.00</p>
    									</div>
    									<div class="d-flex d-lg-block d-xl-flex justify-content-between mb-4">
    										<p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase mb-2 mb-xl-0">SHIPPING EST.</p>
    										<p class="text-xs lh-1 text-700 text-xl-end mb-0">Calculated Later</p>
    									</div>
    									<div class="d-flex d-lg-block d-xl-flex justify-content-between mb-4">
    										<p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase mb-2 mb-xl-0">SALES TAX</p>
    										<p class="text-xs lh-1 text-700 text-xl-end mb-0">Calculated Later</p>
    									</div>
    									<div class="d-flex d-lg-block d-xl-flex justify-content-between mb-4">
    										<p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase mb-2 mb-xl-0">PAYMENT</p>
    										<p class="text-xs lh-1 text-700 text-xl-end mb-0">Calculated Later</p>
    									</div>
    									<input type="text" class="form-control form-control-xxs form-control-fs-up mb-4" name="discount_code" placeholder="" value="ABCD25spring">
    									<div class="d-flex justify-content-between mb-4">
    										<p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase mb-0">ABCD25SPRING</p>
    										<p class="text-xs lh-1 text-700 text-end mb-0">- $20.00</p>
    									</div>
    									<div class="border-top border-black border-opacity-75 pt-4">
    										<div class="d-flex d-lg-block d-xl-flex justify-content-between align-items-center mb-4 pb-2">
    											<p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase mb-2 mb-xl-0">TOTAL PRICE</p>
    											<p class="text-xl lh-1 text-700 text-xl-end mb-0">$780.00</p>
    										</div>
    										<button class="btn btn-center btn-primary px-0 w-100 btn-next-tab">PROCEED TO CHECKOUT</button>
    									</div>
    								</div>
    							</div>
    						</div>
    						
    					</div>

    					<div class="tab-pane tab-user-details fade" id="pills-user-details" role="tabpanel" aria-labelledby="pills-user-details-tab" tabindex="0">
    						<div class="row justify-content-center pb-5 pb-lg-0 mb-5 mb-lg-0" role="tablist">
    							<div class="col-12 col-md-10 col-lg-12 col-xl-8" role="presentation">
    								<button class="btn-prev-tab text-uppercase d-none d-lg-block text-primary text-xxs text-600 lh-sm text-decoration-none mb-4 pb-2 text-center text-lg-start">
    									<i class="icon-arrow-left me-2"></i>
    									Back to cart
    								</button>
									<button class="btn-prev-tab mobile-navbar text-uppercase position-absolute top-0 start-0 w-100  d-block d-lg-none bg-gradient-dark border-bottom border-1 border-white border-opacity-05 rounded-bottom text-primary text-md text-600 lh-sm text-center text-decoration-none p-4">
										<i class="bi bi-arrow-left me-2"></i>
										Back to cart
									</button>
    								<h3 class="headline-3 lh-1 text-uppercase text-800 mb-5 mb-lg-4 pb-sm-5 pb-lg-2 text-center text-lg-start pt-5 pt-lg-0 mt-5 mt-lg-0">shopping details</h3>
    								<div class="">
    									<p class="text-xs mb-3 text-center text-lg-start">Your saved shipping addresses</p>
    									<div class="row mb-4 mb-sm-5 mb-lg-3 pb-3">
    										<div class="col-12 col-lg-6 mb-4 mb-sm-5 mb-lg-0">
    											<input type="radio" class="btn-check" name="address[]" id="address-1" checked required>
    											<label class="label-check border border-2 border-light-gray rounded-3 bg-black bg-opacity-30 w-100 d-flex align-items-center p-3" for="address-1">
    												<span class="d-flex align-items-center w-100">
    													<i class="icon-record text-gray px-1 me-3 text-xl position-relative"></i>
    													<span class="text-xxs lh-1">
    														<span class="d-inline-block user-name text-800 mb-1">John Smith</span>
    														<span class="d-block lh-base mb-0">
    															87-183 Powell Ave, Ottawa,
    														 	<span class="d-block">ON K1S 2A2, Canada</span>
    														</span>
    													</span>	
													</span>
    											</label>
    										</div>
    										<div class="col-12 col-lg-6">
    											<input type="radio" class="btn-check" name="address[]" id="address-2" required>
    											<label class="label-check border border-2 border-light-gray rounded-3 bg-black bg-opacity-30 w-100 d-flex align-items-center p-3" for="address-2">
    												<span class="d-flex align-items-center w-100">
    													<i class="icon-record text-gray px-1 me-3 text-xl position-relative"></i>
    													<span class="text-xxs lh-1">
															<span class="d-inline-block user-name text-800 mb-1">John Smith</span>
    														<span class="d-block lh-base mb-0">
    															87-183 Powell Ave, Ottawa,
    														 	<span class="d-block">ON K1S 2A2, Canada</span>
    														</span>
    													</span>		
													</span>
    											</label>
    										</div>
    									</div>

    									<p class="text-xs mb-3 pb-3 text-center text-lg-start">
    										<span class="d-none d-lg-inline">Already a memebr? Use your e-mail to sing in and finish your transatcion</span>
    										<span class="d-inline d-lg-none">Fill your shipping details</span>
    									</p>

    									<form class="row mb-4 pb-2 pb-lg-3 form-shipping">
    										<div class="col-12 col-lg-6 mb-4 pb-lg-2">
    											<input type="text" class="form-control form-control-sm form-control-gray form-control-fs-up" name="Name#required#reply_name" placeholder="Full name">
    										</div>
    										<div class="col-12 col-lg-6 mb-4 pb-lg-2">
    											<input type="email" class="form-control form-control-sm form-control-gray form-control-fs-up" name="E-Mail_Address#required#href_email#reply_email" placeholder="Email address">
    										</div>
    										<div class="col-12 col-lg-6 mb-4 pb-lg-2">
    											<input type="text" class="form-control form-control-sm form-control-gray form-control-fs-up" name="Phone_Number#format_phone#required#href_all" placeholder="Telephone">
    										</div>
    										<div class="col-12 col-lg-6 mb-4 pb-lg-2">
    											<input type="text" class="form-control form-control-sm form-control-gray form-control-fs-up" name="Company_Name" placeholder="Company">
    										</div>

    										<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
    											<input type="text" class="form-control form-control-sm form-control-gray form-control-fs-up" name="Street_Address" placeholder="Street Address">
    										</div>
    										<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
    											<input type="text" class="form-control form-control-sm form-control-gray form-control-fs-up" name="City" placeholder="City">
    										</div>
    										<div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
    											<input type="text" class="form-control form-control-sm form-control-gray form-control-fs-up" name="Zip_Code" placeholder="Zip Code">
    										</div>
    										<div class="col-sm-6 col-lg-3">
    											<input type="text" class="form-control form-control-sm form-control-gray form-control-fs-up" name="Country" placeholder="Country">
    										</div>
    									</form>
    									<div class="col-12 mb-md-4 pb-lg-2 d-flex  align-items-center">
    										<input type="checkbox" class="form-check-input rounded-0 flex-shrink-0 border border-1 border-light-gray rounded-2 bg-black bg-opacity-30 text-lg mt-0"  value="" name="Same_address" id="acceptBox">
    										<label class="labels-check-input text-xs ms-3 align-text-top" for="acceptBox">
    											Billing address is same as shipping address
    										</label>
    									</div>
    								</div>								
    							</div>
    							<div class="col-12 col-md-10 col-lg-12 col-xl-4 mt-5 mt-lg-0">
    								<div class="background-card rounded-1 border border-white border-opacity-10 p-4 summary-cart">
    									<div class="row justify-content-between">
    										<div class="col-12 col-lg-5 col-xl-12">
    											<h4 class="headline-4 lh-1 mb-4 mb-sm-5 pb-sm-1 pb-lg-3 pb-xl-1 text-uppercase text-800 text-summary headline-lg-4">summary</h4>
    											<div class="d-flex d-xl-flex justify-content-between mb-4">
    												<p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase mb-0">SUBTOTAL</p>
    												<p class="text-xs lh-1 text-700 text-xl-end mb-0">$800.00</p>
    											</div>
    											<div class="d-flex d-xl-flex justify-content-between mb-4">
    												<p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase mb-0">SHIPPING EST.</p>
    												<p class="text-xs lh-1 text-700 text-xl-end mb-0">Calculated Later</p>
    											</div>
    											<div class="d-flex d-xl-flex justify-content-between mb-4">
    												<p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase mb-0">SALES TAX</p>
    												<p class="text-xs lh-1 text-700 text-xl-end mb-0">Calculated Later</p>
    											</div>
    											<div class="d-flex d-xl-flex justify-content-between mb-4">
    												<p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase mb-0">PAYMENT</p>
    												<p class="text-xs lh-1 text-700 text-xl-end mb-0">Calculated Later</p>
    											</div>
    										</div> 
    										<div class="col-12 col-lg-5 col-xl-12">
    											<input type="text" class="form-control form-control-xxs form-control-fs-up mb-4" name="discount_code" placeholder="" value="ABCD25spring">
    											<div class="d-flex justify-content-between mb-4">
    												<p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase mb-0">ABCD25SPRING</p>
    												<p class="text-xs lh-1 text-700 text-end mb-0">- $20.00</p>
    											</div>							
    											<div class="border-top border-black border-opacity-75 pt-4">						
    												<div class="d-flex justify-content-between align-items-center mb-4 pb-2">
    													<p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase mb-0">TOTAL PRICE</p>
    													<p class="text-xl lh-1 text-700 text-xl-end mb-0">$780.00</p>
    												</div>
    												<button class="btn btn-center btn-primary px-0 w-100 btn-next-tab">PROCEED TO CHECKOUT</button>
    											</div>
    										</div>
    									</div>								
    								</div>
    							</div>
    						</div>
    					</div>
    					<!-- <div class="tab-pane tab-user-details fade" id="pills-user-details" role="tabpanel" aria-labelledby="pills-user-details-tab" tabindex="0">
    						<div class="row justify-content-center pb-5 pb-lg-0 mb-5 mb-lg-0">
    							<div class="col-7">   								
    								<div class="card-bg-dark p-4 rounded-3">
    									<h3 class="headline-3 lh-1 text-uppercase text-800 mb-5">
    										create new account
    									</h3>
    									<ul class="mb-5 pb-3 text-xs lh-sm">
    										<li class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</li>
    										<li class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed magna. </li> 
    										<li class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
    										<li class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
    									</ul>
    									<div class="row">
    										<div class="col-6">
    											<button class="btn btn-center btn-outline-white w-100">Continue as guest</button>
    										</div>
    										<div class="col-6">
    											<button class="btn btn-center btn-primary w-100">CREATE ACCOUNT</button>
    										</div>
    									</div>
    								</div>									
    							</div>
    							<div class="col-5">
    								<div class="card-bg-dark p-4 rounded-3">
    									<h3 class="headline-3 lh-1 text-uppercase text-800 mb-4 pb-2">
    										sign in
    									</h3>
    									<p class="text-xs lh-sm mb-4 pb-2">Already a memebr? Use your e-mail to sing in and finish your transatcion</p>
    									<input type="email" name="email" class="form-control form-control-gray form-control-sm mb-4" placeholder="enter your email">
    									<input type="password" name="password" class="form-control form-control-gray form-control-sm mt-2 mb-3" placeholder="Enter your PAssword">
    									
    									<input type="checkbox" class="form-check-input rounded-0 border border-1 border-light-gray rounded-2 bg-black bg-opacity-30 text-lg mt-1 mb-3"  value="" name="Same_address" id="rememberBox">
										<label class="labels-check-input text-xs ms-3 align-text-top mt-1" for="rememberBox">
											Remember Me
										</label>

    									<button class="btn btn-center btn-primary w-100 mt-1">SIGN IN</button>
    								</div>
    							</div>
    						</div>
    					</div> -->
    					<div class="tab-pane fade" id="pills-shipping" role="tabpanel" aria-labelledby="pills-shipping-tab" tabindex="0">
    						<div class="row justify-content-center pb-5 pb-lg-0 mb-5 mb-lg-0">
    							<div class="col-12 col-md-10 col-lg-12 col-xl-8 mb-lg-3 mb-xl-0 pb-lg-3 pb-xl-0">
    								<button class="btn-prev-tab text-uppercase d-none d-lg-block text-primary text-xxs text-600 lh-sm text-decoration-none mb-4 pb-2">
    									<i class="icon-arrow-left me-2"></i>
    									Back to shipping details
    								</button>
									<button class="btn-prev-tab mobile-navbar text-uppercase position-absolute top-0 start-0 w-100  d-block d-lg-none bg-gradient-dark border-bottom border-1 border-white border-opacity-05 rounded-bottom text-primary text-md text-600 lh-sm text-center text-decoration-none p-4">
										<i class="bi bi-arrow-left me-2"></i>
										Back to shipping details
									</button>
    								<h3 class="headline-3 lh-1 text-uppercase text-800 mb-5 mb-lg-4 pb-lg-2 text-center text-lg-start pt-5 pt-lg-0 mt-5 mt-lg-0">shopping metod</h3>

    								<div class="row">
    									<div class="col-12 col-lg-4 col-xl-5 d-flex flex-column order-2 order-lg-1">
    										<address class="text-xs lh-sm mb-4 mb-lg-auto mb-xl-3 pb-xl-3 text-center text-lg-start">
    											Full Name, Company <br>
    											emailaaaddd@email.com <br>
    											Street Adress 123, Ottawa <br>
    											Canada
    										</address>
    										<div class="position-relative shipping-map">
    											<img src="assets/images/shipping-map.svg" alt="" class="mx-90 object-position-center object-fit-cover rounded-3" height="252">
												<a href="https://goo.gl/maps/YHus15Ro6d9nGLZT6" class="position-absolute address-location">
    												<i class="icon-location1 position-absolute text-primary text-xs"></i>
												</a>
    										</div>
    										
    									</div>
    									<div class="col-12 col-lg-8 col-xl-7 order-1 order-lg-2">
    										<input type="radio" class="btn-check" name="shipping-method[]" id="shipping-method-1" checked>
    										<label class="label-check border border-2 border-light-gray rounded-3 bg-black bg-opacity-30 w-100 d-flex align-items-center px-3 px-sm-4 py-4_5 mb-4 mb-lg-3" for="shipping-method-1">
    											<span class="d-flex align-items-center w-100">
    												<i class="icon-record text-gray px-1 me-sm-3 text-xl position-relative"></i>
    												<span class="text-xs lh-1 ms-2 w-100">
    													<span class="shipping-type text-md text-800 d-flex justify-content-between mb-1 mb-lg-2">
    														<span class="me-3 me-sm-auto">Standard shipping</span>
    														<span class="shipping-price text-md-up">$14.99</span>
    													</span>
    													<span class="text-white text-opacity-80 shipping-date">Arrives Tuesday 7 June</span> 
    												</span>	
												</span>
    										</label> 
    										<input type="radio" class="btn-check" name="shipping-method[]" id="shipping-method-2">
    										<label class="label-check border border-2 border-light-gray rounded-3 bg-black bg-opacity-30 w-100 d-flex align-items-center px-3 px-sm-4 py-4_5 mb-4 mb-lg-3" for="shipping-method-2">
    											<span class="d-flex align-items-center w-100">
    												<i class="icon-record text-gray px-1 me-sm-3 text-xl position-relative"></i>
    												<span class="text-xs lh-1 ms-2 w-100">
    													<span class="shipping-type text-md text-800 d-flex justify-content-between mb-1 mb-lg-2">
    														<span class="me-3 me-sm-auto">Express shipping</span>
    														<span class="shipping-price text-md-up">$24.99</span>													
    													</span>
    													<span class="text-white text-opacity-80 shipping-date">Arrives Tuesday 4 June</span> 
    												</span>	
												</span>
    										</label>
    										<input type="radio" class="btn-check" name="shipping-method[]" id="shipping-method-3" >
    										<label class="label-check border border-2 border-light-gray rounded-3 bg-black bg-opacity-30 w-100 d-flex align-items-center px-4 py-4_5 mb-5 mb-lg-0" for="shipping-method-3">
    											<span class="d-flex align-items-center w-100">
    												<i class="icon-record text-gray px-1 me-sm-3 text-xl position-relative"></i>
    												<span class="text-xs lh-1 ms-2 w-100">
    													<span class="shipping-type text-md text-800 d-flex justify-content-between mb-1 mb-lg-2">
    														<span class="me-3 me-sm-auto">Express shipping</span>
    														<span class="shipping-price text-md-up">$34.99</span>
    													</span>
    													<span class="text-white text-opacity-80 shipping-date">Arrives Tuesday 4 June</span> 
    												</span>	
												</span>
    										</label>
    									</div>
    								</div>						
    							</div>
    							<div class="col-12 col-md-10 col-lg-12 col-xl-4 mt-5 mt-lg-0">
    								<div class="background-card rounded-1 border border-white border-opacity-10 p-4 summary-cart">
    									<div class="row justify-content-between">
    										<div class="col-12 col-lg-5 col-xl-12">
    											<h4 class="headline-4 lh-1 mb-5 pb-1 pb-lg-3 pb-xl-1 text-uppercase text-800 text-summary headline-lg-4">summary</h4>
    											<div class="d-flex d-xl-flex justify-content-between mb-4">
    												<p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase mb-0">SUBTOTAL</p>
    												<p class="text-xs lh-1 text-700 text-xl-end mb-0">$800.00</p>
    											</div>
    											<div class="d-flex d-xl-flex justify-content-between mb-4">
    												<p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase mb-0">SHIPPING EST.</p>
    												<p class="text-xs lh-1 text-700 text-xl-end mb-0">Calculated Later</p>
    											</div>
    											<div class="d-flex d-xl-flex justify-content-between mb-4">
    												<p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase mb-0">SALES TAX</p>
    												<p class="text-xs lh-1 text-700 text-xl-end mb-0">Calculated Later</p>
    											</div>
    											<div class="d-flex d-xl-flex justify-content-between mb-4">
    												<p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase mb-0">PAYMENT</p>
    												<p class="text-xs lh-1 text-700 text-xl-end mb-0">Calculated Later</p>
    											</div>
    										</div> 
    										<div class="col-12 col-lg-5 col-xl-12">
    											<input type="text" class="form-control form-control-xxs form-control-fs-up mb-4" name="discount_code" placeholder="" value="ABCD25spring">
    											<div class="d-flex justify-content-between mb-4">
    												<p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase mb-0">ABCD25SPRING</p>
    												<p class="text-xs lh-1 text-700 text-end mb-0">- $20.00</p>
    											</div>							
    											<div class="border-top border-black border-opacity-75 pt-4">						
    												<div class="d-flex justify-content-between align-items-center mb-4 pb-2">
    													<p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase">TOTAL PRICE</p>
    													<p class="text-xl lh-1 text-700 text-xl-end mb-0">$780.00</p>
    												</div>
    												<button class="btn btn-center btn-primary px-0 w-100 btn-next-tab">PROCEED TO CHECKOUT</button>
    											</div>
    										</div>
    									</div>								
    								</div>
    							</div>
    						</div>
    						
    					</div>
                        <div class="tab-pane fade" id="pills-payment" role="tabpanel" aria-labelledby="pills-payment-tab" tabindex="0">
                            <div class="row justify-content-center pb-5 pb-lg-0 mb-5 mb-lg-0">
                                <div class="col-12 col-md-10 col-lg-12 col-xl-8 mb-lg-3 mb-xl-0 pb-lg-3 pb-xl-0">
                                    <button class="btn-prev-tab text-uppercase d-none d-lg-block text-primary text-xxs text-600 lh-sm text-decoration-none mb-4 pb-2">
                                        <i class="icon-arrow-left me-2"></i>
                                        Back to shipping method
                                    </button> 
									<button class="btn-prev-tab mobile-navbar text-uppercase position-absolute top-0 start-0 w-100  d-block d-lg-none bg-gradient-dark border-bottom border-1 border-white border-opacity-05 rounded-bottom text-primary text-md text-600 lh-sm text-center text-decoration-none p-4">
										<i class="bi bi-arrow-left me-2"></i>
										Back to shipping method
									</button>                                  
                                    <h3 class="headline-3 lh-1 text-uppercase text-800  mb-4 pb-2 text-center text-lg-start pt-5 pt-lg-0  mt-5 mt-lg-0">payment method</h3>

                                    <div class="">
										<fieldset class="fieldset-check border border-2 border-light-gray rounded-3 bg-black bg-opacity-30 px-3 px-sm-4 py-4_5 mb-6">
											<input type="radio" class="btn-check" name="payment-method[]" id="payment-method-1" checked>
											<label class="label-check w-100 d-flex align-items-center" for="payment-method-1">
												<span class="d-flex align-items-center w-100">
													<i class="icon-record text-gray px-1 me-sm-3 text-xl position-relative"></i>
													<span class="text-xs lh-1 ms-2 w-100">
														<span class="payment-name text-md-up text-md text-800 d-flex justify-content-between">
															<span class="me-auto">
																<span class="me-sm-3 pe-3">Credit Card</span> 
																<span class="d-inline-flex d-lg-inline mt-2 mt-lg-0">
																	<img src="assets/images/Pay-Logos/credit_card_master_card.svg" alt="" width="34" class="me-2">
																	<img src="assets/images/Pay-Logos/credit_card_visa.svg" alt="" width="34" class="me-2">
																	<img src="assets/images/Pay-Logos/credit_card_discover.svg" alt="" width="34" class="me-2">
																</span>                                                       
																
															</span>
															<span class="d-flex align-items-center flex-shrink-0">NO FEES</span>
														</span>													
													</span> 
												</span>
											</label>
											<div class="row additional-inputs">
												<div class="col-12 mb-6 mt-6">
													<input type="text" name="Card Name" placeholder="card holder name" class="form-control form-control-sm form-control-gray">
												</div>
												<div class="col-12 col-lg-6 mb-6 mb-lg-0">
													<input type="text" name="Card Number" placeholder="card number" class="form-control form-control-sm form-control-gray">
												</div>
												<div class="col-6 col-lg-3">
													<input type="text" name="Card Date" placeholder="date" class="form-control form-control-sm form-control-gray">
												</div>
												<div class="col-6 col-lg-3">
													<input type="text" name="Card CVV" placeholder="cvv" class="form-control form-control-sm form-control-gray">
												</div>
											</div>
										</fieldset>
                                        <input type="radio" class="btn-check" name="payment-method[]" id="payment-method-2">
                                        <label class="label-check border border-2 border-light-gray rounded-3 bg-black bg-opacity-30 w-100 d-flex align-items-center px-3 px-sm-4 py-4_5 mb-6" for="payment-method-2">
                                            <span class="d-flex align-items-center w-100">
                                                <i class="icon-record text-gray px-1 me-sm-3 text-xl position-relative"></i>
                                                <span class="text-xs lh-1 ms-2 w-100">
                                                    <span class="payment-name text-md-up text-md text-800 d-flex justify-content-between mb-0">
                                                        <span class="me-auto">
                                                            <img src="assets/images/Pay-Logos/PayPal-white.svg" alt="" class="h-100">
                                                        </span>
                                                        <span>$1.99</span>                                                 
                                                    </span>
                                                </span> 
											</span>
                                        </label>
                                        <input type="radio" class="btn-check" name="payment-method[]" id="payment-method-3">
                                        <label class="label-check border border-2 border-light-gray rounded-3 bg-black bg-opacity-30 w-100 d-flex align-items-center px-3 px-sm-4 py-4_5 mb-6" for="payment-method-3">
                                            <span class="d-flex align-items-center w-100">
                                                <i class="icon-record text-gray px-1 me-sm-3 text-xl position-relative"></i>
                                                <span class="text-xs lh-1 ms-2 w-100">
                                                    <span class="payment-name text-md-up text-md text-800 d-flex justify-content-between mb-0">
                                                        <span class="me-auto">
                                                            <img src="assets/images/Pay-Logos/Klarna_Logo-white.svg" alt="" class="h-100">
                                                        </span>
                                                        <span>$1.99</span>
                                                    </span>
                                                </span> 
											</span>
                                        </label>
                                    </div>                      
                                </div>
                                <div class="col-12 col-md-10 col-lg-12 col-xl-4 mt-5 mt-lg-0">
                                    <div class="background-card rounded-1 border border-white border-opacity-10 p-4 summary-cart">
                                        <div class="row justify-content-between">
                                            <div class="col-12 col-lg-5 col-xl-12">
                                                <h4 class="headline-4 lh-1 mb-5 pb-1 pb-lg-3 pb-xl-1 text-uppercase text-800 text-summary headline-lg-4">summary</h4>
                                                <div class="d-flex d-xl-flex justify-content-between mb-4">
                                                    <p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase mb-0">SUBTOTAL</p>
                                                    <p class="text-xs lh-1 text-700 text-xl-end mb-0">$800.00</p>
                                                </div>
                                                <div class="d-flex d-xl-flex justify-content-between mb-4">
                                                    <p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase mb-0">SHIPPING EST.</p>
                                                    <p class="text-xs lh-1 text-700 text-xl-end mb-0">Calculated Later</p>
                                                </div>
                                                <div class="d-flex d-xl-flex justify-content-between mb-4">
                                                    <p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase mb-0">SALES TAX</p>
                                                    <p class="text-xs lh-1 text-700 text-xl-end mb-0">Calculated Later</p>
                                                </div>
                                                <div class="d-flex d-xl-flex justify-content-between mb-4">
                                                    <p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase mb-0">PAYMENT</p>
                                                    <p class="text-xs lh-1 text-700 text-xl-end mb-0">Calculated Later</p>
                                                </div>
                                            </div> 
                                            <div class="col-12 col-lg-5 col-xl-12">
                                                <input type="text" class="form-control form-control-xxs form-control-fs-up mb-4" name="discount_code" placeholder="" value="ABCD25spring">
                                                <div class="d-flex justify-content-between mb-4">
                                                    <p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase mb-0">ABCD25SPRING</p>
                                                    <p class="text-xs lh-1 text-700 text-end mb-0">- $20.00</p>
                                                </div>                          
                                                <div class="border-top border-black border-opacity-75 pt-4">                        
                                                    <div class="d-flex justify-content-between align-items-center mb-4 pb-2">
                                                        <p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase">TOTAL PRICE</p>
                                                        <p class="text-xl lh-1 text-700 text-xl-end mb-0">$780.00</p>
                                                    </div>
                                                    <button class="btn btn-center btn-primary px-0 w-100 btn-next-tab">PROCEED TO CHECKOUT</button>
                                                </div>
                                            </div>
                                        </div>                              
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="tab-pane fade cart-container" id="pills-summary" role="tabpanel" aria-labelledby="pills-summary-tab" tabindex="0">
                            <div class="row justify-content-center pb-5 pb-lg-0 mb-5 mb-lg-0">
                                <div class="col-12 col-md-10 col-lg-12 col-xl-8 mb-lg-3 mb-xl-0 pb-lg-3 pb-xl-0">
                                    <button class="btn-prev-tab text-uppercase d-none d-lg-block text-primary text-xxs text-600 lh-sm text-decoration-none mb-4 pb-2">
                                        <i class="icon-arrow-left me-2"></i>
                                        Back to payment method
                                    </button>
									<button class="btn-prev-tab mobile-navbar text-uppercase position-absolute top-0 start-0 w-100  d-block d-lg-none bg-gradient-dark border-bottom border-1 border-white border-opacity-05 rounded-bottom text-primary text-md text-600 lh-sm text-center text-decoration-none p-4">
										<i class="bi bi-arrow-left me-2"></i>
										Back to payment method
									</button>
                                    <h3 class="headline-3 lh-1 text-uppercase text-800  mb-4 pb-2 text-center text-lg-start pt-5 pt-lg-0  mt-5 mt-lg-0">order details</h3>
                                    <div class="row mb-5">
                                        <div class="col-12 col-lg-4 mb-5 mb-lg-0">
                                            <p class="text-xs lh-sm">
                                                <span class="text-700 d-block summary-subtilte text-md-up mb-4 mb-lg-0">Ship to:</span>
                                                <span class="d-flex d-lg-block summary-text mb-2 mb-lg-0">
                                                    <span class="d-inline d-lg-none text-white text-opacity-60 me-auto">Full Name</span>
                                                    <span class="summary-data text-end text-lg-start">Full Name</span>
                                                </span>
                                                <span class="d-flex d-lg-block summary-text mb-2 mb-lg-0">
                                                    <span class="d-inline d-lg-none text-white text-opacity-60 me-auto">Company</span>
                                                    <span class="summary-data text-end text-lg-start">Company</span>
                                                </span>
                                                <span class="d-flex d-lg-block summary-text mb-2 mb-lg-0">                             
                                                    <span class="d-inline d-lg-none text-white text-opacity-60 me-auto">E-mail</span>
                                                    <span class="summary-data text-end text-lg-start">emailaaaddd@email.com</span>
                                                </span>
                                                <span class="d-flex d-lg-block summary-text mb-2 mb-lg-0">                             
                                                    <span class="d-inline d-lg-none text-white text-opacity-60 me-auto">Address</span>
                                                    <span class="summary-data text-end text-lg-start">Street Adress 123, Ottawa <br> Canada</span>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="col-12 col-lg-4 mb-5 mb-lg-0">
                                            <p class="text-xs lh-sm">
                                                <span class="text-700 d-block summary-subtilte text-md-up mb-4 mb-lg-0">Shipping Method:</span>
                                                <span class="d-flex d-lg-block summary-text mb-2 mb-lg-0">
                                                    <span class="d-inline d-lg-none text-white text-opacity-60 me-auto">Type</span>
                                                    <span class="summary-data text-end text-lg-start">Standard Shipping - $14.99</span>
                                                </span>
                                                <span class="d-flex d-lg-block summary-text mb-2 mb-lg-0">                                                
                                                    <span class="d-inline d-lg-none text-white text-opacity-60 me-auto">Estimated Delivery</span>
                                                    <span class="summary-data d-none d-lg-inline">Arrives Tuesday 7 June</span>
                                                    <span class="summary-data d-inline d-lg-none">07 June 2022</span>
                                                </span>                                            
                                            </p>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <p class="text-xs lh-sm">
                                                <span class="text-700 d-block summary-subtilte text-md-up mb-4 mb-lg-0">Payment Method:</span>
                                                <span class="d-flex d-lg-block summary-text mb-2 mb-lg-0">
                                                    <span class="d-inline d-lg-none text-white text-opacity-60 me-auto">Type</span>
                                                    <span class="summary-data text-end text-lg-start">
                                                        <img src="assets/images/Pay-Logos/credit_card_master_card.svg" alt="" class="me-2 d-inline d-lg-none">
                                                        Credit Card - Master Card
                                                    </span>
                                                </span>
                                                <span class="d-flex d-lg-block summary-text mb-2 mb-lg-0">
                                                    <span class="d-inline d-lg-none text-white text-opacity-60 me-auto">Card Holder Name</span>
                                                    <span class="summary-data text-end text-lg-start">John Smith</span>
                                                </span>
                                                <span class="d-flex d-lg-block summary-text mb-2 mb-lg-0">                                                
                                                    <span class="d-inline d-lg-none text-white text-opacity-60 me-auto">Card Details</span>
                                                    <span class="summary-data text-end text-lg-start">**** **** **** 1982</span>
                                                </span>                                            
                                            </p>
                                        </div>
                                    </div>

                                    <div class="text-md lh-sm d-lg-none w-100 mb-5 border-bottom border-white">
                                        <div class="text-start text-400 d-inline-flex text-capitalize">
                                            <span class="productsNumber">Z</span>
                                            <!-- Items -->
                                        </div>
                                    </div>

                                    <table class="d-block d-lg-table table text-white mb-0">
                                        <thead>
                                            <tr class="text-uppercase text-xxs lh-1 d-none d-lg-table-row">
												<th scope="col" class="d-none"></th>
                                                <th scope="col" class="text-start text-400 pb-4">item</th>
                                                <th scope="col" class="text-center text-400 pb-4">unit price</th>   
                                                <th scope="col" class="text-center text-400 pb-4">quantity</th>
                                                <th scope="col" class="text-center text-400 pb-4">final price</th>
                                            </tr>                                       
                                        </thead>
                                        <tbody class="text-xs text-700 lh-1 align-middle">
                                            <tr class="productItem position-relative mb-5 mb-lg-0 d-block d-lg-table-row px-3 px-sm-0">
                                                
                                                <td class="d-none d-sm-flex align-items-center d-lg-none cell-img ms-4 me-4 me-md-5 p-0">
                                                    <img src="assets/images/Products/air_filter.png" alt="" class="d-none d-sm-inline-flex d-lg-none img-fluid">
                                                </td>
                                                
                                                <td class="text-start mb-4 mb-sm-2 mb-lg-0 pt-4 pb-0 py-lg-2 d-inline-block d-lg-table-cell cell-item">
                                                    <img src="assets/images/Products/air_filter.png" alt="" class="me-2 d-inline d-sm-none d-xl-inline boxSize-sm h-auto">
                                                    Air Engine Filter
                                                </td>
                                                <td class="text-lg-center mb-4 mb-lg-0 py-0 py-lg-3 d-inline-block d-lg-table-cell cell-price">
    												<span class="text-white text-400 text-opacity-80 d-inline d-lg-none text-uppercase">UNIT PRICE </span>
    												<span> $</span>
													<span class="unitPrice">500.00</span>
    											</td>
    											<td class="text-end text-lg-center me-4 me-sm-0 mb-4 mb-lg-0 py-0 py-lg-3 d-inline-flex d-lg-table-cell cell-quantity  justify-content-end align-items-center">												
    												<button class="text-white px-0 text-center counterCardDown d-flex d-lg-inline-block boxSize-xs rounded-1 justify-content-center align-items-center me-3 me-lg-0">
														<i class="icon-arrow-left-2 text-4xs d-lg-none d-inline"></i>
    													<i class="icon-minus d-none d-lg-inline"></i>
    												</button>
    												<p class="text-md text-700 mb-0 productNumber text-center d-inline-block mx-md-2">1</p>
    												<button class="text-white px-0 text-center counterCardUp d-flex d-lg-inline-block boxSize-xs rounded-1 justify-content-center align-items-center ms-3 ms-lg-0">
														<i class="icon-arrow-right-3 text-4xs d-lg-none d-inline"></i>
    													<i class="icon-add d-none d-lg-inline"></i>
    												</button>
    											</td>
                                                <td class="text-lg-center mt-3 mt-lg-0 pb-4 pt-0 py-lg-2 d-inline-block d-lg-table-cell cell-final-price">
                                                    <span class="text-white text-400 d-inline d-lg-none text-uppercase me-4">FINAL PRICE </span>
                                                    $<span class="totalCost">500.00</span>
                                                </td>
                                            </tr>

                                            <tr class="productItem position-relative mb-5 mb-lg-0 d-block d-lg-table-row px-3 px-sm-0">

                                                <td class="d-none d-sm-flex align-items-center d-lg-none cell-img ms-4 me-4 me-md-5 p-0">
                                                    <img src="assets/images/Products/belt_engine.png" alt="" class="d-inline-flex  d-lg-none img-fluid">
                                                </td>

                                                <td class="text-start mb-4 mb-sm-2 mb-lg-0 pt-4 pb-0 py-lg-2 d-inline-block d-lg-table-cell cell-item">
                                                    <img src="assets/images/Products/belt_engine.png" alt="" class="me-2 d-inline d-sm-none d-xl-inline boxSize-sm h-auto">
                                                    Engine Belt
                                                </td>
                                                <td class="text-lg-center mb-4 mb-lg-0 py-0 py-lg-3 d-inline-block d-lg-table-cell cell-price">
    												<span class="text-white text-400 text-opacity-80 d-inline d-lg-none text-uppercase">UNIT PRICE </span>
    												<span> $</span>
													<span class="unitPrice">500.00</span>
    											</td>
    											<td class="text-end text-lg-center me-4 me-sm-0 mb-4 mb-lg-0 py-0 py-lg-3 d-inline-flex d-lg-table-cell cell-quantity  justify-content-end align-items-center">												
    												<button class="text-white px-0 text-center counterCardDown d-flex d-lg-inline-block boxSize-xs rounded-1 justify-content-center align-items-center me-3 me-lg-0">
														<i class="icon-arrow-left-2 text-4xs d-lg-none d-inline"></i>
    													<i class="icon-minus d-none d-lg-inline"></i>
    												</button>
    												<p class="text-md text-700 mb-0 productNumber text-center d-inline-block mx-md-2">1</p>
    												<button class="text-white px-0 text-center counterCardUp d-flex d-lg-inline-block boxSize-xs rounded-1 justify-content-center align-items-center ms-3 ms-lg-0">
														<i class="icon-arrow-right-3 text-4xs d-lg-none d-inline"></i>
    													<i class="icon-add d-none d-lg-inline"></i>
    												</button>
    											</td>
                                                <td class="text-lg-center mt-3 mt-lg-0 pb-4 pt-0 py-lg-2 d-inline-block d-lg-table-cell cell-final-price">
                                                    <span class="text-white text-400 d-inline d-lg-none text-uppercase me-4">FINAL PRICE </span>
                                                    $<span class="totalCost">100.00</span>
                                                </td>
                                            </tr>
                                            <tr class="productItem position-relative mb-5 mb-lg-0 d-block d-lg-table-row px-3 px-sm-0">

                                                <td class="d-none d-sm-flex align-items-center d-lg-none cell-img ms-4 me-4 me-md-5 p-0">
                                                    <img src="assets/images/Products/badge.jpg" alt="" class="d-inline-flex  d-lg-none img-fluid">
                                                </td>

                                                <td class="text-start mb-4 mb-sm-2 mb-lg-0 pt-4 pb-0 py-lg-2 d-inline-block d-lg-table-cell cell-item">
                                                    <img src="assets/images/Products/badge.jpg" alt="" class="me-2 d-inline d-sm-none d-xl-inline boxSize-sm h-auto">
                                                    ORV Club Badge
                                                </td>
                                                <td class="text-lg-center mb-4 mb-lg-0 py-0 py-lg-3 d-inline-block d-lg-table-cell cell-price">
    												<span class="text-white text-400 text-opacity-80 d-inline d-lg-none text-uppercase">UNIT PRICE </span>
    												<span> $</span>
													<span class="unitPrice">FREE</span>
    											</td>
    											<td class="text-end text-lg-center me-4 me-sm-0 mb-4 mb-lg-0 py-0 py-lg-3 d-inline-flex d-lg-table-cell cell-quantity  justify-content-end align-items-center">												
    												<button class="btn-disabled text-white px-0 text-center counterCardDown d-flex d-lg-inline-block boxSize-xs rounded-1 justify-content-center align-items-center me-3 me-lg-0">
														<i class="icon-arrow-left-2 text-4xs d-lg-none d-inline"></i>
    													<i class="icon-minus d-none d-lg-inline"></i>
    												</button>
    												<p class="text-md text-700 mb-0 productNumber text-center d-inline-block mx-md-2">1</p>
    												<button class="btn-disabled text-white px-0 text-center counterCardUp d-flex d-lg-inline-block boxSize-xs rounded-1 justify-content-center align-items-center ms-3 ms-lg-0">
														<i class="icon-arrow-right-3 text-4xs d-lg-none d-inline"></i>
    													<i class="icon-add d-none d-lg-inline"></i>
    												</button>
    											</td>
                                                <td class="text-lg-center mt-3 mt-lg-0 pb-4 pt-0 py-lg-2 d-inline-block d-lg-table-cell cell-final-price">
                                                    <span class="text-white text-400 d-inline d-lg-none text-uppercase me-4">FINAL PRICE </span>
                                                    <span class="totalCost">FREE</span>
                                                </td>
                                            </tr>
                                            <tr class="productItem position-relative d-block d-lg-table-row">

                                                <td class="d-none d-sm-flex align-items-center d-lg-none cell-img ms-4 me-4 me-md-5 p-0">
                                                    <img src="assets/images/Products/badge.jpg" alt="" class="d-inline-flex  d-lg-none img-fluid">
                                                </td>

                                                <td class="text-start mb-4 mb-sm-2 mb-lg-0 pt-4 pb-0 py-lg-2 d-inline-block d-lg-table-cell cell-item">
                                                    <img src="assets/images/Products/badge.jpg" alt="" class="me-2 d-inline d-sm-none d-xl-inline boxSize-sm h-auto">
                                                    ORV Club Badge
                                                </td>
                                                <td class="text-lg-center mb-4 mb-lg-0 py-0 py-lg-3 d-inline-block d-lg-table-cell cell-price">
    												<span class="text-white text-400 text-opacity-80 d-inline d-lg-none text-uppercase">UNIT PRICE </span>
    												<span> $</span>
													<span class="unitPrice">FREE</span>
    											</td>
    											<td class="text-end text-lg-center me-4 me-sm-0 mb-4 mb-lg-0 py-0 py-lg-3 d-inline-flex d-lg-table-cell cell-quantity  justify-content-end align-items-center">												
    												<button class="btn-disabled text-white px-0 text-center counterCardDown d-flex d-lg-inline-block boxSize-xs rounded-1 justify-content-center align-items-center me-3 me-lg-0">
														<i class="icon-arrow-left-2 text-4xs d-lg-none d-inline"></i>
    													<i class="icon-minus d-none d-lg-inline"></i>
    												</button>
    												<p class="text-md text-700 mb-0 productNumber text-center d-inline-block mx-md-2">1</p>
    												<button class="btn-disabled text-white px-0 text-center counterCardUp d-flex d-lg-inline-block boxSize-xs rounded-1 justify-content-center align-items-center ms-3 ms-lg-0">
														<i class="icon-arrow-right-3 text-4xs d-lg-none d-inline"></i>
    													<i class="icon-add d-none d-lg-inline"></i>
    												</button>
    											</td>
                                                <td class="text-lg-center mt-3 mt-lg-0 pb-4 pt-0 py-lg-2 d-inline-block d-lg-table-cell cell-final-price">
                                                    <span class="text-white text-400 d-inline d-lg-none text-uppercase me-4">FINAL PRICE </span>
                                                    <span class="totalCost">FREE</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                                         
                                </div>
                                <div class="col-12 col-md-10 col-lg-12 col-xl-4 mt-5 mt-lg-0">
                                    <div class="background-card rounded-1 border border-white border-opacity-10 p-4 summary-cart">
                                        <div class="row justify-content-between">
                                            <div class="col-12 col-lg-5 col-xl-12">
                                                <h4 class="headline-4 lh-1 mb-5 pb-1 pb-lg-3 pb-xl-1 text-uppercase text-800 text-summary headline-lg-4">summary</h4>
                                                <div class="d-flex d-xl-flex justify-content-between mb-4">
                                                    <p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase mb-0">SUBTOTAL</p>
                                                    <p class="text-xs lh-1 text-700 text-xl-end mb-0">$800.00</p>
                                                </div>
                                                <div class="d-flex d-xl-flex justify-content-between mb-4">
                                                    <p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase mb-0">SHIPPING EST.</p>
                                                    <p class="text-xs lh-1 text-700 text-xl-end mb-0">Calculated Later</p>
                                                </div>
                                                <div class="d-flex d-xl-flex justify-content-between mb-4">
                                                    <p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase mb-0">SALES TAX</p>
                                                    <p class="text-xs lh-1 text-700 text-xl-end mb-0">Calculated Later</p>
                                                </div>
                                                <div class="d-flex d-xl-flex justify-content-between mb-4">
                                                    <p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase mb-0">PAYMENT</p>
                                                    <p class="text-xs lh-1 text-700 text-xl-end mb-0">Calculated Later</p>
                                                </div>
                                            </div> 
                                            <div class="col-12 col-lg-5 col-xl-12">
                                                <input type="text" class="form-control form-control-xxs form-control-fs-up mb-4" name="discount_code" placeholder="" value="ABCD25spring">
                                                <div class="d-flex justify-content-between mb-4">
                                                    <p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase mb-0">ABCD25SPRING</p>
                                                    <p class="text-xs lh-1 text-700 text-end mb-0">- $20.00</p>
                                                </div>                          
                                                <div class="border-top border-black border-opacity-75 pt-4">                        
                                                    <div class="d-flex justify-content-between align-items-center mb-4 pb-2">
                                                        <p class="text-xs lh-1_1 text-white text-opacity-80 text-uppercase">TOTAL PRICE</p>
                                                        <p class="text-xl lh-1 text-700 text-xl-end mb-0">$780.00</p>
                                                    </div>
                                                    <a href="thank-you.php" class="btn btn-center btn-primary px-0 w-100 pay-button">PAY</a>
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
        </section>
    </main>	

	<?php include './src/navbar-offcanvas-chat.php';?>
    <?php include './src/navbar-offcanvas-cart.php';?>
    <?php include './src/navbar-offcanvas-user-panel.php';?>
    <?php include './src/navbar-modal.php';?>

	<!-- Bootstrap JS -->	
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.bundle.min.js" async></script>	

	<!-- Tom Select JS -->
	<script src="https://cdn.jsdelivr.net/npm/tom-select@2.1.0/dist/js/tom-select.complete.min.js"></script>

	<!-- Swiper JS -->
	<script src="assets/swiper/swiper-bundle.min.js" defer></script>

	<!-- JS -->
	<script type="text/javascript" src="assets/js/calender.js" defer></script>
	<script type="text/javascript" src="assets/js/cart-script.js" defer></script>
	<script type="text/javascript" src="assets/js/script.js" defer></script>
</body>
</html>
