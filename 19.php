<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php
        function color($red, $green, $blue){
            echo "<div style='background-color: rgb($red, $green, $blue); height:750px; width:750px'></div>";}
    ?>
</head>
<body>
<?php
    color(23, 32, 122);
    color(213, 122, 152);
    color(2, 3, 22);
    color(100, 100, 100);
    color(125, 125, 125);
?>
</body>
</html>