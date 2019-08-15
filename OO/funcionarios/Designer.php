<?php
  namespace funcionarios; //caminho onde está o arquivo.

  use abstratas\Funcionarios;

  class Designer extends Funcionarios{

    public function getBonificacao(){ //sobrescrevemos a função que está na nossa classe pai.
      return $this->salario * 0.3;
    }
  }