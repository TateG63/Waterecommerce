<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.html");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Boxicons -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <!-- Glide js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css">
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css" />
    <title>Vaah-ten</title>
</head>

<body>
    <!-- Header -->
    <header class="header" id="header">
        <!-- Top Nav -->
        <div class="top-nav">
            <div class="container d-flex">
                <p>Order Order Online Or Call Us:(+990) 1930992689,1777777769</p>
                <ul class="d-flex">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">FAQ</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="navigation">
            <div class="nav-center container d-flex">
                <a href="index.html" class="logo">
                    <h1>Vaah-ten</h1>
                </a>

                <ul class="nav-list d-flex">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="product.html" class="nav-link">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a href="terms.xml" class="nav-link">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.html" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><?php echo "Welcome " . $_SESSION['username'] ?></a>
                    </li>
                </ul>

                <div class="icons d-flex">
                    <a href="login.html" class="icon">
                        <i class="bx bx-user"></i>
                    </a>
                    <a href="search.html" class="icon">
                        <i class="bx bx-search"></i>
                    </a>
                    <div class="icon">
                        <i class="bx bx-heart"></i>
                        <span class="d-flex">0</span>
                    </div>
                    <a href="cart.html" class="icon">
                        <i class="bx bx-cart"></i>
                        <span class="d-flex">0</span>
                    </a>
                    <a href="logout.php" class="icon">
                        <i class="bx bx-log-out"></i>
                    </a>
                </div>

                <div class="hamburger">
                    <i class="bx bx-menu-alt-left"></i>
                </div>
            </div>
        </div>

        <div class="hero">
            <div class="glide" id="glide_1">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                            <div class="center">
                                <div class="left">
                                    <span class="">New Inspiration 2025</span>
                                    <h1 class="">NEW COLLECTION!</h1>
                                    <p>Trending from North pole to South Pole</p>
                                    <a href="product.html" class="hero-btn">SHOP NOW</a>
                                </div>
                                <div class="right">
                                    <img class="img1" src="images\NPLS_635x635_0.avif" alt="">
                                </div>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="center">
                                <div class="left">
                                    <span>New Divinity 2025</span>
                                    <h1>THE PERFECT MATCH!</h1>
                                    <p>Trending from North pole to South Pole</p>
                                    <a href="product.html" class="hero-btn">SHOP NOW</a>
                                </div>
                                <div class="right">
                                    <img class="img2" src="images\toppng.com-atural-mineral-water-can-be-either-still-or-sparkling-water-splash-transparent-1001x1390.png" alt="">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Categories Section -->
    <section class="section category">
        <div class="cat-center">
            <div class="cat">
                <img src="images\super-fresh-drinking-water-2-liter-bottle.jpg" alt="" />
                <div>
                    <p>Mineral Water</p>
                </div>
            </div>
            <div class="cat">
                <img src="images\alkaline-water-1648049530.avif" alt="" />
                <div>
                    <p>Alkaline Water</p>
                </div>
            </div>
            <div class="cat">
                <img src="images\mineragua-sparkling-water-LWquA8VkT40-unsplash.jpg" alt="" />
                <div>
                    <p>Sparkling Water</p>
                </div>
            </div>
        </div>
    </section>

    <!-- New Arrivals -->
    <section class="section new-arrival">
        <div class="title">
            <h1>NEW ARRIVALS</h1>
            <p>All the latest picked from designer of our store</p>
        </div>

        <div class="product-center">
            <div class="product-item">
                <div class="overlay">
                    <a href="productDetails.html" class="product-thumb">
                        <img src="images\CR-PC-OTL-Seltzers-Canada-Dry-0523.png" alt="" />
                    </a>
                    <span class="discount">New!</span>
                </div>
                <div class="product-info">
                    <span>Sparkling Water</span>
                    <a href="productDetails.html">Canada Dry 300ml</a>
                    <h4>$70</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><i class="bx bx-search"></i></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>
            <div class="product-item">
                <div class="overlay">
                    <a href="" class="product-thumb">
                        <img src="images\CR-PC-OTL-Seltzers-La-Croix-0523.png" alt="" />
                    </a>
                    <span class="discount">New!</span>
                </div>

                <div class="product-info">
                    <span>Sparkling Water</span>
                    <a href="">La Cronx 330ml</a>
                    <h4>$80</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><i class="bx bx-search"></i></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>
            <div class="product-item">
                <div class="overlay">
                    <a href="" class="product-thumb">
                        <img src="images/CR-PC-OTL-Seltzers-Polar-0523.png" alt="" />
                    </a>
                    <span class="discount">New!</span>
                </div>
                <div class="product-info">
                    <span>Sparkling Water</span>
                    <a href="">Polar 330ml</a>
                    <h4>$75</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><i class="bx bx-search"></i></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>
            <div class="product-item">
                <div class="overlay">
                    <a href="" class="product-thumb">
                        <img src="images\johnny-z-UK_jYMqoHxE-unsplash.jpg" alt="" />
                    </a>
                    <span class="discount">New!</span>
                </div>
                <div class="product-info">
                    <span>Alkaline Water</span>
                    <a href="">Alkiss 2ltr</a>
                    <h4>$90</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><i class="bx bx-search"></i></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>
            
            <div class="product-item">
                <div class="overlay">
                    <a href="" class="product-thumb">
                        <img src="images\PhURE-Alkaline-Water-33-8-Fl-Oz-18-Count-Bottles_35c24bac-6f07-44f2-941a-e57eb97ee800_1.16b3db51abde73fc7f343f416342c544.webp" alt="" />
                    </a>
                    <span class="discount">New!</span>
                </div>
                <div class="product-info">
                    <span>Alkaline Water</span>
                    <a href="">Phure 500ml</a>
                    <h4>$50</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><i class="bx bx-search"></i></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>
            <div class="product-item">
                <div class="overlay">
                    <a href="" class="product-thumb">
                        <img src="images\CR-RR-Inline-Seltzers-Sodastream-0523.webp" alt="" />
                    </a>
                    <span class="discount">New!</span>
                </div>
                <div class="product-info">
                    <span>Sparkling Water</span>
                    <a href="">SodaStream Terra 200ml</a>
                    <h4>$200</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><i class="bx bx-search"></i></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>
            <div class="product-item">
                <div class="overlay">
                    <a href="" class="product-thumb">
                        <img src="images\CR-RR-Inline-Seltzers-Perrier-0523.webp" alt="" />
                    </a>
                    <span class="discount">New!</span>
                </div>
                <div class="product-info">
                    <span>Sparkling Water</span>
                    <a href="">Perrier 330ml</a>
                    <h4>$40</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><i class="bx bx-search"></i></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>
        </div>
    </section>


    <!-- Promo -->

    <section class="section banner">
        <div class="left">
            <span class="trend">Trend Waters</span>
            <h1>New Collection 2025</h1>
            <p>New Arrival  <span class="color">    Sports Water</span>    Limited Stock</p>
            <a href="product.html" class="btn btn-1">Discover Now</a>
        </div>
        <div class="right">
            <img src="./images/banner.png" alt="">
        </div>
    </section>




    <!-- Featured -->

    <section class="section new-arrival">
        <div class="title">
            <h1>Featured</h1>
            <p>Thirst that needs to end!</p>
        </div>

        <div class="product-center">
            <div class="product-item">
                <div class="overlay">
                    <a href="" class="product-thumb">
                        <img src="images\super-fresh-drinking-water-2-liter-bottle.jpg" alt="" />
                    </a>
                </div>
                <div class="product-info">
                    <span>Mineral Water</span>
                    <a href="">Fresh Water 2ltr</a>
                    <h4>Tk40</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><i class="bx bx-search"></i></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>
            <div class="product-item">
                <div class="overlay">
                    <a href="" class="product-thumb">
                        <img src="images\nikhil-0_he2akLhyA-unsplash.jpg" alt="" />
                    </a>
                </div>

                <div class="product-info">
                    <span>Mineral Water</span>
                    <a href="">Kinley 500ml</a>
                    <h4>Tk15</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><i class="bx bx-search"></i></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>
            <div class="product-item">
                <div class="overlay">
                    <a href="" class="product-thumb">
                        <img src="images\FHB112270102-jpg.webp" alt="" />
                    </a>
                </div>
                <div class="product-info">
                    <span>Mineral Water</span>
                    <a href="">Mum 1ltr</a>
                    <h4>Tk25</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><i class="bx bx-search"></i></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>
            <div class="product-item">
                <div class="overlay">
                    <a href="" class="product-thumb">
                        <img src="images\stock-photo-winneconne-wi-march-a-bottle-of-aquafina-drinking-water-386341762.jpg" alt="" />
                    </a>
                </div>
                <div class="product-info">
                    <span>Mineral Water</span>
                    <a href="">Aquafina 500ml</a>
                    <h4>Tk15</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><i class="bx bx-search"></i></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>

    </section>

    <!-- Contact -->
    <section class="section contact">
        <div class="row">
            <div class="col">
                <h2>EXCELLENT SUPPORT</h2>
                <p>We love our customers and they can reach us any time
                    of day we will be at your service 24/7</p>
                <a href="contact.html" class="btn btn-1">Contact</a>
            </div>
            <div class="col">
                <form action="">
                    <div>
                        <input type="email" placeholder="Email Address">
                        <a href="">Send</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="row">
            <div class="col d-flex">
                <h4>INFORMATION</h4>
                <a href="about.html">About us</a>
                <a href="contact.html">Contact Us</a>
                <a href="">Term & Conditions</a>
                <a href="">Shipping Guide</a>
            </div>
            <div class="col d-flex">
                <h4>USEFUL LINK</h4>
                <a href="">Online Store</a>
                <a href="">Customer Services</a>
                <a href="">Promotion</a>
                <a href="">Top Brands</a>
            </div>
            <div class="col d-flex">
                <span><i class='bx bxl-facebook-square'></i></span>
                <span><i class='bx bxl-instagram-alt'></i></span>
                <span><i class='bx bxl-github'></i></span>
                <span><i class='bx bxl-twitter'></i></span>
                <span><i class='bx bxl-pinterest'></i></span>
            </div>
        </div>
    </footer>


    <!-- PopUp -->
    <div class="popup hide-popup">
        <div class="popup-content">
            <div class="popup-close">
                <i class='bx bx-x'></i>
            </div>
            <div class="popup-left">
                <div class="popup-img-container">
                    <img class="popup-img" src="images\closeup-several-green-sparkling-water-bottles-S3RD9Y.jpg" alt="popup">
                </div>
            </div>
            <div class="popup-right">
                <div class="right-content">
                    <h1>Welome <span>to</span> Vaahten</h1>
                    <p>Get Notification On Exciting Offers!
                    </p>
                    <form action="#">
                        <input type="email" placeholder="Enter your email..." class="popup-form">
                        <a href="#">Get Notifications</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
<script src="./js/slider.js"></script>
<script src="./js/index.js"></script>

</html>