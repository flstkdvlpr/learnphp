<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "Новая страница"; ?></title>
</head>
<?php
//Переменные и типы данных
$five = 5;
$five_str = '5';
$five_true = true;
$five_double = 2.3;
$five_arr = ['arr'=> 2.3, 45=>67, "ddd" =>6];
echo "This is number {$five} </br>";
echo "This is string {$five_str} </br>";
echo "This is double {$five_double} </br>";
echo "This is array {$five_arr} </br>";
echo `This is array $five_arr </br>`;
var_dump($five_arr);
?>

<body>

</body>
</html>