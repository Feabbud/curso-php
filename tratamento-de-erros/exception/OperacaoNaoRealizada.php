<?php
  namespace exception;

  class OperacaoNaoRealizada extends \Exception
  {
    public function __construct($mensagem, $codigo, $exception) //exception - exceções anteriores caso exista.
    {
        parent::__construct($mensagem, $codigo, $exception);
    }

    public function __toString()//se dermos um echo no objeto, a mensagem vai ser a que está dentro dessa função.
    {
      return $this->getCode() . ": " . $this->getMessage();
    }
  }