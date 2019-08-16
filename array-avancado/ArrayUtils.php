<?php declare(strict_types=1); //faz com que os tipos sejam estritos, não havendo conversão.

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
}