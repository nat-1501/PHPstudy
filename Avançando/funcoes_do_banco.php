<?php




function depositar ($conta, $valorADepositar)
 {
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



?>