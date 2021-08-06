<?php
$a = range('A', 'Z');
foreach ($a as $k) {
    echo "'$k',";
}
foreach (range('A', 'E') as $j) {
    foreach ($a as $k) {
        echo "'$j$k',";
    }
}
