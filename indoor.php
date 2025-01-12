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
    <link rel="stylesheet" href="../Wedding/css/indoor.css">
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
          <a href="vendor.php" class="vendor">Vendor</a>
          <a href="index2.php" class="contact">About Us</a>
        </div>
      </nav>
    
    <section>
        <div class="indoor2">
            <img src="../Wedding/image/indoor4.jpg" alt="" class="pp">
          <div class="name-vendor">
            <h1>Indoor Cyber2tower</h1>
            <p>By La'SEINE Function Hall</p>
          </div>
        </div>


        <div class="img-1">
          <img src="../Wedding/image/indoor1.jpg" alt="" class="content-1">
          <img src="../Wedding/image/indoor2.jpg" alt="" class="content-2">
          <img src="../Wedding/image/indoor3.jpg" alt="" class="content-3">
          <img src="../Wedding/image/indoor4.jpg" alt="" class="content-4">
        </div>

        <div class="img-2">
          <img src="../Wedding/image/indoor9.jpg" alt="" class="content-5">
          <img src="../Wedding/image/indoor6.jpg" alt="" class="content-6">
          <img src="../Wedding/image/indoor7.jpg" alt="" class="content-7">
          <img src="../Wedding/image/indoor9.jpg" alt="" class="content-8">
        </div>

        
        <div class="harga">
          <p class="hrg">Harga :</p>
          <h1 class="jumlah">RP.100.000.000</h1>
        </div>
        
        <div class="kapasitas">
          <p class="name-kps">Kapasistas :</p>
          <h1 class="max">400 Orang</h1>
        </div>
        
        <div class="dtl">
          <h1 class="dtl-txt">Detail Harga termasuk :</h1>
          <p>Biaya semua Vendor dari Luar</p>
          <p>8 ( delapan) jam penggunaan Venue termasuk Ruangan VIP</p>
          <p>Electricity 9000 watt</p>
          <p>Slide show TV di reception area</p>
          <p>Air Conditioner ( AC )</p>
          <button><a href="https://web.whatsapp.com/">Chat vendor sekarang</a></button>
        </div>
    </section>

    <footer>
      <div class="footer-content">
          <div  class="logo">
          <img src="./image/logo-removebg.png" alt="" class="logo-footer"> 
          </div>
  
            <div class="text-footer">
              <h1 class="info-ftr">Hubungi Kami</h1>
              <p class="number-ftr">085241571891/08131374987</p>
  
              <div class="img-footer">
                <img src="../Wedding/image/facebook 1.png" alt="" class="img-footer1">
                <img src="../Wedding/image/twitter 1.png" alt="" class="img-footer2">
                <img src="../Wedding/image/instagram 1.png" alt="" class="img-footer3">
                <img src="../Wedding/image/whatsapp 1.png" alt="" class="img-footer4">
            </div>
            </div>
        </div>
     </footer>
</body>
</html>