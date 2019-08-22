<?php
//código para buscar o nome dos cursos de php da alura
require "vendor/autoload.php";// faz o autoload de todas as classes do vendor;

use \GuzzleHttp\Client;
use \Symfony\Component\DomCrawler\Crawler;

$cliente = new \GuzzleHttp\Client(); //cria o client para fazer o http

$response = $cliente->request("GET", "https://www.alura.com.br/cursos-online-programacao/php"); //recebe os dados da requisição.

$html = $response->getBody(); //recebe o corpo html da requisição

$crawler = new Crawler(); //estancia o crawler para ler o html da requisição
$crawler->addHtmlContent($html);// adiciona o html para ser lido no crawler

$cursos = $crawler->filter('span.card-curso__nome'); //filtra o html e procura pela classe indicada

foreach ($cursos as $curso) { //faz a lista e exibe na tela.
  echo $curso->textContent . PHP_EOL;
}