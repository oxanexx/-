<?php

$a = 100.0 - 100;
$b = "zero" ;
$c = "false" ;
$d = 0 == "true";
$e = 0.000 ;
$f = "0.0" ;
$g = strcmp("false", "False") ;
$h = 0 <=> "0";

var_dump( (bool) $a );
var_dump( (bool) $b );
var_dump( (bool) $c );
var_dump( (bool) $d );
var_dump( (bool) $e );
var_dump( (bool) $f );
var_dump( (bool) $g );
var_dump( (bool) $h );