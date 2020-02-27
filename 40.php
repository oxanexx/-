<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body style="background-color: <?php echo $_COOKIE["color"] ?>">

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <select name="color">
        <option value="red">red</option>
        <option value="green">green</option>
        <option value="black">black</option>
        <option value="blue">blue</option>
    </select>
    <input type="submit" value="Изменить цвет фона">
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['color'] = $_POST['color'];
    setcookie("color", $_POST['color'], time()+3600, "/","", 0);
}

?>
</body>
</html>