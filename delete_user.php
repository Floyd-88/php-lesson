<?php
session_start();
$id = $_SESSION['id'];

$connect =  mysqli_connect('localhost', 'mysql', 'mysql', 'registr');
$select_id = "SELECT * FROM login WHERE id = '$id'";
$result = mysqli_query($connect, $select_id);
$user = mysqli_fetch_assoc($result) or die(mysqli_error($result));


if(!empty($_POST['password'])) {
    $hash = $user['pasword'];
    $pass = $_POST['password'];
if(password_verify($pass, $hash)) {
    $delete_user = "DELETE FROM login WHERE id='$id'";
    mysqli_query($connect, $delete_user) or die(mysqli_error($delete_user));
    session_destroy(); 
    header('Location:index.php?id=$id');
    } else {
    echo "Пароль введен неверно!!!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete_user</title>
</head>
<body>
<?php include 'header.php' ?>
    <form action="" method="POST">
        <h3>Удалить профиль:</h3>
        <input type="password" name="password" placeholder="введите пароль"> <br>
        <input type="submit">
    </form> <br>
    <a href="profile.php?id=<?= $id ?>">Назад в профиль</a>
</body>
</html>

<!-- Необходимо осуществить возможность удаления профиля -->