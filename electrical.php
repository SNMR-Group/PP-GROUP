<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

    <title>Electrical Store</title>
    <link rel="stylesheet" href="styles.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        .filters {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        #fmcg-list {
            display: flex;
            flex-wrap: wrap;
        }

        .item {
            width: 30%;
            border: 1px solid #ddd;
            margin: 10px;
            padding: 10px;
            text-align: center;
            box-sizing: border-box;
        }

        .item img {
            max-width: 100%;
            height: 200px;
            object-fit: cover; 
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 60px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            overflow: auto; 
        }

        .modal-content {
            background-color: #fff;
            margin: 10% auto; 
            padding: 20px;
            border: 1px solid #888;
            width: 90%;
            max-width: 600px; 
            box-sizing: border-box;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .item {
                width: 100%;
            }

            .modal-content {
                width: 95%; 
                margin: 5% auto; 
            }
        }

        @media (max-width: 480px) {
            .modal-content {
                width: 100%; 
                margin: 2% auto; 
                padding: 15px; 
            }
        }
        .full-width-box {
            background-color: #f0f8ff; 
            border-color: #ff4500; 
        }
        .filters {
            margin-bottom: 1.5rem;
        }
        .filter-input,
        .filter-select {
            width: 100%;
            max-width: 300px; 
        }
        .filter-select {
            background-color: #f8f9fa; 
            border: 1px solid #ced4da; 
            border-radius: 0.375rem;
            padding: 0.5rem 0.75rem; 
        }

                /* Light button style */
.btn-light-details {
    background-color: #f0f0f0; /* Light gray background */
    color: #333; /* Dark text color for contrast */
    border: 1px solid #ddd; /* Light border */
    font-weight: 600;
}

.btn-light-details:hover {
    background-color: #e0e0e0; /* Slightly darker gray on hover */
    color: #000; /* Darker text color on hover */
    border-color: #ccc; /* Slightly darker border on hover */
}
        
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <?php require 'components/nav.php'; ?>

    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Electrical</h1>
                        <p class="mb-4">Welcome to our Electrical Products page! Discover top-quality items for home and business, including energy-efficient appliances, wearables, and gaming gear. Enjoy easy browsing, secure checkout, and fast delivery.</p>
                        <p><a href="contact" class="btn btn-secondary me-2">Shop Now</a><a href="furniture" class="btn btn-white-outline">Explore Our Furniture</a></p>
                    </div>
                </div>
                 <div class="col-lg-6 text-center bg-transparent">
                    <!-- <div class="hero-img-wrap"> -->
                    <img src="images/electric.png" class="img-fluid shadow-lg shadow-md w-80 bg-transparent rounded mx-auto d-block" style="transition: transform 0.5s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.1)';" onmouseout="this.style.transform='scale(1)';" alt="Contact Image">
                     <!-- </div> -->
                </div> 
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- FMCG Products Section -->
    <div class="container my-5">
    <div class="mb-5 text-center">
            <h2 class="text-primary" style="font-size: 2.5rem; font-weight: 600;">Electrical Items</h2>
        </div>
        <div class="filters d-flex flex-column flex-md-row align-items-center justify-content-between mb-4">
            <input type="text" id="search-fmcg" class="form-control filter-input mb-3 mb-md-0" placeholder="Search for FMCG products..." onkeyup="filterFmcg()">
            
            <select id="category-filter" class="form-select filter-select mb-3 mb-md-0" onchange="filterFmcg()">
                <option value="">All Categories</option>
                <option value="Home appliances">Home appliances</option>
                <option value="Electrical Supplies">Electrical Supplies</option>
                <option value="Analog appliance">Analog appliance</option>
            </select>

            <select id="price-filter-fmcg" class="form-select filter-select" onchange="filterFmcg()">
                <option value="">All Prices</option>
                <option value="low">Low to High</option>
                <option value="high">High to Low</option>
            </select>
        </div>

        <div id="fmcg-list" class="row g-3"></div>
    </div>

    <!-- Buy Now Modal -->
    <div id="buyModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Buy Now</h2>
            <form id="buyForm" class="p-4 bg-light rounded-3 shadow-sm">
    <div class="mb-3">
        <label for="name" class="form-label">Your Name</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Your Email</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Your Email" required>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Your Phone</label>
        <input type="text" id="phone" name="phone" class="form-control" placeholder="Your Phone" required>
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Your Address</label>
        <textarea id="address" name="address" class="form-control" placeholder="Your Address" required></textarea>
    </div>
    <input type="hidden" name="product_id" id="product_id">
    <input type="hidden" name="product_name" id="product_name">
    <input type="hidden" name="product_desc" id="product_desc">
    <input type="hidden" name="product_price" id="product_price">
    <button type="submit" class="btn btn-dark">Submit</button>
</form>

        </div>
    </div>

      <!-- Modal -->
<div id="productModal"  class="modal">
    <div class="modal-content">
        <span class="productModalClose close">&times;</span>
        <div id="productDetails" class="d-flex flex-column flex-md-row">
            <div id="productImage" class="mb-3 mb-md-0" style="flex: 1;">
                <!-- Image will be injected here -->
            </div>
            <div id="productInfo" class="d-flex flex-column" style="flex: 2;">
                <!-- Product details will be injected here -->
            </div>
        </div>
    </div>
</div>
    <!-- Footer -->
    <?php require 'components/footer.php'; ?>

    <!-- JavaScript -->
    <script src="script.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            loadFmcg();

            const modal = document.getElementById("buyModal");
            const closeBtn = document.querySelector(".close");

            closeBtn.onclick = function() {
                modal.style.display = "none";
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

            document.getElementById('buyForm').onsubmit = function(e) {
                e.preventDefault();
                submitForm();
            };
        });

        function loadFmcg() {
            fetch('./components/db_conn.php?type=electrical')
                .then(response => response.json())
                .then(data => {
                    console.log('FMCG data loaded:', data); // Debugging line
                    displayFmcg(data);
                })
                .catch(error => {
                    console.error('Error fetching FMCG data:', error);
                });
        }

        function filterFmcg() {
            const searchQuery = document.getElementById('search-fmcg').value.toLowerCase();
            const categoryFilter = document.getElementById('category-filter').value.toLowerCase();
            const priceFilter = document.getElementById('price-filter-fmcg').value;

            fetch('./components/db_conn.php?type=electrical')
                .then(response => response.json())
                .then(data => {
                    let filteredData = data;

                    // Filter by search query
                    if (searchQuery) {
                        filteredData = filteredData.filter(item => item.name.toLowerCase().includes(searchQuery));
                    }

                    // Filter by category
                    if (categoryFilter) {
                        filteredData = filteredData.filter(item => item.category.toLowerCase() === categoryFilter);
                    }

                    // Sort by price
                    if (priceFilter === 'low') {
                        filteredData.sort((a, b) => parseFloat(a.price) - parseFloat(b.price));
                    } else if (priceFilter === 'high') {
                        filteredData.sort((a, b) => parseFloat(b.price) - parseFloat(a.price));
                    }

                    // Display filtered and sorted data
                    displayFmcg(filteredData);
                })
                .catch(error => {
                    console.error('Error filtering FMCG data:', error);
                });
        }

function displayFmcg(data) {
    const fmcgList = document.getElementById('fmcg-list');
    fmcgList.innerHTML = `
        <div class="row mt-4 ">
            ${data.map(item => `
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm" style="background-color: #f5f7fa; border-radius: 10px;">
                        <div class="image-container" style="min-height: 220px; overflow: hidden; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                            <img src="${item.image_url}" class="card-img-top" alt="${item.name}" style="height: 200px; object-fit: cover; width: 100%; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                        </div>
                        <div class="card-body d-flex flex-column" style="font-family: 'Helvetica', sans-serif; color: #333;">
                            <h5 class="card-title" style="font-size: 1.2rem; font-weight: 600;">${item.name}</h5>
                            <p class="card-text" style="color: #777; font-size: 0.95rem;">Category: ${item.category}</p>
                            <p class="card-text" style="color: #555; font-weight: 500;">₹${parseFloat(item.price).toFixed(2)}</p>
                                        <div class="d-flex justify-content-between">
                                <button class="btn btn-dark btn-sm" style="width: auto; padding: 6px 20px; font-size: 0.9rem;" onclick="buyNow(${item.id} , '${item.name}', '${item.description}', '${item.price}')">Buy Now</button>
                                <button class="btn btn-light-details btn-sm" style="width: auto; padding: 6px 20px; font-size: 0.9rem;" onclick="showProductDetails(${item.id})">Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            `).join('')}
        </div>
    `;
}




function buyNow(productId, name, description, price) {
          
        document.getElementById('product_id').value = productId;
        document.getElementById('product_name').value = name;
        document.getElementById('product_desc').value = description;
        document.getElementById('product_price').value = price;
            const modal = document.getElementById("buyModal");
            modal.style.display = "block";
        }

    function submitForm() {
    const form = document.getElementById('buyForm');
    const formData = new FormData(form);
    

    const submitButton = form.querySelector('button[type="submit"]');
    
    submitButton.textContent = "Loading...";
    submitButton.disabled = true;

    fetch('./processOrder.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert("Your order has been submitted successfully. Our team will connect with you soon!");
        document.getElementById('buyModal').style.display = 'none';
    })
    .finally(() => {
        submitButton.textContent = "Submit";
        submitButton.disabled = false;
    });
}
function showProductDetails(productId) {
    fetch(`./components/db_conn.php?type=electrical&id=${productId}`)
        .then(response => response.json())
        .then(data => {
            const [ product ] = data.filter((all)=>all.id == productId) // Assuming the response is an array with one product object
            const modal = document.getElementById('productModal');
            document.getElementById('productImage').innerHTML = `
                <img src="${product.image_url}" class="img-fluid" alt="${product.name}" style="width: 100%; height: auto;">
            `;
            document.getElementById('productInfo').innerHTML = `
                <h3>${product.name}</h3>
                <p><strong>Category:</strong> ${product.category}</p>
                <p><strong>Price:</strong> ₹${parseFloat(product.price).toFixed(2)}</p>
                <p><strong>Description:</strong> ${product.description}</p>
            `;
            modal.style.display = "block";
            document.body.classList.add('no-scroll'); // Prevent background scrolling
        })
        .catch(error => {
            console.error('Error fetching product details:', error);
        });
}

const productModal = document.getElementById("productModal");
const productModalClose = document.querySelector(".productModalClose");

productModalClose.addEventListener("click", function() {
    productModal.style.display = "none";
});

    </script>
</body>
</html>