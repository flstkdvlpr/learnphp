<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "Новая страница"; ?></title>
</head>
<?php
//Классы и константы
require 'FirstClass.php';
$myclass = new Firstclass();
$myclass->$armor = 300;
echo $myclass->$armor
?>
<br>
<?php
//Константы
    define('MYCONST', 232323); //создание
    echo MYCONST;
?>
<br>
<?php
$num = mt_rand(1,6);
$name = "VALUE($num)";
define($name, $num);
echo constant($name);
?>
<br>
<?php
echo "Путь до файла ". __FILE__ . "<br>"
?>
<body>

</body>
</html>