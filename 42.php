<?php
$json = file_get_contents ( "http://php.net/releases/?json" ) ;
if ($json === false) {
    print "Can 't retrieve feed . ";
}else {
        $feed = json_decode($json, true );
        $major_numbers = array_keys($feed) ;
        rsort( $major_numbers );
        $biggest_major_number = $major_numbers[0];
        $version = $feed[$biggest_major_number]['version'];
        print " The latest version of РНР released is $version.";
}