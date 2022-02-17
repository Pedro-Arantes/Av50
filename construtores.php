<?php

//insere o arquivo de autoload de classes.
include "inc/Config.inc.php";

//criando o objeto

$carlos = new Pessoa(10,"Carlos Alberto",1.79,23,"10/04/1976","Ensino Medio",650.00);

echo "Manipulando o Objeto {$carlos->Nome}<br>";
echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade}<br>";
$carlos->Formar("Tecnico em informática");
echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade}<hr>";

echo "{$carlos->Nome} possui{$carlos->Idade}   anos<br>";
$carlos->Envelhecer(1);
echo "{$carlos->Nome} possui{$carlos->Idade}   anos<br>";

//criacao do objeto conta
$conta_carlos = new Conta(6677,"CC.1234.45","10/07/02",$carlos,9876, 567.89);

echo "Manipulando a Conta de : {$conta_carlos->Titular->Nome}:<br>";

echo "O Saldo atual e de:{$conta_carlos->ObterSaldo()} reais <br>";
$conta_carlos->Depositar(20);
echo "O Saldo atual e de:    {$conta_carlos->ObterSaldo()} reais<br>";
$conta_carlos->Retirar(10);
echo "O Saldo atual e de:{$conta_carlos->ObterSaldo()} reais<hr>";


