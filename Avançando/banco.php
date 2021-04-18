<?php

function depositar ($conta, $valorADepositar) {
    if ($valorADepositar > 0) {
    $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem(mensagem:"Depositos precisam ser positivo");
    }
    return $conta;

}


function sacar ($conta, $valorASacar)
 {
    if ($valorASacar> $conta['saldo']) {
        exibeMensagem( mensagem: "Você não pode sacar esse valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }


    return $conta;

}

function exibeMensagem($mensagem) 
{
    echo $mensagem . PHP_EOL;
}

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
        1000
);
                                                                                                    
foreach ($contasCorrentes as $cpf => $conta) {
   exibeMensagem ( mensagem: $cpf . "  " . $conta ['titular'] . ' ' . $conta['saldo'] ) ;
}

?>