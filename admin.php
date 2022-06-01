<?php
session_start();
$id = $_SESSION['id'];
$connect =  mysqli_connect('localhost', 'mysql', 'mysql', 'registr');
$admin = "SELECT status FROM login WHERE id='$id'";
$result_admin = mysqli_query($connect, $admin) or die(mysqli_error($admin));
$user_admin = mysqli_fetch_assoc($result_admin);
if($user_admin['status'] === 'admin') { 
    $_SESSION['admin'] = true;
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'header.php';
?>

<?php 
$all_users = "SELECT * FROM login";
$result_users = mysqli_query($connect, $all_users) or die(mysqli_error($all_users));
$arr = [];
for($arr = []; $users = mysqli_fetch_assoc($result_users); $arr[] = $users);?>
<h3>Список пользователей:</h3>
<table border="1">
    <tr>
        <th>Логин пользователя</th>
        <th>Статус пользователя</th>
        <th>Удалить пользователя</th>
        <th>Изменить статус</th></th>
    </tr>

    <?php foreach($arr as $elem) { ?>

    <tr 
    <?php 
       if($elem['status'] === 'admin'){
           echo "bgcolor=\"red\"";
       } echo "bgcolor=\"green\"";
    ?>>
        <td><?php echo $elem['login'] ?></td>
        <td> <?php echo $elem['status'] ?></td>
        <td> <a href="del_admin.php?id=<?php echo $elem['id'] ?>">Удалить</a></td>
        <td> <a href="change_status.php?id=<?php echo $elem['id'] ?>&status=<?php echo $elem['status'] ?>">Сделать <?php
            if($elem['status'] === 'user') {
                echo "админом";
            } else {
                echo "юзером";
            }
        ?>
        </a></td>
    </tr>

    <?php 
    }  
    ?>
</table>
</body>
</html>

<?php 
}
 ?>