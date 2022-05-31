<?php
session_start();
$connect =  mysqli_connect('localhost', 'mysql', 'mysql', 'registr');


if(!empty($_SESSION['login'])) {
    $user = $_SESSION['login'];
    $select = "SELECT * FROM login WHERE login='$user'"; 
} else {
    $id_user = $_GET['id'];
    $select = "SELECT * FROM login WHERE id='$id_user'"; 
}
$result = mysqli_query($connect, $select) or die(mysqli_error($select));
$person = mysqli_fetch_assoc($result);
?>

<?php if(!empty($_SESSION['login'])) { ?>
	<a href="logout.php">Выйти из своего профиля</a> <br> <br>
<?php } else { ?>
	<a href="login.php">Вам необходимо авторизоваться</a> <br>
	<a href="register.php">или пройти регистрацию!!!</a> <br>
<?php } ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h1><?php echo $person['name'] ." ". $person['last_name'] ." ". $person['famaly'] ?></h1>
    <h2>Анкета: </h2>
    <p><b>Ник:</b> <span><?php echo $person['login'] ?></span></p>
    <p><b>Возраст:</b> <span><?php if(!empty($person['date']) )echo get_age($person['date']) ?></span></p>
    <p><b>"Электронная почта":</b> <span><?php echo $person['email'] ?></span></p>
    <p><b>Страна:</b> <span><?php echo $person['country'] ?></span></p>

    <?php
    if( $_SESSION['auth'] == true) { ?>
    
        <a href="account.php">Редактировать профиль</a> <br>
        <a href="changePassword.php">Сменить пароль</a>
    <?php } ?>
    
    
</body>
</html>

<?php
function get_age( $birthday ){
	$diff = date( 'Ymd' ) - date( 'Ymd', strtotime($birthday) );
	return substr( $diff, 0, -4 );
}
?>