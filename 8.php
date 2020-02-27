<?php
$age = 12;
$shoe_size = 13;
if ($age > $shoe_size) {
    echo "Message 1.";
}elseif (($shoe_size++) && ($age > 20) ){
    echo "Message 2.";
}else {
        echo "Message З.";
    }
    echo "Age : $age . Shoe Size: $shoe_size";