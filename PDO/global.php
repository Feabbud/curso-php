<?php

require_once "classes/config.php";

spl_autoload_register("carregaClasses");

function carregaClasses($nomeClasse)
{

  if(file_exists('classes/' . $nomeClasse . '.php')){
    require_once 'classes/' . $nomeClasse . '.php';
  }
}



