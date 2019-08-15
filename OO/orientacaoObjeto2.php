<?php
ini_set('display_errors', 1);//adiciona os erros na página
error_reporting(E_ALL);
header('Content-type: text/html; charset=utf-8');
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

  Polimorfismo e Herança Múltipla
  - sobreescrita dos métodos que temos na classe pai;
  - usado se tem comportamento diferente entre as classes que vão herdar da classe pai;
  - PHP não faz herança múltipla, o que pode ser feito é herdar de uma classe que já herdou outra classe, fazendo uma "herança múltipla"
  - criar um diagrama de classes para organizar melhor antes de começar a programar.

  Classes Abstratas e Interfaces
  - classes abstratas podem ser herdadas mas não podem ser instanciadas;
  - quando queremos que métodos sejam obrigatórios em classes filhas, tornamos eles abstratos, escrevendo somente a assinatura do método;
 
  Interfaces
  - pouco semelhante a classes abstratas: não pode ser instanciada, todos os métodos tem que ser implementados pelas classes que a instanciam;
  - todos os métodos tem que ser públicos e sem corpo;
  - usamos também o USE para importar a interface para o arquivo que queremos usar;
  - implementamos da seguinte maneira: class Nomedaclasse implements Nomedainterface {}
  
  Métodos Final e sobrecarga de construtores
  - final - métodos com esse tipo de atributo não podem ser sobrescritos.
  - Sobrecarga de construrores - só funciona até o PHP7, depois da fatal Error.
    - fazemos uma constante nas variáveis e depois usamos de forma estática(self::nome) no construtor passado como valor de um parametro.
    const nome = valor; __constructor($variavel = self::nome){}

*/

require_once "autoload.php";

use funcionarios\Diretor;//ao invés de usarmos o require, agora usamos o USE e NAMESPACE para fazer essas inclusões;
// use teste\Diretor as teste; criando um apelido para a classe de mesmo nome;
use funcionarios\Designer;
use sistemaInterno\GerenciadorBonificacoes;

$diretor = new Diretor("123.125.586-69", 1000.00);
$designer = new Designer("456.658.954-69", 1000.00);
// $gerenciador = new GerenciadorBonificacoes();

// $diretor->senha = "123456";

echo "<pre>";
// Diretor herda da classe autenticavel que herda da classe funcionarios
// var_dump($diretor);

// método usado de uma classe que herdou outra classe
// $diretor->senha = "123";
// var_dump($diretor->autenticacao("123"));

// echo "A bonificação do diretor é " . $diretor->getBonificacao() . "</br></br>";
// echo "O aumento é " . $diretor->aumentoSalario() . "</br></br>";

// $gerenciador->autentiqueAqui($diretor, "123456");

// $gerenciador->registrar($diretor);

// var_dump($gerenciador->getBonificacoes());

// echo "<br><br>";

// // Designer herda da classe funcionarios
// var_dump($designer);

// // métodos sobrescritos pela classe designer
// echo "A bonificação do designer é " . $designer->getBonificacao() . "</br>";
// echo "O aumento é " . $designer->aumentoSalario() . "</br></br>";

var_dump($diretor);
var_dump($designer);

$diretor->aumentoSalario();
$designer->aumentoSalario();

var_dump($diretor);
var_dump($designer);
echo "</pre>";

