<?php
$now = time();
setcookie ( 'last_access', $now);
if ( isset ( $_COOKIE [ 'last_access'])){
$d = new DateTime('@' . $_COOKIE['last_access']);
$msg = '<p>You last visited this page at '.
    $d->format ( ' g:i а') . ' on' .
    $d->format ('F j, У ' ) . ' </р> ';
} else {
    $msg = ' <p>This is your first visit to this page . </p> ' ;
}
print $msg;