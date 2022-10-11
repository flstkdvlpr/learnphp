<form action="#" method="POST">
    <input type="text" name="name" id="" placeholder="Введите имя"><br>
    <label for="check" >Мне уже есть 18 лет</label>
    <input type="checkbox" name="age" id="check">
    <input type="submit" name="submit" value="Вход">

</form>

<?

if(isset($_POST['name'])){
    $name = trim($_POST['name']);
    if(!preg_match('&^[a-zA-Zа-яА-ёЁ]+$&u', $name)){
        exit("Имя некорректно");
    }
    $age_check = $_POST['age'];
    if($age_check == 'on'){
        echo "Доступ разрешён";
    } else {
        echo "Пшёл вон,  $name";
    }
}

?>