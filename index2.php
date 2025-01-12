<?php
session_start();
// var_dump($_SESSION);
$isLoggedIn = isset($_SESSION['email']);  
$role = $isLoggedIn && isset($_SESSION['role']) ? $_SESSION['role'] : null;
$business_name = $isLoggedIn && isset($_SESSION['business_name']) ? $_SESSION['business_name'] : "Guest"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--css-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../Wedding/css/styles2.css">
    <title>About Us Wedding Web</title>
</head>
<body>
    <header>
        <nav>
            <div class="btn">
                <img src="./image/logo-edit-removebg.png" alt="logo-nav">
                <input type="text" placeholder="Search">
                <?php if ($isLoggedIn): ?>
                <div class="profile-user">
                    <div>
                        <span><?php echo htmlspecialchars($business_name); ?></span>
                    </div>
                    <div>
                        <a href="logout.php" class="logout-btn">Logout</a>
                    </div>
                </div>
                <?php else: ?>
                    <h1 class="btn-txt1">Mau menjadi vendor?</h1>
                    <a href="login.php" class="masuk">Masuk</a>
                    <a href="sigin.php" class="daftar">Daftar</a>
                <?php endif; ?>
            </div>
        </nav>
        <hr>

        <nav class="navbar-nav">
            <div class="navbar">
                <a href="index.php" class="home">Home</a>
                <a href="#" class="blog">Blog</a>
                <a href="vendor.php" class="vendor">Vendor</a>
                <a href="#" class="contact">About Us</a>
            </div>
        </nav>
    </header>

    <div class="section">
        <div class="container">
            <div class="content-section">
                <div class="title">
                    <h1>Wedding</h1>
                </div>
                <div class="content">
                    <p>We provide several Private Villas that you can rent either daily or monthly. <br> In the Villa area, we offer spaces for intimate weddings, family gatherings, garden parties, and pool parties. We also provide catering, BBQ packages, and extra bed rentals.</p>
                    <div class="button">
                        <a href="">Read More</a>
                    </div>
                </div>
                <div class="social">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="image-section">
            <img src="../Wedding/image/gambar.png">
        </div>
    </div>

    <div class="proses">
        <div class="container-proses">
            <div class="content-section-proses">
                <div class="title">
                    <h2>Vendor Rental Process</h2>
                </div>
                <div class="content-proses">
                    <h3>1. Vendor Selection</h3>
                    <p>Our team will assist you in selecting the villa and available dates. Coordinate with our team regarding your needs and goals for your stay at our villa.</p>
                    <h3>2. Deposit Process</h3>
                    <p>Once you have found a villa with the right date, the next step is to make a deposit payment of at least 50% of the villa rental price.</p>
                    <h3>3. Final Payment Process</h3>
                    <p>You are expected to complete the rental payment at least three days before your check-in date so that you do not have to worry about payment during check-in.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="whyus">
        <div class="container-whyus">
            <div class="content-section-whyus">
                <div class="title">
                    <h2>Why Us?</h2>
                </div>
                <div class="content-poin">
                    <div class="poin">
                        <h3>Close to You</h3>
                        <p>There are vendors close to your location, allowing you to choose vendors nearby.</p>
                    </div>    
                    <div class="poin">
                        <h3>Affordable</h3>
                        <p>You can find vendors that fit your budget and choose vendors that match your financial capacity.</p>
                    </div>
                    <div class="poin">
                        <h3>Quick Response</h3>
                        <p>You can directly contact vendors, and they will respond to your inquiries as quickly as possible.</p>
                    </div>
                    <div class="poin">
                        <h3>Meets Your Needs</h3>
                        <p>You can find vendors that meet your needs and align with your dream wedding.</p>
                    </div>
                    <div class="poin">
                        <h3>Reviews & Ratings</h3>
                        <p>Reviews & ratings will help you choose the best vendor.</p>
                    </div>
                    <div class="poin">
                        <h3>Portfolio</h3>
                        <p>View the portfolio and services offered by vendors.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

