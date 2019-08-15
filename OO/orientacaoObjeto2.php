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

  Herança
  - quando temos classes que possuem o mesmo comportamento, atributos e métodos usamos a heranças;
  - para herdar os atributos de outras classes usamos o extends na classe que queremos herdar.
  - class Nome extends NomeAbstrata{}
  - para proteger nossos atributos usamos o protected ao invés do private.
    - usando o private, nenhuma classe que extenda a classe que tenha um atributo private vai poder utilizar o atributo e quando for usado fora ainda criará outro atributo com outro valor;
    - para isso usamos o protected que protege o atributo e não deixa acessar e nem criar outro atributo igual e pode ser manipulado somente pela classe que contém e suas herdeiras.

  Polimorfismo
  - 

*/

require_once "autoload.php";

use funcionarios\Diretor;//ao invés de usarmos o require, agora usamos o USE e NAMESPACE para fazer essas inclusões;
// use teste\Diretor as teste; criando um apelido para a classe de mesmo nome;
use funcionarios\Designer;

$diretor = new Diretor("123.125.586-69", 10000.00);
$designer = new Designer("456.658.954-69", 20000.00);

echo "<pre>";
var_dump($diretor);
var_dump($designer);
echo "</pre>";

