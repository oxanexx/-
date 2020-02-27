<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?PHP
    session_start();

    // Название товара
    $_SESSION['item'] = $_POST['item'];
    // Кол-во товара
    $_SESSION['count'] = $_POST['count'];
    // Цена товара
    $_SESSION['price'] = 100;

    if(isset($_SESSION['item']) and is_numeric($_SESSION['count'])){
        echo "Вы добавили товар в карзину!<br/>";
        echo "Его кол-во ".$_SESSION['count']."<br/>";
        echo "Вы должны заплатить: ".$_SESSION['count'] * $_SESSION['price']." рублей<hr/>";
    }
    ?>
</head>

<body style="background-color: <?php echo $_COOKIE["color"] ?>">

    <form method="post" >
        Цена товара: <?=$_SESSION['price']." за 1 еденицу"?><br/>
        Кол-во товара: <input name="count" type="text" size="5"/><br/>
        Добавить товар: <input name="item" type="submit" value="Добавить"/>
    </form>




</body>
</html>