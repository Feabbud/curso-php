<?php declare(strict_types=1); //faz com que os tipos sejam estritos, não havendo conversão.

namespace Alura;

class ArrayUtils
{
  public static function remover(string $elemento, array &$array)//array passado por referência para remover do próprio array e não de sua cópia.
  {
    $posicao = array_search($elemento, $array, true);
    if(is_int($posicao)){
      unset($array[$posicao]);
      echo "foi excluido com sucesso.";
    } else {
      echo "erro ao excluir.";
    }
  }

  public static function saldoMaiores(int $saldo, array $array) : array // : tipo - é o tipo de retorno da função
  {
    $numerosMaiores = [];

    foreach ($array as $chave => $valor) {
      if($valor > $saldo){
        $numerosMaiores[] = $chave;
      }
    }

    return $numerosMaiores;
  }
}