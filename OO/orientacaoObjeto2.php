<?php
ini_set("display_errors", 1);//adiciona os erros na página
/* 
  OO avançado

  Namespaces
  - caminho colocado no começo dos arquivos das classes. namespaces caminho\caminho;
  - para usar esses arquivos usamos o USE para chamar as classes. use caminho\arquivo;
  - arquivos na raiz do projeto não precisam do USE

*/

require_once "autoload.php";


use funcionarios\Diretor;//ao invés de usarmos o require, agora usamos o USE e NAMESPACE para fazer essas inclusões.

$diretor = new Diretor();

var_dump($diretor);

