<?php

/*
  Aula 1 - apresentação try catch
  - try - bloco de código que iremos fazer para tratar o erro;
  - catch - bloco de código que passamos o erro.

  Aula 2 - Lançando exceções
  - throw new Exception("Exceção") - cria uma exceção personalizada;
  - InvalidArgumentException -  exceção para argumentos inválidos;

  Aula 3 - Tratamento e exceções
  - para um bloco try, podemos ter quantos catch forem necessários;
  - classe Exception é correto deixar por último pois pega todas as exceptions e pode passar uma exceção que criamos despercebido;
  - Antes de começar a fazer as validações, verificar os erros pré definidos.

  Aula 4 - Criando nossa exceções
  - podemos criar nossas próprias exceções, criando uma classe que extenda da classe Exception;
  - usamos "\" antes do nome exception para o PHP buscar nas funções padrão da linguagem;
  - nessa classe temos que copiar o __contruct da classe exception com a mensagem, o código e uma outra exceção se haver;
  - dentro desse construct chamamos o construct da classe exception com: parent::__construct e passamos as variáveis da mensagem, código e exception;
  - Essa nova exceção é carregada no catch por Exception.

  Aula 5 - Stacktrace e Finally
  - para lançar uma nova exceção em um bloco catch, usamos o throw normal e nossa exception personalizada ou não.
  - getCode() - código da exceção;
  - getMessage() - mensagem da exceção;
  - getPrevious() - exceção anterior;
  - getTraceAsString - mostra o arquivo e linha onde teve a exceção e a parte do código onde aconteceu;
  -  finally - independente do que acontece no bloco try ou catch o finally sera executado
*/

include "autoload.php"; //Carrega automaticamente os arquivos da mesma pasta sem namespace. Arquivos de outras pastas tem que possuir namespace.

echo "<pre>";

$contaJoao = new ContaCorrente("joao", 36749, 127893, 3000 );
$contaMaria = new ContaCorrente("Maria", 36749, 132589, 5000 );
$contaClaudia = new ContaCorrente("Claudia", 36749, 142587, 10000 );
$contaFelipe = new ContaCorrente("Felipe", 36749, 153587, 1000 );
$contaBella = new ContaCorrente("Bella", 36749, 185587, 5000 );
$contaSacha = new ContaCorrente("Sacha", 36749, 192587, 6000 );
$contaChoco = new ContaCorrente("Choco", 36749, 162587, 8000 );

echo ContaCorrente::$totalDeContas;
echo "<br>";
echo number_format(ContaCorrente::$taxaOperacao, 2, ",", ".");

echo "<br>";

echo "<pre>";
var_dump($contaBella);
echo "</pre>";

try {
  $contaBella->transferir(6000, $contaFelipe);

} catch (\InvalidArgumentException $error) { //barra invertida faz com que a classe seja procurada nas bibliotecas do PHP.s
    // echo "Invalid Argument. ";
    echo $error->getMessage();

} catch (exception\SaldoInsuficienteException $error){
    //se a exception for reconhecida, faz alguma rotina. Nesse caso acrescenta 1 em total de saques.
    echo $error->getMessage() .". Seu saldo é de: " . $error->saldo . " e não foi possível fazer o saque de " . $error->saque . ".";
    $contaBella->totalDeSaques++;
    // echo "SaldoInsuficienteException. ";

    echo $error->getMessage();

} catch (\Exception $error){
    // echo "Exception. ";
    echo $error->getMessage();
    // echo $error->getPrevious();
    // echo $error->getPrevious()->getTraceAsString();
    // echo $error->getTraceAsString();

}

// echo "<br>";
// echo ContaCorrente::$operacaoNaoRealizada;
// echo "<br>";

var_dump($contaBella);
echo "</pre>";

