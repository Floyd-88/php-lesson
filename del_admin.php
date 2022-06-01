<?php
session_start();
if($_SESSION['admin'] === true) {
$id = $_GET['id'];
$connect =  mysqli_connect('localhost', 'mysql', 'mysql', 'registr');
$delete_user = "DELETE FROM login WHERE id='$id'";
mysqli_query($connect, $delete_user) or die(mysqli_error($delete_user));
header('Location:admin.php');
}
?>