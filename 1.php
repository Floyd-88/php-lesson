<?php
session_start();
if(!empty($_SESSION['auth'])) { 
    echo "Привет, " . $_SESSION['login'] . "<br>";
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


    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore illum laborum fugit eius voluptas laudantium totam adipisci, nam harum veritatis nisi unde doloribus quaerat natus magnam, nostrum amet impedit voluptatem cum nulla, velit reprehenderit dolor in? Provident, dolorem, perspiciatis illo repellendus suscipit consequuntur et repellat magnam libero, molestias error? Cum officia veniam aspernatur saepe cupiditate? Laboriosam ducimus doloribus iusto pariatur nemo rem asperiores, et expedita debitis minus recusandae voluptate corporis temporibus libero sed reiciendis sit quidem sapiente similique harum! Nam libero quae eveniet tempore vel illo, suscipit quas odio id facilis optio unde blanditiis inventore dolorum quam nemo obcaecati iure.
</body>
</html>
<?php } else { ?>
    	<a href="login.php">Вам необходимо авторизоваться!</a> <br>
<?php } ?>
    

    <br>
    <br>
