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