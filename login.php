<?php
session_start(); // Start the session

// Check if the login button is pressed
if (isset($_POST['login'])) {
    // Get and sanitize input
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Connect to the database
    require_once 'conn.php';

    // Query to get user data based on email
    $sql1 = "SELECT id_user, business_name, role, password FROM user WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql1);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 's', $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result) {
            $r1 = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($r1) {
                // Verify password
                if ($password === $r1['password']) { 
                    // Password is correct, set session variables
                    $_SESSION['email'] = $email;
                    $_SESSION['role'] = $r1['role'];
                    $_SESSION['user_id'] = $r1['id_user']; // Save user ID in session
                    $_SESSION['business_name'] = isset($r1['business_name']) ? htmlspecialchars($r1['business_name']) : ""; 

                    // Close statement and redirect to homepage
                    mysqli_stmt_close($stmt);
                    mysqli_close($conn);
                    header("Location: index.php"); // Redirect to index after login
                    exit();
                } else {
                    echo "<div class='alert alert-danger'>Password is incorrect</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>Email not found</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Error fetching data</div>";
        }

        mysqli_stmt_close($stmt);
    } else {
        die("Query failed: " . mysqli_error($conn));
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <h1>Welcome!</h1>
            <p class="Create">Login to continue</p>
            <form method="POST">
                <label for="email"></label>
                <input type="email" id="email" name="email" placeholder="Email" required>
    
                <label for="password"></label>
                <input type="password" id="password" name="password" placeholder="Password" required>

                <div class="forgot-password">
                    <a style="text-decoration: none; color: #C51919;" href="#">Forgot password?</a>
                </div>
                <button type="submit" name="login">LOGIN</button>
                <button type="button" onclick="window.location.href='sigin.php'">SIGN UP</button>
            </form>
        </div>
    </main>
</body>
</html>
