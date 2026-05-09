<?php
session_start();

$valid_username = "admin";
$valid_password = "Admin@123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if (empty($username) || empty($password)) {
        echo "<h3 style='color:red; text-align:center;'>Vui lòng không để trống tên đăng nhập hoặc mật khẩu!</h3>";
        echo "<p style='text-align:center;'><a href='login.html'>Quay lại đăng nhập</a></p>";
        exit();
    }

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $username;

        header("Location: success.php");
        exit();
    } else {
        echo "<h3 style='color:red; text-align:center;'>Tên đăng nhập hoặc mật khẩu không đúng!</h3>";
        echo "<p style='text-align:center;'><a href='login.html'>Quay lại đăng nhập</a></p>";
        exit();
    }

} else {
    header("Location: login.html");
    exit();
}
?>