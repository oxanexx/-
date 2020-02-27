<?php
function validate_form() {
    if(strlen($_POST['name']) < 3) {
        return false;
    }else {
        return true;
    }
}

function procces_form() {
    print_r($_POST);
}

function show_form() {
    print<<<_HTML_
<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <form method="POST" action="">
            <p>Твоё имя : <input type="text" name="name"></p>
            <p>Твоя фамилия : <input type="text" name="subname"></p>
            <p>Сколько лет : <input type="text" name="age"></p>
            <p>Пол : <select name="sex">
                        <option value="men">Муж</option>
                        <option value="women">Жен</option>
                     </select>
            <br/>
            <input type="submit" value="Отправить">
        </form>
    </body>
</html>
_HTML_;
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (validate_form()) {
        procces_form();
    }
}else {
    show_form();
}
?>