<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <title>Furniture Store</title>
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
        .no-scroll {
         overflow: hidden;
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
            height: 200px; /* Adjust the height as needed */
            object-fit: cover; /* Ensures the image covers the box without distortion */
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
            overflow: auto; /* Ensure modal content is scrollable if needed */
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
                width: 100%; /* Full width for extremely small screens */
                margin: 2% auto; /* Smaller vertical margin */
                padding: 15px; /* Adjust padding for small screens */
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
    background-color: #e0e0e0; 
    color: #000;
    border-color: #ccc; 
}

/* Product-model style */
/* Modal container */
#productModal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 999; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgba(0, 0, 0, 0.8); /* Black with transparency */
}

/* Modal content */
.modal-content {
    background-color: #fff;
    margin: 5% auto; /* Center the modal */
    padding: 20px;
    border-radius: 10px;
    max-width: 900px; /* Responsive width */gi
    width: 90%; /* Full width on smaller screens */
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
    animation: fadeIn 0.3s ease-in-out;
}

/* Close button */
.productModalClose {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
    transition: color 0.3s;
}

.productModalClose:hover,
.productModalClose:focus {
    color: #333;
    text-decoration: none;
    cursor: pointer;
}

/* Product image and info styling */
#productDetails {
    display: flex;
    gap: 20px;
}

/* Style for product image */
#productImage img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Style for product information */
#productInfo {
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 10px;
}

#productInfo h3 {
    font-size: 1.8rem;
    font-weight: bold;
    margin-bottom: 10px;
    color: #333;
}

#productInfo p {
    font-size: 1.1rem;
    line-height: 1.6;
    color: #555;
}

#productInfo .price {
    font-size: 1.5rem;
    font-weight: bold;
    color: #e74c3c;
}

#productInfo .buy-now {
    background-color: #3498db;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    text-align: center;
    text-decoration: none;
    font-size: 1.2rem;
    cursor: pointer;
    transition: background-color 0.3s;
}

#productInfo .buy-now:hover {
    background-color: #2980b9;
}

/* Responsive design */
@media (max-width: 768px) {
    #productDetails {
        flex-direction: column;
        align-items: center;
    }
    
    #productInfo h3 {
        text-align: center;
    }

    #productInfo .buy-now {
        width: 100%;
        text-align: center;
    }
}

/* Fade-in animation */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}


    </style>
</head>
<body>
    <?php require 'components/nav.php'; ?>

    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Furniture</h1>
                        <p class="mb-4">Welcome to our Furniture Services! We offer stylish, high-quality furniture for every space, whether it's your living room or office. From sofas to custom pieces, we have options to suit your style and needs. Let us help you create a beautiful, comfortable space with durable furniture.</p>
                        <p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
                    </div>
                </div>
                <div class="col-lg-6 text-center bg-transparent">
                    <!-- <div class="hero-img-wrap"> -->
                    <img src="images/furniture.png" class="img-fluid shadow-lg shadow-md w-80 bg-transparent rounded mx-auto d-block" style="transition: transform 0.5s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.1)';" onmouseout="this.style.transform='scale(1)';"  alt="Contact Image">
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <div class="container my-5">
    <h2  class="mb-5 text-center" style="font-size: 2.5rem; font-weight: 600; ">Furniture Store</h2>
        <div class="filters d-flex flex-column flex-md-row align-items-center justify-content-between mb-4">
            <input type="text" id="search" class="form-control filter-input mb-3 mb-md-0" placeholder="Search for products..." onkeyup="filterProducts()">
            <select id="type-filter" class="form-select filter-select mb-3 mb-md-0" onchange="filterProducts()">
                <option value="">All Types</option>
                <option value="table">Table</option>
                <option value="chair">Chair</option>
            </select>
            <select id="price-filter"class="form-select filter-select" onchange="filterProducts()">
                <option value="">All Prices</option>
                <option value="low">Low to High</option>
                <option value="high">High to Low</option>
            </select>
        </div>

        <div id="agriculture-list" class="row g-3"></div>
    </div>

    <!-- Modal -->

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
    <?php require 'components/footer.php'; ?>

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
    fetch('./components/db_conn.php?type=furniture')
        .then(response => response.json())
        .then(data => {
           
            const fmcgList = document.getElementById('agriculture-list');
            fmcgList.innerHTML = `
                <div class="row mt-4">
                    ${data.map(item => `
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow-sm" style="background-color: #f5f7fa; border-radius: 10px;">
                                <div class="image-container" style="min-height: 220px; overflow: hidden; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                    <img src="${item.image_url}" class="card-img-top" alt="${item.name}" style="height: 200px; object-fit: cover; width: 100%; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                </div>
                                <div class="card-body d-flex flex-column" style="font-family: 'Helvetica', sans-serif; color: #333;">
                                    <h5 class="card-title" style="font-size: 1.2rem; font-weight: 600;">${item.name}</h5>
                                    <p class="card-text" style="color: #777; font-size: 0.95rem;">${item.description}</p>
                                    <p class="card-text" style="color: #555; font-weight: 500;">₹${parseFloat(item.price).toFixed(2)}</p>
                                       <div class="d-flex justify-content-between">
                                <button class="btn btn-dark btn-sm" style="width: auto; padding: 6px 20px; font-size: 0.9rem;" onclick="buyNow('${item.name}', '${item.description}', '${item.price}')">Buy Now</button>
                                <button class="btn btn-light-details btn-sm" style="width: auto; padding: 6px 20px; font-size: 0.9rem;" onclick="showProductDetails(${item.id})">Details</button>
                            </div>
                                </div>
                            </div>
                        </div>
                    `).join('')}
                </div>
            `;
        });
}


function filterProducts() {
    const searchQuery = document.getElementById('search').value.toLowerCase();
    const typeFilter = document.getElementById('type-filter').value;
    const priceFilter = document.getElementById('price-filter').value;

    fetch('./components/db_conn.php?type=furniture')
        .then(response => response.json())
        .then(data => {
            let filteredData = data;

            // Apply search query filter
            if (searchQuery) {
                filteredData = filteredData.filter(item => item.name.toLowerCase().includes(searchQuery));
            }

            // Apply type filter
            if (typeFilter) {
                filteredData = filteredData.filter(item => item.type === typeFilter);
            }

            // Apply price sorting
            if (priceFilter === 'low') {
                filteredData.sort((a, b) => a.price - b.price);
            } else if (priceFilter === 'high') {
                filteredData.sort((a, b) => b.price - a.price);
            }
            console.log()
            const fmcgList = document.getElementById('agriculture-list');
            fmcgList.innerHTML = `
                <div class="row mt-4">
                    ${filteredData.map(item => `
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow-sm" style="background-color: #f5f7fa; border-radius: 10px;">
                                <div class="image-container" style="min-height: 220px; overflow: hidden; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                    <img src="${item.image_url}" class="card-img-top" alt="${item.name}" style="height: 200px; object-fit: cover; width: 100%; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                </div>
                                <div class="card-body d-flex flex-column" style="font-family: 'Helvetica', sans-serif; color: #333;">
                                    <h5 class="card-title" style="font-size: 1.2rem; font-weight: 600;">${item.name}</h5>
                                    <p class="card-text" style="color: #777; font-size: 0.95rem;">${item.description}</p>
                                    <p class="card-text" style="color: #555; font-weight: 500;">₹${parseFloat(item.price).toFixed(2)}</p>
                                       <div class="d-flex justify-content-between">
                                <button class="btn btn-dark btn-sm" style="width: auto; padding: 6px 20px; font-size: 0.9rem;" onclick="buyNow('${item.name}', '${item.description}', '${item.price}')">Buy Now</button>
                                <button class="btn btn-light-details btn-sm" style="width: auto; padding: 6px 20px; font-size: 0.9rem;" onclick="showProductDetails(${item.id})">Details</button>
                            </div>
                                </div>
                            </div>
                        </div>
                    `).join('')}
                </div>
            `;
        });
}

function showProductDetails(productId) {
    fetch(`./components/db_conn.php?type=furniture&id=${productId}`)
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
                <p><strong>Price:</strong>₹${parseFloat(product.price).toFixed(2)}</p>
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


function buyNow(productId, name, description, price) {

document.getElementById('product_id').value = productId;
document.getElementById('product_name').value = name;
document.getElementById('product_desc').value = description;
document.getElementById('product_price').value = price;
document.getElementById('buyModal').style.display = 'block';
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
    </script>
</body>
</html>
