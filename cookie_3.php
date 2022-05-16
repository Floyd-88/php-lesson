<?php
if(isset($_COOKIE['my_name'])) {

    setcookie('my_name', '', time());
    unset($_COOKIE['my_name']);
}
?>
<?php
if(!isset($_COOKIE["date"])) {
    setcookie("date", time());
    $_COOKIE["date"] = time();
} else {
   
    echo $_COOKIE["date"] = time() - $_COOKIE["date"];    
}
?>


<br>
<br>
<?php

    echo "Hello, " .  $_COOKIE['my_name'] . "!";

?>