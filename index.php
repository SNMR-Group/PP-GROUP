	<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
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
		<title>Home</title>
	  <style>
	

.container-slider {
  /* position: absolute; */
   width: 55vw;
  /* height: 80vh; */ 
  /* margin-top:30%; */
  background-color: #c2e6bc; 
  border-radius: 10px; 
  margin-top:25%;
}

.hero {
	height : 100vh;
}

.we-help-section {
	margin-top : 20%;
}

@media (max-width:1111px) {
	.container-slider {
 
}


.hero {
	height : max-content;
}
}
.slider-title {
	border-radius: 5px;
	background-color : #416b6e;
	color: #fff;
}
@media (max-width:500px) {
	 .container-slider {
		width: 100vw;
	 }
}

.pp-group-section {
  padding: 80px 0;
  background-color: #f4f4f4;
 
}
 @media (min-width:1111px) {
	.pp-group-section {
		margin-top:20%;
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

.styled-quote {
  font-size: 1.25rem;
  font-style: italic;
  color: #333;
  border-left: 5px solid #0056b3;
  padding-left: 20px;
  line-height: 1.6;
}

.pp-group-section .container {
  max-width: 1000px;
}

.pp-group-section .row {
  margin-top: 20px;
}

.pp-group-section .col-lg-6 {
  margin-bottom: 20px;
}

 </style>
	
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
								<h1>PP GROUP <span clsas="d-block">Your Partner</span></h1>
								<p class="mb-4">PP-Group is committed to delivering excellence across all the industries we serve. PP-Group is your comprehensive partner in transforming ideas into reality<br>
								I am testing this website for  working with different branches by all developers and then will merge in master branch.
							</p>
								 <p><a href="contact" class="btn btn-secondary me-2">Shop Now</a> <a href="about" class="btn btn-white-outline">Explore</a> </p>
							</div>
						</div>
						<div class="col-lg-7">
                            
						<!-- Start container-slider -->
						<div class="container container-slider  ">
							<div class="row text-end p-2">
								<!-- First Row - First Carousel -->
								<div class="col-md-6  mb-2">
									<div id="carousel1" class="carousel slide" data-bs-ride="carousel">
										<div class="carousel-inner text-center">
											<h5 class="slider-title">Furniture</h5>
											<div class="carousel-item active">
												<div class="row">
													<div class="col-6">
														<img src="./images/fr11.png" class="d-block w-100 rounded" alt="Image 1">
													</div>
													<div class="col-6">
														<img src="./images/fr14.png" class="d-block w-100 rounded" alt="Image 2">
													</div>
												</div>
											</div>
											<div class="carousel-item">
												<div class="row">
													<div class="col-6">
														<img src="./images/fr12.png" class="d-block w-100 rounded" alt="Image 3">
													</div>
													<div class="col-6">
														<img src="./images/fr13.png" class="d-block w-100 rounded" alt="Image 4">
													</div>
												</div>
											</div>
										</div>
										<!-- Controls -->
										<button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										</button>
										<button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
										</button>
										<!-- Indicators -->
										<div class="carousel-indicators">
											<button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active"></button>
											<button type="button" data-bs-target="#carousel1" data-bs-slide-to="1"></button>
										</div>
									</div>
									<h5 class="mt-2 text-center">
										<a href="furniture" class="btn btn-danger btn-sm">View more</a>
									</h5>
								</div>

								<!-- First Row - Second Carousel -->
								<div class="col-md-6 ">
									<div id="carousel2" class="carousel slide" data-bs-ride="carousel">
										<div class="carousel-inner">
										<h5 class="slider-title text-center">Agriculture</h5>
											<div class="carousel-item active">
												<div class="row">
													<div class="col-6">
														<img src="./images/ag-1.png" class="d-block w-100 rounded" alt="Image 1">
													</div>
													<div class="col-6">
														<img src="./images/ag-2.png" class="d-block w-100 rounded" alt="Image 2">
													</div>
												</div>
											</div>
											<div class="carousel-item">
												<div class="row">
													<div class="col-6">
														<img src="./images/ag-3.png" class="d-block w-100 rounded" alt="Image 3">
													</div>
													<div class="col-6">
														<img src="./images/ag-4.png" class="d-block w-100 rounded" alt="Image 4">
													</div>
												</div>
											</div>
										</div>
										<!-- Controls -->
										<button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										</button>
										<button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
										</button>
										<!-- Indicators -->
										<div class="carousel-indicators">
											<button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" class="active"></button>
											<button type="button" data-bs-target="#carousel2" data-bs-slide-to="1"></button>
										</div>
									</div>
									<h5 class="mt-2 text-center">
										<a href="agriculture" class="btn btn-danger btn-sm">View more</a>
									</h5>
								</div>
							</div>

							<div class="row text-end ">
								<!-- Second Row - Third Carousel -->
								<div class="col-md-6  ">
									<div id="carousel3" class="carousel slide" data-bs-ride="carousel">
										<div class="carousel-inner text-center">
										<h5 class="slider-title">Electrical</h5>
											<div class="carousel-item active">
												<div class="row">
													<div class="col-6">
														<img src="./images/el-1.png" class="d-block w-100 rounded" alt="Image 1">
													</div>
													<div class="col-6">
														<img src="./images/el-2.png" class="d-block w-100 rounded" alt="Image 2">
													</div>
												</div>
											</div>
											<div class="carousel-item">
												<div class="row">
													<div class="col-6">
														<img src="./images/el-3.png" class="d-block w-100 rounded" alt="Image 3">
													</div>
													<div class="col-6">
														<img src="./images/el-4.png" class="d-block w-100 rounded" alt="Image 4">
													</div>
												</div>
											</div>
										</div>
										<!-- Controls -->
										<button class="carousel-control-prev" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										</button>
										<button class="carousel-control-next" type="button" data-bs-target="#carousel3" data-bs-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
										</button>
										<!-- Indicators -->
										<div class="carousel-indicators">
											<button type="button" data-bs-target="#carousel3" data-bs-slide-to="0" class="active"></button>
											<button type="button" data-bs-target="#carousel3" data-bs-slide-to="1"></button>
										</div>
									</div>
									<h5 class="mt-2 text-center">
										<a href="electrical" class="btn btn-danger btn-sm">View more</a>
									</h5>
								</div>

								<!-- Second Row - Fourth Carousel -->
								<div class="col-md-6">
									<div id="carousel4" class="carousel slide" data-bs-ride="carousel">
										<div class="carousel-inner">
										<h5 class="slider-title text-center">FMCG Products</h5>
											<div class="carousel-item active">
											
												<div class="row">
													<div class="col-6">
														<img src="./images/hy1.png" class="d-block w-100 rounded" alt="Image 1">
													</div>
													<div class="col-6">
														<img src="./images/hy2.png" class="d-block w-100 rounded" alt="Image 2">
													</div>
												</div>
											</div>
											<div class="carousel-item">
												<div class="row">
													<div class="col-6">
														<img src="./images/hy3.png" class="d-block w-100 rounded" alt="Image 3">
													</div>
													<div class="col-6">
														<img src="./images/hy4.png" class="d-block w-100 rounded" alt="Image 4">
													</div>
												</div>
											</div>
										</div>
										<!-- Controls -->
										<button class="carousel-control-prev" type="button" data-bs-target="#carousel4" data-bs-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										</button>
										<button class="carousel-control-next" type="button" data-bs-target="#carousel4" data-bs-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
										</button>
										<!-- Indicators -->
										<div class="carousel-indicators">
											<button type="button" data-bs-target="#carousel4" data-bs-slide-to="0" class="active"></button>
											<button type="button" data-bs-target="#carousel4" data-bs-slide-to="1"></button>
										</div>
									</div>
									<h5 class="mt-2 text-center">
										<a href="fmcgProduct" class="btn btn-danger btn-sm">View more</a>
									</h5>
								</div>
							</div>
						</div>

                    <!-- End container-slider -->
					</div>
				</div>
			</div>
</div>
		<!-- End Hero Section -->

		
		<!-- Start We Help Section -->
		<div class="pp-group-section">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="styled-image">
          <img src="images/pp-ceo.png" alt="PP Group" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-6">
        <blockquote class="styled-quote">
          "At PP Group, we excel across various industries, from crafting elegant furniture to innovating in agriculture and providing quality FMCG products and electrical items. Our commitment to quality and customer satisfaction drives everything we do, ensuring excellence in every sector we touch."
        </blockquote>
		<h3>Praveen Kumar</h3>
		<h5>Director, PP Group</h5>
      </div>
    </div>
  </div>
</div>

		<!-- Start Popular Product -->
		<!-- <div class="popular-product">
			<div class="container">
				<div class="row">

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="images/product-1.png" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Nordic Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="images/product-2.png" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Kruzo Aero Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="images/product-3.png" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Ergonomic Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div> -->
		<!-- End Popular Product -->

		<!-- Start Testimonial Slider -->
		<!-- <div class="testimonial-section">
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
													<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Maria Jones</h3>
													<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

								<!-- <div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Maria Jones</h3>
													<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
												</div>
											</div>

										</div>
									</div>
								</div>  -->
								<!-- END item -->

								<!-- <div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Maria Jones</h3>
													<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
												</div>
											</div>

										</div>
									</div>
								</div>  -->
								<!-- END item -->
<!-- 
							</div>

						</div>
					</div>
				</div>
			</div>
		</div> --> -->
		<!-- End Testimonial Slider -->



<?php 
    require 'components/footer.php'
?>


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
