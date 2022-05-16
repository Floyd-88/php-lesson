<?php
session_start();
if(empty($_SESSION['my_back_time'])) {
 $_SESSION['my_back_time'] = time();
} else {
    
    echo "вы зашли " . (time() - $_SESSION['my_back_time']) . " секунд назад";
}
?>

<form action="" method="POST">
<input type="text" name="name" placeholder="Введите имя">
<input type="text" name="last_name" placeholder="Введите фамилию">
<input type="pasword" name="pasword" placeholder="Введите пароль">
<input type="email" name="e-mail" value=<?php echo $_SESSION['email']; ?> >
<input type="submit">
</form>