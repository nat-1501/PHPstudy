<?php

$contasCorrentes = [ 
    '123.456.789-10' => [
        'titular' => 'Marcos', 
        'saldo' =>  2000
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
        'titular' => 'Vinicius',
        'saldo' => 100
    ]



];

$contasCorrentes['123.654.456-78'] ['saldo'] -= 500;
if (500 > $contasCorrentes['123.654.456-78'] ['saldo']) {
    echo "Você não pode sacar esse valor" . PHP_EOL;
} else {
    $contasCorrentes['123.654.878-88'] ['saldo'] -= 500;
}
                                                                                                    
foreach ($contasCorrentes as $cpf => $conta) {
   echo $cpf . "  " . $conta ['titular'] . ' ' . $conta['saldo'] . PHP_EOL;
}



?>