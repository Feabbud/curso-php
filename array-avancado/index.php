<?php declare(strict_types=1); //faz com que os tipos sejam estritos, não havendo conversão.

require_once "Calculadora.php";

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

require_once "ArrayUtils.php";

$array = ["12", 20, "sacha", 29, "web", 12];

echo "<pre>";

var_dump($array);

ArrayUtils::remover("12", $array); //chamada de métodos static que não precisam ser instanciados.

var_dump($array);

echo "</pre>";