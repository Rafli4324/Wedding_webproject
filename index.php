<?php
// Mulai session untuk mengecek status login
session_start();
// Debugging: Uncomment the following line to check session variables


// Inklusi koneksi database
include 'conn.php';

// Mengecek apakah pengguna sudah login
$isLoggedIn = isset($_SESSION['user_id']);  // Periksa apakah user_id ada di session
$business_name = "";  // Variabel untuk menyimpan nama bisnis

// Jika pengguna sudah login, ambil nama bisnis
if ($isLoggedIn) {
    $user_id = $_SESSION['user_id'];  // Ambil user_id dari session

    // Perbaiki nama tabel jika salah
    $sql = "SELECT business_name FROM user WHERE id_user = ?"; // Ganti 'user' dengan 'user'
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $user_id); // Bind parameter untuk mencegah SQL Injection
    $stmt->execute();
    $result = $stmt->get_result();

    // Jika ada hasil, ambil business-name
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $business_name = $row['business_name'];
    }
    $stmt->close(); // Menutup statement prepared
}

// Menutup koneksi database
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&family=Simonetta:ital,wght@0,400;0,900;1,400;1,900&display=swap" rel="stylesheet">
</head>
<body>
  <!-- seaacrh -->
  <nav>
    <div class="btn">
      <input type="text" placeholder="Search">
      <?php if ($isLoggedIn): ?>
        <div>
          <div class="profile-user">
            <span><?php echo htmlspecialchars($business_name); ?></span>
          </div>
          <a href="logout.php" class="logout-btn">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
        </div>
      <?php else: ?>
        <h1 class="btn-txt1">Mau menjadi vendor?</h1>
        <a href="login.php" class="masuk">Masuk</a>
        <a href="signup.php" class="daftar">Daftar</a>
      <?php endif; ?>
    </div>
  </nav>
  <hr>
  
  <!-- navigation -->
  <nav class="navbar-nav">
    <div class="navbar">
      <a href="#" class="home">Home</a>
      <a href="#" class="blog">Blog</a>
      <a href="vendor.html" class="vendor">Vendor</a>
      <a href="#" class="contact">Contact Us</a>
    </div>
  </nav>
<!-- Content Section -->
  <section>
    <div class="container">
      <h1 class="container1">Venue Di Jakarta...</h1>
      <h1 class="container2">Lihat Rekomendasi dengan semua budget</h1>
    </div>
  </section>

  <!-- image 1-->
  <section class="gambar1">
    <img src="../Wedding/image/la'seine.jpg" alt="" class="gbr">
    <div class="Indoor">
      <h1 class="gmbr-txt1">Indoor Cyber2tower</h1>
      <p class="gmbr-p1">By La'SEINE Function Hall</p>
      <a href="indoor.html"><button class="dtl">Detail</button></a>
    </div>
  </section>
<!-- image 1 end -->

<!-- image 2 -->
  <section class="gambar2">
    <div class="Indoor2">
      <h1 class="gmbr-txt2">Kuningan City Ballroom</h1>
      <p class="gmbr-p2">By Preciosa Wedding</p>
      <button class="dtl2">Detail</button>
    </div>
    <img src="../Wedding/image/preciosa.jpg" alt="" class="gbr2">
  </section>
<!-- image 2 end -->

<!-- image  3-->
  <section class="gambar3">
    <img src="../Wedding/image/ikk.jpg" alt="" class="gbr3">
    <div class="Indoor3">
      <h1 class="gmbr-txt3">Menara Mandiri 9F </h1>
      <p class="gmbr-p3">By IkkWedding.id</p>
      <button class="dtl3">Detail</button>
    </div>
  </section>
  <!-- image 3 end -->

  <!-- Bli venue -->
  <SECtion>
    <div class="container">
      <h1 class="container1">Venue Di Bali...</h1>
      <h1 class="container2">Lihat Rekomendasi dengan semua budget</h1>
    </div>
  </SECtion>

  <!-- image bali 4  -->
  <section class="gambar4">
    <img src="../Wedding/image/Emerald.png" alt="" class="gbr4">
    <div class="Indoor4">
      <h1 class="gmbr-txt4">Emerald Forest</h1>
      <p class="gmbr-p4">By Tirtha Bali</p>
      <button class="dtl4">Detail</button>
    </div>
  </section>
  <!-- imaage 4 end -->

  <!-- image bali 5  -->
  <section class="gambar5">
    <div class="Indoor5">
      <h1 class="gmbr-txt5">Ayana Villa</h1>
      <p class="gmbr-p5">By Ayana Resort</p>
      <button class="dtl5">Detail</button>
    </div>
    <img src="../Wedding/image/ayana.jpg" alt="" class="gbr5">
  </section>
<!-- image bali 5 end -->

<!-- image bali 6  -->
  <section class="gambar6">
    <img src="../Wedding/image/alila.jpg" alt="" class="gbr6">
    <div class="Indoor6">
      <h1 class="gmbr-txt6">Alila Seminyak Penthouse </h1>
      <p class="gmbr-p6">By Alila Seminyak Bali</p>
      <button class="dtl6">Detail</button>
    </div>
  </section>
<!-- image bali 6 eng  -->
  
  <!-- Footer -->
  <footer>
  <div class="footer-content">
    <div  class="logo">
      <img src="hxh.png" alt="" class="logo-footer"> 
    </div>
    <div class="text-footer">
      <h1 class="info-ftr">Hubungi Kami</h1>
      <p class="number-ftr">085241571891/08131374987</p>
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