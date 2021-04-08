<?php

$idade = 20;
$numeroDePessoas = 1; 


echo "Só pode entrar se tiver mais do que 18 anos ou";
echo "a partir de 16 anos acompanhado" . PHP_EOL; 

if ($idade >= 18)  {

    echo "Você tem $idade anos."  . PHP_EOL;
    echo 'Pode entrar';
}

else {

    echo "Você só tem $idade anos." . PHP_EOL;
    echo 'Você não pode entrar';
}

echo PHP_EOL;
echo "Adeus!";

?>