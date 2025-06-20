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
		<title>Career</title>
	  <style>
    .card-custom {
        background-color: #f8f9fa; 
        border-radius: 15px; 
        padding: 20px; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        transition: transform 0.3s ease; 
    }

    .card-custom:hover {
        transform: scale(1.05); 
    }

    .btn-dark {
        border-radius: 50px; 
    }
</style>


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
								<h1>Careers</h1>
								<p class="mb-4">
                                Looking for an exciting place to grow your career? PP Group, always on the lookout for driven, creative people to join us. We offer a supportive, innovative environment where your ideas matter. Check out our current job openings and see how you can be part of our journey!</p>
								<p><a href="career" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore More opprtunities</a></p>
							</div>
						</div>
						<div class="col-lg-6 text-center bg-transparent">
							<!-- <div class="hero-img-wrap"> -->
								<img src="images/career_pic.png"  class="img-fluid shadow-lg shadow-md w-80 bg-transparent rounded mx-auto d-block" style="transition: transform 0.5s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.1)';" onmouseout="this.style.transform='scale(1)';" alt="Career Image">
							<!-- </div> -->
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

        <div class="container mt-5 mb-5">
    <h2>Join Our Team</h2>
    <div class="row">
        <!-- Job Post 1 -->
        <div class="col-md-4">
            <div class="card card-custom">
                <div class="card-body">
                    <h5 class="card-title">Furniture Maker</h5>
                    <p class="card-text">Experienced in making furniture with a minimum of 1 year of experience.</p>
                    <h6>Location :</h6>
                    <p>Govindpur Road, Dhanbad-828109</p>
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#jobModal" onclick="setJobTitle('Furniture Maker')">Apply Now</button>
                </div>
            </div>
        </div>

        <!-- Job Post 2 -->
        <div class="col-md-4">
            <div class="card card-custom">
                <div class="card-body">
                    <h5 class="card-title">Office Boy</h5>
                    <p class="card-text">Responsible for maintaining cleanliness, and supporting office staff.</p>
                    <h6>Location :</h6>
                    <p>Govindpur Road, Dhanbad-828109</p>
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#jobModal" onclick="setJobTitle('Office Boy')">Apply Now</button>
                </div>
            </div>
        </div>

        <!-- Job Post 3 -->
        <div class="col-md-4">
            <div class="card card-custom">
                <div class="card-body">
                    <h5 class="card-title">Manager</h5>
                    <p class="card-text">Responsible for leading a team and ensuring business objectives met.</p>
                    <h6>Location :</h6>
                    <p>Govindpur Road, Dhanbad-828109</p>
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#jobModal" onclick="setJobTitle('Manager')">Apply Now</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="jobModal" tabindex="-1" aria-labelledby="jobModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jobModalLabel">Apply for Job</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="jobApplicationForm">
                    <div class="mb-3">
                        <label for="jobTitle" class="form-label">Job Title</label>
                        <input type="text" class="form-control" id="jobTitle" name="jobTitle" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="applicantName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="applicantName" name="applicantName" required>
                    </div>
                    <div class="mb-3">
                        <label for="applicantEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="applicantEmail" name="applicantEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="coverLetter" class="form-label">Cover Letter</label>
                        <textarea class="form-control" id="coverLetter" name="coverLetter" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark">Send Application</button>
                </form>
            </div>
        </div>
    </div>
</div>



    <!-- Start Footer Section -->
				
    <?php 
    require 'components/footer.php';
    ?>
	<!-- End Footer Section -->	

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
       function setJobTitle(title) {
    document.getElementById('jobTitle').value = title;
}

document.getElementById('jobApplicationForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    var jobTitle = document.getElementById('jobTitle').value;
    var applicantName = document.getElementById('applicantName').value;
    var applicantEmail = document.getElementById('applicantEmail').value;
    var coverLetter = document.getElementById('coverLetter').value;

    // Send the form data via email
    var mailtoLink = `mailto:ppgroup100186@gmail.com?subject=Job Application for ${jobTitle}&body=Name: ${applicantName}%0D%0AEmail: ${applicantEmail}%0D%0ACover Letter: ${coverLetter}`;
    window.location.href = mailtoLink;
});

    </script>
</body>
