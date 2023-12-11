<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "admin" && $password === "pas") {
        echo "Đăng nhập thành công! Xin chao userId";
    } else {
        echo '<a href="index.php">Đăng nhập thất bại.</a>';
    }
}
?>
