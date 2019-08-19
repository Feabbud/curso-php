<?php
namespace Exceptions;

class SaldoInsuficienteException extends \Exception{ //cria uma classe extendendo a classe Exception

  public function __construct($mensagem, $codigo = null, $exception = null) //copiamos o construct da classe exception com a mensagem, um código e outra exceção se existir.
  {
      parent::__construct($mensagem, $codigo, $exception); //chamamos da classe exception  o construct com nossos parâmetros passados.
  }
}