<?php

// namespace undefined;

class ContaBanco {
    //Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;


    //metodos
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);

        if ($t == "CC"){
            // $this->saldo = 50;
            $this->setSaldo(50);            
        }else if ($t == "CP"){
            // $this->saldo = 150;
            $this->setSaldo(150);
        }
    }

    public function fecharConta(){
        if ($this->getSaldo() > 0){
            echo "<p>Conta com Saldo. Antes de Encerrar a Conta, faça uma retirada do valor Total</p>";
        } elseif ($this->getSaldo() < 0){
            echo "<p>Seu saldo esta Negativo. A conta não pode ser encerrada, por favor quite seu debito antes de encerrar a conta</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta Encerrada com sucesso!</p>";
        }
    }

    public function depositar($v){
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $v);
            
        } else {
            echo "<p>Conta Encerrada. Não é possível realizar Depositos</p>";
        }
    }

    public function sacar($v){
        if ($this->getStatus()){
            if ($this->getSaldo() > $v){
                $this->setSaldo($this->getSaldo() - $v);
            } else{
                echo"<p>Saldo Insuficiente para SAQUE!</p>";
            }
        }else {
            echo "<p>Conta Fechada ou Encerrada. Impossível SAQUE!</p>";
        }
    }

    public function pagarMensal(){
       if ($this->getTipo() == "CC"){
        $v = 12;
       }else if ($this->getTipo() == "CP"){
        $v = 20;
       }
       if ($this -> getStatus()){
        $this -> setSaldo($this -> getSaldo() - $v);
       }else {
        echo"<p>Problemas com a Conta. Valor não pode ser Cobrado.</p>";
       }
    }
    
    //Metodos especiais - metodo construtor
    function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
        echo"<p>Conta criada com Sucesso!</p>";
    }

    function getNumConta(){
        return $this->numConta;
    }
    function getTipo(){
        return $this->tipo;
    }
    function getDono(){
        return $this->dono;
    }
    function getSaldo(){
        return $this->saldo;
    }
    function getStatus(){
        return $this->status;
    }

    function setNumConta($numConta){
        $this->numConta = $numConta;
    }
    function setTipo($tipo){
        $this->tipo = $tipo;
    }
    function setDono($dono){
        $this->dono = $dono;
    }
    function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    function setStatus($status){
        $this->status = $status;
    }

}