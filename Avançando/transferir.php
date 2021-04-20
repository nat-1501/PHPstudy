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

function transferir ($contaDestinatario,$contaRemetente, $valorATransferir)
    {

       $contaRemetente = sacar($contaRemetente, $valorATransferir);
       $contaDestinatario = depositar($contaDestinatario, $valorATransferir); 
       return array($contaDestinatario, $contaRemetente);
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
    ]

];




$retorno = transferir($contasCorrentes['123.456.789-09'], $contasCorrentes['123.654.878-10'], 500); 
$contasCorrentes['123.456.789-09'] = $retorno[0];
$contasCorrentes['123.654.878-10'] = $retorno[1];


echo  "SALDO ATUAL MARIA " . $contasCorrentes['123.654.878-10']['saldo'].PHP_EOL;
echo  "SALDO ATUAL MARCIO " . $contasCorrentes['123.456.789-09']['saldo'].PHP_EOL;

$contasCorrentes ['123.654.878-10'] = sacar(  
    $contasCorrentes['123.654.878-10'], 
    valorASacar:500,


);

?>