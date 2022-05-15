<?php
    session_start();
    $_SESSION['a'] = 10;
    $_SESSION['b'] = 11;
    ?>

    <!-- Запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите сколько секунд назад пользователь зашел на сайт. -->

<?php
session_start();
if(empty($_SESSION['time_back'])) {
    $_SESSION['time_back'] = time();
} else {
   echo time() - $_SESSION['time_back'];  
} 
?>

<br>
<br>
<!-- Модифицируйте этот код счетчика так, чтобы при достижении счетчиком значения 10, отсчет начинался сначала. -->
<?php
session_start();
if(empty($_SESSION["counter"])) {
    $_SESSION["counter"] = 1;
} else {
    $_SESSION["counter"]++;
    if($_SESSION["counter"] > 10) {
        unset($_SESSION["counter"]);
    }
}
echo $_SESSION["counter"]; 
?>