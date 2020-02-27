<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="11 задача">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
    echo "<tr><td>ИТОГО</td><td>{$temp} человек</td></tr> ";
    ?>
    </table>
</body>
</html>