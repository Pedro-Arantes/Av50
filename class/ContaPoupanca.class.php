<?php
class ContaPoupanca extends Conta{

    public $Aniversario;

    function __construct($Agencia,$Codigo,$DataDeCriacao,$Titular,$Senha,$Saldo,$Aniversario){

        parent::__construct($Agencia,$Codigo,$DataDeCriacao,$Titular,$Senha,$Saldo,);
        
        $this->Agencia = $Agencia;
        

        //chamando outro metodo da classe
        //$this->Depositar($Saldo);
        $this->Cancelada = false;

        
    }

    function Retirar($quantia){

        if ($this->Saldo >= $quantia) {

            parent::Retirar($quantia);
            
        }else {
            echo "Retirada não permitida<br>";
            return false;
        }

        //permitido
        return true;
    }
}