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
    <link rel="icon" href="./favicon.png" type="image/x-icon">
		<title>Contact </title>
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
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-5">
        <div class="intro-excerpt">
          <h1>Contact Us</h1>
          <p class="mb-4">We're here to bring your ideas to life! Whether you have questions, need help with a project, or want to explore working together, we’d love to hear from you. Just fill out the form or contact us by email or phone. Let’s make something amazing!</p>
          <p>
            <a href="" class="btn btn-secondary me-2">Shop Now</a>
            <a href="#" class="btn btn-white-outline">Explore</a>
          </p>
        </div>
      </div>
      <div class="col-lg-6 text-center bg-transparent">
        <!-- <div class="hero-img-wrap text-center"> -->
          <img src="images/contac.png" class="img-fluid  shadow-lg shadow-md w-80 bg-transparent rounded mx-auto d-block"  style="transition: transform 0.5s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.1)';" onmouseout="this.style.transform='scale(1)';" alt="Contact Image">
        <!-- </div> -->
      </div>
    </div>
  </div>
</div>

		<!-- End Hero Section -->

		
		<!-- Start Contact Form -->
    <div class="untree_co-section">
  <div class="container">
    <div class="block">
      <div class="row justify-content-center">

        <!-- Contact Info Section (Moved to Top) -->
        <div class="col-md-12 col-lg-12 pb-4">
          <div class="row text-center">
            <div class="col-md-4 mb-3">
              <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
              <p class="mt-2">Bihari Furniture,Near Gulmohar Resort,Govindpur Road, Dhanbad-828109</p>
            </div>
            <div class="col-md-4 mb-3">
              <i class="fas fa-envelope fa-2x text-primary"></i>
              <p class="mt-2">ppgroup100186@gmail.com</p>
            </div>
            <div class="col-md-4 mb-3">
              <i class="fas fa-phone fa-2x text-primary"></i>
              <p class="mt-2">+91-9934241982</p>
            </div>
          </div>
        </div>

        <!-- Map Section -->
        <div class="col-md-6 col-lg-6 pb-4">
          <div class="map-container" style="width:100%; height:450px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.6629669651657!2d86.50278207439428!3d23.8305809856952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f6b9007165a0eb%3A0x4e543487f98756ac!2sBihari%20furniture!5e0!3m2!1sen!2sin!4v1725966524669!5m2!1sen!2sin"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>

        <!-- Contact Form Section -->
        <div class="col-md-6 col-lg-6 pb-4">
          <form action="contact-form-handler.php" method="POST">
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label class="text-black" for="fname">First name</label>
                  <input type="text" name="fname" class="form-control" id="fname" required>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label class="text-black" for="lname">Last name</label>
                  <input type="text" name="lname" class="form-control" id="lname" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="text-black" for="email">Email address</label>
              <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="form-group mb-5">
              <label class="text-black" for="message">Message</label>
              <textarea name="message" class="form-control" id="message" cols="30" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary-hover-outline">Send Message</button>
          </form>
        </div>

      </div> <!-- /.row -->
    </div> <!-- /.block -->
  </div> <!-- /.container -->
</div> <!-- /.untree_co-section -->



  <!-- End Contact Form -->

		

		<!-- Start Footer Section -->
		<?php
		require 'components/footer.php'
		?>
		<!-- End Footer Section -->	


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
