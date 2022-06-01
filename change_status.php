<?php
session_start();
if($_SESSION['admin'] === true) {
$id = $_GET['id'];
$status = $_GET['status'];
$new_status = '';
if($status === 'user') {
    $new_status = 'admin';
} else {
    $new_status = 'user';
}
$connect =  mysqli_connect('localhost', 'mysql', 'mysql', 'registr');
$delete_user = "UPDATE login SET status='$new_status' WHERE id='$id'";
mysqli_query($connect, $delete_user) or die(mysqli_error($delete_user));
header('Location:admin.php');
}
?>