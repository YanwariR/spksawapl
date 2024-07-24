<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK | Login</title>

    <link rel="stylesheet" href="styles/styles-login.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/play-list-search.css' rel='stylesheet'>
</head>
<body>
    <div class="bg">
        <img src="bg.png" alt="bg">
    </div>
    <div class="container">
        <div class="box">
            <div class="left">
                <span class="kartu">
                    <img src="kartu.png" alt="">
                </span>
            </div>
            <div class="right">
                <span class="logo">
                    <img src="logo.png">
                </span>
                
                <span class="welkam">Welcome, Again</span>
                <span class="subwelkam">Decision Support System.</span>
                
                <form method="POST" action="login.php">
                    <input id="input" type="email" name="email" placeholder="Email Address" required>
                    <input id="input2" type="password" name="password" placeholder="Password" required>
                    <button type="submit" class="login2">Login</button>
                </form>
               
                <span class="forgot">Forgot Password?</span>
                
                <button class="signin">
                    <i class='bx bxl-google google'></i>
                    Sign In with Google
                </button>

                <div class="daftar">
                    Don't have an account yet? <span class="daftar2">Sign up.</span>
                </div>
            </div>
        </div>
    </div>

    <?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email == 'admin@hola.com' && $password == '1234') {
            $_SESSION['loggedin'] = true;
            header('Location: index.php');
            exit();
        } else {
            echo "<script>alert('Email atau password salah!');</script>";
        }
    }
    ?>
</body>
</html>
