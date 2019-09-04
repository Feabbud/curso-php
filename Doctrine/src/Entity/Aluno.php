<?php

namespace Alura\Doctrine\Entity;

/**
 * informamos que a classe é uma entidade do banco e precis ser mapeada.
 * 
 * @Entity
 * @Id
 * @GeneretedValue
 * @Column(type="integer")
 * 
 * identificador unico
 * é gerado automaticamente
 * o tipo é inteiro
 */

class Aluno 
{
  /**
   * @Id
   * @GeneretedValue
   * @Column(type="integer")
   *  
    * identificador unico
    * é gerado automaticamente
    * o tipo é inteiro
   */
  private $id;

  /**
   * @Column(type="string")
   */
  private $nome;

  public function getId() : int
  {
    return $this->id;
  }

  public function getNome() : string
  {
    return $this->nome;
  }

  public function setNome(string $nome) :self
  {
    $this->nome = $nome;
    return $this;
  }
}
