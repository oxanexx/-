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
    <label for="sortValue">Выбрать блюдо: </label>
    <select name="sort_value" id="sortValue">
        <option value="1">Walnut Bun</option>
        <option value="2">Cashew Nuts and White MushrooWs</option>
        <option value="3">Dried Mulberries</option>
        <option value="4">Eggplant with Chili Sauce</option>
        <option value="5">Red Bean Bun</option>
        <option value="6">General Tso s Chicken</option>
    </select>
    <input type="submit" value="Применить">
</form>
<br>
<br>
<br>
<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "dishes";
try {
    $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    if(empty($_POST['sort_value'])){
        $dishe_sort_value = "id";
    } else {
        $dishe_sort_value=$_POST['sort_value'];

        $sql = "SELECT * FROM dishes WHERE  id = '$dishe_sort_value'";
        $statement = $db->prepare($sql);
        $statement->execute();
        $result_array = $statement->fetchALL();

        echo "<table><tr><th>Dish name</th><th>Price</th><th>Is spicy</th></tr>";
        foreach ($result_array as $result_row) {
            echo "<tr>";
            echo "<td>" . $result_row["dish_name"] . "</td>";
            echo "<td>" . $result_row["price"] . "</td>";
            if($result_row["is_spicy"] == 0){
                echo "<td>No</td>";
            }else {
                echo "<td>Yes</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}


catch(PDOException $e) {
    echo "Ошибка при выводе записей из базы данных: " . $e->getMessage();
}

$db = null;
?>

</body>
</html>