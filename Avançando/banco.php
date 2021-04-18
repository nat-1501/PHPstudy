<?php

function sacar ($conta, $valorASacar)
 {
    if (500 > $contasCorrentes['123.654.878-10'] ['saldo']) {
        exibeMensagem( mensagem: "Você não pode sacar esse valor");
    } else {
        $contasCorrentes['123.654.878-10'] ['saldo'] -= 500;
    }

}

function exibeMensagem($mensagem) 
{
    echo $mensagem . PHP_EOL;
}

$contasCorrentes = [ 
    '123.456.789-09' => [
        'titular' => 'Marcos', 
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

$contasCorrentes ['123.654.878-10'] = sacar ($contasCorrentes['123.654.878-10'], 500);
    



if (500 > $contasCorrentes['123.654.878-10'] ['saldo']) {
    exibeMensagem( mensagem: "Você não pode sacar esse valor");
} else {
    $contasCorrentes['123.654.878-10'] ['saldo'] -= 500;
}

if (500 > $contasCorrentes['123.654.456-11'] ['saldo']) {
    exibeMensagem( mensagem: "Você não pode sacar esse valor");
} else {
    $contasCorrentes['123.654.456-11'] ['saldo'] -= 500;
}    
                                                                                                    
foreach ($contasCorrentes as $cpf => $conta) {
   exibeMensagem ( mensagem: $cpf . "  " . $conta ['titular'] . ' ' . $conta['saldo'] ) ;
}

?>