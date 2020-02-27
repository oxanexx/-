<?php
$fh = fopen('dishes.csv', 'rb');
print "<table>";
while ((! feof($fh) ) && ($line = fgetcsv($fh))) {
    print "<tr><td style='border: 1px solid black'>".implode("</td><td style='border: 1px solid black'>", $line)."</td></tr>";
}
print "</table>";