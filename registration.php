<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Регистрация</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="app-layout">
            <?php include_once 'header.php' ?>

            <div class="main-content">
                <main>
                    <div class="login-page">
                        <form action="login_handler.php" method="post" class="auth-form">
                            <h2>Регистрация в системе</h2>

                            <div class="form-group">
                                <label for="name">Имя:</label>
                                <input type="text" id="name" placeholder="Введите ваше имя" required>
                            </div>

                            <div class="form-group">
                                <label for="surname">Фамилия:</label>
                                <input type="text" id="surname" placeholder="Введите вашу фамилию" required>
                            </div>

                            <div class="form-group">
                                <label for="login">Логин:</label>
                                <input type="text" id="login" name="login" placeholder="Придумайте логин" required>
                            </div>

                            <div class="form-group">
                                <label for="user_password1">Пароль:</label>
                                <input type="password" id="user_password1" name="password" placeholder="Придумайте пароль" required>
                            </div>

                            <div class="form-group">
                                <label for="user_password2">Пароль:</label>
                                <input type="password" id="user_password2" name="password" placeholder="Повторите пароль" required>
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