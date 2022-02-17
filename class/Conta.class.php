<?php

class Conta {

    public $Agencia;
    public $Codigo;
    public $DataDeCriacao;
    public $Titular;
    public $Senha;
    public $Saldo;
    public $Cancelada;

    //metodo retirar
    //diminui o saldo em $quantia

    function Retirar($quantia){

        if ($quantia > 0) {
            $this->Saldo -= $quantia;
        }
    }

    //metodo depositar
    //aumenta Saldo em $quantia
    function Depositar($quantia){

        if ($quantia > 0) {

            $this->Saldo += $quantia;

        }
    }

    //metodo obter saldo
    //retorna o saldo atual
    function ObterSaldo(){

        return $this->Saldo;
    }

    //metodo construtor
    //inicializa propriedades
    function __construct($Agencia,$Codigo,$DataDeCriacao,$Titular,$Senha,$Saldo){

        
        $this->Agencia = $Agencia;
        $this->Codigo = $Codigo;
        $this->DataDeCriacao = $DataDeCriacao;
        $this->Titular = $Titular;
        $this->Senha = $Senha;
        $this->Saldo = $Saldo;

        //chamando outro metodo da classe
        //$this->Depositar($Saldo);
        $this->Cancelada = false;

        
    }

    

    //metodo destrutor
    function __destruct(){

        echo "Objeto Conta {$this->Codigo} de {$this->Titular->Nome}  finalizada....<br>";
    }

}