<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<?php
function image($x , $alt, $height, $width){
    $a = "<div class='img'><img src='img/{$x}.jpg' alt='{$alt}' height='{$height}px' width='{$width}px'></div>";
    echo $a;
}
?>
<body>
    <?php
        image(2, 'Картинка 1', 720, 1278);
        image(3, 'Картинка 2', 750, 1200);
    ?>
</body>
</html>