<?php
    function validate_form() {
        if(strlen($_POST['name']) < 3) {
            return false;
        }else {
            return true;
        }
    }

    function procces_form() {
        print "Привет, ". $_POST['name'];
    }

    function show_form() {
        print<<<_HTML_
<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body STYLE="background-color: aqua">
        <form method="POST" action="">
            <p>Твоё имя : <input type="text" name="name"></p>
            <br/>
            <input type="submit" value="Скажи привет!">
        </form>
    </body>
</html>
_HTML_;
}


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (validate_form()) {
            procces_form();
        }else {
            show_form();
        }
    }else {
        show_form();
    }
?>