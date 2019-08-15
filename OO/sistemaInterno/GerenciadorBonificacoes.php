<?php

namespace sistemaInterno;

use abstratas\Funcionarios;
use abstratas\FuncionarioAutenticavel; //importado para usar o tipo FuncionarioAutenticavel do método.
use interfaces\Autenticavel;// imortador para implementação da interface Autenticavel.

class GerenciadorBonificacoes implements Autenticavel {

  private $autenticado;

  public $totalBonificacoes;

  public function registrar( Funcionarios $funcionario){ //método para autenticação do funcionário para registrar a bonificação.

    if($this->autenticado){//se for verdadeiro
      $this->totalBonificacoes += $funcionario->getBonificacao();
    } else {
      throw new \Exception("Você não está logado.");
    }
  }

  public function getBonificacoes(){
    return $this->totalBonificacoes; //retorna o total de bonificação feito de todos os funcionários intanciadoss
  }

  public function autentiqueAqui(FuncionarioAutenticavel $funcionario, $senha){ //método que autentica o funcionário para entrar na área restrita
    $this->autenticado = $funcionario->autenticacao($senha);
  }
}