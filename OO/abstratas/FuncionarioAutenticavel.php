<?php 

namespace abstratas;

class FuncionarioAutenticavel extends Funcionarios{
   public $senha;

   public function autenticacao($senha){
     return ($this->senha == $senha)?true:false;
  }
   
}