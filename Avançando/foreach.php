<?php


$contasCorrentes = [ 
    12345678910 => [
        'titular' => 'Vinicius', 
        'saldo' =>  1000
    ], 
    12365487888 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    12365445678 => [
        'titular' => 'Alberto',
        'saldo' => 300

];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf  . PHP_EOL;
}


?>