<?php require_once 'db.php';
session_start();?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Вход</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="app-layout">
            <?php include_once 'header.php' ?>

            <div class="main-content">
                <main>
                    <div class="login-page">
                        <form action="login_handler.php" method="post" class="auth-form">
                            <h2>Вход в систему</h2>

                            <div class="form-group">
                                <label for="login">Логин:</label>
                                <input type="text" id="login" name="login" placeholder="Введите логин" required>
                            </div>

                            <div class="form-group">
                                <label for="user_password">Пароль:</label>
                                <input type="password" id="user_password" name="password" placeholder="Введите пароль!" required>
                            </div>

                            <button type="submit" class="btn-submit">Войти</button> 

                        </form>
                    </div>
                </main>
                <section>
                    
                </section>
                <footer></footer>
            </div>
        </div>
    </body>
</html>