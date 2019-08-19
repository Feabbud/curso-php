<?php declare(strict_types=1); //faz com que os tipos sejam estritos, não havendo conversão.

namespace Alura;

require "autoload.php";

/*
  Array - Aula 1
  - sizeof - retorna o número de elementos que tem o array;
*/

// $notas = [9, 3, 10, 5, 10, 8, 10];

// $calculadora = new Calculadora();

// echo $calculadora->calculaMedia($notas);

/*
  Array - Aula 2
  - sort() - ordena o array do menor número do valor para o maior
  - explode("delimitador", $variávelString) - cria um array separados onde as palavras são separadas quando encontrado o delimitador.
  - implode("glue/cola", $variavelArray) - cria uma string e coloca a glue/cola entre cada indice do array.
*/

// $ordenar = [1,9,5,8,2,7];

// foreach($ordenar as $ordem){
//   echo "O menor valor do array é $ordem </br>";
// }

// echo "<pre>";

// var_dump($ordenar);

// sort($ordenar);

// var_dump($ordenar);

// echo "O menor saldo é: " . $ordenar[0];

// echo "</pre>";

// $string = "Felipe, Sacha, Bella, Choco, Baguera";

// $array_nomes = explode(", ", $string);

// foreach($array_nomes as $nomes){
//   echo "<p> Olá $nomes </p>";
// }

// $stringNova = implode(", ", $array_nomes);

// echo "Sou uma string: $stringNova";

/*
  Array - Aula 3
  - array_search(elemento do array, array, estrito ou não (true or false)) - retorna a posição que o array está;
  - unset($array[posicao]) - remove o array na posição que queremos;
  - se passarmos um elemento que não existe o unset remove o primeiro elemento do array;
  
    Type juggling
    - Quando o PHP encontra uma incompatibilidade de tio, ele tenta trocar o valor do tipo para realizar a tarefa. 
      Ex: converter false para 0 ou 0 para false;
    - prestar atenção nas validações de todas as funções.

    Tipos estritos
    - declare(strict_types=1) - faz com que os tipos sejam estritos e não sejam convertidos.


*/

// $array = ["12", 20, "sacha", 29, "web", 12];

// echo "<pre>";

// var_dump($array);

// ArrayUtils::remover("12", $array); //chamada de métodos static que não precisam ser instanciados.

// echo "</pre>";

/*
  Array - Aula 4
  - Autoload criado na aula orientação a objeto 2;
*/

/*
  Array - Aula 5
  - array_diff(array1, array2) - retorna um array com os dados diferentes entre eles;
  - array_merge(array1, array2) - retorna um novo array com os dois array no mesmo array;
  - array_combine(array que se torna chave, array que se torna valor) - faz um merge e cria um array associativo;
  - para imprimir arrays associativos temos que usar as {} se ele estiver no echo com "";
  - array_key_exists("chave que queremos ver se existe, array) - retorna true ou false sobre a chave pesquisada;
  
*/

$array1 = ["felipe","sacha", "joao", "claudia", "bella", "choco"];

$array2= [1, 8, 5, 0, 10, 15];
$array3= [1, 2, 3, 7, 10, 15];

$diferencaDoArray = array_diff($array3, $array2);

$combinaArray = array_combine($array1, $array2);

echo "<pre>";
var_dump($diferencaDoArray);
echo "</pre>";

$maiores = ArrayUtils::saldoMaiores(5, $combinaArray);

echo "<pre>";
var_dump($maiores);
echo "</pre>";