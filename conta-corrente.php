<?php

$contaCorrente = [
  '123456789-61' => [
    'titular' => 'Felipe',
    'saldo' => 3000
  ],
  '321654987-12' => [
    'titular' => 'Sacha',
    'saldo' => 5000
  ],
  '987654321-98' => [
    'titular' => 'Claudia',
    'saldo' => 10000
  ]
];

foreach($contaCorrente as $cpf => $conta){
  echo $cpf. " - " . $conta['titular'] . " com saldo de " . $conta['saldo']. PHP_EOL;
}

function exibeMensagem(string $mensagem){
  echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valorSaque){

  if($conta['saldo'] < $valorSaque){
    exibeMensagem("Você não pode sacar esse valor.");
  } else{
    $conta['saldo'] -= $valorSaque;
    exibeMensagem("Seu saque de $valorSaque foi feito " . $conta['titular'] . PHP_EOL
                  . "Seu saldo é de " . $conta['saldo']) . PHP_EOL;
  }

  return $conta;
}

function depositar(array $conta, float $valorDeposito){
  if($valorDeposito > 0){
    $conta['saldo'] += $valorDeposito;
    exibeMensagem("Depósito feito com sucesso " . $conta['titular'] . PHP_EOL 
                  . "Seu saldo é de " . $conta['saldo']) . PHP_EOL;
  }
  return $conta;
}

depositar($contaCorrente['123456789-61'], 1000);
sacar($contaCorrente['321654987-12'], 1000);