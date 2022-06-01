<?php session_start(); ?>
<?php 
    if(!empty($_POST['login']) and !empty($_POST['password1']) and !empty($_POST['password2']) and !empty($_POST['date']) and !empty($_POST['email']) and !empty($_POST['name']) and !empty($_POST['country'])) {

        if($_POST['password1'] === $_POST['password2']) {
            $connect =  mysqli_connect('localhost', 'mysql', 'mysql', 'registr');
            $login = $_POST['login'];
            $pass = password_hash($_POST['password1'], PASSWORD_DEFAULT);
            $date = $_POST['date'];
            $email = $_POST['email'];
            $country = $_POST['country'];
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $famaly = $_POST['famaly'];

            $double_check = "SELECT login FROM login WHERE login = '$login'";
            $user_double_check = mysqli_query($connect, $double_check) or die(mysqli_error($double_check));

            if(empty(mysqli_fetch_assoc($user_double_check))) {

                if(preg_match("/^[a-z0-9-_]{4,10}$/i", $login)) {
                    if(mb_strlen($pass) >= 6) {
                        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $add_new_user = "INSERT INTO login(login, pasword, date, email, country, name, last_name, famaly, id_status) VALUES ('$login', '$pass', '$date', '$email', '$country', '$name', '$lastname', '$famaly', '1')";
            mysqli_query($connect, $add_new_user) or die(mysqli_error($add_new_user));

            $id = mysqli_insert_id($connect);
            $_SESSION['id'] = (string) $id;
            $_SESSION['login'] = $login;
            $_SESSION['success'] = "Добро пожаловать!";
            $_SESSION['auth'] = true;
            header('Location: index.php');
                        } else {
                            $email_uncorrect = 'Введите корректный email!!!';
                        }
                    } else {
                        $pass_uncorrect = 'Пароль должен быть длиной от 6 до 12 символов';
                    }
                } else {
                    $login_uncorrect = 'Логин может состоять только из латинских букв или цифр и иметь не менее 4 и не более 10 сиволов!!!';
                }

            } else {
                $login_double = "данный логин уже существует!!!";
            }

        } else {
            $pass_double_uncorrect = "повторный пароль не совпадает!!!";
        }
        
    } else {
        $all_input = "Необходимо заполнить все поля!!!" . "<br>";
     
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
<?php include 'header.php'; ?>
<!-- Зарегистрируйте нового пользователя и авторизуйтесь под ним. Убедитесь, что все работает, как надо -->

<!-- Внесите изменения в регистрацию с учетом хеширования, зарегистрируйте пару новых пользователей, убедитесь, что в базу данных они добавились с хешированными паролями. -->

    <form action="" method="POST">
        <h3>Пройдите регистрацию:</h3>
        <?php echo $all_input ?>
        <input type="text" name="login" placeholder="придумайте логин" value=<?php if(!empty($_POST['login'])) echo $_POST['login'] ?>> <?php echo $login_uncorrect ?> <?php echo $login_double ?> <br>

        <input type="password" name="password1" placeholder="придумайте пароль" value=<?php if(!empty($_POST['password1'])) echo $_POST['password1'] ?>> <?php echo $pass_uncorrect?> <br>

        <input type="password" name="password2" placeholder="повторите пароль" value=<?php if(!empty($_POST['password2'])) echo $_POST['password2'] ?>> <?php echo $pass_double_uncorrect ?> <br>
        
        <input type="date" name="date" placeholder="введите дату рождения" value=<?php if(!empty($_POST['date'])) echo $_POST['date'] ?>> <br>

        <input type="email" name="email" placeholder="введите свой email" value=<?php if(!empty($_POST['email'])) echo $_POST['email'] ?>> <?php echo $email_uncorrect ?> <br>

        <input type="text" name="name" placeholder="введите свое имя" value=<?php if(!empty($_POST['name'])) echo $_POST['name'] ?>> <br>

        <input type="text" name="lastname" placeholder="введите свое отчество" value=<?php if(!empty($_POST['lastname'])) echo $_POST['lastname'] ?>> <br>

        <input type="text" name="famaly" placeholder="введите свою фамилию" value=<?php if(!empty($_POST['famaly'])) echo $_POST['famaly'] ?>> <br>

        <span>Выберите страну проживания:</span>
        <select name="country">
            <option value="Russia" <?php if($_POST['country'] == "Russia") echo selected ?> >Россия</option>
            <option value="USA" <?php if($_POST['country'] == "USA") echo selected ?> >США</option>
            <option value="Germany" <?php if($_POST['country'] == "Germany") echo selected ?> >Германия</option>
        </select> <br>


        <input type="submit">
    </form> <br> <br>

    <a href="index.php">На главную страницу</a>
</body>
</html>
