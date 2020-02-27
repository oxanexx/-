<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body{font-family: sans-serif;}
        label{display: inline-block;}
        td:nth-child(5),td:nth-child(6){text-align:center;}
        table{border-spacing: 0;border-collapse: collapse; margin: auto}
        td, th{padding: 10px;border: 1px solid black;}
        form{margin-bottom: 5px; display: block;}
    </style>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <h1>Добавить посетителя:</h1><br><br><br>
    Имя: <input type="text" name="name"><br><br>
    Номер телефона: <input type="text" name="phone"><br><br>
    Любимое блюдо:<select name="sort_value" id="sortValue">
        <option value="1">Walnut Bun</option>
        <option value="2">Cashew Nuts and White MushrooWs</option>
        <option value="3">Dried Mulberries</option>
        <option value="4">Eggplant with Chili Sauce</option>
        <option value="5">Red Bean Bun</option>
        <option value="6">General Tso s Chicken</option>
    </select><br><br>
    <input type="submit" value="Добавить">
</form>
<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "restaurant";
try {
    $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    if(empty($_POST['sort_value'])){
        die('Введи пользователя');
        }else {
        $dishe_sort_value=$_POST['sort_value'];
        $dishe_name=$_POST['name'];
        $dishe_phone=$_POST['phone'];

        $sql = "INSERT INTO restaurant (name, phone, dishes_id) VALUES ('$dishe_name','$dishe_phone','$dishe_sort_value')";
        $statement = $db->prepare($sql);
        $statement->execute();
        $result_array = $statement->fetchALL();
    }
}


catch(PDOException $e) {
    echo "Спасибо";
}

$db = null;
?>

</body>
</html>