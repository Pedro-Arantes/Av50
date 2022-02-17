<?php

//insere o arquivo de autoload de classes.
include "inc/Config.inc.php";

$carlos = new Pessoa;
$carlos->Codigo = 10;
$carlos->Nome = "Carlos Alberto";
$carlos->Altura = 1.79;
$carlos->Idade = 23;
$carlos->Nascimento = '10/04/1990';
$carlos->Escolaridade = 'Ensino Medio';

//Manipulando o Objeto $carlos->Nome

echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade}<br>";
$carlos->Formar("Técnico em Eletricidade");
echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade}<hr>";

echo "{$carlos->Nome} possui {$carlos->Idade}     anos <br>";
$carlos->Envelhecer(1);
echo "{$carlos->Nome} possui {$carlos->Idade}     anos <hr>";

//Criação do objeto $conta_carlos
$conta_carlos = new Conta;
$conta_carlos->Agencia = 6677;
$conta_carlos->Codigo = "CC.1234.56";
$conta_carlos->DataDeCriacao = "10/07/02";
$conta_carlos->Titular = $carlos;
$conta_carlos->Senha = 9876;
$conta_carlos->Saldo = 67.89;
$conta_carlos->Cancelada = false;

echo "Manipulando a conta de: {$conta_carlos->Titular->Nome} <br>";
echo "O Saldo atual da conta é de R$: {$conta_carlos->ObterSaldo()}<hr>";

echo $conta_carlos->Depositar(20);
echo "O Saldo atual da conta é de R$: {$conta_carlos->ObterSaldo()}<hr>";

echo $conta_carlos->Retirar(10);
echo "O Saldo atual da conta é de R$: {$conta_carlos->ObterSaldo()}<hr>";

