<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8"
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>1 число:<br><input type="text" name="1"></p>
        <p>2 число:<br><input type="text" name="2"></p>
        <p><select size="3" multiple name="operant">
                <option disabled>Выберите операцию</option>
                <option value="/">/</option>
                <option value="*">*</option>
                <option value="-">-</option>
                <option value="+">+</option>
            </select></p>
        <input type="submit" value="Отправить">
    </form>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $a = $_POST[1];
        $b = $_POST[2];
        $c = $_POST['operant'];


        if(is_integer((int)$_POST[1])) {
            if($c == '*') {
                $d = $a * $b;
            }
            if($c == '/'){
                $d = $a / $b;
            }
            if($c == '+'){
                $d = $a + $b;
            }
            if($c == '-'){
                $d = $a - $b;
            }
            print"<h1 style='text-align: center'>{$a} {$c} {$b} = {$d}</h1>";

        }


    }

    ?>
</body>
</html>