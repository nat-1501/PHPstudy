<?php

$idade = 17; 


echo "Só pode entrar se tiver mais do que 18 anos." . PHP_EOL;

if ($idade >= 18)  {

    echo "Você tem $idade anos."  . PHP_EOL;
    echo 'Pode entrar';
}

echo "Você só tem $idade anos." . PHP_EOL;
echo 'Você não pode entrar';

?>