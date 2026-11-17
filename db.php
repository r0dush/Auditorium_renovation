<?php
    $host = 'MySQL-8.4';
    $dbname = 'project_db';
    $user = 'root';
    $password ='';

    try {
        $pdo = new PDO("mysql:host=$host;dbname = $dbname;charset = utf8mb4",$user,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        die("Не удалось подключиться к базе данных" . $e->getMessage());
    }
    
?>