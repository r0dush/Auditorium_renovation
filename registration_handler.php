<?php
    require_once 'db.php';
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $password_conf = $_POST['password_conf'];

        if($password != $password_conf){
            die("Пароли не совпадают! <a href='registration.php'>Назад</a>");
        }

            try{$hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (first_name, second_name, login, password) VALUES (?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);

            $stmt->execute([$name, $surname, $login, $hashed_password]);

            header("Location: log_in.php");
            exit();
            }
            catch(PDOException $e){
                if($e->getCode() == 23000)
                    die("Этот логин уже занят! <a href='registration.php'>Попробуйте другой</a>");
                else {
                    die("Ошибка базы данных: " . $e->getMessage());
            }
            }



    }

?>