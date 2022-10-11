<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "Новая страница"; ?></title>
</head>
<?php
//Приведение типов
$a_string = '12.5gggg';
$b_int = 34;
echo ($a_string +$b_int); //46
?>
<br>
<?php
$b_string = '12.5q';
$v_string = '12.5';
$c_int = 34;

echo $c_int = (integer)$b_string;
echo $c_int = (double)$v_string;

?>

<body>

</body>
</html>