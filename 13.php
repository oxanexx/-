<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="11 задача">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Сведения о местоположении и населении</h1>
<table border="1" width="100%" cellpadding="5">
    <?php
    $arr = [
        [ "Нью-Йорк" , 8175133 ],
        [ "Лос-Анджелес, шт. Калифорния" , 3792621 ],
        [ "Чикаго, шт. Иллинойс" , 2695598 ],
        [ "Хьюстон, шт. Техас" , 2100263 ],
        [ "Филадельфия, шт. Пенсильвания" , 1526006 ],
        [ "Феникс, шт. Аризона" , 1445632 ],
        [ "Сан-Антонио, шт. Техас" , 1327407 ],
        [ "Сан-Диего, шт. Калифорния" , 1307402 ],
        [ "Даллас, шт. Техас" , 1197816 ],
        [ "Сан-Хосе, шт. Калифорния" , 945942 ]
    ];
    arsort($arr);
    $i = 0;
    $temp = 0;
    while ($i < count($arr)){
        echo " <tr><td> {$arr[$i][0]}</td> <td>{$arr[$i][1]} человек</td></tr>" ;
        $temp += $arr[$i][1];
        ++$i;
    }
    ?>
    </table>
    <br>
    <br>
    <br>
    <br>
    <h2>Общее кол-во человек в штате</h2>
    <table border="1" width="100%" cellpadding="5">
    <?php

    $arr = [
        ["Нью-Йорк", "Нью-Йорк",  8175133],
        ["Лос-Анджелес", "шт. Калифорния", 3792621],
        ["Чикаго", "шт. Иллинойс", 2695598],
        ["Хьюстон", "шт. Техас", 2100263],
        ["Филадельфия", "шт. Пенсильвания", 1526006],
        ["Феникс", "шт. Аризона", 1445632],
        ["Сан-Антонио", "шт. Техас", 1327407],
        ["Сан-Диего", "шт. Калифорния", 1307402],
        ["Даллас", "шт. Техас", 1197816],
        ["Сан-Хосе", "шт. Калифорния", 945942]
    ];
    $newyo = [];
    $kalif = [];
    $illin = [];
    $tehas = [];
    $pensi = [];
    $arizo = [];

    for ($i=0; $i < count($arr); $i++) {
        switch ($arr[$i][1]) {
            case "Нью-Йорк":
                $newyo[] = $arr[$i];
                break;
            case "шт. Калифорния":
                $kalif[] = $arr[$i];
                break;
            case "шт. Иллинойс":
                $illin[] = $arr[$i];
                break;
            case "шт. Техас":
                $tehas[] = $arr[$i];
                break;
            case "шт. Пенсильвания":
                $pensi[] = $arr[$i];
                break;
            case "шт. Аризона":
                $arizo[] = $arr[$i];
                break;

        }
    }

    function arrScore( $a ){
        $score = 0;
        for ($i=0; $i < count($a); $i++) {
            $score += $a[$i][2];
        }
        return $score;
    }

    $scoreNewyo = arrScore($newyo);
    $scoreKalif = arrScore($kalif);
    $scoreIllin = arrScore($illin);
    $scoreTehas = arrScore($tehas);
    $scorePensi = arrScore($pensi);
    $scoreArizo = arrScore($arizo);

    echo "<tr><td>шт. Нью-Йорк</td><td>{$scoreNewyo} человек</td></tr> ";
    echo "<tr><td>шт. Калифорния</td><td>{$scoreKalif} человек</td></tr> ";
    echo "<tr><td>шт. Иллинойс</td><td>{$scoreIllin} человек</td></tr> ";
    echo "<tr><td>шт. Техас</td><td>{$scoreTehas} человек</td></tr> ";
    echo "<tr><td>шт. Пенсильвания</td><td>{$scorePensi} человек</td></tr> ";
    echo "<tr><td>шт. Аризона</td><td>{$scoreArizo} человек</td></tr> ";
    ?>
</table>
</body>
</html>