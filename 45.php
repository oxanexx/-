<?php
$url = 'https://api.github.com/gists';
$data = ['puЬlic' => true,
         'description' => "This program а gist of itsel f.",
         'files' => [ basename( __FILE__ ) => ['content' => file_get_contents( __FILE__)]]];

$c = curl_init ( $url ) ;
curl_setopt ( $c, CURLOPT_RETURNTRANSFER, true ) ;
curl_setopt ( $c, CURLOPT_POST, true ) ;
curl_setopt ( $c, CURLOPT_HTTPHEADER, array ('Content-Type: application/json'));
curl_setopt ( $c, CURLOPT_POSTFIELDS , json_encode( $data ) );
curl_setopt ( $c, CURLOPT_USERAGENT, 'learning-php-7/exercise' );

$response = curl_exec ( $c );
if ( $response === false) {
    print "Couldn't make request.";
}else {
    $info = curl_getinfo ( $c ) ;
    if ($info [ 'http_code'] != 201) {
        print "Couldn 't create gist, got {$info [ 'http_code']} \n";
        print $response;
    }else {
        $body = json_decode($response );
        print "Created gist at {$body->html_url}\n";
    }
}
© 2020 GitHub, Inc.