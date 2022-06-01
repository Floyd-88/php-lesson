<?php
session_start();
$id = $_SESSION['id'];

?>
<?php
$connect =  mysqli_connect('localhost', 'mysql', 'mysql', 'registr');

if(!empty($_POST['submit']) and !empty($_POST['country'])) {


$date = $_POST['date'];
$email = $_POST['email'];
$country = $_POST['country'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$famaly = $_POST['famaly'];

if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    if(!empty($date) and !empty($email) and !empty($name)) {
     header("Location: profile.php?id=$id");
$query_update = "UPDATE login SET date='$date', email='$email', country='$country', name='$name', last_name='$lastname', famaly='$famaly' WHERE id=$id";
mysqli_query($connect, $query_update) or die(mysqli_error($query_update));
        } else {
            echo "Поля дата, email и имя должны быть заполнены обязательно!!!";
        }
    } else {
        $email_uncorrect = 'Введите корректный email!!!';
    }
} 
?>

<?php
$query = "SELECT * FROM login WHERE id = '$id'";
$result = mysqli_query($connect, $query) or die(mysqli_error($query));
$user = mysqli_fetch_assoc($result);
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
<?php include 'header.php' ?>
<form action="" method="POST">
    <h3>Отреактировать свои данные:</h3>
        <?= $all_input ?>
        <input type="date" name="date" placeholder="введите дату рождения" value=<?= $user['date'] ?>> <br>

        <input type="email" name="email" placeholder="введите свой email" value=<?= $user['email'] ?>><?= $email_uncorrect ?>  <br>

        <input type="text" name="name" placeholder="введите свое имя" value=<?= $user['name'] ?>> <br>

        <input type="text" name="lastname" placeholder="введите свое отчество" value=<?= $user['last_name'] ?>> <br>

        <input type="text" name="famaly" placeholder="введите свою фамилию" value=<?= $user['famaly'] ?>> <br>

        <span>Выберите страну проживания:</span>
        <select name="country">
            <option value="Russia" <?php if($user['country'] == "Russia") echo selected ?> >Россия</option>
            <option value="USA" <?php if($user['country'] == "USA") echo selected ?> >США</option>
            <option value="Germany" <?php if($user['country'] == "Germany") echo selected ?> >Германия</option>
        </select> <br>

        <input type="submit" name="submit">
    </from> <br><br>

    <a href="profile.php?id=<?= $id ?>">Назад в профиль</a>
</body>
</html>