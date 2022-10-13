<?php
define("SERVERNAME", "127.0.0.1:3307");
define("DB_LOGIN", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "employees");

$name=$city=$rang='';

$connects = new mysqli(SERVERNAME,DB_LOGIN,DB_PASSWORD,DB_NAME);
$sql = "SELECT * FROM `employees`";
$result = $connects->query($sql);
for ($user=array();$row=$result->fetch_assoc();$user[]=$row);
$last = count($user)-1;
$last_id = $user[$last]['id']+1; // реализация правильный id новых
$connects->close();


if(isset($_POST['add_employees'])){
    $name = $_POST['name']??'';
    $city = $_POST['city']??'';
    $rang = $_POST['rang']??'';
    $connect = new mysqli(SERVERNAME,DB_LOGIN,DB_PASSWORD,DB_NAME);
    $sql = "INSERT INTO `employees`(`id`,`name`,`city`,`rang`) VALUES ('$last_id','$name','$city','$rang')";
    $connect->query($sql);
    $connect->close();
    echo "<meta http-equiv='refresh' content='0'>";
    $name=$city=$rang=$id_employees='';
}

if(isset($_GET['select'])):
    $id = $_GET['select']??'';
    $name = $user[$id]['name']??'';
    $city = $user[$id]['city']??'';
    $rang = $user[$id]['rang']??'';
    $id_employees = $user[$id]['id']??'';
    
endif;

if (isset($_POST['delete_employees'])){
    $connect = new mysqli(SERVERNAME,DB_LOGIN,DB_PASSWORD,DB_NAME);
    $sql = "DELETE FROM `employees` WHERE `id`='$id_employees'";
    $connect->query($sql);
    $connect->close();
    $name=$city=$rang=$id_employees='';
    echo "<meta http-equiv='refresh' content='0'>";
}

if (isset($_POST['edit_employees'])){
    $name = $_POST['name']??'';
    $city = $_POST['city']??'';
    $rang = $_POST['rang']??'';
    $connect = new mysqli(SERVERNAME,DB_LOGIN,DB_PASSWORD,DB_NAME);
    $sql = "UPDATE `employees` SET `name`='$name',`city`='$city',`rang`='$rang' WHERE `id`='$id_employees'";
    $connect->query($sql);
    $connect->close();
    $name=$city=$rang=$id_employees='';
    echo "<meta http-equiv='refresh' content='0'>";

}
?>
<form action="" method='Post'>
<input type="text" name="name" value='<?=$name?>' placeholder="name" id="">
<input type="text" name="city" value='<?=$city?>' id="" placeholder="city">
<input type="text" name="rang" value='<?=$rang?>' id="" placeholder="rang">
<input type="submit" name="add_employees" value="add_employees">
<?php if(isset($_GET['select'])):?>
    <input type="submit" name="edit_employees" value="Edit">
    <input type="submit" name="delete_employees" value="Detete">
<?php endif;?>
</form>

<?php
foreach ($user as $k=>$v){
    echo "<p>$v[id] | $v[name] | city: $v[city] | rang: $v[rang] <a href='?select=$k'>select</a></p>";
}
?>