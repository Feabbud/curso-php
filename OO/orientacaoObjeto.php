<?php
   ini_set('display_errors', 1);
   error_reporting(E_ALL);
   header('Content-type: text/html; charset=utf-8');
  /* OO Básico
     - classe - Estrutura de algo abstraido do mundo real, nosso caso uma conta corrente.
     - usamos variáveis apra descrever essa estrutura.
     - para popular automaticamente nossas variaveis usamos a função __construct, primeira tarefa realiza ao instanciar nossa classe.
     - para usar as variáveis dentro da nossa classe precisamos da palavra reservada $this, que dá acesso a qualquer atributo da classe.
     - quando instanciamos nossa classe devemos passar os valores para não dar erro.
     - criamos functions chamadas de métodos, onde fazemos tarefas com nossos dados. Exemplo - sacar e depositar dinheiro;
     - podemos retornar o próprio método se quisermos encadear métodos na chamada.

     Proteção de dados
     - public - podemos acessar os dados da variável public em qualquer ligar.
     - private - acessamos somente dentro da classe.

     Acesso aos dados
     - para acessar os dados privados de uma classe fizemos um método para mostrar e para setar cada variável privada.
     - por se públicos e estarem dentro da classe, os métodos são acessíveis fora da classe.
      - getVariavel - método para mostrar o valor da variável privada;
      - setVariavel - método para setar um valor na variável privada.

     Métodos "Mágicos"
     - para acessar e setar todos os artributos de uma classe somente em um método para cada ação nós usamos o __get e __set
     - __get usamos para acessar os atributos privados da nossa classe
     - __set usamos para setar os atributos privados de nossa classe. Atributos que não queremos dar acesso fazemos um if com a condição necessária retornando false.

     Encapsulamento de Métodos
     - deixamos os métodos que usamos somente é usado dentro das classes como private para não ser acessado fora da classe;
     - métodos que não fazem snetido nenhum serem acessados fora da classe.
  */
   require_once "ContaCorrente.php";

   $contaJoao = New ContaCorrente("Joao", "3254-5", "12365-8", 1000.00); //Instância um objeto. Cria um objeto conta corrente do joão. 
   $contaMaria = New ContaCorrente("Maria", "3254-5", "15354-8", 5000.00);

   //para popularmos o objeto usamos o código abaixo
   //variavelInstanciada->campoDaClasse = "valor";

   // $contaJoao->titular = "João";
   // $contaJoao->agencia = "3443-1";
   // $contaJoao->conta = "12931-3";
   // $contaJoao->saldo = 500.00;

   echo "<pre>";
   var_dump($contaJoao);
   echo "</pre> <br>";

   $contaJoao->sacar(100)->depositar(50);//métodos encadeados tem que retornar $this(return $this), ou seja, eles mesmos na classe.
   echo "<br>";

   echo "<pre>";
   var_dump($contaJoao);
   echo "</pre> <br>";

   // echo $contaJoao->getTitular();
   // echo "<br>";

   // $contaJoao->setTitular("João Paulo");
   // echo "<br>";

   // echo $contaJoao->getTitular();

   // echo $contaJoao->titular;
   // echo "<br>";
   // $contaJoao->titular = "3674-9";
   // echo "<br>";
   // echo $contaJoao->titular;

   echo $contaMaria->getSaldo();
