<?php
session_start();

// Функции для фильтрации введенных пользовательских данных
function filterName($field){
    // Санитизация имени пользователя
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    $_SESSION['name'] = $field;
    
    // Валидация имени пользователя
    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^(([a-zA-Z' -]{1,30})|([а-яА-ЯЁёІіЇїҐґЄє' -]{1,30}))$/u")))){
        return $field;
    } else{
        return FALSE;
    }  
} 
function filter_type_animal($field){
    // Санитизация имени пользователя
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
   
    $_SESSION['type_animal'] = $field;
    // Валидация имени пользователя
    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^(([a-zA-Z' -]{1,30})|([а-яА-ЯЁёІіЇїҐґЄє' -]{1,30}))$/u")))){
        return $field;
    } else{
        return FALSE;
    }  
}    
function filterEmail($field){
    // Санитизация e-mail
    $field = filter_var(trim($field), FILTER_SANITIZE_EMAIL);

    $_SESSION['email'] = $field;
    // Валидация e-mail
    if(filter_var($field, FILTER_VALIDATE_EMAIL)){
        return $field;
    } else{
        return FALSE;
    }
}

// Определяем переменные и инициализирем с пустыми значениями
$nameErr = $animalErr = $emailErr = "";
$name = $email = "";

if(!empty($_POST)) {
    // Валидация имени
    if(empty($_POST["name"])){
        $nameErr = "Пожалуйста, введите ваше имя.";
    } else{
        $name = filterName($_POST["name"]);
        if($name == FALSE){
            $nameErr = "Пожалуйста, введите верное имя.";
        }
    }
    // Валидация вида животного
    if(empty($_POST["type_animal"])){
        $animalErr = "Пожалуйста, введите свое животное.";
    } else{
        $type_animal = filter_type_animal($_POST["type_animal"]);
        if($type_animal == FALSE){
            $animalErr = "Пожалуйста, введите корректное животное.";
        }
    }        
    // Валидация e-mail
    if(empty($_POST["email"])){
        $emailErr = "Пожалуйста, введите адрес вашей электронной почты.";     
    } else{
        $email = filterEmail($_POST["email"]);
        if($email == FALSE){
            $emailErr = "Пожалуйста, введите действительный адрес электронной почты.";
            }
        } 
    // Отпарвка в базу данных
        if($nameErr === '' and $animalErr === '' and $emailErr ==='') {
            $name = test_form($_POST['name']);
            $type_animal = test_form($_POST['type_animal']);
            $email = test_form($_POST['email']);
            
            $animal = mysqli_connect('localhost', 'mysql', 'mysql', 'animals');
            $pet_add = "INSERT INTO pet(name, type_animal, email) VALUES ('$name', '$type_animal', '$email')";
            mysqli_query($animal, $pet_add) or die(mysqli_error($pet_add));
            header('Location: animal.php');
            $_SESSION['flash'] = 'Форма отправлена на сервер!!!';
            // $_SESSION['name'] = $name;
            }
}

    //Вывод сообщения об отправке
    if(empty($_POST)) {
    echo $_SESSION['flash'];
    unset($_SESSION['flash']); 
    }

    function test_form($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

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
    <form action="" method="POST">
        <p>Заполните информацию по Вашему питомцу:</p>
        <input type="text" name="name" placeholder="Введите свое имя" value=<?php echo $_SESSION['name'] ?>><?php echo $nameErr ?> <br>
        <input type="text" name="type_animal" placeholder="Какой у вас питомец" value=<?php echo $_SESSION['type_animal'] ?>><?php echo $animalErr ?> <br>
        <input type="text" name="email" placeholder="Введите свой email" value=<?php echo  $_SESSION['email'] ?>><?php echo $emailErr ?> <br>
        <input type="submit">
    </form>

</body>
</html>