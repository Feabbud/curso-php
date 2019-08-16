<?php
spl_autoload_register(
    function (string $namespaceClasse): void {
        $caminho = "/src";
        $diretorio_classe = str_replace("\\", DIRECTORY_SEPARATOR, $namespaceClasse);
        @include_once getcwd() . $caminho . DIRECTORY_SEPARATOR . "{$diretorio_classe}.php";
    }
);

/*
<?php

spl_autoload_register( 
  function(string $namespaceClasse): void {
    $caminho = "/src"; //caminho de nossas classes com namespaces.
    $diretorioClasse = str_replace("\\", DIRECTORY_SEPARATOR, $namespaceClasse ); //diretório onde estao nossas classes

    @include_once getcwd() . $caminho . DIRECTORY_SAPARATOR . "{$diretorioClasse}.php"; //o arquivo que vamos incluir onde usarmos o autoload

  }
);
*/