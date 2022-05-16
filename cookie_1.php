<?php
if(!isset($_COOKIE['name'])) {
    setcookie('name', "Ilia");
    $_COOKIE['name'] = "Ilia";
} else {
    echo  $_COOKIE['name'];
}
?>

<!-- <?php
setcookie("str", "Hello, world!!!"); 
// В одном файле запишите куку, а в другом файле выведите ее на экран
?> -->

