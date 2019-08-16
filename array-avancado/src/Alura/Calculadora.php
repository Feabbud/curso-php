<?php declare(strict_types=1); //faz com que os tipos sejam estritos, não havendo conversão.

namespace Alura;

class Calculadora{

  public function calculaMedia(array $notas){
    $quantidadeNotas = sizeof($notas);
    
    if($quantidadeNotas > 0){
      $soma = 0;

      for($i = 0; $i < $quantidadeNotas; $i++){
        $soma += $notas[$i];
      }

      $media = $soma / $quantidadeNotas;

      return "A sua média é: " . $this->formataNumero($media);
      
    } else {
      return "Não foi possível realizar a conta da média.";
    }
    
  }

  public function formataNumero($media){
    return number_format($media, 2, ',','.');
  }
}