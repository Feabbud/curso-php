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
      throw new InvalidArgumentException("Argumento Inválido.");// exception para argumento inválido.
    }
  }

  public static function valorIgualZero($valor){
    if($valor <= 0){
      throw new Exception("Número inválido. Tentar novamente.");
    }
  }

}