<?php
	session_start();
    if (!empty($_POST)) {
        $name = $_POST['name'];
        $type_animal = $_POST['type_animal'];
        $email = $_POST['email'];
		$animal = mysqli_connect('localhost', 'mysql', 'mysql', 'animals');
    $pet_add = "INSERT INTO pet(name, type_animal, email) VALUES ('$name', '$type_animal', '$email')";
    mysqli_query($animal, $pet_add) or die(mysqli_error($pet_add));

	$_SESSION['flash'] = 'Форма отправдена на сервер!!!';
	header('Location:animal.php');
    }

  if (isset($SESSION['flash'])) {
        echo $SESSION['flash'];
        unset($SESSION['flash']);
    }
    ?>

<?php
// if(!isset($_GET['num'])) {
//     header('Location:action.php?num=1');
// }
// echo $_GET['num'];
?>

<?php
// header('location:index.php?success=1');
?>

<!-- Сделайте теперь страницу action.php. Пусть при заходе на эту страницу выполняется редирект на страницу index.php из предыдущей задачи. При редиректе передайте в GET параметре success значение 1. -->


<!-- Пусть на странице action.php можно передать число с помощью GET параметра с именем num. Сделайте так, чтобы при заходе без данного параметра, автоматически выполнялся редирект на эту же страницу, но с параметром num в значении 1. -->


<!-- Реализуйте описанные флеш сообщения. Проверьте их работу. -->