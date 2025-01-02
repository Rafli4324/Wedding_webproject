<?php
session_start();
include("conn.php");

$email = "";
$password = "";
$err = "";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validasi input kosong
    if ($email == '' || $password == '') {
        $err .= "<li>Silakan masukkan email dan password</li>";
    }

    if (empty($err)) {
        // Mengecek akun dalam database
        $sql1 = "SELECT * FROM login_acc WHERE email = '$email'";
        $q1 = mysqli_query($conn, $sql1);
        $r1 = mysqli_fetch_array($q1);

        if ($r1['password'] != md5($password)) {
            $err .= "<li>Akun tidak ditemukan atau password salah</li>";
        }
    }

    // Jika tidak ada error, arahkan ke halaman index.html
    if (empty($err)) {
        $_SESSION['email'] = $email;
        header("Location: index.html");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Faq</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Explore</a></li>
                <li><a href="#">Home</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
            <h1>Welcome!</h1>
            <p class="Create">Login to continue</p>
            <form method="POST">
                <label for="email"></label>
                <input type="email" id="email" name="email" placeholder="Email" required>
    
                <label for="password"></label>
                <input type="password" id="password" name="password" placeholder="Password" required>

                <div class="forgot-password">
                    <a style="text-decoration: none; color: #C51919;" href="#">forgot password</a>
                </div>
                <button type="button" onclick="window.location.href='index.html'">LOGIN</button>
                <button type="button" onclick="window.location.href='sigin.html'">SIGN IN</button>
            </form>
        </div>
    </main>
</body>
</html>
