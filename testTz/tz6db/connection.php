<?php
    $host = 'localhost'; 
    $database = 'testdb'; 
    $user = 'root';
    $password = 'root'; 
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$database;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $user, $password, $opt);

    try {
        $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        die('Подключение не удалось: ' . $e->getMessage());
    }
?>

