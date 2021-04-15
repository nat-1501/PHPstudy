<?php

$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',

];

// PHP Suporta apenas dois tipo de chave, numericos inteiros e strings 

foreach ($array as $item) {
        echo $item . PHP_EOL;
}

?>