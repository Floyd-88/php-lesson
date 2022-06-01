<?php
session_start();
$id = $_SESSION['id'];

$connect =  mysqli_connect('localhost', 'mysql', 'mysql', 'registr');
$select_id = "SELECT * FROM login WHERE id='$id'"; 
$result = mysqli_query($connect, $select_id) or die(mysqli_error($select_id));
$user = mysqli_fetch_assoc($result);

$hash = $user['pasword'];
$old_password = $_POST['old_password'];
$new_password_1 = $_POST['new_password_1'];
$new_password_2 = $_POST['new_password_2'];

if(!empty($old_password) and !empty($new_password_1) and !empty($new_password_2)) {
    if(password_verify($old_password, $hash)) {
        if($new_password_1 === $new_password_2) {
        $newPasswordHash = password_hash($new_password_1, PASSWORD_DEFAULT);

        $query_new_pass = "UPDATE login SET pasword='$newPasswordHash' WHERE id = '$id'";
        mysqli_query($connect, $query_new_pass) or die(mysqli_error($query_new_pass));
        header('Location:profile.php?id=$id');
        } else {
            echo "Новые пароли не соответсвуют друг другу";
        }
    } else {
        echo "Старый пароль введен неверно!!!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>
<body>
<?php include 'header.php' ?>
    <form action="" method="POST">
        <h3>Сменить пароль:</h3>
        <input type="password" name="old_password" placeholder="введите старый пароль"> <br>
        <input type="password" name="new_password_1" placeholder="введите новый пароль"><br>
        <input type="password" name="new_password_2" placeholder="повторите новый пароль"><br>
        <input type="submit">
    </form> <br>
    <a href="profile.php?id=<?= $id ?>">Назад в профиль</a>
</body>
</html>

<!-- Смена старого пароля на новый -->