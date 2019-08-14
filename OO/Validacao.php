<?php
/* - classes estáticas que podem ser usadas em qualquer parte do programa
   - classe com funções de validação.
*/
class Validacao{

  public static function protegeAtributo($atributo){
        
    if($atributo == "titular" || $atributo == "saldo"){
      throw new Exception("O atributo $atributo continua PRIVADO");
    }

  }

  public static function validaNumero($valor){
    if(!is_numeric($valor)){
      echo "O valr indcado apra transferência esta incorreto.";
      exit;
    }
}
}