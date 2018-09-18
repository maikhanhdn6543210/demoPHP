<?php
    $dsn = 'mysql:host=localhost;dbname=product_demo';
    $username = 'root';
    $password = '';

    $db = new PDO($dsn, $username, $password);

    $conn = mysqli_connect('localhost', 'root', '', 'product_demo');
?>