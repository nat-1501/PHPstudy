<?php


$contasCorrentes = [ 
    '123.456.789-10' => [
        'titular' => 'Vinicius', 
        'saldo' =>  1000
    ], 
    '123.654.878-88' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    '123.654.456-78' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '132.326.459-10' => [
        'titular' => 'Julio',
        'saldo' => 100
    ]


];

 $contasCorrentes ['123.654.874-58'] = [
 
        'titular' => 'Claudia',
        'saldo' => 200
 ];

 $contasCorrentes ['325.555.265-86'] = [
     'titular' => 'Aline',
     'saldo' => 590
 ];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . "  " . $conta ['titular']  . PHP_EOL;
}


?>