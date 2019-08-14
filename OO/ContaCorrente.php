<?php
 //Classe de conta corrente com seus atributos.
  class ContaCorrente{
    //estrutura abstrata de algo do mundo real.
    private $titular;
    public $agencia;
    public $conta;
    private $saldo;

    public function __construct($titular, $agencia, $conta, $saldo){
      //função construct é a primeira tarefa realizada ao instanciar nossa classe.
      //$this que dá acesso a qualquer atributo dentro da classe. Como as variáveis estão dentro da classe usamos o $this para referenciar as variáveis a esse objeto.
      $this->titular = $titular;
      $this->agencia = $agencia;
      $this->conta = $conta;
      $this->saldo = $saldo;
    }

    // métodos da classe ContaCorrente

    public function sacar(float $valor){
      $this->saldo -= $valor;
      return $this;
    }

    public function depositar(float $valor){
      $this->saldo += $valor;
      return $this;
    }

    public function getTitular(){ // método para mostrar o valor do dado privado fora da classe.
      return $this->titular;
    }

    public function getSaldo(){
      return $this->saldo;
    }

    public function setTitular(string $titular){// método para alterar o valor da variável privada.
      return $this->titular = $titular;
    }

  }