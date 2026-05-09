<?php
session_start();

if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập thành công</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f6fc;
            text-align: center;
            padding-top: 100px;
        }

        .box {
            background-color: white;
            width: 400px;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }

        h2 {
            color: green;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #cc0000;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background-color: #990000;
        }
    </style>
</head>

<body>

    <div class="box">
        <h2>Đăng nhập thành công!</h2>
        <p>Xin chào: <b><?php echo $_SESSION["username"]; ?></b></p>

        <a href="logout.php">Đăng xuất</a>
    </div>

</body>
</html>