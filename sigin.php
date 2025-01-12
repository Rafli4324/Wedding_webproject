<?php
include('conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $service_category = $_POST['service_category'];
    $business_name = $_POST['business_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Membuat ID baru untuk user
    $result = $conn->query("SELECT MAX(id_user) AS last_id FROM user");
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $last_id = $row['last_id'];
    } else {
        $last_id = 0;
    }
    $last_id_number = (int)str_replace('ACC-', '', $last_id);
    $new_id = 'ACC-' . str_pad($last_id_number + 1, 4, '0', STR_PAD_LEFT);

    // Hashing password untuk keamanan
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Menyisipkan data ke dalam database
    $stmt = $conn->prepare("INSERT INTO user (id_user, email, password, `service-category`, `business-name`) 
                            VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $new_id, $email, $hashed_password, $service_category, $business_name);

    if ($stmt->execute()) {
        // Redirect ke halaman utama jika berhasil
        header("Location: index.php");
        exit();
    } else {
        // Tampilkan pesan error jika terjadi kesalahan
        echo "Terjadi kesalahan saat menyimpan data: " . $stmt->error;
    }
    $stmt->close();
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Sign in</title>
    <link rel="stylesheet" href="./css/sigin.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Faq</a></li>
                <li><a href="index2.html">About</a></li>
                <li><a href="#">Explore</a></li>
                <li><a href="index.php">Home</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
            <h1>Welcome!</h1>
            <p class="Create">Create Your Business Profile</p>
            <form action="sigin.php" method="POST">
                <label for="service-category"></label>
                <input type="text" id="service-category" name="service_category" placeholder="Service Category" required>
    
                <label for="business-name"></label>
                <input type="text" id="business-name" name="business_name" placeholder="Business Name" required>
    
                <label for="email"></label>
                <input type="email" id="email" name="email" placeholder="Email" required>
    
                <label for="password"></label>
                <input type="password" id="password" name="password" placeholder="Password" required>
    
                <button type="submit">SIGN UP</button>
            </form>
        </div>
    </main>
</body>
</html>
