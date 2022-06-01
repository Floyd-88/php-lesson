<?php session_start() ?>
<!-- Сделайте страницу users.php, зайдя на которую любой пользователь нашего сайта может увидеть список всех зарегистрированных пользователей нашего сайта в виде ссылок. Каждая ссылка будет вести на соответствующий профиль. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
<?php include 'header.php' ?>

    <h1>Список пользователей</h1>
    <?php
    $connect =  mysqli_connect('localhost', 'mysql', 'mysql', 'registr');
    $id = "SELECT * FROM login";
    $result = mysqli_query($connect, $id) or die(mysqli_error($id));
  $arr = [];
    for($arr=[]; $id_user = mysqli_fetch_assoc($result); $arr[] = $id_user);
    // var_dump($id_user);
    foreach ($arr as $elem) { ?>
    <a href="profile.php?id=<?php echo $elem['id'] ?>">
    <?php echo $elem['famaly'] . " ". $elem['name'] . " ". $elem['last_name'] ?>
    </a> <br> 
    <?php 
    } 
    ?>
</body>
</html>