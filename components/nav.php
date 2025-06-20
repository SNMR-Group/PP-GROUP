<style>

.logo-slide {
  position: absolute;
  top: 15%; 
  left: 10%;
  opacity: 0;
  transition: opacity 1s ease-in-out;
}



.logo-slide.active {
  opacity: 1;
  z-index: 1;
}


.nav-item.dropdown:hover .dropdown-menu {
  display: block;
  opacity: 1;
  visibility: visible;
  transition: opacity 0.3s ease-in-out;
}


.dropdown-menu {
  display: none;
  opacity: 0;
  visibility: hidden;
}


.nav-link:hover {
  background-color: transparent !important;
}

.dropdown-menu .dropdown-item:hover {
  background-color: #444;
  color: #fff; 
}


@media (max-width: 767px) {
  .logo-slider {
    position: absolute;
    top: 0;
    transform: translateX(-50%);
    z-index: 1000;
  }

}

  @media (max-width:602px) {
  .logo-slider {
    position: absolute;
	top: 30px;
    left:10%;
    transform: translateX(-50%);
    z-index: 1000;
  }
  .navbar-toggler {
    z-index: 1100; 
  }

  .logo-slide {
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    margin-left: -150px;
  }

  .navbar-collapse {
    margin-top: 80px; /
  }
}

.logo-slider img.logo-slide{
      margin-left : -124px;
    } 
@media screen and (max-width: 602px) {
    .logo-slider img.logo-slide:nth-of-type(3) {
        margin-left : 50px;
    }
    .logo-slider img.logo-slide:nth-of-type(2){
      margin-left : 115px;
    }
}

@media screen and (max-width: 350px) {
  button.navbar-toggler-icon {
        margin-left: 20px;
    }
}

@media screen and (max-width: 1199px) {
  .logo-slider img.logo-slide:nth-of-type(2) , .logo-slider img.logo-slide:nth-of-type(3){
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 100%; 
    max-width: 300px; 
  }
}

@media (max-width: 991px) {
  .navbar-brand {
    position: absolute;
    left: 50%;
    top: 10px; 
    transform: translateX(-50%);
    display: flex;
    justify-content: center;
    width: 100%;  
    z-index: 1000; 
  }
  .intro-excerpt h1{
margin-top: 100px;
  }

  .navbar-brand img {
    max-width: 100px; 
    margin: 0 10px; 
  }

  .navbar-toggler {
    position: absolute;
    top: 10px; 
    right: 10px; 
    z-index: 1100; 
  }

  .navbar-collapse {
    margin-top: 80px; 
    text-align: left; 
    padding-top: 40px; 
  }

  .navbar-nav {
    margin-left: 0; 
  }
}

@media (max-width: 602px) {
  .navbar-brand {
    position: absolute; 
    left: 50%;
    top: 10px; 
    transform: translateX(-50%);
    display: flex;
    justify-content: center;
    width: 100%; 
    z-index: 999; 
  }

  .navbar-brand img {
    max-width: 60px; 
    margin: 40px 5px; 
   }
   .logo-slider img.logo-slide:nth-of-type(1){
  
    max-width: 100px;
    height:auto;
    margin-top: 50px;

  } 
  .logo-slider img.logo-slide:nth-of-type(2),.logo-slider img.logo-slide:nth-of-type(3){
  
  max-width: 300px;
  height:auto;
  margin-top: 50px;

} 


  .navbar-toggler {
    position: absolute;
    top: 10px; 
    right: 10px; 
    z-index: 1100; 
  }

  .navbar-collapse {
    margin-top: 60px; 
    padding-top: 20px; 
    text-align: left; 
  }

  .navbar-nav {
    text-align: left; 
  }
}

.navbar-collapse.show .navbar-brand {
  position: absolute;
  left: 50%;
  top: 10px;
  transform: translateX(-50%);
  z-index: 999;
}

@media screen and (max-width: 450px){
  .logo-slider img.logo-slide:nth-of-type(2){
    max-width: 250px;
  height:auto;
  margin-top: 50px;
  }
}


/* Add these to your Tailwind configuration or as inline styles */

.flex {
  display: flex;
}

.items-center {
  align-items: center;
}

.space-x-2 {
  margin-right: 0.5rem;
}

.cursor-pointer {
  cursor: pointer;
}


</style>


<!-- Start Header/Navigation -->
<!-- Start Header/Navigation -->
<nav class="custom-navbar navbar navbar-expand-lg navbar-dark " aria-label="Furni navigation bar">
  <div class="container">
    <a href="index">
      <div class="navbar-brand logo-slider">
        <img src="images/logo-2.png" alt="Logo 1" class="logo-slide pb-4 " width="150rem" height="150rem">
        <img src="images/logo-1.png" alt="Logo 2" class="logo-slide pb-4" width="400rem" height="100rem">
        <img src="images/logo-3.png" alt="Logo 3" class="logo-slide pb-4" width="400rem" height="100rem">
      </div>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsFurni">
      <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
        <li class="nav-item" data-link="index">
          <a class="nav-link" href="index">Home</a>
        </li>
        <li class="nav-item" data-link="about">
          <a class="nav-link" href="about">About us</a>
        </li>
        <li class="nav-item dropdown" data-link="services">
        <div class="flex items-center space-x-2"> <!-- Flex container with spacing between items -->
  <a class="nav-link" href="services" id="servicesDropdown" role="button">
    Services
  </a>
  <i class="bi bi-chevron-down cursor-pointer text-white" id="dropdownIcon"></i> <!-- Bootstrap Icon for dropdown -->

</div>

       
          <ul class="dropdown-menu bg-black" aria-labelledby="servicesDropdown">
            <li><a class="dropdown-item" href="furniture">Furniture</a></li>
            <!-- <li><a class="dropdown-item" href="restaurant">Restaurant</a></li> -->
            <li><a class="dropdown-item" href="agriculture">Agriculture</a></li>
            <li><a class="dropdown-item" href="fmcgProduct">FMCG Product</a></li>
            <li><a class="dropdown-item" href="realEstate">Real Estate</a></li>
            <li><a class="dropdown-item" href="electrical">Electrical</a></li>
          </ul>
        </li>
        <li class="nav-item" data-link="contact">
          <a class="nav-link" href="contact">Contact us</a>
        </li>
        <li class="nav-item" data-link="career">
          <a class="nav-link" href="career">Careers</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Header/Navigation -->


<!-- End Header/Navigation -->

<script>
document.addEventListener('DOMContentLoaded', function () {
  const slides = document.querySelectorAll('.logo-slide');
  let currentSlide = 0;

  function showNextSlide() {
    // Hide the current slide
    slides[currentSlide].classList.remove('active');

    // Move to the next slide
    currentSlide = (currentSlide + 1) % slides.length;

    // Show the new current slide
    slides[currentSlide].classList.add('active');
  }

  // Show the first slide initially
  slides[currentSlide].classList.add('active');

  // Change image every 3 seconds with fading transition
  setInterval(showNextSlide, 3000);

  // Handle navigation active state
  const navItems = document.querySelectorAll('.nav-item');
  navItems.forEach(item => {
    item.addEventListener('click', function (event) {
      // Check if the clicked element is a dropdown item
      if (!event.target.closest('.dropdown-item')) {
        // Remove active class from all nav items
        navItems.forEach(el => el.classList.remove('active'));
        
        // Add active class to the clicked nav item
        this.classList.add('active');
      }
    });
  });

  // Optionally, set the initial active link based on the current page URL
  const currentPath = window.location.pathname.split('/').pop();
  const activeLink = document.querySelector(`.nav-item[data-link="${currentPath}"]`);
  if (activeLink) {
    activeLink.classList.add('active');
  }

      const navbarToggler = document.querySelector('.navbar-toggler');
      const navbarCollapse = document.getElementById('navbarsFurni');

      navbarToggler.addEventListener('click', function () {
        navbarCollapse.classList.toggle('show');
        document.body.classList.toggle('no-scroll');
      });

      document.addEventListener('click', function (event) {
        if (!navbarCollapse.contains(event.target) && !navbarToggler.contains(event.target)) {
          navbarCollapse.classList.remove('show');
          document.body.classList.remove('no-scroll');
        }
      });
    });
  </script>
  		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>