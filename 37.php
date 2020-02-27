<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <label for="sortValue">Введи имя файла: </label>
    <input type="text" name="fileName"><br><br>
    <label for="sortValue">Введи текст: </label>
    <input type="text" name="fileText"><br><br>
    <input type="submit" value="Создать">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $filename = $_POST["fileName"].'.html';

    if (file_exists($filename)) {
        $f_hdl = fopen($filename, 'w');
        $text = $_POST["fileText"].PHP_EOL;
        fwrite($f_hdl, $text);
    } else {
        $f_hdl = fopen($filename, 'w');
        $text = $_POST["fileText"].PHP_EOL;
        fwrite($f_hdl, $text);
    }
}
?>

</body>
</html>