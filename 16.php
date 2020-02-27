<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<?php
function image($x){
    $img = 'img/';
    $a = "<div class='img'><img src='{$img}{$x}' alt='Картинка' height='750px' width='1200px'></div>";
    echo $a;
    $img = 'http://images.example.com/';
    $a = "<div class='img'><img src='{$img}' alt='Картинка' height='750px' width='1200px'></div>";
    echo $a;
}
?>
<body>
    <?php
        image('2.jpg');
        image('3.jpg');
    ?>
</body>
</html>