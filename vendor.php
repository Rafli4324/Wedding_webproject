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
    <title>Document</title>
    <link rel="stylesheet" href="../Wedding/css/vendor.css">
</head>
<body>
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
            <a href="logout.php" class="logout-btn">
              <i class="fas fa-sign-out-alt"></i> Logout
            </a>
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
    
      <!-- navigation -->
      <nav class="navbar-nav">
        <div class="navbar">
          <a href="index.php" class="home">Home</a>
          <a href="#" class="blog">Blog</a>
          <a href="#" class="vendor">Vendor</a>
          <a href="index2.php" class="contact">About Us</a>
        </div>
      </nav>

      <section>
        <div class="section-vdr">
        <div class="container">
          <div class="vdr">
            <img src="./image/vendor1.png" alt="Ikk Wedding" class="vendor1">
            <h3>Jiewa Visual</h3>
            <p>Fotografi</p>
            <p>Jakarta Barat</p>
            <div class="rating">
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
            </div>
          </div>
        

          <div class="vdr">
            <img src="./image/vendor2.png" alt="Ikk Wedding" class="vendor2">
            <h3>Preciosa Wedding</h3>
            <p>Venue</p>
            <p>Jakarta Pusat</p>
            <div class="rating">
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
            </div>
          </div>
    

          <div class="vdr">
            <img src="./image/vendor3.png" alt="Ikk Wedding" class="vendor3">
            <h3>Ikk Wedding</h3>
            <p>Venue</p>
            <p>Jakarta Selatan</p>
            <div class="rating">
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
            </div>
          </div>
        </div>

          <div class="container-2">
            <div class="vdr-2">
              <img src="./image/vendor4.png" alt="Ikk Wedding" class="vendor4">
              <h3>Tirtha Bali</h3>
              <p>Venue</p>
              <p>Bali</p>
              <div class="rating">
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
              </div>
            </div>
            
  
            <div class="vdr-2">
              <img src="./image/vendor5.png" alt="Ikk Wedding" class="vendor5">
              <h3>Ayana Resort</h3>
              <p>Venue</p>
              <p>Bali</p>
              <div class="rating">
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
              </div>
            </div>
  
            <div class="vdr-2">
              <img src="./image/vendor6.png" alt="Ikk Wedding" class="vendor6">
              <h3>Alila Seminyak</h3>
              <p>Venue</p>
              <p>Bali</p>
              <div class="rating">
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
              </div>
            </div>
          </div>

      </section>


      <footer>
        <div class="footer-content">
            <div  class="logo">
            <img src="./image/logo-removebg.png" alt="" class="logo-footer">  
            </div>
    
              <div class="text-footer">
                <h1 class="info-ftr">Hubungi Kami</h1>
                <p class="number-ftr">085241571891 / 08131374987</p>
    
                <div class="img-footer">
                  <img src="./image/facebook 1.png" alt="" class="img-footer1">
                  <img src="./image/twitter 1.png" alt="" class="img-footer2">
                  <img src="./image/instagram 1.png" alt="" class="img-footer3">
                  <img src="./image/whatsapp 1.png" alt="" class="img-footer4">
              </div>
              </div>
          </div>
       </footer>
</body>
</html>