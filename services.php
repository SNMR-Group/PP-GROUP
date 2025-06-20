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
		<title>Services</title>
	  <style>
		.hero {
			overflow: hidden;
		}
	   @media (max-width:1000px) {
		   .product-section {
			display:none;
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
								<h1> Services <span clsas="d-block"></span></h1>
								<p class="mb-4">Our Services are designed to meet all your needs. From Furniture and Electical to Agriculture solutions, FMCG, and realEstate services, we offer a wide range of professional expertise. Whatever your need, we’re here to provide reliable, high-quality support to help you succeed</p>
								 <p><a href="contact" class="btn btn-secondary me-2">Shop Now</a> <a href="contact" class="btn btn-white-outline">Explore</a> </p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="styled-image ">
							   <img src="images/services-home.jpg" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="blog-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-6">
						<h1 class="section-title">Our Services</h1>
					</div>
					<div class="col-md-6 text-start text-md-end">
						<a href="services" class="more">View All</a>
					</div>
				</div>

				<div class="row">

				<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
    <div class="post-entry">
        <a href="contact" class="post-thumbnail">
            <img src="images/post-1.png" alt="Image" class="img-fluid">
        </a>
		<h4>Furnitures</h4>
		<p>Furniture is a blend of creativity and practical solutions to make spaces both beautiful and functional</p>
        <div class="post-content-entry d-flex align-items-center">
            <a href="furniture"><button class="btn btn-danger btn-sm me-2" style="font-size: 0.75rem;">View More</button></a>
            <a href="https://wa.me/9934241982" target="_blank" class="btn btn-link">
                <i class="bi bi-whatsapp" style="font-size: 1rem; color: #25D366;"></i>
					</a>
				</div>
			</div>
		</div>
      <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
			<div class="post-entry">
			<a href="contact" class="post-thumbnail"><img src="images/agricult.png" alt="Image" class="img-fluid"></a>
			<h4>Agriculture Business</h4>
			<p>Our approach combines traditional farming techniques with modern innovation, ensuring that our produce is fresh.</p>
			<div class="post-content-entry d-flex align-items-center">
            <a href="agriculture"><button class="btn btn-danger btn-sm me-2" style="font-size: 0.75rem;">View More</button></a>
            <a href="https://wa.me/9934241982" target="_blank" class="btn btn-link">
                <i class="bi bi-whatsapp" style="font-size: 1rem; color: #25D366;"></i>
            </a>
        </div>
	   </div>
		</div>

			<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
			<div class="post-entry">
					<a href="contact" class="post-thumbnail"><img src="images/post-3.png" alt="Image" class="img-fluid"></a>
					<h4>Real Estate</h4>
					<p>With PP-Group, every property is a testament to our commitment to excellence, ensuring that we deliver excellence Home.</p>
		    <div class="post-content-entry d-flex align-items-center">
            <a href="realEstate"><button class="btn btn-danger btn-sm me-2" style="font-size: 0.75rem;">View More</button></a>
            <a href="https://wa.me/9934241982" target="_blank" class="btn btn-link">
                <i class="bi bi-whatsapp" style="font-size: 1rem; color: #25D366;"></i>
            </a>
        </div>
		</div>
		</div>
         
		<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0 mt-5">
			<div class="post-entry">
			<a href="contact" class="post-thumbnail"><img src="images/electrical.png" alt="Image" class="img-fluid"></a>
			<h4>Electrical Solution</h4>
			<p>We offer reliable electrical services for homes and businesses, ensuring safe and efficient solutions for all your installation and repair needs.</p>
			<div class="post-content-entry d-flex align-items-center">
            <a href="electrical"><button class="btn btn-danger btn-sm me-2" style="font-size: 0.75rem;">View More</button></a>
            <a href="https://wa.me/9934241982" target="_blank" class="btn btn-link">
                <i class="bi bi-whatsapp" style="font-size: 1rem; color: #25D366;"></i>
            </a>
        </div>
	   </div>
		</div>

		<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0 mt-5">
			<div class="post-entry">
			<a href="contact" class="post-thumbnail"><img src="images/fmcg.png" alt="Image" class="img-fluid"></a>
			<h4>FMCG Products</h4>
			<p>We provide reliable FMCG products, ensuring quality and efficiency from daily essentials to premium items, we’ve got you covered.</p>
			<div class="post-content-entry d-flex align-items-center">
            <a href="fmcgproduct"><button class="btn btn-danger btn-sm me-2" style="font-size: 0.75rem;">View More</button></a>
            <a href="https://wa.me/9934241982" target="_blank" class="btn btn-link">
                <i class="bi bi-whatsapp" style="font-size: 1rem; color: #25D366;"></i>
            </a>
        </div>
	   </div>
		</div>

				</div>
			</div>
		</div>
		

<?php 
    require 'components/footer.php'
?>


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
