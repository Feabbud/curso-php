<?php 
  // classe abstrata que vai fornecer seus dados para as classes que possuem os mesmos.
  namespace abstratas;

  class Funcionarios {
    public $nome;
    public $cpf;
    protected $salario;//protected protege o atributo para não ter acesso de fora mas as classes que fazem o extends podem ter acesso.

    public function __construct($cpf, $salario){
      $this->cpf = $cpf;
      $this->salario = $salario;
    }

    public function getBonificacao(){
      return $this->salario * 0.5;
    }

    public function aumentoSalario(){
      return $this->salario * 1.5;
    }
  }