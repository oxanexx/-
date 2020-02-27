<?php

function validate_state(){
    if ($_POST['state'] == 'США') {
        true;
    } else {
        print $_POST['state'] . " - неправильный адрес";
        return false;
    }
}
function validate_ves() {
    if($_POST['ves'] <= '68') {
        true;
    }else {
        print $_POST['ves'] . " - слишком большой вес";
        return false;
    }
}
function validate_razmer() {
    if($_POST['razmer'] <= '91') {
        true;
    }else {
        print $_POST['razmer'] . " - слишком большой размер";
        return false;
    }
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
            <p>Страна : <input type="text" name="state"></p>
            <p>Город : <input type="text" name="citi"></p>
            <p>Вес посылки : <input type="text" name="ves"></p>
            <p>Размер в см: <input type="text" name="razmer"></p>
            <br/>
            <input type="submit" value="Скажи привет!">
        </form>
    </body>
</html>
_HTML_;
}
    if (validate_ves() || validate_razmer() || validate_state()) {
        print "Страна = ". $_POST['state'];
        print "Город = ". $_POST['citi'];
        print "Размер = ". $_POST['razmer'];
        print "Вес = ". $_POST['ves'];
    }else {
        show_form();
    }
?>