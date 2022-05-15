<?php
session_start();
$c = $_SESSION['a'] + $_SESSION['b'];
?>

<?php
echo $c;
?>