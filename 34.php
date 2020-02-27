<?php
$addresses = array();
$fh = fopen('addresses.txt', 'rb');

while((! feof($fh)) && ($line = fgets($fh))){
    $line = trim($line);
    if (! isset($addresses[$line] )) {
        $addresses[$line] = 0;
    }
    $addresses[$line] = $addresses[$line] + 1;
}

arsort($addresses);
$fh = fopen('addresses-count.txt', 'wb');
foreach ($addresses as $address => $count) {
    if (fwrite($fh, "$count,$address\n") === false) {
        die ("Can't write $count,$address: $php_errormsg");
    }
}