<?php
namespace exception;

class SaldoInsuficienteException extends \Exception{ //cria uma classe extendendo a classe Exception. barra invertida "\" busca a classe na raiz do PHP.

  private $saldo;
  private $saque;

  public function __construct($mensagem, $saldo, $saque) //copiamos o construct da classe exception com a mensagem, um código e outra exceção se existir.
  {
      parent::__construct($mensagem, null, null); //chamamos da classe exception  o construct com nossos parâmetros passados.

      $this->saldo = $saldo;
      $this->saque = $saque;
  }

  public function __get($param)
  {
    return $this->$param;
  }
}