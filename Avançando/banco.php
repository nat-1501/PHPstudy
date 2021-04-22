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


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as$cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3> 
        </dt>
        <dd>  
            Saldo: <?= $conta['saldo']; ?>
         </dd>
        <?php } ?> 

    </dl>


</body>
</html>