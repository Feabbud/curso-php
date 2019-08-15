<?php
ini_set("display_errors", 1);//adiciona os erros na página
/* 
  OO avançado

  Namespaces
  - usamos para criar a classe somente quando ela for usada e não carregar todas no início do projeto;
  - caminho colocado no começo dos arquivos das classes. namespaces caminho\caminho;
  - para usar esses arquivos usamos o USE para chamar as classes. use caminho\arquivo;
  - arquivos na raiz do projeto não precisam do USE
  - podemos ter arquivos de mesmo nome como classes. Para instanciar, no USE colocamos um alias(apelido) com outro nome: use teste as teste;

*/

require_once "autoload.php";

use funcionarios\Diretor;//ao invés de usarmos o require, agora usamos o USE e NAMESPACE para fazer essas inclusões.
// use teste\Diretor as teste; criando um apelido para a classe de mesmo nome;
use funcionarios\Designer;

$diretor = new Diretor();
$designer = new Designer();

echo "<pre>";
var_dump($diretor);
var_dump($designer);
echo "</pre>";

