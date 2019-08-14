<?php
  function load ($namespace){//função que chama todas nossas classes no arquivo index.php
    
    $namespace = str_replace("\\", "/", $namespace); //troca as barras \\ por / da variavel namespace.
    $caminhoAbsoluto = __DIR__ . "/" . $namespace . ".php"; //caminho que iremos incluir no index.php

    return include_once $caminhoAbsoluto; //retorno será o caminho onde estará a classe chamada
  }

  spl_autoload_register(__NAMESPACE__ . "\load"); //sempre que instanciarmos um objeto, essa função vai chamar todas as classes automaticamente.