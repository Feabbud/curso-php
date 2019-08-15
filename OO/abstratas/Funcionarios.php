<?php 
  // classe abstrata que vai fornecer seus dados para as classes que possuem os mesmos.
  namespace abstratas;

  abstract class Funcionarios { //classe não pode ser instanciada.
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

    abstract public function aumentoSalario(); // assinatura da classe obrigatória para seus filhos.
  }