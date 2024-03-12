<!DOCTYPE html>
<html>
<head>
    <title>Вход на сайт</title>
</head>
<body>
    <h2>Форма входа</h2>
    <form method="post" action="">
        <label for="login">Логин:</label><br>
        <input type="text" id="login" name="login" required><br>
        <label for="password">Пароль:</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" name="submit" value="Войти">
    </form>

    <?php
    
    if(isset($_POST['submit'])) {
        
        $valid_login = 'user';
        $valid_password = 'password';

        
        $login = $_POST['login'];
        $password = $_POST['password'];

        
        if($login === $valid_login && $password === $valid_password) {
            echo "<p>Добро пожаловать, $login!</p>";
        } else {
            echo "<p>Ошибка входа. Пожалуйста, проверьте введенные данные.</p>";
        }
    }
    ?>
</body>
</html>
