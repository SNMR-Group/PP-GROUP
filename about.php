<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
		<link rel="icon" href="./favicon.png" type="image/x-icon">
		<title>About</title>
  <style>
    /* Internal Styles */
    .service-one {
  padding-top: 3rem;
  padding-bottom: 3rem;
}

.service-one .card {
  border: 0;
  border-radius: 0.5rem;
  overflow: hidden;
  background-color: #f9f9f9; /* Light background color */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow for better visibility */
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.service-one .card:hover {
  transform: translateY(-10px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.service-one .card-img-top {
  position: relative;
}

.service-one .overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
  opacity: 0.5; /* Adjust opacity as needed */
  z-index: 1;
}

.service-one .card-body {
  position: relative;
  z-index: 2;
  padding: 2rem;
}

.service-one .icon {
  font-size: 2rem;
  color: #007bff; /* Blue color for icons */
}

.service-one .btn-primary {
  background-color: #007bff; /* Primary button color */
  border-color: #007bff;
}

.service-one .btn-primary:hover {
  background-color: #0056b3; /* Darker blue for hover effect */
  border-color: #004085;
}

.service-one h3 a {
  text-decoration: none;
  color: #343a40; /* Dark text color */
}

.service-one h3 a:hover {
  text-decoration: underline;
}

/* Specific background colors for each service card */
.service-one .card:nth-child(1) {
  background-color: #e9f5ff; /* Light blue background for Digital Marketing */
}

.service-one .card:nth-child(2) {
  background-color: #f2f7f2; /* Light green background for ERP */
}

.service-one .card:nth-child(3) {
  background-color: #fff7f2; /* Light orange background for Web Development */
}

.service-one .card:nth-child(4) {
  background-color: #f9f2f2; /* Light red background for Android Development */
}

@media (max-width:397px) {
    .btn-white-outline {
      margin-top:5px;
    }
}

.styled-image img {
  border-radius: 12px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
  transition: transform 0.3s ease;
}

.styled-image img:hover {
  transform: scale(1.05);
}

  </style>

<!-- NUpur -->


		
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<?php
		require 'components/nav.php';
		?>
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>About Us</h1>
								<p class="mb-4">PP Group is a dynamic and diversified conglomerate with a strong presence in multiple industries, including furniture manufacturing, agriculture, FMCG (Fast-Moving Consumer Goods), and electronics. With a commitment to quality, innovation, and sustainability, PP Group has established itself as a leader in these sectors, delivering exceptional products that meet the evolving needs of consumers and businesses alike.</p>
								<p><a href="furniture" class="btn btn-secondary me-2">Shop Now</a><a href="services.php" class="btn btn-white-outline">Explore Our Services</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="styled-image">
								<img src="images/couch.png" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-lg-6">
						<h2 class="section-title">Why Choose Us</h2>
						<p>We’re a company that’s all about delivering great services in Agriculture, Furniture, Restaurants, and Real Estate.</p>

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/truck.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Fast &amp; Free Shipping</h3>
									<p>We get your orders to you quickly without charging extra. No hassle, no waiting—just fast, free delivery right to your doorstep.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/bag.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Easy to Shop</h3>
									<p>We make shopping super simple! With a clear layout and an easy checkout, you can find what you want and buy it without any fuss—quick and smooth, just the way it should be.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/support.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>24/7 Support</h3>
									<p>Need help? We’ve got your back around the clock! No matter when, you can always reach out to us—we’re here to help anytime, day or night.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/return.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Hassle Free Returns</h3>
									<p>Changed your mind? No problem! Our hassle-free returns make it easy to send items back without any stress. Just follow our simple process, and we’ll take care of the rest.</p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="images/why-choose-us-img.jpg" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->	
		
		

		<!-- Start Testimonial Slider -->
		<div class="testimonial-section before-footer-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 mx-auto text-center">
						<h2 class="section-title">Testimonials</h2>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="testimonial-slider-wrap text-center">

							<div id="testimonial-nav">
								<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
								<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
							</div>

							<div class="testimonial-slider">
								
								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;PP Group has been a trusted partner for our home and office furniture needs for years. Their attention to detail, craftsmanship, and customer service are unparalleled. Every piece we've purchased, from sleek office chairs to elegant dining sets, has exceeded our expectations. PP Group truly understands what quality means in the furniture industry. We couldn't be happier with our experience and highly recommend them to anyone in need of premium furniture solutions..&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/pp-ceo2.png" alt="Praveen Kumar" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Praveen Kumar</h3>
													<span class="position d-block mb-3">CEO, Director, PP GROUP.</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;As a farmer, finding reliable suppliers for agricultural products is crucial to my success. PP Group has been my go-to source for high-quality seeds, fertilizers, and farming tools. Their products are always top-notch, and their customer support team is incredibly knowledgeable and responsive. Thanks to PP Group, my farm has consistently produced excellent yields season after season. I appreciate their commitment to the agricultural community and look forward to continuing our partnership.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/pp-ceo2.png" alt="Praveen Kumar" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Praveen Kumar</h3>
													<span class="position d-block mb-3">CEO, Director, PP GROUP.</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;When it comes to sourcing FMCG and electrical items for our retail business, PP Group has been a game-changer. Their vast range of products, from everyday essentials to specialized electrical components, is both impressive and reliable. The convenience of dealing with a single supplier for such a diverse range of items has streamlined our operations significantly. The quality of their FMCG products is always consistent, and their electrical items have never let us down. PP Group has earned our trust and loyalty through their unwavering commitment to excellence.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/pp-ceo2.png" alt="Maria Jones" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Praveen Kumar</h3>
													<span class="position d-block mb-3">CEO, Director, PP GROUP.</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Testimonial Slider -->

		

		<!-- Start Footer Section -->
				
				<?php 
    require 'components/footer.php';
?>
		<!-- End Footer Section -->	

    <script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>



	</body>

</html>
