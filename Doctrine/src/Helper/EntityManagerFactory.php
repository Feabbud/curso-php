<?php 

namespace Alura\Doctrine\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;


class EntityManagerFactory
{
  /**
   * configurações no doctrine são feitas através de comentários precedidos de @;
   * 
   * @return EntityMananerInterface;
   * @throws \Doctrine\ORM\ORMException;
   */
  
  public function getEntityManager() : EntityManagerInterface
  {
    $rootDir = __DIR__ . "/../..";//diretorio raiz do nosso projeto
    $config = Setup::createAnnotationMetadataConfiguration(
      [$rootDir .'\src',
        true, //indica se estamos em modo de desenvolvimento ou não;
        
      ]); //método que recebe um array de onde vai buscar as anotações.

    $connection = [
      'driver' => "pdo_sqlite", //driver do banco de dados
      'path' => $rootDir . '/var/data/banco.sqlite'//
    ];
    
    return EntityManager::create($connection, $config);//
  }
}