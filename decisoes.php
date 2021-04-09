<?php

$idade = 17;
$numeroDePessoas = 2 ; 


echo "Só pode entrar se tiver mais do que 18 anos ou";
echo " a partir de 16 anos acompanhado." . PHP_EOL; 

if ($idade >= 18)  {

    echo "Você tem $idade anos. Pode entrar sozinho.";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
        echo "Você tem $idade anos, esta acompanhada(o), então pode entrar.";
    } else   {  
         echo "Você só tem $idade anos. Você não pode entrar";
     
}

echo PHP_EOL;
echo "Adeus!";

?>