<?php
 //Classe de conta corrente com seus atributos.
  class ContaCorrente{
    //estrutura abstrata de algo do mundo real.
    public $titular;
    public $agencia;
    public $conta;
    public $saldo;

    public function __construct($titular, $agencia, $conta, $saldo){
      //função construct é a primeira tarefa realizada ao instanciar nossa classe.
      //$this que dá acesso a qualquer atributo dentro da classe. Como as variáveis estão dentro da classe usamos o $this para referenciar as variáveis a esse objeto.
      $this->titular = $titular;
      $this->agencia = $agencia;
      $this->conta = $conta;
      $this->saldo = $saldo;
    }
  }