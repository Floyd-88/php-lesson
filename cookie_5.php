<?php
setcookie('count', $_COOKIE['count']);
echo 'Вы посетили наш сайт ' . $_COOKIE['count'] . 'раз!';

?>
<br>
<br>
<?php
$my_birtday = ceil((strtotime($_COOKIE['birtday']) - time()) / 60 / 60 / 24); 
echo $my_birtday > 0 ? "До Вашего ДР осталось $my_birtday дней" : "Поздравляем с ДР!!!";

?>
