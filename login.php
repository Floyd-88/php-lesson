<?php
session_start();
    if(!empty($_POST['login'] and !empty($_POST['pass']))) {
        $login = $_POST['login'];
        // $pass = md5($_POST['pass']);
        $connect =  mysqli_connect('localhost', 'mysql', 'mysql', 'registr');
        $reg = "SELECT * FROM login WHERE login='$login'";
        $result = mysqli_query($connect, $reg) or die(mysqli_error($reg));
        $user = mysqli_fetch_assoc($result);
        
        if(!empty($user)) {
            $pass = $_POST['pass'];
                if(password_verify($pass, $user['pasword'])) {
            header('Location: index.php');
            
            $_SESSION['id'] = $user['id'];
            $_SESSION['login'] = $user['login'];
            $_SESSION['success'] = "Добро пожаловть";
            $_SESSION['auth'] = true;
                } else {
                echo "Введенный логин или пароль не верны!";
                session_destroy();
                }
        } else {
            echo "Введенный логин или пароль не верны!";
            session_destroy();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Сделайте так, чтобы, если пользователь прошел авторизацию - выводилось сообщение об этом, а если не прошел - то сообщение о том, что введенный логин или пароль вбиты не правильно. -->

    <form action="" method="POST">
        <p>Авторизация пользователя:</p>
        <span>введите логин: </span><br>
        <input name="login" type="text" value=<?php if(!empty($_POST['login']))echo $_POST['login'] ?>> <br>
        <span>введите пароль: </span><br>
        <input name="pass" type="password" value=<?php if(!empty($_POST['pass']))echo $_POST['pass'] ?>> <br>
        <input type="submit">
    </form>

<!-- Пусть на нашем сайте, кроме страницы login.php, есть еще и страницы 1.php, 2.php и 3.php. Сделайте так, чтобы к этим страницам мог получить доступ только авторизованный пользователь. -->

<!-- Внесите изменения в авторизацию с учетом хеширования, попробуйте авторизоваться под зарегистрированными ранее пользователями. -->
</body>
</html>