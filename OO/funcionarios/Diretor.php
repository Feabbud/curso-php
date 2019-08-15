<?php
  namespace funcionarios; //caminho onde está o arquivo.

  use abstratas\FuncionarioAutenticavel;

  class Diretor extends FuncionarioAutenticavel{

    public function aumentoSalario(){
      return $this->salario * 1.5;
    }
    
  }