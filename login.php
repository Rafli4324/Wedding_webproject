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
                <li><a href="index2.html">About</a></li>
                <li><a href="#">Explore</a></li>
                <li><a href="index.php">Home</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
        
        <?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    require_once 'conn.php';

    $sql1 = "SELECT * FROM user WHERE email = '$email'";
    $q1 = mysqli_query($conn, $sql1);
    if ($q1) {
        $r1 = mysqli_fetch_array($q1,MYSQLI_ASSOC);
        if ($r1) {
            if ($password === $r1["password"]) {
                header("Location: index.php");

            } else {
                echo "<div class='alert alert-danger'>Password tidak sesuai</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Email tidak ditemukan</div>";
        }
    }  
}
?>

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
                <button type="submit"name="login">LOGIN</button>
                <button type="button" onclick="window.location.href='sigin.php'">SIGN UP</button>
            </form>
        </div>
    </main>
</body>
</html>
