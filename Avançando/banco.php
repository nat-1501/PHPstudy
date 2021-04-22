<?php

include 'funcoes_do_banco.php'; 


$contasCorrentes = [ 
    '123.456.789-09' => [
        'titular' => 'Marcio', 
        'saldo' =>  2000
    ], 
    '123.654.878-10'  => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    '123.654.456-11' => [
        'titular' => 'Alberto',
        'saldo' =>  300
    ],
    '132.326.459-12' => [
        'titular' => 'Vinicius', 
        'saldo' => 100
    ]

];

unset ($contasCorrentes['123.654.456-11']);

$contasCorrentes ['123.654.878-10'] = sacar(  
    $contasCorrentes['123.654.878-10'], 
    valorASacar:500
);

$contasCorrentes ['123.456.789-09'] = sacar(
    $contasCorrentes['123.456.789-09'], 
    valorASacar:250

);    
  
$contasCorrentes['123.456.789-09'] = depositar (
     $contasCorrentes['123.456.789-09'],
        2000
);
                                                                                                    
foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
   exibeMensagem (
        mensagem: $cpf . "  " . $conta ['titular'] . ' ' . $conta['saldo'] 
        ) ;
}

?>