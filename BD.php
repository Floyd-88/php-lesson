<meta charset="utf-8">

<?php
$host = 'localhost';
$user = 'mysql';
$pass = 'mysql';
$name = 'mydb';

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");
$query = 'SELECT * FROM users';
$result = mysqli_query($link, $query) or die(mysqli_error($link));
?>

<!-- С помощью описанного цикла получите и выведите через var_dump на экран массив всех работников. -->
<?php
//  for($arr = []; $row = mysqli_fetch_assoc($result); $arr[] = $row);
// echo '<pre>';
// print_r ($arr);
// echo '</pre>';
?>

<!-- Из полученного результата получите первого работника. Через echo выведите на экран его имя. -->
<?php
for($arr = []; $row = mysqli_fetch_assoc($result); $arr[] = $row);
echo $arr[0]['name'];
?>

<br>
<br>
<!-- Из полученного результата получите второго работника. Через echo выведите на экран его имя и возраст. -->
<?php
echo $arr[1]['name'] .", ". $arr[1]['age'];
?>


<br>
<br>
<!-- Из полученного результата получите третьего работника. Через echo выведите на экран его имя, возраст и зарплату -->
<table border="2">
    <tr>
        <td>
            name
        </td>
        <td>
            age
        </td>
        <td>
            salary
        </td>
    </tr>
    <tr>
        <td>
        <?php echo $arr[0]['name'] ?>
        </td>
        <td>
        <?php echo $arr[0]['age'] ?>
        </td>
        <td>
        <?php echo $arr[0]['salary'] ?>
        </td>
    </tr>
    <tr>
        <td>
        <?php echo $arr[1]['name'] ?>
        </td>
        <td>
        <?php echo $arr[1]['age'] ?>
        </td>
        <td>
        <?php echo $arr[1]['salary'] ?>
        </td>
    </tr>
    <tr>
        <td>
        <?php echo $arr[2]['name'] ?>
        </td>
        <td>
        <?php echo $arr[2]['age'] ?>
        </td>
        <td>
        <?php echo $arr[2]['salary'] ?>
        </td>
    </tr>
</table>


<br>
<br>
<!-- Выберите юзера с id, равным 3. -->
<?php
// $myDB = mysqli_connect("localhost", "mysql", "mysql", "mydb");
// $user3 = mysqli_query($myDB, "SELECT * FROM  users WHERE id=3");
// $row1 = mysqli_fetch_assoc($user3);

// echo '<pre>';
// print_r($row1);
// echo '</pre>';
?>


<br>
<br>
<!-- Выберите юзеров с зарплатой 900. -->
<?php
$myDB = mysqli_connect("localhost", "mysql", "mysql", "mydb");
$salary_900 = mysqli_query($myDB, "SELECT * FROM  users WHERE salary=900");

for($arr=[]; $row2 = mysqli_fetch_assoc($salary_900); $arr[]=$row2);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>


<br>
<br>
<!-- Выберите юзеров в возрасте 23 года. -->
<?php
$myDB = mysqli_connect("localhost", "mysql", "mysql", "mydb");
$age_23 = mysqli_query($myDB, "SELECT * FROM  users WHERE age=23");

for($arr=[]; $row2 = mysqli_fetch_assoc($age_23); $arr[]=$row2);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>


<br>
<br>
<!-- Выберите юзеров с зарплатой более 400. -->
<?php
$user_salary = mysqli_connect('localhost', 'mysql', 'mysql', 'mydb');
$request = 'SELECT * FROM users WHERE salary > 400';
$result = mysqli_query($user_salary, $request);
for($arr = []; $row_salary = mysqli_fetch_assoc($result); $arr[] = $row_salary);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>


<br>
<br>
<!-- Выберите юзеров с зарплатой равной или большей 600. -->
<?php
$user_salary = mysqli_connect('localhost', 'mysql', 'mysql', 'mydb');
$request = 'SELECT * FROM users WHERE salary >= 600';
$result = mysqli_query($user_salary, $request);
for($arr = []; $row_salary = mysqli_fetch_assoc($result); $arr[] = $row_salary);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>


<br>
<br>
<!-- Выберите юзеров с зарплатой НЕ равной 500. -->
<?php
$user_salary = mysqli_connect('localhost', 'mysql', 'mysql', 'mydb');
$request = 'SELECT * FROM users WHERE salary != 500';
$result = mysqli_query($user_salary, $request);
for($arr = []; $row_salary = mysqli_fetch_assoc($result); $arr[] = $row_salary);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>


<br>
<br>
<!-- Выберите юзеров с зарплатой равной или меньшей 500. -->
<?php
$user_salary = mysqli_connect('localhost', 'mysql', 'mysql', 'mydb');
$request = 'SELECT * FROM users WHERE salary <= 500';
$result = mysqli_query($user_salary, $request);
for($arr = []; $row_salary = mysqli_fetch_assoc($result); $arr[] = $row_salary);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>


<br>
<br>
<!-- Выберите юзеров в возрасте от 25 (не включительно) до 28 лет (включительно). -->
<?php
$user_salary = mysqli_connect('localhost', 'mysql', 'mysql', 'mydb');
$request = 'SELECT * FROM users WHERE age > 25 AND age <= 28';
$result = mysqli_query($user_salary, $request);
for($arr = []; $row_salary = mysqli_fetch_assoc($result); $arr[] = $row_salary);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>


<br>
<br>
<!-- Выберите юзера user1. -->
<?php
$user_salary = mysqli_connect('localhost', 'mysql', 'mysql', 'mydb');
$request = 'SELECT * FROM users WHERE name=\'user1\'';
$result = mysqli_query($user_salary, $request);
for($arr = []; $row_salary = mysqli_fetch_assoc($result); $arr[] = $row_salary);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>


<br>
<br>
<!-- Выберите юзеров user1 и user2. -->
<?php
$user_salary = mysqli_connect('localhost', 'mysql', 'mysql', 'mydb');
$request = 'SELECT * FROM users WHERE name IN(\'user1\', \'user2\')';
$result = mysqli_query($user_salary, $request);
for($arr = []; $row_salary = mysqli_fetch_assoc($result); $arr[] = $row_salary);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>


<br>
<br>
<!-- Выберите всех, кроме юзера user3. -->
<?php
$user_salary = mysqli_connect('localhost', 'mysql', 'mysql', 'mydb');
$request = 'SELECT * FROM users WHERE name !=\'user3\'';
$result = mysqli_query($user_salary, $request);
for($arr = []; $row_salary = mysqli_fetch_assoc($result); $arr[] = $row_salary);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>


<br>
<br>
<!-- Выберите всех юзеров в возрасте 27 лет или с зарплатой 1000. -->
<?php
$user_salary = mysqli_connect('localhost', 'mysql', 'mysql', 'mydb');
$request = 'SELECT * FROM users WHERE (age=\'27\') OR (salary=\'1000\')';
$result = mysqli_query($user_salary, $request);
for($arr = []; $row_salary = mysqli_fetch_assoc($result); $arr[] = $row_salary);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>


<br>
<br>
<!-- Выберите всех юзеров в возрасте 27 лет или с зарплатой не равной 400. -->
<?php
$user_salary = mysqli_connect('localhost', 'mysql', 'mysql', 'mydb');
$request = 'SELECT * FROM users WHERE (age=\'27\') OR (salary!=\'400\')';
$result = mysqli_query($user_salary, $request);
for($arr = []; $row_salary = mysqli_fetch_assoc($result); $arr[] = $row_salary);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>


<br>
<br>
<!-- Выберите всех юзеров в возрасте от 23 лет (включительно) до 27 лет (не включительно) или с зарплатой 1000. -->
<?php
$user_salary = mysqli_connect('localhost', 'mysql', 'mysql', 'mydb');
$request = 'SELECT * FROM users WHERE (age>=\'23\' AND age<\'27\') OR (salary=\'1000\')';
$result = mysqli_query($user_salary, $request);
for($arr = []; $row_salary = mysqli_fetch_assoc($result); $arr[] = $row_salary);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>


<br>
<br>
<!-- Выберите всех юзеров в возрасте от 23 лет до 27 лет или с зарплатой от 400 до 1000. -->
<?php
$user_salary = mysqli_connect('localhost', 'mysql', 'mysql', 'mydb');
$request = 'SELECT * FROM users WHERE (age>=\'23\' AND age<\'27\') OR (salary>=\'400\' AND salary<=\'1000\')';
$result = mysqli_query($user_salary, $request);
for($arr = []; $row_salary = mysqli_fetch_assoc($result); $arr[] = $row_salary);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>

<br>
<br>
<!-- Выберите из таблицы users имя, возраст и зарплату для каждого работника. -->
<?php
$user_salary = mysqli_connect('localhost', 'mysql', 'mysql', 'mydb');
$request = 'SELECT name, age, salary FROM users';
$result = mysqli_query($user_salary, $request);
for($arr = []; $row_salary = mysqli_fetch_assoc($result); $arr[] = $row_salary);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>


<br>
<br>
<!-- Выберите из таблицы users имена всех работников. -->
<?php
$user_salary = mysqli_connect('localhost', 'mysql', 'mysql', 'mydb');
$request = 'SELECT name FROM users';
$result = mysqli_query($user_salary, $request);
for($arr = []; $row_salary = mysqli_fetch_assoc($result); $arr[] = $row_salary);
foreach($arr as $elem) {
    foreach($elem as $name) {
    echo $name . ", ";
    }
}
?>

<br>
<br>
<!-- Добавьте нового юзера 'user7', 26 лет, зарплата 300. -->
<?php
// $users = mysqli_connect('localhost', 'mysql', 'mysql', 'mydb');
// $add_user = 'INSERT INTO users (name, age, salary) VALUES (\'user7\', \'26\', \'300\')';
// mysqli_query($users, $add_user) or die(mysqli_error($users));

// $request = 'SELECT * FROM users WHERE name=\'user7\'';
// $result = mysqli_query($users, $request) or die(mysqli_error($users));
// $user_7 = mysqli_fetch_assoc($result);
// echo '<pre>';
// print_r($user_7);
// echo '</pre>';

?>

<br>
<br>
<!-- Юзеру с id 4 поставьте возраст 35 лет. -->
<?php
$db = mysqli_connect('localhost', 'mysql', 'mysql', 'mydb');
$update = 'UPDATE users SET age=\'35\' WHERE id=\'4\'';
$request_1 = mysqli_query($db, $update) or die(mysqli_eror($update));
$select = 'SELECT age FROM users WHERE id=\'4\'';
$request_2 = mysqli_query($db, $select) or die(mysqli_eror($select));
$result = mysqli_fetch_assoc($request_2);
var_dump($result);
?>

<br>
<br>
<!-- Всем, у кого зарплата 500, сделайте ее 700. -->
<?php
$update2 = 'UPDATE users SET salary=\'700\' WHERE salary=\'500\'';
$request_1 = mysqli_query($db, $update2) or die(mysqli_eror($update2));
$select2 = 'SELECT * FROM users';
$request_2 = mysqli_query($db, $select2) or die(mysqli_eror($select2));
for($arr=[]; $result = mysqli_fetch_assoc($request_2); $arr[] = $result);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>

<br>
<br>
<!-- Работникам с id больше 2 и меньше 5 включительно поставьте возраст 23. -->
<?php
$update2 = 'UPDATE users SET age=\'23\' WHERE id>2 AND id<5';
$request_1 = mysqli_query($db, $update2) or die(mysqli_eror($update2));
$select2 = 'SELECT * FROM users';
$request_2 = mysqli_query($db, $select2) or die(mysqli_eror($select2));
for($arr=[]; $result = mysqli_fetch_assoc($request_2); $arr[] = $result);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>

<br>
<br>
<!-- Удалите юзера с id, равным 7. -->
<?php
// $del = 'DELETE FROM users WHERE id=7';
// mysqli_query($db, $del) or die(mysqli_eror($del));

$select2 = 'SELECT * FROM users';
$request_2 = mysqli_query($db, $select2) or die(mysqli_eror($select2));
for($arr=[]; $result = mysqli_fetch_assoc($request_2); $arr[] = $result);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>

<br>
<br>
<!-- Удалите всех юзеров, у которых возраст 23 года. -->
<?php
// $del = 'DELETE FROM users WHERE age=23';
// mysqli_query($db, $del) or die(mysqli_eror($del));

$select2 = 'SELECT * FROM users';
$request_2 = mysqli_query($db, $select2) or die(mysqli_eror($select2));
for($arr=[]; $result = mysqli_fetch_assoc($request_2); $arr[] = $result);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>

<br>
<br>
<!-- Удалите всех юзеров а затем добавьте новых. -->
<?php
// $del = 'DELETE FROM users';
// mysqli_query($db, $del) or die(mysqli_eror($del));
?>

<?php
// $insert1 = 'INSERT INTO users (name, age, salary) VALUES ("user1", "30", "700")';
// mysqli_query($db, $insert1) or die(mysqli_eror($insert1));
// $insert2 = 'INSERT INTO users (name, age, salary) VALUES ("user2", "23", "300")';
// mysqli_query($db, $insert2) or die(mysqli_eror($insert2));
// $insert3 = 'INSERT INTO users (name, age, salary) VALUES ("user3", "27", "900")';
// mysqli_query($db, $insert3) or die(mysqli_eror($insert3));
// $insert4 = 'INSERT INTO users (name, age, salary) VALUES ("user4", "29", "500")';
// mysqli_query($db, $insert4) or die(mysqli_eror($insert4));
// $insert5 = 'INSERT INTO users (name, age, salary) VALUES ("user5", "33", "300")';
// mysqli_query($db, $insert5) or die(mysqli_eror($insert5));
?>


<br>
<br>
<!-- Достаньте всех юзеров и отсортируйте их по возрастанию зарплаты. -->
<?php
$select2 = 'SELECT * FROM users ORDER BY salary';
$request_2 = mysqli_query($db, $select2) or die(mysqli_eror($select2));
for($arr=[]; $result = mysqli_fetch_assoc($request_2); $arr[] = $result);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>

<br>
<br>
<!-- Достаньте всех юзеров и отсортируйте их по убыванию зарплаты. -->
<?php
$select2 = 'SELECT * FROM users ORDER BY salary DESC';
$request_2 = mysqli_query($db, $select2) or die(mysqli_eror($select2));
for($arr=[]; $result = mysqli_fetch_assoc($request_2); $arr[] = $result);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>

<br>
<br>
<!-- Достаньте юзеров с зарплатой 700 и отсортируйте их по возрасту. -->
<?php
$select2 = 'SELECT * FROM users WHERE salary = 700 ORDER BY age';
$request_2 = mysqli_query($db, $select2) or die(mysqli_eror($select2));
for($arr=[]; $result = mysqli_fetch_assoc($request_2); $arr[] = $result);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>

<br>
<br>
<!-- Достаньте всех юзеров и отсортируйте их по имени и по зарплате. -->
<?php
$select2 = 'SELECT * FROM users ORDER BY name, salary';
$request_2 = mysqli_query($db, $select2) or die(mysqli_eror($select2));
for($arr=[]; $result = mysqli_fetch_assoc($request_2); $arr[] = $result);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>

<br>
<br>
<!-- Получите первых 4 юзера. -->
<!-- Достаньте всех юзеров и отсортируйте их по имени и по зарплате. -->
<?php
$select2 = 'SELECT * FROM users LIMIT 4';
$request_2 = mysqli_query($db, $select2) or die(mysqli_eror($select2));
for($arr=[]; $result = mysqli_fetch_assoc($request_2); $arr[] = $result);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>

<br>
<br>
<!-- Получите юзеров со второго, 3 штуки. -->
<?php
$select2 = 'SELECT * FROM users LIMIT 1, 3';
$request_2 = mysqli_query($db, $select2) or die(mysqli_eror($select2));
for($arr=[]; $result = mysqli_fetch_assoc($request_2); $arr[] = $result);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>

<br>
<br>
<!-- Отсортируйте юзеров по возрастанию зарплаты и получите первых 3 работника из результата сортировки. -->
<?php
$select2 = 'SELECT * FROM users ORDER BY salary LIMIT 3';
$request_2 = mysqli_query($db, $select2) or die(mysqli_eror($select2));
for($arr=[]; $result = mysqli_fetch_assoc($request_2); $arr[] = $result);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>

<br>
<br>
<!-- Отсортируйте юзеров по убыванию зарплаты и получите первых 3 юзера из результата сортировки. -->
<?php
$select2 = 'SELECT * FROM users ORDER BY salary DESC LIMIT 3';
$request_2 = mysqli_query($db, $select2) or die(mysqli_eror($select2));
for($arr=[]; $result = mysqli_fetch_assoc($request_2); $arr[] = $result);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>

<br>
<br>
<!-- Подсчитайте всех юзеров с зарплатой 300. -->
<?php
$select2 = 'SELECT COUNT(*) as "Количество" FROM users WHERE salary = 300';
$request_2 = mysqli_query($db, $select2) or die(mysqli_eror($select2));
for($arr=[]; $result = mysqli_fetch_assoc($request_2); $arr[] = $result);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>


<br>
<br>
<!-- Подсчитайте всех юзеров с зарплатой 300 и возрастом 23. -->
<?php
$select2 = 'SELECT COUNT(*) as "Количество" FROM users WHERE salary = 300 AND age = 23';
$request_2 = mysqli_query($db, $select2) or die(mysqli_eror($select2));
for($arr=[]; $result = mysqli_fetch_assoc($request_2); $arr[] = $result);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>