<?php
// Start the session
session_start();

// Check if the user just logged in
if (isset($_SESSION['just_logged_in']) && $_SESSION['just_logged_in'] === true) {
    // Retrieve the username
    $username = $_SESSION['username'];
    // Echo JavaScript code to display an alert with the welcome message
    echo "<script>alert('Welcome, $username');</script>";

    // Unset the flag so the message doesn't appear on subsequent page loads
    unset($_SESSION['just_logged_in']);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Swadeshi Bazaar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="..."
        crossorigin="anonymous" defer></script>
</head>

<body>
    <div class="sticky-top">
        <div class="row header1-row">
            <div class="col-md-4">
                <h1><img src="logo.png" alt="Your Logo" class="logo" /> Swadeshi</h1>
            </div>
            <div class="col-md-8">
                <div class="nav justify-content-md-end">
                    <!-- <a href="" class="nav-link" target="_self"> Login</a> -->
                    <a href="login.php" style="margin-right: 20px; font-size: 30px">login</a>
                    <img src="user-image.png" alt="user Logo" class="user">
                    <span style="font-size: 30px; cursor: pointer" onclick="openNav()">&#9776;</span>
                </div>
            </div>
        </div>
        <div class="row header2-row">
            <div class="nav justify-content-md-around">
                <a href="#pd" class="nav-link">Crafts</a>
                <a href="furniture.html" class="nav-link">Furniture</a>
                <a href="home-utilities.html" class="nav-link">Home Utilities</a>
                <a href="snacks.html" class="nav-link">Snacks</a>
            </div>
        </div>
    </div>
    <!-- Start of Carousel -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2550">
        <!-- Set interval to 3000 milliseconds (3 seconds) -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="p2.png" class="d-block w-100" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="p4.png" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="p3.png" class="d-block w-100" alt="Image 3">
            </div>
            <div class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </div>
            <div class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </div>
        </div>
    </div>
    <!-- End of Carousel -->


    <div class="container-fluid">
        <img src="b1.png" alt="b1" class="banner">
    </div>
    <!-- Top Deals -->
    <div class="container-fluid hori-slidebar bg-white">
        <h2>Top Deals in Fashion</h2>
        <h4 class="grey">Handpicked for you</h4>
        <br>
        <div class="scrollmenu">
            <div>
                <img src="h1.png" class="horiimg" alt="h1">
                <h3 class="discount-text">Silk Saree min 50% off</h3>
            </div>
            <div>
                <img src="h2.png" class="horiimg" alt="h2">
                <h3 class="discount-text">Men's Kurta min 70% off</h3>
            </div>
            <div>
                <img src="h6.png" class="horiimg" alt="h3">
                <h3 class="discount-text">shaul min. 40% off</h3>
            </div>
            <div>
                <img src="h4.png" class="horiimg" alt="h4">
                <h3 class="discount-text">Cotten kurta min 50% off</h3>
            </div>
            <div>
                <img src="h5.png" class="horiimg" alt="h5">
                <h3 class="discount-text">Nehru Jacket min 30% off</h3>
            </div>
            <div>
                <img src="h3.png" class="horiimg" alt="h6">
                <h3 class="discount-text">Kurta min 20% off</h3>
            </div>
            <div>
                <img src="h7.png" class="horiimg" alt="h7">
                <h3 class="discount-text">Cotton Shirt min 50% off</h3>
            </div>
        </div>
        
    </div>
    <!-- end of top deals -->
    <div class="container-fluid">
        <img src="b2.png" alt="b2" class="banner">
    </div>
    <!-- Product Section -->
    <div class="container mt-4">
        <div class="row">
            <!-- Product 1 -->
            <!-- Product 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="product1.jpg" class="card-img-top" alt="Product 1" style="width: 415px; height: 260px;">
                    <div class="card-body" id="pd">
                        <h5 class="card-title">Product 1</h5>
                        <p class="card-text">Description of Product 1.</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>


            <!-- Product 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="product2.jpg" class="card-img-top" alt="Product 2" style="width: 200px; height: 260px;">
                    <div class="card-body">
                        <h5 class="card-title">Product 2</h5>
                        <p class="card-text">Description of Product 2.</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="product3.webp" class="card-img-top" alt="Product 3" style="width: 300px; height: 260px;">
                    <div class="card-body">
                        <h5 class="card-title">Product 3</h5>
                        <p class="card-text">Description of Product 3.</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="product4.jpg" class="card-img-top" alt="Product 1" style="width: 415px; height: 260px;">
                    <div class="card-body">
                        <h5 class="card-title">Product 1</h5>
                        <p class="card-text">Description of Product 1.</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="product5.jpg" class="card-img-top" alt="Product 2" style="width: 415px; height: 260px;">
                    <div class="card-body">
                        <h5 class="card-title">Product 2</h5>
                        <p class="card-text">Description of Product 2.</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="product6.webp" class="card-img-top" alt="Product 3" style="width: 415px; height: 260px;">
                    <div class="card-body">
                        <h5 class="card-title">Product 3</h5>
                        <p class="card-text">Description of Product 3.</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- sidebaR content  -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="addproduct.php" target="_blank">Add items</a>
        <a href="#ft">Services</a>
        <a href="#">Clients</a>
        <a href="#developer-section">Contact</a>
    </div>


    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "300px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0px";
        }
    </script>



    <div class="glbfeat">
        <div class="containergb">
            <div class="textofside">
                <h2 style="font-size: 40px;">
                    Discover why millions of indians chose Swadeshi bazar to build their business </h2>

            </div>
            <div class="imageglobe">
                <img src="earth.png" alt="Example Image">
            </div>
        </div>

        <!-- features of website  -->
        <div class="features" id="ft">
            <div class="feature">
                <img src="rocket.svg" alt="">
                <h3>Free Shipping at doorstep</h3>
                <p>Enjoy free shipping on all orders.</p>
            </div>
            <div class="feature">
                <img src="sack-dollar-solid.svg" alt="">
                <h3>Secure Payment gateway</h3>
                <p>We offer secure payments.</p>
            </div>
            <div class="feature">
                <img src="handshake.svg" alt="">
                <h3> satisfactory Guarantee</h3>
                <p>Your satisfaction is guaranteed.</p>
            </div>
            <div class="feature">
                <img src="headphone.svg" alt="">
                <h3>24/7 Online Support</h3>
                <p>We provide all time support.</p>
            </div>
        </div>
    </div>

    <!-- developer section  -->

    <section id="developer-section">
        <h2>Meet Our Developers</h2>
        <div class="developer">
            <img src="anivesh.jpeg" alt="Developer 1">
            <h3>ANIVESH TRIPATHI</h3>
            <p>Email: john@example.com</p>
            <p>Phone: 123-456-7890</p>
        </div>
        <div class="developer">
            <img src="bhavyaa.jpeg" alt="Developer 2">
            <h3>BHAVYA GARG</h3>
            <p>Email: jane@example.com</p>
            <p>Phone: 987-654-3210</p>
        </div>
        <div class="developer">
            <img src="dubey.jpeg" alt="Developer 3">
            <h3>ABHISHEK DUBEY</h3>
            <p>Email: michael@example.com</p>
            <p>Phone: 555-555-5555</p>
        </div>
    </section>



    <!-- Footer Section -->
    <footer class="bg-dark text-light mt-5">
        <div class="container py-4">
            <div class="row">
                <!-- About Swadeshi Bazaar -->
                <div class="col-md-4 mb-4">
                    <h5>About Swadeshi Bazaar</h5>
                    <p>
                        Welcome to Swadeshi Bazaar - your go-to destination for unique and
                        handmade products. Explore our collection of crafts, furniture,
                        home utilities, and snacks.
                    </p>
                </div>

                <!-- Contact Information -->
                <div class="col-md-4 mb-4">
                    <h5>Contact Information</h5>
                    <p>
                        <i class="fas fa-map-marker-alt"></i>sector-18, dlf phase3
                        gurugram
                    </p>
                    <p>
                        <i class="fas fa-envelope"></i> swadeshibazaarofficial@yahoo.com
                    </p>
                    <p><i class="fas fa-phone"></i> 1800100236</p>
                </div>

                <!-- Copyrights -->
                <div class="col-md-4 mb-4">
                    <h5>Copyrights</h5>
                    <p>&copy; 2024 Swadeshi Bazaar. All rights reserved.</p>
                </div>
            </div>
        </div>

        <!-- Social Media Icons -->
        <div class="text-center p-3 bg-secondary">
            <a href="#" class="text-light me-3"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-light"><i class="fab fa-linkedin"></i></a>
        </div>
    </footer>
</body>

</html>