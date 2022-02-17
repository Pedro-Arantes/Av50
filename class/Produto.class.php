<?php

class Produto{

    public $Codigo;
    public $Descricao;
    public $Preco;
    public $Quantidade;

    function imprimeEtiqueta(){

        echo "Código: ".$this->Codigo."<br>";
        echo "Descrição: ".$this->Descricao."<hr>";

    }
}