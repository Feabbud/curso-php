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