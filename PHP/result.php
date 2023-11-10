<!DOCTYPE html>
<html lang="en" dir= "ltr">
    <head>
        <meta charset= "utf-8">
        <title></title>
    </head>
<?php
    // phuong thuc GET
        $name = $_GET["name"];
        $password = $_GET["password"];
        $sodienthoai = $_GET["sodienthoai"];
        $email = $_GET["email"];
        $diachi = $_GET["diachi"];

    // in thong tin
        echo "<h1>Thong tin dang ki</h1>";
        echo "<p>Ten: $name</p>";
        echo "<p>Password: $password</p>";
        echo "<p>SDT: $sodienthoai</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Dia chi: $diachi</p>";
    ?>
