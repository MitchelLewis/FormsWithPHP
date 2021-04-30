<?php
    $host = "localhost";
    $db = "carent";
    $user = "root";
    $pass = "";
    $dsn = "mysql:host=$host;dbname=$db;";
    $opt = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];
    try {
        $pdo = new PDO($dsn, $user, $pass, $opt);
    } catch (Exception $e) {
        echo "<h1>Failed to connect to DB</h1><p>Exception caused by: $e</p>";
    }
    
    
?>