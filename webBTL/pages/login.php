<?php
include('../includes/db.php');

if (isset($_POST['username']) && isset($_POST['password'])) {
    $userName = $_POST['username'];
    $passWord = $_POST['password'];
    $role;
    $sql = "SELECT * FROM users WHERE `Username` = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $userName);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        if ($passWord == $row['Password']) {
            session_start();
            $_SESSION['role'] = $row['Role'];
            $_SESSION['user'] = $userName;
            $_SESSION['UserId'] = $row['UserId'];
            header('Location: ../index.php');
            exit();
        } else {
            echo "<script>alert('Vui lòng nhập lại mật khẩu');</script>";
        }
    } else {
        echo "<script>alert('Tên đăng nhập không chính xác');</script>";
    }
} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<script>alert('Vui lòng nhập đầy đủ thông tin');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-6.6.0-web/css/all.min.css">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

        .login-container {
            display: flex;
            width: 100%;
        }

        .form-section {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 0 10%;
        }

        .form-section h2 {
            font-size: 2.5em;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group input {
            width: 100%;
            padding: 15px;
            padding-right: 40px;
            border-radius: 12px;
            border: none;
            background-color: #f3f6fd;
            font-size: 16px;
        }

        .form-group i {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #a0a0a0;
        }

        .form-section .forgot {
            text-align: right;
            font-size: 14px;
            color: #a0a0a0;
            margin-bottom: 30px;
        }

        .form-section button {
            width: 100%;
            background-color: #1e90ff;
            color: white;
            padding: 15px;
            font-size: 16px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
        }

        .form-section .create-account {
            margin-top: 20px;
            font-size: 14px;
            color: #a0a0a0;
        }

        .form-section .create-account a {
            color: #1e90ff;
            text-decoration: none;
            font-weight: bold;
        }

        .image-section {
            flex: 1;
            background: url('../assets/img/login.jpg') no-repeat center center/cover;
            clip-path: polygon(15% 0%, 100% 0%, 100% 100%, 0% 100%);
        }

        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
            }

            .image-section {
                display: none;
            }

            .form-section {
                padding: 0 20px;
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="form-section">
            <h2>Log in to your account.</h2>
            <form method="POST" action="login.php">
                <div class="form-group">
                    <input type="text" name="username" placeholder="Email" required>
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class="fas fa-eye-slash"></i>
                </div>
                <div class="forgot">Forgot your password?</div>
                <button type="submit">Login</button>
                <div class="create-account">Don't have an account? <a href="register.php">Create Account</a></div>
            </form>
        </div>
        <div class="image-section"></div>
    </div>
</body>

</html>