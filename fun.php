<?php
function image($x){
    $img = 'img/';
    $a = "<div class='img'><img src='{$img}{$x}' alt='Картинка' height='750px' width='1200px'></div>";
    echo $a;
    $img = 'http://images.example.com/';
    $a = "<div class='img'><img src='{$img}' alt='Картинка' height='750px' width='1200px'></div>";
    echo $a;
}