<?php

namespace interfaces;

use abstratas\FuncionarioAutenticavel;// pega o arquivo FuncionarioAutenticavel que está sendo usado como tipo no método.

interface Autenticavel{
  public function autentiqueAqui(FuncionarioAutenticavel $funcionario, $senha); //métodos somente com a assinatura.
}