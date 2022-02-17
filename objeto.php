<?php

//insere o arquivo de autoload de classes.
include "inc/Config.inc.php";
include_once "class/Produto.class.php";

//cria um objeto
$produto = new Produto;
$produto2 = new Produto;

//atribuir valores
$produto->Codigo = 9001;
$produto->Descricao = 'Playstation 5';
$produto2->Codigo = 9002;
$produto2->Descricao = 'Nintendo Switch';
//printar o objeto em tela.
var_dump($produto);
echo"<hr>";
//realizar o metodo imprime etiqueta
$produto->imprimeEtiqueta();
$produto2->imprimeEtiqueta();


