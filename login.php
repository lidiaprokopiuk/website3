<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ORV HeadQuarters - Login</title>
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
		<?php include './src/navbar.php';?>		
	</header>
    <main class="pb-lg-5 pt-lg-4 d-lg-flex align-items-lg-center login-page mb-8 mb-lg-0">
        <div class="container-lg">
            <div class="row justify-content-center login-box">
                <div class="col-12 col-lg-8 col-xxl-6 card-bg-dark rounded-3 py-5">
					<div class="row justify-content-center pt-lg-2">
						<div class="col-12 col-md-10 col-lg-8 col-xl-9">
							<h3 class="headline-3 text-800 lh-1 text-center text-uppercase mb-4 pb-2">Sign In</h3>
                            <p class="text-xs lh-1_1 text-center mb-4 pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
                    <form class="login-form row justify-content-center pb-lg-2">
                        <div class="col-12 col-md-10 col-lg-9 col-xl-8 col-xxl-9">                            
                            <input type="email" class="form-control form-control-gray form-control-sm mb-6" name="E-Mail_Address#required#href_email#reply_email" placeholder="E-mail" required>
                            <input type="password" class="form-control form-control-gray form-control-sm mb-6 mb-lg-3" name="Password" placeholder="Password" required>
                            <a href="#" class="d-block text-primary text-decoration-none text-xs lh-1_1 mb-6 pb-2 pb-lg-0">Forgot password?</a>
                        </div>
                        <div class="col-12 col-md-10 col-lg-6 col-xl-5 col-xxl-6">
                            <button type="submit" class="btn btn-primary btn-center w-100 mb-6">Sign In</button>
                            <a href="register.php" class="d-block text-white text-decoration-none text-xxs lh-1 text-700 text-center btn-lg-link mt-2 mt-lg-0">Create free account</a>
                            
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>
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
<script type="text/javascript" src="assets/js/script.js" defer></script>
</body>
</html>