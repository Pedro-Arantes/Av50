<?php

//insere o arquivo de autoload de classes.
include "inc/Config.inc.php";

$carlos = new Pessoa(10,"Carlos Alberto",1.79,23,"10/04/1976","Ensino Medio",650.00);

echo "Manipulando o Objeto {$carlos->Nome}<br>";

$contas[1] = new ContaCorrente(6677,"CC.1234.45","10/07/02",$carlos,9876, 500.00, 200.00);
$contas[2] = new ContaPoupanca(6677,"CC.1234.45","10/07/02",$carlos,9876, 500.00, "10/07");

foreach ($contas as $key => $conta) {
    
    echo "Manipulando a Conta de : {$conta->Titular->Nome}:<br>";

    echo "O Saldo atual e de:{$conta->ObterSaldo()} reais <br>";
    $conta->Depositar(200);
    echo "O Saldo atual e de:    {$conta->ObterSaldo()} reais<br>";
    $conta->Retirar(100);
    echo "O Saldo atual e de:{$conta->ObterSaldo()} reais<hr>";
}