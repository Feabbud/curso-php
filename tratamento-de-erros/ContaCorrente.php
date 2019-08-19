<?php
 //Classe de conta corrente com seus atributos.
  class ContaCorrente{
    //estrutura abstrata de algo do mundo real.
    private $titular;
    public $agencia;
    public $conta;
    private $saldo;
    public static $totalDeContas;//atributo vai ser usado por todas as estâncias da classe.
    public static $taxaOperacao;//uma taxa que quando maior o numero de contas, menor ela fica, usada por todas as contas.

    public function __construct($titular, $agencia, $conta, $saldo){
      //função construct é a primeira tarefa realizada ao instanciar nossa classe.
      //$this que dá acesso a qualquer atributo dentro da classe. Como as variáveis estão dentro da classe usamos o $this para referenciar as variáveis a esse objeto.
      $this->titular = $titular;
      $this->agencia = $agencia;
      $this->conta = $conta;
      $this->saldo = $saldo;

      try { //se não conseguir fazer alguma coisa.

        self::$taxaOperacao = intDiv(30, self::$totalDeContas); //taxa começa com 30 e vamos dividindo ela pelo numero de contas. intDiv força um erro.

      } catch (Error $erro) {//venha para esse erro. Usamos Error ou Exception, depende do que for passado de erro.
          echo "Não podemos dividir por zero.";
          exit; // sai do nosso código.
      }

      self::$totalDeContas++; //acessa atributos estáticos dentro das classes.
    }

    // métodos da classe ContaCorrente

    public function sacar(float $valor){
      $this->saldo -= $valor;
      return $this;
    }

    public function depositar(float $valor){
      $this->saldo += $valor;
      return $this;
    }

    public function __get($atributo){// método que pega automaticamente qualquer atributo e mostra o valor
      Validacao::protegeAtributo($atributo);
      return $this->$atributo;
    }

    public function __set($atributo, $valor){
      Validacao::protegeAtributo($atributo);
      $this->$atributo = $valor;
    }

    public function getSaldo(){
      return $this->formataSaldo();
    }

    private function formataSaldo(){
      return number_format($this->saldo, 2, ",", ".");
    }

    public function transferir(float $valor, ContaCorrente $conta){
      Validacao::validaNumero($valor);
      $this->sacar($valor);

      $conta->depositar($valor);

      return $this;//para encadear métodos retornamos a própria função.
    }

    public function __toString(){
      return "Isso é um objeto e não pode ser impresso.";
    }

    // public function getTitular(){ // método para mostrar o valor do dado privado fora da classe.
    //   return $this->titular;
    // }

    // public function getSaldo(){
    //   return $this->saldo;
    // }

    // public function setTitular(string $titular){// método para alterar o valor da variável privada.
    //   return $this->titular = $titular;
    // }

  }