<?php
$now = new DateTime ();
$vars = array ('title' => 'Бизнес Информатика' ,
                'byline' => 'Бизнес информатика',
                'article' => <<<_HTML_
    <p>При очной форме обучения вы посещаете занятия днем, 5−6 раз в неделю: ходите на лекции и семинары, сдаете зачеты и экзамены. Учебный год разделен на 2 семестра и начинается 1 сентября. Студентам-очникам предоставляются льготы: отсрочка от армии и сниженная стоимость проезда в общественном транспорте.</p>
_HTML_,
                'date' => $now->format('l , F j, Y '));

$template_vars = array();
foreach ( $vars as $k => $v) {
    $template_vars['{'.$k.'}'] = $v;
}
$template = file_get_contents( '33.html');
if ( $template === false) {
    die ("Не могу открыть 33.html : $php_errormsg");
}
$html = str_replace(array_keys($template_vars),
    array_values($template_vars) ,
    $template);

$result = file_put_contents( '33_2.html', $html ) ;
if ( $result === false) {
    die ( "Не могу создать 33_2.html : $php_errormsg" ) ;
}