<?php
session_start();
$_SESSION['test'] = '123';
?>

<?php
session_start();
$_SESSION['email'] = $_POST["auto_email"];
?>


<form action="" method="POST">
    <p>Введите свой e-mail</p>
    <input type="email" name="auto_email">
    <input type="submit">
</form>

<?php
if(empty($_SESSION['count'])) {
session_start();
$_SESSION['count'] = 1;
echo "Вы зашли на странцу впервые!"; 
} else {
    echo "Вы зашли на странцу " . ++$_SESSION['count'] . " раз!";
} 
?>