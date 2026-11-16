<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Авторизация</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="app-layout">
            <?php include_once 'header.php' ?>

            <div class="main-content">
                <main>
                    <div class="choose-page">
                        <form class="choose-form">
                            <h2>Авторизуйтесь в системе</h2>
                            <div class="form-group">
                                <label for="btn-chs">или вы можете зарегистрироваться</label>
                                <a href="log_in.php" class="btn-chs1">Войти</a>
                                <a href="registration.php" class="btn-chs2">Регистрация</a>
                            </div>
                        </form>
                    </div>
                </main>
                <section></section>
                <footer></footer>
            </div>
        </div>
    </body>
</html> 