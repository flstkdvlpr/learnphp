<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "Новая страница"; ?></title>
</head>
<?php
//Теги PHP
//Изолирование от HTML
//Разделение инструкций
//Комментарии
?>

<body>
<?php $expression == false //Изолирование от HTML ?>
<?php if ($expression == true): ?>
  Это будет отображено, если выражение истинно.
<?php else: ?>
  В ином случае будет отображено это.
<?php endif ?>

<?php //Разделение инструкций:
    echo 'Это тест';
?>

<?php echo 'Это тест' ?>

    
</body>
</html>