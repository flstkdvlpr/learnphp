<?php
define("SERVERNAME", "127.0.0.1:3307");
define("DB_LOGIN", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "employees");


$connect = new mysqli(SERVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME);
$sql = "UPDATE `employees` SET `name`='Анна',`city`='Ростов-на-Дону',`rang`='Пофигист' WHERE id = 2";
$select = "SELECT * FROM `employees`";
$result = $connect->query($select);
for($user = array(); $row = $result->fetch_assoc();$user[] = $row);

//if ($connect->query($sql) === TRUE){
//        echo "запись обновлена";
//} else {
//        echo "ERROR";
//}
//
$connect->close();

foreach($user as $key=>$val){
    echo "<p>$val[id] | имя: $val[name] | город: $val[city] | должность: $val[rang]</p>";
}


?>